<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function show() 
    {
        $users = User::get();
        return $users;
    }

    public function delete(string $id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
        return redirect(config('app_url') . '/users');
    }
}
