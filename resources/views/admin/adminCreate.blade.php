@extends('layouts.admin_layout')

@section('content')


@include('partial.error_block')


<div class="container mt-3">
    <h1 class="text-center editing">Creating a new vacancy</h1>
</div>
<div class="container mt-5">
    <div class="container borderElement">

        <label for="formGroupExampleInput">Title</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name='title' form="postForm"/>


        <label for="exampleFormControlTextarea1">Body</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='body' form='postForm'></textarea>

        <div class="checkbox mt-2">
            <p class="float-left mt-0 mr-2">Tags</p>&nbsp;&nbsp;&nbsp;
            @foreach($tags as $tag)
          {{ $tag->name }}  <label><input type="checkbox"name="tags[]" form="postForm"
            value="{{ $tag->id}}" }}>&nbsp;&nbsp;&nbsp;</label>
            @endforeach
          </div>

    </div>
</div>
<div class="container mt-3">

    <form id="postForm" action="{{ route('adminCreatePost') }}" method="post">
        @csrf

        <input type="submit" value="Submit">
    </form>

</div>

</div>



@endsection
