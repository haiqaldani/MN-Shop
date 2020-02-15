<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryItems extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title'
    ];

    protected $hidden = [

    ];

    public function items(){
        return $this->hasMany( Shop::class, 'category_items_id', 'id' );
    }

}
