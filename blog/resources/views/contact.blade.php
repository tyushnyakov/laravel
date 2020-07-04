@extends('layouts.app')

@section('title-block') Contact @endsection

@section('content')
    <h1>Contact</h1>

    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" name="email" placeholder="E-mail" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="Subject" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection


