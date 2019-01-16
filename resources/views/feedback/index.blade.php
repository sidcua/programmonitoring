@extends('layouts.app')
@section('title', 'Feedback')
@section('styles')
    <link rel='stylesheet' href='https://unpkg.com/emoji.css/dist/emoji.min.css'>
@endsection
@section('content')
    <div class="container-fluid" id="feedback-container"></div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            $("#feedback-container").load('/feedback/office');
        })
        function office(office){
            $("#office").val(office);
            selectOffice();
        }
        $("#submit-feedback-button").on('click', function(){
            submitRate();
        })
    </script>
@endsection