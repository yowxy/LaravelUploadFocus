<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\StoreCheckBookingRequest;
use App\Http\Requests\StorePaymentRequest;
use App\Models\BookingTransaction;
use App\Models\Ticket;
use App\Services\BookingService;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    protected $bookingService;

    public function __construct(BookingService $bookingService){
        $this->bookingService = $bookingService;
    }

    public function booking (Ticket $ticket)
    {
        // dd($ticket);
        return view('front.booking', compact('ticket'));
    }

    public function bookingStore(Ticket $ticket, StoreBookingRequest $request)
    {
        $validated = $request->validated(); // Corrected this line

        // dd($validated);

        $totals = $this->bookingService->calculateTotals($ticket->id, $validated['total_participant']);
        $this->bookingService->storeBookingInSession($ticket, $validated, $totals);

        // $booking = session('booking');
        // dd($booking);

        return redirect()->route('front.payment');
    }


    public function payment()
    {
        $data = $this->bookingService->payment();
        // dd($data);
        return view('front.payment', $data);
    }
    public function paymentStore(StorePaymentRequest $request)
    {
        // Retrieve validated data from the request
        $validated = $request->validated();

        // Call the paymentStore method in BookingService
        $bookingTransactionId = $this->bookingService->paymentStore($validated);

        // Redirect based on the outcome
        if ($bookingTransactionId) {
            return redirect()->route('front.booking_finished', $bookingTransactionId);
        }

        return redirect()->route('front.index')->withErrors(['errors' => 'Payment failed. Please try again.']);
    }


    public function bookingFinished(BookingTransaction $bookingTransaction){
        return view('front.booking_finished', compact('bookingTransaction'));
    }


    public function checkBooking (){
        return view ('front.check_booking');
    }
    public function checkBookingDetails(StoreCheckBookingRequest $request)
    {
        // Validate the incoming request data
        $validated = $request->validated();

        // Get booking details using the validated data
        $bookingDetails = $this->bookingService->getBookingDetails($validated);

        // Dump and die the $bookingDetails to see its contents
        // dd($bookingDetails);

        // The following code will not execute until you remove dd()
        if ($bookingDetails) {
            return view('front.check_booking_detail', compact('bookingDetails'));
        }

        return redirect()->route('front.check.booking')->withErrors(['error' => 'transaction not found']);
    }


}
