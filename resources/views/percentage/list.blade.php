@extends('layouts.app')
@include('inc.navbar')
@section('title', 'List')
@section('content')
<div class="container">
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-12">
            <a href="/home" class="btn btn-dark float-left"><h5>Back</h5></a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            @include('inc.messages')
            {{$percentage->links()}}
        @foreach ($percentage as $per)
            <div class="card bg-light" style="margin: 5px 0 5px 0;">
                <div class="card-body">
                    <h5 class="card-title">{{$per['hei']}}</h5>
                    <p class="card-text">{{$per['program']}}</p>
                    @if($per['semester'] == 1)
                        <p class="card-text text-info">1st Semester</p>
                    @else
                        <p class="card-text text-success">2nd Semester</p>
                    @endif
                    <a href="" class="btn btn-primary">Edit Input</a>
                    <button class="btn btn-danger" data-id="{{$per['percentageID']}}" data-toggle="modal" data-target="#deletePercentageModal">Delete Input</button>
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
<div class="modal fade" id="deletePercentageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Percentage</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="/list/delete">
                {{csrf_field()}}
                {{method_field('delete')}}
                <div class="modal-body">
                    <p class="h5">Are you sure you want to delete this record?</p>
                    <input type="hidden" name="percentage" id="percentage" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        $('#deletePercentageModal').on('show.bs.modal', function (event){
            var id = $(event.relatedTarget).data('id');
            $("#percentage").val(id);
        })
    </script>
@endsection