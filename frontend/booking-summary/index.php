<?php $comp =  './../components/'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Summary - EviHomes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">

    <?php include_once $comp . 'header.php'; ?>

    <div class="container mx-auto px-4 lg:px-8 py-8">

        <!-- Back to Apartment Button -->
        <div class="mb-6">
            <a href="./../apartment/" class="text-blue-500 hover:text-blue-700 font-semibold flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Back to Apartment Listings
            </a>
        </div>
        
        <!-- Booking Summary -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <!-- Apartment Info -->
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-blue-black">Booking Summary</h1>
                <p class="text-gray-600 mt-2">Review your booking details before proceeding to payment.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Left Section: Apartment Details -->
                <div>
                    <h2 class="text-xl font-bold text-blue-black mb-4">Apartment Details</h2>
                    <div class="flex items-center space-x-4">
                        <img src="https://via.placeholder.com/200x150" alt="Apartment" class="w-48 h-36 rounded-lg object-cover">
                        <div>
                            <h3 class="text-lg font-bold">The Grand Lux Apartment</h3>
                            <p class="text-gray-600">Located in Beverly Hills, Los Angeles, CA</p>
                            <p class="text-gray-600 mt-2">Price per night: <span class="font-bold text-blue-black">$250</span></p>
                        </div>
                    </div>
                </div>

                <!-- Right Section: Booking Details -->
                <div>
                    <h2 class="text-xl font-bold text-blue-black mb-4">Your Booking Details</h2>
                    <ul class="space-y-3">
                        <li class="flex justify-between">
                            <span class="text-gray-600">Check-in:</span>
                            <span class="font-bold">2024-12-20</span>
                        </li>
                        <li class="flex justify-between">
                            <span class="text-gray-600">Check-out:</span>
                            <span class="font-bold">2024-12-23</span>
                        </li>
                        <li class="flex justify-between">
                            <span class="text-gray-600">Guests:</span>
                            <span class="font-bold">2 Guests</span>
                        </li>
                        <li class="flex justify-between">
                            <span class="text-gray-600">Total Nights:</span>
                            <span class="font-bold">3</span>
                        </li>
                        <li class="flex justify-between">
                            <span class="text-gray-600">Total Cost:</span>
                            <span class="font-bold text-blue-black">$750</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- User Information Form -->
            <div class="mt-8">
                <h2 class="text-xl font-bold text-blue-black mb-4">Your Information</h2>
                <form id="userInfoForm" action="/api/bookings" method="POST" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-gray-700">Full Name</label>
                            <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-lg p-2" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700">Email Address</label>
                            <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg p-2" required>
                        </div>
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700">Phone Number</label>
                        <input type="text" id="phone" name="phone" class="w-full border border-gray-300 rounded-lg p-2" required>
                    </div>
                    <div>
                        <label for="specialRequests" class="block text-gray-700">Special Requests (Optional)</label>
                        <textarea id="specialRequests" name="specialRequests" class="w-full border border-gray-300 rounded-lg p-2"></textarea>
                    </div>

                    <!-- Payment Section -->
                    <div class="mt-6">
                        <h2 class="text-xl font-bold text-blue-black mb-4">Payment</h2>
                        <p class="text-gray-600 mb-4">Select a payment method to complete your booking:</p>

                        <div class="space-y-2">
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="paymentMethod" value="paystack" class="w-4 h-4" required>
                                <span>Pay with Paystack</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="paymentMethod" value="paypal" class="w-4 h-4" required>
                                <span>Pay with PayPal</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="paymentMethod" value="credit_card" class="w-4 h-4" required>
                                <span>Pay with Credit Card</span>
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="mt-6 w-full bg-yellow-500 text-white py-2 rounded-lg hover:bg-yellow-600 transition">Proceed to Payment</button>
                </form>
            </div>
        </div>
    </div>
    <?php include_once $comp . 'footer.php'; ?>
</body>

</html>