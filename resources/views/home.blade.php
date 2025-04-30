@extends('layout')

@section('content')
<!-- Main Heading -->
<h1 class="main-heading">Welcome to Tour Operator Platform</h1>
<p class="intro-text">We offer the best tour packages, customized travel plans, and top-rated guides to make your trip unforgettable.</p>

<!-- Explore Our Services Section -->
<h3 class="section-title">Explore our services:</h3>

<div class="services">
     <!-- Tour Packages Section -->
       <div class="service-box bg-tour">
        <div class="overlay">
        
            <a href="/packages" class="btn">View Packages</a>
        </div>
    </div>
     <!-- Book a Tour Section -->
       <div class="service-box bg-book">
        <div class="overlay">
             <a href="/book" class="btn">Book Now</a>
            </div>
        </div>

        <!-- Assign a Guide Section -->
         <div class="service-box bg-guide">
             <div class="overlay">
                  <a href="/assign-guide" class="btn">Assign Guide</a>
                </div>
             </div>

             <!-- Custom Tour Section -->
              <div class="service-box bg-custom">
                <div class="overlay">
                     <a href="/custom-tour" class="btn">Plan Custom Tour</a>
                     </div>
                    </div>

                    <!-- Feedback Section -->
                     <div class="service-box bg-feedback">
                        <div class="overlay">
                             <a href="/feedback" class="btn">Give Feedback</a>
                            </div>
                         </div>
</div>
@endsection
