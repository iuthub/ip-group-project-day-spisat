@extends('layouts.master')

@section('content')
<div class="container-fluid pt-3">
	<div class="row  styleblog ">
		<div class="col-12 text-center styleh1">>{{ $post->title }} </div>
		<p>{{ $post->content }}</p>

            <div class="container mt-0"style="text-align:center">
                <a href="{{ route('jobJobs', ['id'=> $post->id]) }}">Back </a>
            </div>
        </div>
    </div>

@endsection