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
        $record = 
        DB::table('users')
            ->select()
            ->leftJoin('role_user', 'users.id', '=', 'role_user.user_id')
            ->whereRaw('users.id =' . $id . ' AND (role_user.role_id IS NULL OR role_user.role_id = 3)')
        ->count();

        if ($record > 0) {
            DB::table('users')
            ->where('id', '=', $id)
            ->delete();
            return redirect(config('app_url') . '/users');
        } else {
            return redirect(config('app_url') . '/users');
        }
    }
}
