@extends('layouts.app')
@section('title', 'Feedback')
@section('styles')
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <style>
        .over{
            font-size: 120px;
        }
    </style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center" style="margin-top: 100px;">
        <div class="col-lg-10 text-center">
            <p class="h1">Please indicate your level of satisfaction with the service at CHED Regional Office IX.</p>
            <p class="h6">Click on the emoji that corresponds your feedback.</p>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 50px;">
        <div class="col-lg-2 text-center">
            <form action="/feedback/submit">
                <a href=""><i class="em em-smile over"></i></a>
                <p class="h4 text-success">Very Satisfied</p>
            </form>
        </div>
        <div class="col-lg-2 text-center">
            <i class="em em-slightly_smiling_face over"></i>
            <p class="h4" style="color: limegreen;">Satisfied</p>
        </div>
        <div class="col-lg-2 text-center">
            <i class="em em-neutral_face over"></i>
            <p class="h4" style="color: yellow;">Neutral</p>
        </div>
        <div class="col-lg-2 text-center">
            <i class="em em-anguished over"></i>
            <p class="h4" style="color: orange;">Disatisfied</p>
        </div>
        <div class="col-lg-2 text-center">
            <i class="em em-angry over"></i>
            <p class="h4 text-danger">Very Disatisfied</p>
        </div>
    </div>
</div>
@endsection

{{-- $('form .submit-link').on({
    click: function (event) {
        event.preventDefault();
        $(this).closest('form').submit();
    }
});

<form action="script.php" method="post">
    <input type="text" name="textField" />
    <input type="hidden" name="hiddenField" value="foo" />
    <a href="#" class="submit-link">Submit</a>
</form> --}}