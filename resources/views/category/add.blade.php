@extends('layout.main')
@section('content')
<div class="card redial-border-light redial-shadow">
        <div class="card-body">
            <h6 class="header-title pl-3 redial-relative">Add Song
            <a href="{{route('category.table')}}" class="btn btn-primary float-right"><span class="ti-angle-double-left pr-2"></span> Go Back</a>
            </h6>
        <form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="redial-font-weight-600">Category Name</label>
                    <input type="text" class="form-control" placeholder="Enter name" name="name" />
                </div>

                    <button class="btn btn-success">Add Category</button>

            </form>
        </div>
    </div>

@endsection
