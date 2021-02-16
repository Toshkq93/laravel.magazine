@extends('fronts.layout.layout')
@section('content')
    <div class="account-create-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="page-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active"><a href="#">Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="area-title">
                        <h3 class="title-group gfont-1">Login</h3>
                    </div>
                </div>
            </div>
<div class="account-create">
    <form action="{{ route('signin') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="account-create-box">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <div class="single-create">
                                <p>Email Address <sup>*</sup></p>
                                <input class="form-control" type="email" name="email"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-create">
                                <p>Password <sup>*</sup></p>
                                <input class="form-control" type="password" name="password"/>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <p class="for-newsletter"><input type="checkbox" name="remember_me" /> Remember me</p>
                        </div>
                    </div>
                </div>
                <div class="submit-area">
                    <p class="required text-right">* Required Fields</p>
                    <button type="submit" class="btn btn-primary floatright">submit</button>
                    <a href="{{ route('home') }}" class="float-left"><span><i class="fa fa-angle-double-left"></i></span> Back</a>
                </div>
            </div>
        </div>
    </form>
</div>
        </div>
    </div>
@endsection
