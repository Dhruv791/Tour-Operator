@extends('layout')

@section('content')
<div class="feedback-container">
    <h2 class="section-heading">We Value Your Feedback</h2>

    <form method="POST" action="/feedback" class="feedback-form">
        @csrf

        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="feedback">Your Feedback</label>
        <textarea id="feedback" name="feedback" rows="5" placeholder="Share your thoughts with us..." required></textarea>

        <button type="submit" class="btn">Submit Feedback</button>
    </form>
</div>
@endsection