<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class found extends Model
{
    public $table = 'lostdocs';
    use HasFactory;

    protected $fillable =[
        'selecteditem',
        'docfirstname',
        'doclastname',
        'dateofbirth',
        'gender',
        'nationality',
        'location',
        'firstname',
        'lastname',
        'email',
        'phone',
        'pic',
    ];
}
