<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequestCreate;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view("dashboard.user.user");
    }

    public function store(UserRequestCreate $request)
    {
        dd($request->all());
    }
}
