@extends('layout.main')
@section('content')
<div class="card redial-border-light redial-shadow">
        <div class="card-body">
            <h6 class="header-title pl-3 redial-relative">Edit Song</h6>
        <form method="POST" action="{{route('update.song')}}" enctype="multipart/form-data">
                {{csrf_field()}}
        <input type="hidden" name="id" value="{{$songs->song_id}}">
        <div class="form-group">
                <label class="redial-font-weight-600">Select Category</label>
                <select class="form-control" name=category1>
                        @foreach($category as $post)
                        <option value="{{ $post->category_id }}" @if($post->category_id == $songs->category_id) selected @endif>{{ $post->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                    <label class="redial-font-weight-600">Artist Name</label>
            <input type="text" class="form-control" placeholder="Enter Artist Name" name="name"  value="{{$songs->artist}}"/>
                </div>

                <div class="form-group">
                        <label class="redial-font-weight-600 d-block">Song url</label>
                <input type="file" name="file" class="form-control" value="{{$songs->song_url}}">
                    </div>
                    <button class="btn btn-primary">Update Song</button>

            </form>
        </div>
    </div>

@endsection
