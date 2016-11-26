
@extends('layout')

@section('content')

    <h1>.</h1>

    <h1>Selling your home!</h1>

    <div class="row">
        <form action="/flyers" method="POST" enctype="multipart/form-data" class="col-md-6">

            @include('flyers._form')

        </form>
    </div>

@endsection