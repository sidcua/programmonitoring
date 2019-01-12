@extends('layouts.app')
@include('inc.navbar')
@section('title', 'Success')
@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 100px;">
        <div class="col-md-8">
            <p class="h1 text-center">Input was successfully saved.</p><br>
            {{-- <div class=""> --}}
                <p class="h6 text-center">If you wish to add again, please click the button "Again"</p>
                <p class="h6 text-center">If done, click the button "Home"</p>
            {{-- </div> --}}
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 60px;">
        <div class="col-md-5">
            <a href="/home" class="btn btn-dark flot-left"><h1>Home</h1></a>
            <a href="/percentage/{{$semester}}/add" class="btn @if($semester == 1) btn-info @else btn-success @endif float-right"><h1>Again</h1></a>
        </div>
    </div>
</div>
@endsection