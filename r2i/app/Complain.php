<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $fillable = [
        'ministry',
        'authority',
        'complain_text',
        'file_up',
        'aggrement',
    ];
}
