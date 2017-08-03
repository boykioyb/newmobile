@extends('layouts.master')
@section('title','post')
@section('content')
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
                                    <table class="table table-bordered">
                                        <thead>
                                             <th>ID</th>
                                             <th>Category</th>
                                             <th>Title</th>
                                             <th>Description</th>
                                             <th>Image</th>
                                             <th>Tag</th>
                                             <th>Tag</th>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
@section('js')
    $(document).ready(function(){
    $('#myTable').DataTable();
    });
@endsection