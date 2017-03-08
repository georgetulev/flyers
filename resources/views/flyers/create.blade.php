@extends('layout')
@section('content')
    <h1>.</h1>
    <h1 style="margin-top: 1em">Selling your home?</h1>
    <hr>
        <form method="post" action="{{ url('/flyers') }}" enctype="multipart/form-data" class="">
            {{ csrf_field() }}
                @include('flyers._form')
            <div class="form-group">
                <button type="submit" class="btn btn-primary col-md-12">Create Flyer</button>
            </div>
        </form>
@endsection