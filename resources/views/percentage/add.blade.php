@extends('layouts.app')
@include('inc.navbar')
@section('title', 'Add Percentage')
@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            @if($semester == 1)
                1st Semester
            @else
                2nd Semester
            @endif
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"><h1>HEI</h1></label>
                        <select class="form-control form-control-lg">
                            <option>Sample HEI</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"><h1>Program</h1></label>
                        <select class="form-control form-control-lg">
                            <option>Sample Program</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"><h1>Percentage</h1></label>
                        <input class="form-control form-control-lg" type="number" placeholder="%">
                    </div>
                    <button type="submit" class="btn btn-primary float-right"><h3>Submit</h3></button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
