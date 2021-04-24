<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

class User extends Controller
{
    public function create(Request $request)
    {
        $user = ModelsUser::store($request);
        return $user;
    }
}
