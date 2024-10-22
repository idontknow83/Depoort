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

    public function edit(User $user, ) {
        $user = auth()->user();
        return view('accountinfo')->with('user', $user);
    }

    public function update(Request $request) {
        $user = auth()->user();
        $user->fill($request ->all())->save();
        if ($user->fill($request ->all())->save()) {
            return redirect(env('app_url') . '/public/account/info');
        }
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


