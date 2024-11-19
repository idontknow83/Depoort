<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use PhpParser\Node\NullableType;

class UserController extends Controller
{
    public function show() 
    {
        $users = DB::table('users')
            ->get();
        return view('users.index')->with('users', $users);
    }
    
    public function edit() {
        $user1 = auth()->user();
        return view('accountinfo')->with('user', $user1);
    }

    public function editOther(int $id, User $user) {
        $user1 = $user->find($id);
        return view('accountinfo')->with('user', $user1);
    }

    public function update(Request $request) {
        $user = auth()->user();
        $request->validate([
            'telnummer' => 'required|unique:users,telnummer,',
            // Other validation rules...
        ]);
        $user->fill($request ->all())->save();
        if ($user->fill($request ->all())->save()) {
            return back()->with(['success' => true, 'message' => 'User updated successfully']);
        } else {
            return back()->with(['error' => true, 'message' => "Something went wrong trying to update the user "]);
        }
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
            return back()->with(['success' => true, 'message' => 'User deleted succesfully']);
        } else {
            return back()->with(['error' => true, 'message' => "Something went wrong trying to delete the user"]);
        }
    }
}