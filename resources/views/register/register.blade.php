@extends('layouts.master')
<?php
$user = Auth::user();
        ?>
<header class="masthead d-flex">
    <div class="container text-center my-auto">
        <h1 class="mb-1">Hello {{$user->name}}</h1>
        <h3 class="mb-5">
            <em>How old are you?</em>
        </h3>
        <form action="{{ route('account.save') }}" method="post" enctype="multipart/form-data">
            <input type="text" name="age" class="form-control" value="{{ $user->age }}" id="age">
            <button type="submit" class="btn btn-primary btn-xl js-scroll-trigger">Submit</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
        </form>

    </div>
    <div class="overlay"></div>
</header>

<section class="content-section bg-light" id="about">
    <div class="container text-center my-auto">
        <h1 class="mb-1">Hello {{$user->name}}</h1>
        <h3 class="mb-5">
            <em>Where are you from?</em>
        </h3>
        <form action="{{ route('account.save') }}" method="post" enctype="multipart/form-data">
            <input type="text" name="location" class="form-control" value="{{ $user->location }}" id="location">
            <button type="submit" class="btn btn-primary btn-xl js-scroll-trigger">Submit</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
        </form>

    </div>
</section>