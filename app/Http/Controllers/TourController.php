<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function packages()
    {
        return view('packages');
    }

    public function book()
    {
        return view('book');
    }

    public function storeBooking(Request $request)
    {
        $data = [
            'name' => $request->name,
            'package' => $request->package,
            'date' => $request->date
        ];
        $bookings = session('bookings', []);
        $bookings[] = $data;
        session(['bookings' => $bookings]);

        return redirect('/book')->with('message', 'Booking successful!');
    }

    public function assignGuide()
    {
        return view('assign_guide');
    }

    public function storeGuide(Request $request)
    {
        $data = [
            'guide' => $request->guide,
            'tour' => $request->tour,
            'assign_date' => $request->assign_date
        ];
        $assignments = session('assignments', []);
        $assignments[] = $data;
        session(['assignments' => $assignments]);

        return redirect('/assign-guide')->with('message', 'Guide assigned!');
    }

    public function customTour()
    {
        return view('custom_tour');
    }

    public function storeCustomTour(Request $request)
    {
        $data = [
            'name' => $request->name,
            'destination' => $request->destination,
            'preferences' => $request->preferences
        ];
        $customTours = session('custom_tours', []);
        $customTours[] = $data;
        session(['custom_tours' => $customTours]);

        return redirect('/custom-tour')->with('message', 'Custom tour planned!');
    }

    public function feedback()
    {
        return view('feedback');
    }

    public function storeFeedback(Request $request)
    {
        $data = [
            'name' => $request->name,
            'message' => $request->message
        ];
        $feedbacks = session('feedbacks', []);
        $feedbacks[] = $data;
        session(['feedbacks' => $feedbacks]);

        return redirect('/feedback')->with('message', 'Thank you for your feedback!');
    }

    public function adminDashboard()
    {
        $bookings = session('bookings', []);
        $assignments = session('assignments', []);
        $customTours = session('custom_tours', []);
        $feedbacks = session('feedbacks', []);

        return view('admin_dashboard', compact('bookings', 'assignments', 'customTours', 'feedbacks'));
    }

    public function deleteBooking($id) {
        $bookings = session('bookings', []);
        unset($bookings[$id]);
        session(['bookings' => array_values($bookings)]);
        return redirect('/admin-dashboard');
    }
    
    public function deleteAssignment($id) {
        $assignments = session('assignments', []);
        unset($assignments[$id]);
        session(['assignments' => array_values($assignments)]);
        return redirect('/admin-dashboard');
    }
    
    public function deleteCustomTour($id) {
        $custom = session('custom_tours', []);
        unset($custom[$id]);
        session(['custom_tours' => array_values($custom)]);
        return redirect('/admin-dashboard');
    }
    
    public function deleteFeedback($id) {
        $feedbacks = session('feedbacks', []);
        unset($feedbacks[$id]);
        session(['feedbacks' => array_values($feedbacks)]);
        return redirect('/admin-dashboard');
    }

}
