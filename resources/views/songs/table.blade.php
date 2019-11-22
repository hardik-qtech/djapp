@extends('layout.main')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-12 col-sm-12">
                    <div class="row mb-4">
                        <div class="col-12 col-md-12">
                            <div class="card redial-border-light redial-shadow mb-4">
                                <div class="card-body">
                                    <h6 class="header-title pl-3 redial-relative">Songs List</h6>
                                     <div class="form-group col-md-3 ">
                                        <input class="form-control" id="search_artist" type="text" placeholder="Search Artist">
                                        <div class="col-sm-12" style="height:auto; color:#fff; border: 1px solid #fff; border-top:none !important; border-left:none !important; border-right:none !important; z-index:999; position:absolute; background:#2F323B; width:87%;" id="search_results"></div>
                                    </div>
                                    <div class="form-group col-md-3 ">
                                        <select class="form-control" id="category">
                                            <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{ $category->category_id }}">{{ $category->name }}
                                                </option>
                                                @endforeach
                                        </select>
                                    </div>
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
                                        <tbody id="songs_data"></tbody>
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
    $(document).ready(function(){
        get_songs();

        $("#category").on("change", function(){
            let category_id = this.value;
            category_songs(category_id);
        });

        $("#search_artist").on("keyup", function(){
            let keyword = this.value;
            if(keyword.length >= 3){
                search_artist(keyword);
            }
            else if(keyword.length == 0){
                document.getElementById("search_results").innerHTML = "";
                get_songs();
            }
        });
    });

    function get_songs(){
        $.get("http://localhost/DjApp/api/songs", function( data ) {
            document.getElementById("songs_data").innerHTML = "";
            $.each(data.data, function( index, value ) {
                document.getElementById("songs_data").innerHTML +=
                `<tr>
                    <td class="text-center">${value.song_url}</td>
                    <td class="text-center">${value.category.name}</td>
                    <td class="text-center">${value.artist}</td>
                    <td class="text-center"> <audio controls>
                    <source src="/DjApp/storage/upload_images/'.${value.song_url}" type="audio/ogg">
                    <source src="/DjApp/storage/upload_images/${value.song_url}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio></td>
                    <td class="text-center"><a href="http://localhost/DjApp/admin/song/edit/${value.song_id}"  class="btn btn-success bg-dark"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                        <a href="http://localhost/DjApp/admin/song/delete/${value.song_id}" class="btn btn-danger bg-dark"><i class="fa fa-trash aria-hidden="true""></i></a>
                    </td>
                </tr>`;
            });
        });
    }

    function category_songs(category_id){
        if(category_id != ""){
            $.get( "http://localhost/DjApp/api/category_songs?category_id="+category_id, function( data ) {
                document.getElementById("search_artist").value = "";
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
        }
        else{
            get_songs();
        }
    }

    function search_artist(keyword){
        $.get("http://localhost/DjApp/api/allartist?keyword="+keyword, function( data ) {
            if(data.status == 1){
                document.getElementById("search_results").innerHTML = "";

                $.each(data.data, function( index, value ) {
                    document.getElementById("search_results").innerHTML +=
                    `<a onclick="artist_songs('${value.artist}');" style="text-decoration:none;">${value.artist}</a><br>`;
                });
            }
            else
            {
                document.getElementById("search_results").innerHTML =
                `<p class="text-muted mt-1 mb-2">No search artist found</p>`;
            }
        });
    }

    function artist_songs(artist){
        $.get( "http://localhost/DjApp/api/artistsongs?artist="+artist, function( data ) {
            document.getElementById("category").value = "";
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
                document.getElementById("search_results").innerHTML = "";
                document.getElementById("search_artist").value = artist;
            }
            else{
                alert("No songs available for this artist");
            }
        });
    }

    </script>
@endsection
