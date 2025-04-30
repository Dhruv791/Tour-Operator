@extends('layout')

@section('content')


<div class="packages-container">
    <h2 class="section-heading">Available Tour Packages</h2>

    <div class="package-cards">
        @php
            $packages = [
                ['destination' => 'Goa', 'duration' => '3 Days', 'price' => '₹5000', 'image' => 'goa.jpg'],
                ['destination' => 'Manali', 'duration' => '5 Days', 'price' => '₹8000', 'image' => 'manali.jpg'],
                ['destination' => 'Kerala', 'duration' => '4 Days', 'price' => '₹7000', 'image' => 'kerala.jpg'],
                ['destination' => 'Himachal', 'duration' => '6 Days', 'price' => '₹8000', 'image' => 'himachal.jpg'],
                ['destination' => 'Nainital', 'duration' => '6 Days', 'price' => '₹7000', 'image' => 'nainital.jpg'],
                ['destination' => 'Kashmir', 'duration' => '4 Days', 'price' => '₹7000', 'image' => 'kashmir.jpg'],
            ];
        @endphp

        @foreach ($packages as $package)
        <div class="package-card">
            <img src="{{ asset('images/' . $package['image']) }}" alt="{{ $package['destination'] }}">
            <div class="card-content">
                <h3>{{ $package['destination'] }}</h3>
                <p><strong>Duration:</strong> {{ $package['duration'] }}</p>
                <p><strong>Price:</strong> {{ $package['price'] }}</p>
                <a href="/book" class="btn">Book Now</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection