@extends('layouts.admin_layout')
@section('content')
@include('eror_info.eror_info')
<a href="{{ route ('adminCreate')}}" class="butt">New Post</a>

		<div class="container-fluid mt-5">
			<h2 class="blazingJob" >Blazing jobs</h2>
		</div>

 @foreach($posts as $post)
        <div class="container-fluid pt-3">
            <div class="row  styleblog ">
                <div class="col-12 text-center styleh1">>{{ $post->title }} </div>
                <p>{{ $post->body }}</p>
                    <div class="container mt-0"style="text-align:center">
                        <a href="{{ route('adminEdit', ['id'=> $post->id ]) }}">Edit</a> |
                        <a href="{{ route('adminDelete', ['id'=>  $post->id ]) }}">Delete</a>
                    </div>
                </div>
            </div>
@endforeach
@endsection
