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
                                            <div class="form-group col-md-3">
                                                    <label class="redial-font-weight-600">Select</label>
                                                    <select class="form-control" id="category">
                                                        <option value="">Select Category</option>
                                                            @foreach($categories as $category)
                                                            <option value="{{ $category->category_id }}">{{ $category->name }}
                                                            </option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                    </h6>
                                    <table id="example" class="table table-bordered" cellspacing="0" width="100%">

                                        <thead>
                                            <tr>
                                                <th>Song Name</th>
                                                <th>Category Name</th>
                                                <th>Artist Name</th>
                                                <th>Song_Url</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody id="songs_data">
                                                {{-- @foreach($songs as $song)
                                            <tr>
                                            <td>{{$song->song_url}}</td>
                                            <td>{{$song->category->name}}</td>
                                            <td>{{$song->artist}}</td>
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
                                                @endforeach --}}
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
@section('scripts')
<script type="text/javascript">
    $("#category").on("change", function(){
        let category_id = this.value;

        $.get( "http://localhost/DjApp/api/category_songs?category_id="+category_id, function( data ) {
            if(data.status == 1){
                document.getElementById("songs_data").innerHTML = "";
                $.each(data.data, function( index, value ) {
                    document.getElementById("songs_data").innerHTML +=
                    `<tr>
                        <td>${value.song_url}</td>
                        <td>${value.category.name}</td>
                        <td>${value.artist}</td>
                        <td> <audio controls>
                        <source src="/DjApp/storage/upload_images/'.${value.song_url}" type="audio/ogg">
                        <source src="/DjApp/storage/upload_images/${value.song_url}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio></td>
                        <td><a href="http://localhost/DjApp/admin/song/edit/${value.song_id}"  class="btn btn-success bg-dark"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                            <a href="http://localhost/DjApp/admin/song/delete/${value.song_id}" class="btn btn-danger bg-dark"><i class="fa fa-trash aria-hidden="true""></i></a>
                        </td>
                    </tr>`;
                });
            }
            else{
                alert("No songs available in this category");
            }
        });
    });
</script>
@endsection
