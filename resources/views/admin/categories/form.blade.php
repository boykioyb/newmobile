@extends('layouts.master')
@section('title','Categories')
@section('content')
@php
$tree = get_options($cates, 0, "", $model->id);

@endphp
<div class="row">
	<div class="col-md-12">
		<div class="wrapper wrapper-content">
			<div class="col-md-offset-4">
				<div class="col-md-6">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h4>Categories</h4>
						</div>
						<div class="ibox-content">
							<div class="box-body table-responsive no-padding">
								<form action="{{ route('cate.save') }}" method="post" class="col-sm-6 col-sm-offset-3 form" novalidate>
									{{csrf_field()}}
									<input type="hidden" name="id" value="{{$model->id}}">
									<div class="form-group">
										<label for="name">Category name</label>
										<input type="text" class="form-control" value="{{$model->name}}" id="name" name="name" placeholder="Enter category name">
										@if(asset($errors->first('name')))
										<span class="text-danger">{{$errors->first('name')}}</span>
										@endif

									</div>
									<div class="form-group">
										<label for="parent_id">Parent</label>
										<select name="parent_id" class="form-control">
											<option value="0">---Select a category---</option>
											@foreach($tree as $key => $val) {
											<option @if(substr($key, 1) == $model->parent_id) selected @endif value="{{substr($key, 1)}}">{{$val}}</option>";
										}
										@endforeach
									</select>
								</div>
								<div class="form-group text-center">
									<button type="submit" class="btn btn-md btn-success">
										<i class="fa fa-save"></i> Save
									</button>
									<a href="{{route('cate.list')}}" class="btn btn-md btn-danger">
										<i class="fa fa-remove"></i> Cancel
									</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@stop