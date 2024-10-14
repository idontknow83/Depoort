<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    public function createRoles()
    {
        $owner = Role::create([
            'name' => 'owner',
            'description' => 'has all permissions',
        ]);
        
        $admin = Role::create([
            'name' => 'admin',
            'description' => 'can delete users and request consultation information',
        ]);
    }

    public function addRole(User $user)
    {
        $user::find(1);
        $user->addRole('admin');
        // return $user;
    }
}