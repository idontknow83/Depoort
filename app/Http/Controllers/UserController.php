<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function show() 
    {
        $users = DB::table('users')
            ->get();
        return view('users.index')->with('users', $users);
    }

    public function delete(string $id)
    {
        DB::table('users')
            ->leftJoin('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('id', '=', $id)
            ->whereNot('role_id', '=', '1')
            ->whereNot('role_id', '=', '2')
            ->delete();
        return redirect(config('app_url') . '/users');
    }
}
