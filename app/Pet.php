<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'type' =>'string|required',
        'name' => 'string|nullable'
    );
    
    public function scopeNameLike($query, $str) {
        return $query->where('type', 'like', "%{$str}%");
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
