<?php $comp =  './../components/'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation - EviHomes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">
    
    <?php include_once $comp . 'header.php'; ?>


    <div class="container mx-auto px-4 lg:px-8 py-8">
        <!-- Confirmation Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-green-600">Booking Confirmed!</h1>
            <p class="text-gray-600 mt-2">Thank you for booking with EviHomes! Your reservation has been confirmed.</p>
        </div>

        <!-- Booking Details -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class="text-xl font-bold text-blue-black mb-4">Booking Details</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p><span class="font-bold">Apartment Name:</span> The Grand Lux Apartment</p>
                    <p><span class="font-bold">Location:</span> Beverly Hills, Los Angeles, CA</p>
                    <p><span class="font-bold">Booking Reference:</span> <span id="bookingRef">#EVH123456</span></p>
                </div>
                <div>
                    <p><span class="font-bold">Check-in:</span> <span id="checkIn">2024-12-20</span></p>
                    <p><span class="font-bold">Check-out:</span> <span id="checkOut">2024-12-25</span></p>
                    <p><span class="font-bold">Guests:</span> <span id="guests">2</span></p>
                </div>
            </div>
        </div>

        <!-- Payment Summary -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class="text-xl font-bold text-blue-black mb-4">Payment Summary</h2>
            <p><span class="font-bold">Total Paid:</span> <span id="totalPaid" class="text-green-600">$1,250</span></p>
        </div>

        <!-- Guest Information -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class="text-xl font-bold text-blue-black mb-4">Guest Information</h2>
            <p><span class="font-bold">Name:</span> <span id="guestName">John Doe</span></p>
            <p><span class="font-bold">Email:</span> <span id="guestEmail">johndoe@example.com</span></p>
            <p><span class="font-bold">Phone:</span> <span id="guestPhone">+1 234 567 890</span></p>
        </div>

        <!-- Additional Information -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class="text-xl font-bold text-blue-black mb-4">Additional Information</h2>
            <p>Your host will contact you within 24 hours to provide check-in instructions. If you have any questions, feel free to reach out to our <a href="#" class="text-blue-500">Support Team</a>.</p>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-center space-x-4">
            <a href="#" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition">Download Receipt</a>
            <a href="dashboard.html" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">Go to Dashboard</a>
        </div>
    </div>


    <?php include_once $comp . 'footer.php'; ?>

</body>

</html>