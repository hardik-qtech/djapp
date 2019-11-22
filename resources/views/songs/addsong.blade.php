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
                    <input class="form-control" id="search_artist" type="text" placeholder="Search Artist" name="name">
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
@section('scripts')
<script type="text/javascript">
 $(document).ready(function(){

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

 });

</script>
@endsection
