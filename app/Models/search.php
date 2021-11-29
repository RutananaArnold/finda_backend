<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class search extends Model
{
    public $table = 'searchdocs';
    use HasFactory;
    protected $fillable =[
        'selecteditem',
        'lostdocfirstname',
        'lostdoclastname',
        'lostdocdateofbirth',
        'searchinggender',
        'searchingnationality',
        'searchingfirstname',
        'searchinglastname',
        'searchingemail',
        'phone',
    ];
}
