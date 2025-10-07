@extends('layout/body')

@section('title','contact')
@section('content')
<div>
<div class="container mt-5">
    <h2 class="mb-4 text-center">Edit your data</h2>

    <form action="{{ url('update') }}" method="POST" class="mx-auto" style="max-width: 500px;" method="post">
        @csrf 

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{$item->name}}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{$item->email}}">
        </div>

        <div class="mb-3">
            <label for="branch" class="form-label">Branch</label>
            <input type="text" name="branch" class="form-control" id="branch" placeholder="Enter branch" value="{{$item->branch}}">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number" value="{{$item->phone}}">
        </div>

        <button type="submit" class="btn btn-primary w-100">Submit</button>
</div>
@endsection()