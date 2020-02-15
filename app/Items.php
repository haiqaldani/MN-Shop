<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Items extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'categories_id', 'category_items_id','slug', 'image', 'title', 'about'
    ];

    protected $hidden = [

    ];

    public function categories(){
        return $this->belongsTo( Categories::class, 'categories_id', 'id' );
    }
    public function category_items(){
        return $this->belongsTo( CategoryItems::class, 'category_items_id', 'id' );
    }


}
