@extends('layout.main')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-12 col-sm-12">
                    <div class="row mb-4">
                        <div class="col-12 col-md-12">
                            <div class="card redial-border-light redial-shadow mb-4">
                                <div class="card-body">
                                    <h6 class="header-title pl-3 redial-relative">User List
                                    <a href="{{route('category.add')}}" class="btn btn-primary float-right"> <i class="fa fa-plus" aria-hidden="true"></i> Add Category</a>
                                    </h6>
                                    <table id="example" class="table table-bordered" cellspacing="0" width="100%">

                                        <thead>
                                            <tr>
                                                <th class="text-center">User Email</th>

                                                <th class="text-center">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>
                                            <td class="text-center">{{$user->email}}</td>
                                                <td class="text-center">

                                                <a href="{{route('delete.user',['id'=>$user->id])}}" class="btn btn-danger bg-dark"><i class="fa fa-trash"></i></a>
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
