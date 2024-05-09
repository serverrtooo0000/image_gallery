<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    

    protected $table = 'Image';
   

    protected $fillable = [
        'id',
        'name',
        'path',
        'created_at'
    ];

    

}
