<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Join T-BIKE</title>
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}"> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        
        h1 {
            color: #333333;
            margin-top: 40px;
        }
        
        p {
            color: #666666;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .logo {
            margin-bottom: 20px;
        }
        
        .highlight {
            color: #ff6600;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank you for {{$user->name}} Joining T-BIKE!</h1>
        <p>We are excited to have you as part of our bike rental community.</p>
        
        <p>At T-BIKE, we provide high-quality bikes for you to explore your surroundings conveniently. Whether you want to ride through scenic trails, commute to work, or enjoy a leisurely ride in the city, our bikes are designed to meet your needs.</p>
        
        <p>As a member, you will enjoy various benefits, including:</p>
        
        <ul>
            <li>Access to a wide selection of well-maintained bikes</li>
            <li>Flexible rental options to fit your schedule</li>
            <li>Convenient pickup and drop-off locations</li>
            <li>Competitive pricing and discounts for regular riders</li>
        </ul>
        
        <p>To get started, simply visit our website, browse our bike inventory, and make a reservation. You'll be ready to embark on your biking adventures in no time!</p>
        
        <p>If you have any questions or need assistance, our customer support team is always here to help. Feel free to reach out to us via email at <a href="mailto:info@t-bike.com">info@t-bike.com</a> or give us a call at <span class="highlight">+212 67784-6064</span>.</p>
        
        <p>Thank you again for choosing T-BIKE. We look forward to serving you and providing you with an exceptional biking experience!</p>
        
        <p>Best regards,</p>
        <p>The T-BIKE Team</p>
    </div>
</body>
</html>
