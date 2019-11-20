@extends('layout.main')
@section('content')
<div class="card redial-border-light redial-shadow">
        <div class="card-body">
            <h6 class="header-title pl-3 redial-relative">Add Song</h6>
        <form method="POST" action="{{route('song.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="redial-font-weight-600">Select Category</label>
                    <select class="form-control" name=category>
                        @foreach($categories as $category)
                        <option value="{{ $category->category_id }}">{{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="redial-font-weight-600">Artist Name</label>
                    <input type="text" class="form-control" placeholder="Enter Artist Name" name="name" />
                </div>
                <div class="form-group">
                        <label class="redial-font-weight-600 d-block">File Input</label>
                        <input type="file" name="file[]" multiple='true' class="form-control">
                    </div>
                    <button class="btn btn-success">Add Song</button>

            </form>
        </div>
    </div>

@endsection
