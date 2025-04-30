@extends('layout')

@section('content')
<div class="booking-container">
    <h2 class="section-heading">Book a Tour</h2>

    <form method="POST" action="/book" class="booking-form">
        @csrf
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>

        <label for="package">Select Package</label>
        <select id="package" name="package" required>
            <option value="">-- Choose a Destination --</option>
            <option>Goa</option>
            <option>Manali</option>
            <option>Kerala</option>
            <option>Himachal</option>
            <option>Nainital</option>
            <option>Kashmir</option>
        </select>

        <label for="date">Travel Date</label>
        <input type="date" id="date" name="date" required>

        <button type="submit" class="btn">Book Now</button>
    </form>
</div>
@endsection