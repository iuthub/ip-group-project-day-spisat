@extends('layouts.admin_layout')
@section('content')

<div class="container-fluid pt-3">
    <div class="row">
        <div class="col-12 text-center">
            <h4 class="styleblog1"> @include('partial.info_block')</h4>

        </div>
        </div>
    </div>
<a href="{{ route('adminCreate') }}" class="butt">New Post</a>

		<div class="container-fluid mt-5">
			<h2 class="blazingJob" >Blazing jobs</h2>
		</div>

 @foreach($posts as $post)
        <div class="container-fluid pt-3">
            <div class="row  styleblog ">
                <div class="col-12 text-center styleh1">{{ $post->title }} </div>
                <div class="col-12 text-center styleh5">
                    @foreach($post->tags as $tag)
                        {{ $tag->name }}&nbsp;
                    @endforeach
                </div>
                <div class="col-12 text-center">{{ $post->body }} <br>

                        <a href="{{ route('adminEdit', ['id'=>  $post->id ]) }}">Edit</a>
                        <a href="{{ route('adminDelete', ['id'=>  $post->id ]) }}">Delete</a>
                    </div>
                </div>
            </div>
@endforeach
@endsection
