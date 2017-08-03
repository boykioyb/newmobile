<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
class CategoryController extends Controller
{
	public function index()
	{
		$cates = Category::all();

		$nameList = get_options($cates);

		for ($i = 0; $i < count($cates); $i++) {
			foreach ($nameList as $key => $value) {
				if("x".$cates[$i]->id == $key){
					$cates[$i]->name = $value;
				}
			}
		}
		return view('admin.categories.index', compact('cates'));
	}

	public function destroy($id)
	{
    	// 1. Check category id is existed or not
		$cate = Category::find($id);
		if($cate != null){
            // 1.1 Set current cate's childs parent_id to this parent_id
			$childs = Category::where('parent_id', $cate->id)->get();
			foreach ($childs as $key => $value) {
				$value->parent_id = $cate->parent_id;
				$value->save();
			}
    		// 2. Delete record from database
			$cate->delete();
    		// $cate->Category::find($id)->destroy();
		}
    	// 3. Redirect page to category list
		return redirect(route('cate.list'));
	}

	public function addNew()
	{
    	// 1. Create new model
		$model = new Category();

    	// 2. Get all category to set parent id of new category
		$cates = Category::all();
    	// 3. Generate view form
		return view('admin.categories.form', compact('model', 'cates'));
	}

	public function update($id)
	{
    	// 1. get model by id
		$model = Category::find($id);
		if($model == null){
			return redirect(route('cate.list'));
		}

    	// 2. Get all category to set parent id of new category
		$cates = Category::all();
    	// 3. Generate view form
		return view('admin.categories.form', compact('model', 'cates'));
	}


	public function save(Request $request)
	{
		$this->validate($request,[
			]);
    	// 1. get form id value
		$id = $request->input('id');
    	/*$this->validate($request, [
    			'name'=>[
    				"required",
	    			Rule::unique('categories')->ignore($id)
    			]
    		],
    		[
    			'name.required' => 'Name is required!',
    			'name.unique' => 'Category name should be unique!'
    			]);*/

    			if($id == null){
			// 2. if id = null => case insert => new model
    				$model = new Category();
    			}else{
    		// 2.1 if id != null => case update => find pbject from db by id
    				$model = Category::find($id);
    			}

    	// 3. fill form data to model object
    			$model->fill($request->all());

    	// 4. Save model
    			$model->save();
    	// 5. Redirect to category list
    			return redirect(route('cate.list'));
    		}
    	}
