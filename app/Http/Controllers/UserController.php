<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList()
    {
        $users = User::all();

        return response()->json(['status' => true, 'message' => 'Success', 'data' => $users]);
    }
}
