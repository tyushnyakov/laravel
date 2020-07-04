@extends('layouts.app')

@section('title-block') Update message @endsection

@section('content')
    <h1>Update message</h1>

    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" name="email" value="{{$data->email}}" placeholder="E-mail" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" value="{{$data->subject}}" placeholder="Subject" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control">{{$data->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection


