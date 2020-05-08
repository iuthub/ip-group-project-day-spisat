@extends('layouts.master')
@section('content')
<div>
	@include('extra.carousel')
</div>
<div class="container-fluid mt-4">
    <h2 class="blazingJobs">Blazing jobs</h2>

    @foreach($posts as $post)
</div>
<br>


    <div class="container-fluid pt-3">
        <div class="row  styleblog ">
            <div class="col-12 text-center styleh1">{{ $post->title }} </div>
            <div class="col-12 text-center styleh5">
                @foreach($post->tags as $tag)
                    {{ $tag->name }}&nbsp;
                @endforeach
            </div>
            <div class="col-12 text-center">{{ $post->body }} <br>

                <a href="{{ route('jobPost', ['id'=> $post->id]) }}">More </a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
