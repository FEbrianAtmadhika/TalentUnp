<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SubTalent;
use App\Models\Talent;
use Illuminate\Http\Request;

class talentController extends Controller
{
    public function allTalent(){

        $rawdata = Talent::with('subtalent')->get();

        $data = $rawdata->map(function ($talent){
            $skills = $talent->subtalent->map(function ($skill){
                return[
                    'id' => $skill->id,
                    'nama' => $skill->nama_talent
                ];
            });
            return[
                'id' => $talent->id,
                'nama_kategori' => $talent->kategori,
                'Skills' => $skills
            ];
        });

        return response()->json(['data' => $data]);
    }
    public function allSkill(){
        try{$rawdata = SubTalent::select('id','nama_talent')->get();
        return response()->json($rawdata);}catch(\Exception $e){
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }

    }
}
