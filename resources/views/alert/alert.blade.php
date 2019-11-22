@if(count($errors)> 0)
  @foreach($errors->all() as $error)
  {{-- <div class="alert alert-danger alert-icon alert-close alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <i class="font-icon font-icon-warning"></i>
    {{$error}}
  </div> --}}
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    {{$error}}
</div>
  @endforeach
@endif

@if(session('success'))
{{-- <div class="alert-banner">
  <div class="alert alert-success alert-dismissible show " role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <i class="font-icon font-icon-warning"></i>
    {{session('success')}}

  </div>
</div> --}}
{{-- <div class="alert alert-success alert-dismissible show fade">
    <div class="alert-body">
      <button class="close" data-dismiss="alert">
        <span>×</span>
      </button>
      {{session('success')}}
    </div>
  </div> --}}
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    {{session('success')}}
</div>
@endif

@if(session('error'))
  {{-- <div class="alert alert-danger alert-icon alert-close alert-dismissible show mt-3" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="font-icon font-icon-warning"></i>
  {{session('error')}}
</div> --}}
<div class="alert alert-danger alert-dismissible show fade">
    <div class="alert-body">
      <button class="close" data-dismiss="alert">
        <span>×</span>
      </button>
      {{session('error')}}
    </div>
  </div>
@endif
