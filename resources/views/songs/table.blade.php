@extends('layout.main')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-12 col-sm-12">
                    <div class="row mb-4">
                        <div class="col-12 col-md-12">
                            <div class="card redial-border-light redial-shadow mb-4">
                                <div class="card-body">
                                    <h6 class="header-title pl-3 redial-relative">Songs List

                                    </h6>
                                    <table id="example" class="table table-bordered" cellspacing="0" width="100%">

                                        <thead>
                                            <tr>
                                                <th>Song Name</th>
                                                <th>Category Name</th>
                                                <th>Song_Url</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($songs as $song)
                                            <tr>
                                            <td>{{$song->song_url}}</td>
                                            <td>{{$song->category->name}}</td>
                                            <td>
                                                    <audio controls>
                                                            <source src="{{asset('/storage/upload_images/'.$song->song_url) }}" type="audio/ogg">
                                                                    <source src="/upload_images/{{$song->song_url}}" type="audio/mpeg">
                                                                    Your browser does not support the audio element.
                                                                  </audio>
                                            </td>
                                                <td class="text-center">
                                                <a href="{{route('edit.song',['id'=>$song->song_id])}}"  class="btn btn-success bg-dark"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <a href="{{route('delete.song',['id'=>$song->song_id])}}" class="btn btn-danger bg-dark"><i class="fa fa-trash"></i></a>
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
