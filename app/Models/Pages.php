<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
   protected $table = 'lw_pages';
	
    protected $fillable = [
        'name','slug','content', 'image', 'meta_title', 'meta_keywords', 'meta_description', 'status'
    ];
    public function status()
    {
        return $this->belongsTo('App\Models\Status', 'status_id');
    }
}
