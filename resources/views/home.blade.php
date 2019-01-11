@extends('layouts.app')
@include('inc.navbar')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 20px;">
                <div class="card-header bg-primary text-white">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="/choice" class="btn btn-primary"><h1>Add Percentage</h1></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 20px;">
                <div class="card-header bg-warning">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-warning"><h1>Edit Inputs</h1></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
