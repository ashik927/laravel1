@extends('layout.master');
@section('title')
        admin
@endsection
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<section class="application-form spad">

        <div class="container">
            <form action="{{route('admin.store')}}" method="POST">
            @csrf
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input type="text" placeholder="Title" name="title">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input type="textarea" placeholder="Description" name="description">
                    </div>
                    
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">SEND </button>
                    </div>
                </div>
            </form>
            <div class="row">
               <div class="col-md-12">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $key =>$post)
                    <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$post->title}}</td>
                    <td><form action="{{route('admin.delete')}}" method="POST">
                    @csrf
                        <input type="hidden" value="{{$post->id}}" name="id">
                        <input type="submit" value="Delete" name="delete" class="btn btn danger">
                    </form></td>
                    </tr>
                    
                @endforeach
                </tbody>
            </table>
                </div> 
            </div>
        </div>
    </section>
    <!-- Application Form Section End -->

    <!-- Pricing Section Begin -->
    
        
@endsection