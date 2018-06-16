<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    //
    public function users()
    {
        $users = User::all();
        return View('users', ['users' => $users]);
    }

    public function getUser($id)
    {

        $user = User::where('id', '=', $id)->get();
        return $user;
    }

    public function rawQuery()
    {
        $users = DB::select('select * from aptech_php_12.users');

        return $users;
    }
}
