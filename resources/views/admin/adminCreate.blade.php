@extends('layouts.admin_layout')

@section('content')
<style>
    body {
        background-color: azure;
    }

    .borderElement {
        background-color: azure;
        border: 6px solid MediumTurquoise;
        border-radius: 10px;
        width: 70%;
    }

    input[type=button],
    input[type=submit],
    input[type=reset] {
        background-color: Gainsboro;
        border: 3px solid skyblue;
        color: black;
        padding: 16px 32px;
        text-decoration: none;
        cursor: pointer;
        margin-left: 60%;
        position: absolute;
    }

    .editing {
        font-size: 45px;
        font-weight: 400;
        font-style: italic;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
</style>
<div class="container mt-3">
    <h1 class="text-center editing">Editing Post</h1>
</div>
<div class="container mt-5">
    <div class="container borderElement">

        <label for="formGroupExampleInput">Title</label>
        <input type="text" class="form-control" id="formGroupExampleInput">


        <label for="exampleFormControlTextarea1">Body</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>


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

    <form id="postForm" action="" method="">


        <input type="submit" value="Submit">
    </form>

</div>

</div>



@endsection
