<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubTalent;
use App\Models\Talent;
use App\Models\User;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {

        $totaltalent = Talent::count();
        $totalskill = SubTalent::count();
        $totaluser = User::count();
        return view('admin.home', compact('totaltalent', 'totalskill', 'totaluser'));
    }
}
