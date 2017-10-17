<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	protected $fillable = [
       'page_name', 'page_abbr'
    ];
    public function contents()
    {
    	return $this->hasMany('App\PageContent');
    }
}
