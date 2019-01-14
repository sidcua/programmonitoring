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
    <div class="row justify-content-center">
        <div class="col-md-10">
            {{$percentage->links()}}
        @foreach ($percentage as $per)
            <div class="card bg-light" style="margin: 2px 0 2px 0;">
                <div class="card-body">
                    <h5 class="card-title">{{$per['hei']}}</h5>
                    <p class="card-text">{{$per['program']}}</p>
                    @if($per['semester'] == 1)
                        <p class="card-text text-info">1st Semester</p>
                    @else
                        <p class="card-text text-success">2nd Semester</p>
                    @endif
                    <a href="" class="btn btn-primary">Edit Input</a>
                    <a href="/list/delete" class="btn btn-danger">Delete Input</a>
                    <form method="POST" action="/list/delete">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                    </form>
                </div>
                <div class="card-footer text-muted">
                    Added at: {{$per['created_at']}} Updated at: {{$per['updated_at']}}
                </div>
            </div>
        @endforeach
            {{$percentage->links()}}
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        
    </script>
@endsection