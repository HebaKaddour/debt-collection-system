<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
    'product_name',
    'section_id',
    'description'
    ];
    public function section()
    {
        return $this->belongsTo('App\Section');
    }
}
