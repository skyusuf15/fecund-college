<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
	protected $fillable = [
       'content_title', 'content'
    ];
    public function pages()
    {
    	return $this->belongsTo('App\Page');
    }
}
