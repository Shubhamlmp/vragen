<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Question extends Model
// {
//     use HasFactory;
// }


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $primaryKey = 'que_id';

    public static function getTotalCount($id){
        return Question::where('que_id', $id)
                        ->pluck('views')
                        ->first();
    }

}