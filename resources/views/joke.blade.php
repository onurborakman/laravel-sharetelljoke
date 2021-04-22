<!--
Onur Akman
CST-323
01/10/2021
This is my own work
-->
@extends('layouts.app')
@section('content')
<!-- JOKE CONTENT -->
<div class="joke">
            <h2 id="title" class="h2">{{$joke->title}}</h2>
            <p class="lead" id="content">{{$joke->content}}</p>
            <div class="footer">

                <p id="author">--By {{$joke->author}}</p>
                <p id="time">Posted {{$joke->created_at->diffForHumans()}}</p>
            </div>
</div>
@endsection
