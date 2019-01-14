@extends('layouts.app')
@include('inc.navbar')
@section('title', 'Semester')
@section('content')
<div class="container">
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-12">
            <a href="/home" class="btn btn-dark float-left"><h3>Back</h3></a>
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-6">
            <div class="card border-info mb-3 mx-auto" style="max-width: 18rem;">
                <div class="card-header">Input Percentage for</div>
                <div class="card-body text-info">
                    <p class="card-text h1">1st<br> Semester</p>
                </div>
                <a href="/percentage/1/add" class="btn btn-info"><h1>Add</h1></a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-success mb-3 mx-auto" style="max-width: 18rem;">
                <div class="card-header">Input Percentage for</div>
                <div class="card-body text-success">
                    <p class="card-text h1">2nd<br> Semester</p>
                </div>
                <a href="/percentage/2/add" class="btn btn-success"><h1>Add</h1></a>
            </div>
        </div>
    </div>
</div>
@endsection
