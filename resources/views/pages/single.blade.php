@extends('layout.master');

@section('title')
        single
@endsection

@section('content')
<div class="container">
     
     <div class="row">
     
       <div class="col-md-12">
             <h1>{{$post->title}}</h1>
             <p>{{$post->description}}</p>
             
        </div>
     </div>
<br>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
@endsection