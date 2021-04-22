<!--
Onur Akman
CST-323
01/10/2021
This is my own work
-->
@extends('layouts.app')
@section('content')
<!-- SHARE RESULT -->
@if($result == 1)
    <h1 class="h1 result">CONGRATULATIONS. <br>You have posted your joke!!</h1>
@else
    <h1 class="h1 result">Your joke could not be posted. <br>Please try again.</h1>
@endif

@endsection
