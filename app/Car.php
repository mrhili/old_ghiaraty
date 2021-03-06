<?php

namespace App;

use Nestable\NestableTrait;

class Car extends \Eloquent {

    use NestableTrait;

    protected $parent = 'parent_id';

    protected $fillable = ['name', 'parent_id', 'slug'];

    public $timestamps = false;
    
    
    public function building()
    {
        return $this->belongsTo('App\Building', 'foreign_key');
    }



}
