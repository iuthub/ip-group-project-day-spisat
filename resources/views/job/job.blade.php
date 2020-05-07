@extends('layouts.master')
@section('content')
<div>
	@include('extra.carousel')
</div>
<div class="container-fluid mt-4">
	<h2 class="blazingJobs">Blazing jobs</h2>
</div>
<br>
@foreach($posts as $post)
<div class="container-fluid pt-3">
	<div class="row  styleblog ">
		<div class="col-12 text-center styleh1">>{{ $post->title }} </div>
		<p>{{ $post->content }}</p>

            <div class="container mt-0"style="text-align:center">
                <a href="{{ route('jobPost', ['id'=> $post->id]) }}">More </a>
            </div>
        </div>
    </div>
    @endforeach
@endsection
