<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserApiController extends Controller
{
    public function getUserall(){

        $data = User::with('skill:id,nama_talent')->select('id', 'name','email', 'np','Professi','no_telp','deskripsi','photo')->get();

        $userData = $data->map(function ($user){
            $skills = $user->skill->map(function ($skill){
                return [
                    'id' => $skill->id,
                    'skill' => $skill->nama_talent
                ];
            });
            return[
                'id' =>$user->id,
                'name' => $user->name,
                'email' => $user->email,
                'np' => $user->np,
                'Professi' => $user->Professi,
                'no_telp' => $user->no_telp,
                'deskripsi' => $user->deskripsi,
                'photo' => $user->photo == null ? null : asset('storage/public/img/'.$user->id.'/'.$user->photo),
                'skills' =>$skills
            ];
        });
        return response()->json(['data'=>$userData]);
    }

    public function register(Request $request){

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
        'email' => 'required',
        'password' => 'required',
        'professi' => 'required']);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $data = new User;
        $data->name = $request->nama;
        $data->email = $request->email;
        $data->Professi = $request->professi;
        $data->password = Hash::make($request->password);


        if($data->save()){
            return response()->json(['succcess'=> true, 'message' => 'Sukses Registrasi']);
        }else{
            return response()->json(['succcess'=> false, 'message' => 'Gagal Registrasi']);
        }
    }

    public function edit(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'np' => 'required',
            'photo' => 'required|image',
            'no_telp'=>'required',
            'deskripsi'=>'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }

        $user = User::where('id', $request->id)->first();
        if($user->photo){
            $path = 'public/img/'.$user->id.'/'.$user->photo;
            Storage::delete($path);
        }
        try{if($request->hasFile('photo')){
        $file = $request->file('photo');
        $filename = $file->getClientOriginalName();
        $path = 'public/img/'. $request->id;
        $file->storeAs($path,$filename);
        $user->photo = $filename;
        }

        $user->name = $request->nama;
        $user->np = $request->NP;
        $user->email = $request->email;

        $user->no_telp = $request->no_telp;
        $user->deskripsi = $request->deskripsi;
        $user->updated_at = Carbon::now();
        if($user->update()){
            return response()->json(['message' => 'Update Success']);
        }else{
            return response()->json(['message' => 'Update Failed']);
        }
    }catch(\Exception $e){
        return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    public function addskill(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'id_skill' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }
        try{$user = User::find($request->id);
            $user->skill()->syncWithoutDetaching($request->id_skill);
            return response()->json(['message' => 'Tambah Skill Berhasil']);
        }catch(\Exception $e){
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }

    }

    public function delskill(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'id_skill' => 'required'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }
        try{$user = User::find($request->id);
        if($user->skill()->detach($request->id_skill)){
            return response()->json(['message' => 'Hapus Skill Berhasil']);
        }else{
            return response()->json(['message' => 'Hapus Skill gagal']);
        }}catch(\Exception $e){
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }

    }
}
