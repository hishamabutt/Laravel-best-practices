<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public static function store($request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return $user;
    }
}
