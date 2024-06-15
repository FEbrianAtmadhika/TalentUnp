<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\File;
use App\Models\User;
use App\Models\Talent;
use App\Models\SubTalent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function profile(){
        $menutalent = Talent::with('Subtalent')->get();
        $id =  Auth::guard()->user()->id;
        $data = User::with('file')->findOrFail($id);
        $talent = SubTalent::join('talent', 'subtalent.id_kategori', '=', 'talent.id')
        ->whereHas('anggota', function($q) use ($id) {
            $q->where('id_user', $id);
        })
        ->get(['subtalent.*', 'talent.kategori']);

        $kategori = $talent->pluck('kategori')->unique();

        $skill = SubTalent::all();

        return view('FrontHome.User.profile', compact('data', 'skill', 'kategori', 'menutalent'))->with('talent', $talent);
    }
    public function showedit(){
        $id = Auth::guard()->user()->id;
        $data = User::findOrFail($id);
        $menutalent = Talent::with('Subtalent')->get();


        return view('FrontHome.User.edit', compact('data', 'menutalent'));
    }
    public function update(Request $request)
{
    $id = Auth::guard()->user()->id;
    $user = User::findOrFail($id);
    $file = $user->file()->where('type', 'cv')->first();


    $validator = Validator::make($request->all(),[
        'nama' => 'required',
        'NP'=>'required',
        'cv' => 'file|mimes:pdf',
        'email' => 'required|email',
        'no_telp'=>'required',
        'photo' => 'image'
    ]);

    if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
    }
    // dd(collect($user));
    if ($request->hasFile('cv')) {
        if($file){
            $path = 'public/img/'.$id.'/'.$file->file;
            Storage::delete($path);
            $newFile = $request->file('cv');
            $filename = $newFile->getClientOriginalName();
            $path = 'public/img/'. $id;
            $newFile->storeAs($path, $filename);
            $file->file = $filename;
            $file->updated_at = now();
            $file->save();
        }else {
            $newFile = $request->file('cv');
            $filename = $newFile->getClientOriginalName();
            $path = 'public/img/'. $id;
            $newFile->storeAs($path, $filename);

            $user->file()->create([
                'file' => $filename,
                'type' => 'cv',
                'judul' => 'CV '. $user->name,
                'created_at' => now(),
            ]);
        }
    }
    if($request->hasFile('photo')){
        if($user->photo){
            $path = 'public/img/'.$id.'/'.$user->photo;
            Storage::delete($path);
    }
        if($request->hasFile('photo')){
        $file = $request->file('photo');
        $filename = $file->getClientOriginalName();
        $path = 'public/img/'. $id;
        $file->storeAs($path,$filename);
        $user->photo = $filename;
    }}
    $user->name = $request->nama;
    $user->np = $request->NP;
    $user->email = $request->email;

    $user->no_telp = $request->no_telp;
    $user->deskripsi = $request->deskripsi;
    $user->updated_at = Carbon::now();
    $user->update();

    return redirect()->route('user_profile')->with('success', 'Data pengguna berhasil diperbarui.');
}
    public function addtalent(Request $request){

        $user = User::find(Auth::guard()->user()->id);

        $user->skill()->syncWithoutDetaching($request->skill);

        return redirect()->route('user_profile')->withErrors(['message' => 'File Berhasil dihapus']);
    }
    public function deltalent($idskill){

        $user = User::find(Auth::guard()->user()->id);

        $user->skill()->detach($idskill);

        return redirect()->route('user_profile')->withErrors(['message' => 'File Berhasil dihapus']);
    }

    public function register(){
        return view('FrontHome.User.register');
    }

    public function register_submit(Request $request){

        $validator = Validator::make($request->all(), [
            'name'=> 'required',
            'professi' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = new User();
        $data->name = $request->name;
        $data->professi = $request->professi;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->save();

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
        // dd($credential);
        if(Auth::attempt($credential)) {
            // die;
            return redirect()->route('front_home')->with('message','Berhasil Membuat Akun');
        };
    }

    public function addSertifikat(Request $request){
        $id = Auth::guard()->user()->id;
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'file' => 'required|file|mimes:pdf',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $newFile = $request->file('file');
        $filename = $newFile->getClientOriginalName();
        $path = 'public/image/'. $id;
        $newFile->storeAs($path, $filename);
        $user->file()->create([
            'file' => $filename,
            'type' => 'sertifikat',
            'judul' => $request->judul,
            'created_at' => now(),
        ]);

        return redirect()->route('user_profile')->withErrors(['message' => 'File Berhasil ditambah']);
    }

    public function delSertifikat($idfile){
        $id = Auth::guard()->user()->id;
        $file = File::findOrFail($idfile);
        $path = 'public/img/'.$id.'/'.$file->file;
        Storage::delete($path);
        if($file->delete()){return redirect()->route('user_profile')->withErrors(['message' => 'File Berhasil dihapus'])
            ;
        }else{
            return redirect()->route('user_profile')->withErrors(['message' => 'File Gagal Dihapus']);
        }

    }
    public function pesan($id){
        return view('FrontHome.contak');
    }
}
