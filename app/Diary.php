<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'pet_id' => 'required',
        'date' => 'required|date',
        'feeding' => 'required|boolean',
        'excreta' => 'required|boolean',
        'water' => 'required|boolean',
        'memo' => 'text|nullable'
    );
}
