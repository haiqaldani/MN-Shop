<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'image'
    ];

    protected $hidden = [

    ];

    public function items(){
        return $this->hasMany( Shop::class, 'categories_id', 'id' );
    }

}
