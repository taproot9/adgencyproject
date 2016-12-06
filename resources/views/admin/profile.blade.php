@extends('layouts.adminlayout')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User Admin Profile</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <a href="#"><img src="https://unsplash.imgix.net/uploads/1411724908903377d4696/2e9b0cb2?w=1024&amp;q=50&amp;fm=jpg&amp;s=2016c4932a7b7a1b629cb6890bff9977" class="img-responsive"></a>
        </div>
        <div class="col-md-9">
            <h3>Name
                <span style="padding-left:100px">: {{Auth::user()->name}}</span>
            </h3>
            <h3>Email
                <span style="padding-left:103px">: {{Auth::user()->email}}</span>
            </h3>
            <h3>Address
                <span style="padding-left:75px">: {{Auth::user()->address}}</span>
            </h3>
            <h3>Contact
                <span style="padding-left:80px">: {{Auth::user()->contact}}</span>
            </h3>
            <h3>Role
                <span style="padding-left:113px">: {{Auth::user()->role_id}}</span>
            </h3>
            <div class="col-md-6">
                <a class="btn btn-block btn-lg btn-primary">Edit</a>
            </div>
            <div class="col-md-6">
                <a class="btn btn-block btn-lg btn-danger">Delete</a>
            </div>
        </div>
    </div>
@endsection

