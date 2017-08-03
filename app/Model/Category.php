<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
	protected $table = 'categories';
	protected $fillable = ['name','parent_id','create_at','update_at'];

	public function parentName()
	{
		$parent = Category::find($this->parent_id);
		if($parent){
			return $parent->name;
		}
		return null;
	}
	public function getUrl(){
		$slug = Slug::where('entity_type', self::$entity_type)
					->where('entity_id', $this->id)->first();
		if($slug){
			return url($slug->slug);
		}else{
			return url('/');
		}
	}
}
