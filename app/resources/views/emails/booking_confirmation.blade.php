<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Confirmation</title>
</head>
<body>
    <h1>Confirmed with Success!</h1>
    <h3>Booked Products:</h3>
    <ul>
        @foreach($bookings as $booking)
        <li> You Booked {{ $booking->name }} For {{ $booking->period }} </li>
        @php
                $code = $booking->code;
                @endphp
        @endforeach
        <h3>Your code to unlock your bike is:</h3>
        <p><strong>{{ $code }}</strong></p>
    </ul>
    
    <h3>Additional Information:</h3>
    <p>Thank you for booking our bike rental service. Here are a few important details:</p>
    <ul>
        <li>Please arrive at the rental location 15 minutes before your booked time slot.</li>
        <li>Bring a valid ID and the credit card used for the booking for verification purposes.</li>
        <li>Ensure that you are wearing appropriate safety gear, including a helmet.</li>
        <li>Familiarize yourself with the local traffic laws and adhere to them while riding.</li>
        <li>If you have any questions or need assistance, don't hesitate to contact our support team.</li>
    </ul>
</body>
</html>
