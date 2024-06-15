<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Talent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SubTalent;

use App\Models\File;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;
use function PHPUnit\Framework\isNull;
use Illuminate\Pagination\LengthAwarePaginator;

class FrontHomeController extends Controller
{
    public function search(Request $request)
    {
        $chosen = $request->selectedOption;
        $input = $request->input;
        $menutalent = Talent::with('Subtalent')->get();

        $request->session()->put('input', $input);
        $request->session()->put('selectedOption', $chosen);

        $data = null;
        $perPage = 9;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        if ($chosen === '3') {
            $users = User::where('name', 'LIKE', '%' . $input . '%')->get();
            $data = $this->paginate($users, $perPage, $currentPage);
        } else if ($chosen === '2') {
            $talents = Talent::where('kategori', 'LIKE', '%' . $input . '%')->withCount('Subtalent')->get();
            $data = $this->paginate($talents, $perPage, $currentPage);
        } else if ($chosen === '1') {
            $subtalents = Subtalent::where('nama_talent', 'LIKE', '%' . $input . '%')->withCount('anggota')->get();
            $data = $this->paginate($subtalents, $perPage, $currentPage);
        }

        return view('FrontHome.search_result', compact('chosen', 'data', 'input', 'menutalent'));
    }

    private function paginate($items, $perPage, $currentPage)
    {
        $currentPageItems = $items->slice(($currentPage - 1) * $perPage, $perPage);
        $data = new LengthAwarePaginator(
            $currentPageItems,
            $items->count(),
            $perPage,
            $currentPage,
            ['path' => LengthAwarePaginator::resolveCurrentPath()]
        );
        return $data;
    }
    public function show()
    {
        $menutalent = Talent::with('Subtalent')->withCount('Subtalent')->get();



        return view('FrontHome.index', compact('menutalent'));
    }

    public function subtalentshow($id){

        $subtalent = Subtalent::where('id_kategori', $id)->withCount('anggota')->get();
        $menutalent = Talent::with('Subtalent')->get();

        return view('FrontHome.skill', compact('subtalent','menutalent'));

    }

    public function anggotshow($id){
        $filter = $id;
        $user = User::whereHas('skill', function($q) use ($filter){
            $q->where('id_subtalent', $filter);
        })->paginate(12);
        $menutalent = Talent::with('Subtalent')->get();
        return view('FrontHome.peserta', compact('user', 'menutalent'));
    }
    public function indexLogin()
    {
        return view('user.login');
    }
    public function login_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credential)) {
            return redirect()->route('front_home');
        } else {
            return redirect()->route('user_login')->with('error', 'Information is not correct!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('front_home');
    }
    public function forget_password()
    {
        return view('user.forget_password');
    }
    public function reset_password($token,$email)
    {
        $user_data = User::where('token', $token)->where('email',$email)->first();
        if(!$user_data){
            return redirect()->route('user_login');
        };

        return view('user.reset_password', compact('token','email'));
    }

    public function reset_password_submit(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $user_data = User::where('token',$request->token)->where('email',$request->email)->first();
        $user_data->password = Hash::make($request->password);
        $user_data->token = '';
        $user_data->update();

        return redirect()->route('user_login')->with('success', 'Password is reset successfully');
    }

    // public function forget_password_submit(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email'
    //     ]);

    //     $user_data = User::where('email', $request->email)->first();
    //     if(!$user_data) {
    //         return redirect()->back()->with('error','Email address not found!');
    //     }

    //     $token = hash('sha256',time());

    //     $user_data->token = $token;
    //     $user_data->update();

    //     $reset_link = url('user/reset-password/'.$token.'/'.$request->email);
    //     $subject = 'Reset Password';
    //     $message = 'Please click on the following link: <br>';
    //     $message .= '<a href="'.$reset_link.'">Click here</a>';

    //     Mail::to($request->email)->send(new Websitemail($subject, $message));

    //     return redirect()->route('user_login')->with('success','Please check your email and follow the step there!');
    // }
    public function peserta($id){
        $menutalent = Talent::with('Subtalent')->get();
        $data = User::with('file')->findOrFail($id);
        $talent = SubTalent::join('talent', 'subtalent.id_kategori', '=', 'talent.id')
        ->whereHas('anggota', function($q) use ($id) {
            $q->where('id_user', $id);
        })
        ->get(['subtalent.*', 'talent.kategori']);

        $kategori = $talent->pluck('kategori')->unique();


        return view('FrontHome.profile_peserta', compact('data','kategori','menutalent'))->with('talent', $talent);
    }
    public function fileview($id)
{
    $file = File::findOrFail($id);
    $path = public_path('/storage/public/img/' . $file->id_user . '/' . $file->file);
    if (file_exists($path)) {
        return response()->file($path, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline'
        ]);
    } else {
        return redirect()->back()->withErrors(['error' => 'File tidak ditemukan']);
    }
}
}
