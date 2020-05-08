@extends('layouts.master')

@section('content')
    <div class="container-fluid pt-3">
        <div class="row  styleblog ">
            <div class="col-12 text-center styleh1">{{ $post->title }} </div>
            <div class="col-12 text-center">{{ $post->body }} <br>
                <a href="{{ route('jobJobs') }}">Back </a>
                </div>
            </div>

@endsection
