<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Answer extends Model
// {
//     use HasFactory;
// }

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;


    // public static function getDate($id){
    //     return User::where('id', $id)->pluck('name')->first();
    // }

    public static function getTotalAns($id){
        return Answer::where('ans_Que_id', $id)->count();
    }
}
