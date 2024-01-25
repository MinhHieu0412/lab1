<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class About extends Controller
{
    function index(){
        /* $userModel = new User();
        $userModel->name='John Wick2';
        $userModel->email='john2@gmail.com';
        $userModel->password='123';
        $userModel->save(); */

       $users = User::all();
        dd($users);
        $data['array'] = [1,2,5,6,];
        return view('home',$data);
    }
}
