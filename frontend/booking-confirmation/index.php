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


    <div class="container mx-auto px-4 lg:px-8 py-8 max-w-4xl">
        <!-- Confirmation Header -->
        <div class="text-center mb-10">
            <div class="inline-block bg-green-100 rounded-full p-4 mb-4">
                <i class="ph-check text-green-600 text-4xl"></i>
            </div>
            <h1 class="text-4xl font-bold text-green-600 mb-3">Booking Confirmed!</h1>
            <p class="text-gray-600 text-lg">Your dream stay is all set. Get ready for an amazing experience.</p>
        </div>

        <!-- Booking Details Card -->
        <div class="bg-white shadow-xl rounded-2xl overflow-hidden mb-8">
            <div class="p-6 border-b border-gray-100">
                <h2 class="text-xl font-bold text-blue-900 flex items-center">
                    <i class="ph-house mr-3 text-blue-500"></i>
                    Booking Details
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
                <div>
                    <div class="mb-4">
                        <p class="text-gray-500 mb-1">Apartment Name</p>
                        <p class="font-semibold text-blue-900">The Grand Lux Apartment</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-500 mb-1">Location</p>
                        <p class="font-semibold text-blue-900">Beverly Hills, Los Angeles, CA</p>
                    </div>
                    <div>
                        <p class="text-gray-500 mb-1">Booking Reference</p>
                        <p class="font-semibold text-blue-900">#EVH123456</p>
                    </div>
                </div>
                <div>
                    <div class="mb-4">
                        <p class="text-gray-500 mb-1">Check-in</p>
                        <p class="font-semibold text-blue-900">December 20, 2024</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-500 mb-1">Check-out</p>
                        <p class="font-semibold text-blue-900">December 25, 2024</p>
                    </div>
                    <div>
                        <p class="text-gray-500 mb-1">Guests</p>
                        <p class="font-semibold text-blue-900">2 Guests</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment and Guest Information -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <!-- Payment Summary -->
            <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
                <div class="p-6 border-b border-gray-100">
                    <h2 class="text-xl font-bold text-blue-900 flex items-center">
                        <i class="ph-credit-card mr-3 text-green-500"></i>
                        Payment Summary
                    </h2>
                </div>
                <div class="p-6">
                    <p class="text-gray-500 mb-1">Total Paid</p>
                    <p class="text-3xl font-bold text-green-600">$1,250</p>
                </div>
            </div>

            <!-- Guest Information -->
            <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
                <div class="p-6 border-b border-gray-100">
                    <h2 class="text-xl font-bold text-blue-900 flex items-center">
                        <i class="ph-user mr-3 text-blue-500"></i>
                        Guest Information
                    </h2>
                </div>
                <div class="p-6">
                    <div class="mb-4">
                        <p class="text-gray-500 mb-1">Name</p>
                        <p class="font-semibold text-blue-900">John Doe</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-500 mb-1">Email</p>
                        <p class="font-semibold text-blue-900">johndoe@example.com</p>
                    </div>
                    <div>
                        <p class="text-gray-500 mb-1">Phone</p>
                        <p class="font-semibold text-blue-900">+1 234 567 890</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="bg-white shadow-xl rounded-2xl overflow-hidden mb-8">
            <div class="p-6 border-b border-gray-100">
                <h2 class="text-xl font-bold text-blue-900 flex items-center">
                    <i class="ph-info mr-3 text-yellow-500"></i>
                    Additional Information
                </h2>
            </div>
            <div class="p-6">
                <p class="text-gray-600 leading-relaxed">
                    Your host will contact you within 24 hours to provide check-in instructions. Need help?
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Contact Support</a>
                </p>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="#" class="bg-yellow-500 text-white px-6 py-3 rounded-lg hover:bg-yellow-600 transition flex items-center justify-center">
                <i class="ph-download mr-2"></i>
                Download Receipt
            </a>
            <a href="dashboard.html" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition flex items-center justify-center">
                <i class="ph-arrow-right mr-2"></i>
                Go to Dashboard
            </a>
        </div>
    </div>


    <?php include_once $comp . 'footer.php'; ?>

</body>

</html>