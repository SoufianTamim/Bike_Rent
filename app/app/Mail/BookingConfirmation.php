<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookingConfirmation extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $booking;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\Booking  $booking
     * @return void
     */
    public function __construct($booking) 
    {
        $this->booking = $booking;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $user = Auth::user();
        $code = $request->query('code');
        $user_id = $user->user_id;
        
        $bookings = Booking::where('code', $code)
            ->where('user_id', $user_id)
            ->join('products', 'bookings.product_id', '=', 'products.product_id')
            ->select('bookings.*', 'products.name', 'products.price')
            ->get();

        return $this->subject('T-BIKE Confirmation')
                    ->view('emails.booking_confirmation')->with('bookings',$bookings);
    }
}
