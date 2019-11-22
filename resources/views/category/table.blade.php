@extends('layout.main')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-12 col-sm-12">
                    <div class="row mb-4">
                        <div class="col-12 col-md-12">
                            <div class="card redial-border-light redial-shadow mb-4">
                                <div class="card-body">
                                    <h6 class="header-title pl-3 redial-relative">Category List
                                    <a href="{{route('category.add')}}" class="btn btn-primary float-right"> <i class="fa fa-plus" aria-hidden="true"></i> Add Category</a>
                                    </h6>
                                    <table id="example" class="table table-bordered" cellspacing="0" width="100%">

                                        <thead>
                                            <tr>
                                                <th class="text-center">Category Name</th>

                                                <th class="text-center">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $category)
                                            <tr>
                                            <td class="text-center">{{$category->name}}</td>
                                                <td class="text-center">
                                                <a href="{{route('edit.category',['id'=>$category->category_id])}}"  class="btn btn-success "><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <a href="{{route('delete.category',['id'=>$category->category_id])}}" class="btn btn-danger "><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
</div>


@endsection
