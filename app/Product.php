<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
	protected $fillable = ['id','code','name', 'slug', 'description', 'stract', 'quantity','min_quantity', 'price','image','visible','category_id'];

    public function setImageAttribute($image){
        // $this->attributes['image'] = $this->id.'_'.$image->getClientOriginalName();
        // $name = $this->id.'_'.$image->getClientOriginalName();
        // \Storage::disk('local')->put($name,\File::get($image));
        $destinationPath = 'recursos/img/products';
        $original_filename = $image->getClientOriginalName();
        $extension ='.'.$image->getClientOriginalExtension();
        $filename=str_replace($extension , '', $original_filename).'_'.date('d_m_Y_hi').$extension;
        $filename=str_replace(' ', '', $filename);
        $this->attributes['image'] = $filename;
        $image->move($destinationPath, $filename);
    }
    
    // Relation with Category
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    //Relación de categorias padre
    public function nestedComments()
    {
        return $this->hasMany('App\Category')->where('parent_id', null);
    }

    // Relation with OrderItem
    public function order_item()
    {
        return $this->hasOne('App\OrderItem');
    }

}
