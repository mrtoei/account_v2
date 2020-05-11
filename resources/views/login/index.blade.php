@extends('layout')
@section('title')
   Accounting
@endsection

@push('style')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endpush
@push('script')
    <script src="{{asset('js/login.js')}}"></script>
   
@endpush

@section('content') 
    <form id="login_form" method="POST">
        <div class="container div-login">
            <div class="row">
                <div class="col">
                    <!-- <h3>Account</h3> -->
                    <img class="login-image" src="{{asset('/images/login/accounting.png')}}"  alt="" srcset="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 div-error" id="div-error"></div>
            </div>
            <div class="row">
                <div class="col-md-12 div-btn-login" id="">
                    <button type="submit" id="btn-login" class="btn btn-primary btn-login">Login</button>
                </div>
            </div>
        </div>
    </form>
@endsection