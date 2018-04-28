<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
	protected $fillable = ['id','parent_id','name','description','slug'];

	//Relación entre los productos y las categorias
	public function products()
    {
        return $this->hasMany('App\Product');
    }

    //obtiene categorias hija dell padre
    public function replies()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }
   
}
