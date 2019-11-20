@extends('layout.main')
@section('content')
<div class="card redial-border-light redial-shadow">
                            <div class="card-body">
                                <h6 class="header-title pl-3 redial-relative">Create user
                                {{-- <a href="{{route('category.table')}}" class="btn btn-primary float-right"><span class="ti-angle-double-left pr-2"></span> Go Back</a> --}}
                                </h6>
                            <form method="POST" action="{{route('user.store')}}">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label class="redial-font-weight-600">Email</label>
                                                    <input type="text" class="form-control" placeholder="Enter Email" name="email" required/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="redial-font-weight-600">Password</label>
                                                    <input type="password" class="form-control" placeholder="Password" name="password" required/>
                                                </div>
                                                <button class="btn btn-success">Create User</button>

                                        </form>
                            </div>
</div>




@endsection
