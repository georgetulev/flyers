
@extends('layout')

@section('content')

    <h1>.</h1>

    <h1>Selling your home!</h1>

    <hr>

    <form action="/flyers" method="POST" enctype="multipart/form-data">

        @include('flyers._form')

    </form>


@endsection