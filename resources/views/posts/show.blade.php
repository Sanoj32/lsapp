@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-default">Go back</a>

    <div class="card py-4 pl-4" style="background-color: navajowhite">

        <div class="card-title d-flex justify-content-between">
            <h3>{{$post->title}}</h3>
            <small>Written on {{$post->created_at}}</small>
        </div>

        <div class="card-body">
            <h3>{{$post->body}}</h3>
        </div>
    </div>
@endsection
