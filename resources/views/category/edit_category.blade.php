@extends('layout.main')
@section('content')
<div class="card redial-border-light redial-shadow">
        <div class="card-body">
            <h6 class="header-title pl-3 redial-relative">Edit Song</h6>
        <form method="POST" action="{{route('update.category')}}" enctype="multipart/form-data">
                {{csrf_field()}}
        <input type="hidden" name="id" value="{{$category->category_id}}">
                <div class="form-group">
                    <label class="redial-font-weight-600">Category Name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{$category->name}}" />
                </div>

                    <button class="btn btn-success">Update Category</button>

            </form>
        </div>
    </div>

@endsection
