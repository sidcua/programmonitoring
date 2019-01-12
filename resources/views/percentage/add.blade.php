@extends('layouts.app')
@include('inc.navbar')
@section('title', 'Add Percentage')
@section('content')
<div class="container">
    <div class="container">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-4 justify-content-center">
                <div class="card @if($semester == 1) border-info @else border-success @endif mb-3" style="max-width: 18rem;">
                    <div class="card-header"></div>
                    <div class="card-body @if($semester == 1) text-info @else text-success @endif">
                        <h5 class="card-title">Percentage for</h5>
                        <p class="card-text h1">
                            @if($semester == 1)
                                1st Semester
                            @else
                                2nd Semester
                            @endif
                        </p>
                    </div>
                </div>
                <a href="/choice" class="btn btn-dark float-left"><h3>Back</h3></a>
            </div>
            <div class="col-md-8 justify-content-center">
                @include('inc.messages')
                <form method="POST" action="/percentage/{{$semester}}/add/submit">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1"><h1>HEI</h1></label>
                        <select name="hei" class="form-control form-control-lg">
                            @for($x=1; $x<=10; $x++)
                                <option>HEI {{ $x }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"><h1>Program</h1></label>
                        <select name="program" class="form-control form-control-lg">
                            @for($x=1; $x<=10; $x++)
                                <option>Program {{ $x }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"><h1>Percentage</h1></label>
                        <input name="percentage" class="form-control form-control-lg" type="number" placeholder="%">
                    </div>
                    <div class="form-group">
                        <input name="semester" class="form-control form-control-lg" type="hidden" value="{{$semester}}">
                    </div>
                    <button type="submit" class="btn @if($semester == 1) btn-info @else btn-success @endif float-right"><h3>Submit</h3></button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
