<!--
Onur Akman
CST-323
01/10/2021
This is my own work
-->
@extends('layouts.app')
@section('content')
<!-- SHARE CONTENT -->
<div class="form">
    <h1 class="h1">Tell Your Joke</h1>
    <form method="POST" action="{{route('result')}}">
        @csrf
        <label for="title">Title:</label>
        <input name="title" type="text" autocomplete="off" class="form-control" placeholder="Name of your joke..."><br>
        <label for="content">Content:</label>
        <textarea class="form-control" placeholder="Enter your joke..." autocomplete="off" name="content" cols="30" rows="10"></textarea><br>
        <label for="title">Author:</label>
        <input class="form-control" autocomplete="off" name="author" type="text" placeholder="Who are you..."><br>
        <button type="submit" class="btn btn-outline-dark">Share</button>
    </form>
</div>
@endsection
