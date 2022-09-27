<?php

namespace App\Http\Controllers;

// use App\Imports\UsersImport;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
// use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('welcome', compact('user'));
    }



    public function export()
    {
        return dispatch(new \App\Jobs\SendMail());
    }
    
}
