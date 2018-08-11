@extends('layouts.master')

@section('title')

Welcome!
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up!</h3>
            <form action="{{ route('signup') }}" method="POST">
                <div class="form-group">
                    <label for"email"> E-Mail</label>
                    <input class="form-control"type="text" name="email" id="email">

                </div>

                <div class="form-group">
                    <label for"name"> Name</label>
                    <input class="form-control"type="text" name="name" id="name">
                    
                </div>

                <div class="form-group">
                    <label for"password">Password</label>
                    <input class="form-control"type="password" name="password" id="password">
                    
                </div>

                <button type="submit" class="btn btn-primary">Sign Up</button>

                    <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
            
        </div>
        <div class="col-md-6">
            <h3>Sign in!</h3>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for"email"> E-Mail</label>
                    <input class="form-control"type="text" name="email" id="email">

                </div>

                <div class="form-group">
                    <label for"password">Password</label>
                    <input class="form-control"type="password" name="password" id="password">
                    
                </div>

                <button type="submit" class="btn btn-primary">Login</button>



            </form>
            
        </div>
    </div>
    
@endsection