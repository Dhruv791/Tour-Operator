@extends('layout')

@section('content')
<div class="dashboard-container">
    <h2 class="dashboard-title">Admin Dashboard - Submitted Data</h2>

    <!-- Bookings Section -->
    <div class="data-section">
        <h3>Bookings</h3>
        @if(session('bookings'))
            <div class="data-cards">
                @foreach(session('bookings') as $booking)
                    <div class="card">
                        <strong>{{ $booking['name'] }}</strong><br>
                        Booked <em>{{ $booking['package'] }}</em><br>
                        On: {{ $booking['date'] }}
                    </div>
                @endforeach
            </div>
        @else
            <p>No bookings yet.</p>
        @endif
    </div>

    <!-- Assigned Guides Section -->
    <div class="data-section">
        <h3>Assigned Guides</h3>
        @if(session('assignments'))
            <div class="data-cards">
                @foreach(session('assignments') as $a)
                    <div class="card">
                        <strong>{{ $a['guide'] }}</strong><br>
                        Assigned to <em>{{ $a['tour'] }}</em><br>
                        On: {{ $a['assign_date'] }}
                    </div>
                @endforeach
            </div>
        @else
            <p>No guides assigned.</p>
        @endif
    </div>

    <!-- Custom Tours Section -->
    <div class="data-section">
        <h3>Custom Tours</h3>
        @if(session('custom_tours'))
            <div class="data-cards">
                @foreach(session('custom_tours') as $t)
                    <div class="card">
                        <strong>{{ $t['name'] }}</strong><br>
                        Requested: <em>{{ $t['destination'] }}</em><br>
                    </div>
                @endforeach
            </div>
        @else
            <p>No custom tours planned yet.</p>
        @endif
    </div>

    <!-- Feedback Section -->
    <div class="data-section">
        <h3>Feedbacks</h3>
        @if(session('feedbacks'))
            <div class="data-cards">
                @foreach(session('feedbacks') as $f)
                    <div class="card">
                        <strong>{{ $f['name'] }}</strong><br>
                        <q>{{ $f['message'] }}</q>
                    </div>
                @endforeach
            </div>
        @else
            <p>No feedback submitted yet.</p>
        @endif
    </div>
</div>
@foreach(session('bookings') as $index => $booking)
    <li>
        {{ $booking['name'] }} booked a tour to {{ $booking['package'] }} on {{ $booking['date'] }}
        <form action="{{ url('/admin/delete-booking/'.$index) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
@endforeach
@if(session('assignments'))
    @foreach(session('assignments') as $index => $a)
        <li>
            {{ $a['guide'] }} assigned to {{ $a['tour'] }} on {{ $a['assign_date'] }}
            <form action="{{ url('/admin/delete-assignment/'.$index) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
@else
    <li>No assignments yet.</li>
@endif
@if(session('custom_tours'))
    @foreach(session('custom_tours') as $index => $t)
        <li>
            {{ $t['name'] }} requested custom tour to {{ $t['destination'] }}
            <form action="{{ url('/admin/delete-custom-tour/'.$index) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
@else
    <li>No custom tours yet.</li>
@endif

@if(session('feedbacks'))
    @foreach(session('feedbacks') as $index => $f)
        <li>
            {{ $f['name'] }} says: "{{ $f['message'] }}"
            <form action="{{ url('/admin/delete-feedback/'.$index) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
@else
    <li>No feedback submitted yet.</li>
@endif
@endsection