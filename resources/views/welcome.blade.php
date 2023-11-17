@extends('layouts.master_blank', ['title' => 'welcome'])

@section('css')
<link rel="stylesheet" href="css/home.css">
@endsection

@section('content')
<div>
    <div class="content">
        <div class="clockStyle" id="clock">1</div>
    </div>

    <div class="links">
        <a href="/login">Login</a>
    </div>
</div>
@endsection

@section('script')
<script src="js/home.js"></script>
@endsection