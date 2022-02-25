<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;

class UserController extends Controller
{
    //
    public function indexPaging()
    {
        $users = User::paginate(5);
        return view('users.index-paging')->with('users', $users);
    }
}