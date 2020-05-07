@extends('layouts.admin_layout')

@section('content')

@include('eror_info.error_info')

<div class="container mt-3">
    <h1 class="text-center editing">Editing Post</h1>
</div>
<div class="container mt-5">
    <div class="container borderElement">

        <label for="formGroupExampleInput">Title</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name='title' form="postForm">


        <label for="exampleFormControlTextarea1">Body</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='body' form='postForm'></textarea>
        <p class="float-left mt-0 mr-2">Tags</p>
        <div class="form-check form-check-inline ml-2">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">IT sphere</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Medicine sphere</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
            <label class="form-check-label" for="inlineRadio3">Education sphere</label>
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
