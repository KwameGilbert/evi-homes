<?php $comp =  './../components/'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Apartment - EviHomes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./../assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.css">
    <style>
    .carousel img {
        max-height: 400px;
    }

    .glider-contain {
        position: relative;
    }

    .glider-prev,
    .glider-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        border: none;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .glider-prev {
        left: -20px;
    }

    .glider-next {
        right: -20px;
    }

    .glider::-webkit-scrollbar {
        display: none;
    }
    </style>
</head>

<?php include_once $comp . 'header.php'; ?>

<body class="bg-gray-100 text-gray-900">
    <!-- Apartment View Page -->
    <div class="container px-4 lg:px-8 py-8 mx-auto">
        <!-- Apartment Title and Location -->
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-blue-black">The Grand Lux Apartment</h1>
            <p class="text-gray-600 mt-2">Located in the heart of Beverly Hills, Los Angeles, CA</p>
        </div>

        <!-- Image Gallery -->
        <div class="mb-6 mx-auto">
            <div class="hidden lg:grid grid-cols-1 lg:grid-cols-2 gap-4">
                <div>
                    <img src="https://a0.muscache.com/im/pictures/hosting/Hosting-927661596813627788/original/02526220-8bc3-4add-a811-4258f80f4a92.jpeg?im_w=960&im_format=avif"
                        alt="Main Image" class="w-full h-full rounded-lg object-cover">
                </div>
                <div class="grid grid-cols-2 grid-rows-2 gap-2">
                    <img src="https://a0.muscache.com/im/pictures/hosting/Hosting-927661596813627788/original/bfeb996d-16ab-4532-acfe-f1bae718aa9d.jpeg?im_w=720&im_format=avif"
                        alt="Image 1" class="w-full h-full rounded-lg object-cover">
                    <img src="https://a0.muscache.com/im/pictures/f3faf0bb-d29f-4025-8cd3-f8c6203702e3.jpg?im_w=720&im_format=avif"
                        alt="Image 2" class="w-full h-full rounded-lg object-cover">
                    <img src="https://a0.muscache.com/im/pictures/hosting/Hosting-927661596813627788/original/a1e2990d-b389-41fe-be2e-6a41cb5655b4.jpeg?im_w=720&im_format=avif"
                        alt="Image 3" class="w-full h-full rounded-lg object-cover">
                    <img src="https://via.placeholder.com/400x300" alt="Image 4"
                        class="w-full h-full rounded-lg object-cover">
                </div>
            </div>
            <div class="lg:hidden glider-contain">
                <div class="glider">
                    <img src="https://a0.muscache.com/im/pictures/hosting/Hosting-927661596813627788/original/02526220-8bc3-4add-a811-4258f80f4a92.jpeg?im_w=960&im_format=avif"
                        alt="Main Image" class="w-full h-full rounded-lg object-cover">
                    <img src="https://a0.muscache.com/im/pictures/hosting/Hosting-927661596813627788/original/bfeb996d-16ab-4532-acfe-f1bae718aa9d.jpeg?im_w=720&im_format=avif"
                        alt="Image 1" class="w-full h-full rounded-lg object-cover">
                    <img src="https://a0.muscache.com/im/pictures/f3faf0bb-d29f-4025-8cd3-f8c6203702e3.jpg?im_w=720&im_format=avif"
                        alt="Image 2" class="w-full h-full rounded-lg object-cover">
                    <img src="https://a0.muscache.com/im/pictures/hosting/Hosting-927661596813627788/original/a1e2990d-b389-41fe-be2e-6a41cb5655b4.jpeg?im_w=720&im_format=avif"
                        alt="Image 3" class="w-full h-full rounded-lg object-cover">
                    <img src="https://a0.muscache.com/im/pictures/hosting/Hosting-927661596813627788/original/fc8696de-4e7f-4704-a904-8b6aefe68a29.jpeg"
                        alt="Image 4" class="w-full h-full rounded-lg object-cover">
                </div>
                <button aria-label="Previous" class="glider-prev">&larr;</button>
                <button aria-label="Next" class="glider-next">&rarr;</button>
            </div>
        </div>

        <!-- Description and Amenities -->
        <div class="lg:flex lg:space-x-12">
            <div class="lg:w-2/3 mb-5">
                <h2 class="text-2xl font-bold text-blue-black mb-4">About this place</h2>
                <p class="text-gray-700 mb-4">Experience luxury living at its finest in this exquisite apartment
                    featuring modern decor,
                    high-end amenities, and breathtaking views of the city skyline. Perfect for vacations, business
                    trips, or
                    romantic getaways.</p>

                <h3 class="text-xl font-bold text-blue-black mb-4">Amenities</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-wifi text-4xl"></i>
                        <span>High-Speed Wifi</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-swimmer text-4xl"></i>
                        <span>Swimming Pool</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-parking text-4xl"></i>
                        <span>Free Parking</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-dumbbell text-4xl"></i>
                        <span>Fully Equipped Gym</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-utensils text-4xl"></i>
                        <span>Modern Kitchen</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-tv text-4xl"></i>
                        <span>Smart TV</span>
                    </div>
                </div>

            </div>

            <!-- Booking Form -->
            <div class="lg:w-1/3 bg-gray-100 p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold text-blue-black mb-4">Book Your Stay</h2>
                <form id="bookingForm">
                    <div class="mb-4">
                        <label for="dateRange" class="block text-gray-700 mb-2">Choose Dates</label>
                        <input type="text" id="dateRange" class="w-full border border-gray-300 rounded-lg p-2">
                    </div>
                    <div class="mb-4">
                        <label for="guests" class="block text-gray-700 mb-2">Guests</label>
                        <select id="guests" class="w-full border border-gray-300 rounded-lg p-2">
                            <option value="1">1 Guest</option>
                            <option value="2">2 Guests</option>

                        </select>
                    </div>
                    <p class="text-gray-600">Price per night: <span class="font-bold text-blue-black">$250</span></p>
                    <p class="text-gray-600">Total cost: <span id="totalCost"
                            class="font-bold text-blue-black">$0</span></p>
                    <a href='./../booking-summary/'>
                        <button type="button"
                            class="mt-4 w-full bg-yellow-500 text-white py-2 rounded-lg hover:bg-yellow-600 transition">Book
                            Now</button>
                    </a>

                </form>
            </div>
        </div>
        <!-- Host info -->
        <?php include_once $comp . 'host-info.php' ?>
    </div>

    <!-- Scripts -->
    <script>
    const dateRangePicker = flatpickr("#dateRange", {
        mode: "range",
        dateFormat: "Y-m-d",
        disable: [
            // Array of dates to disable
            "2023-10-10",
            "2023-10-15",
            // Array of date ranges to disable
            {
                from: "2023-10-20",
                to: "2023-10-25"
            }
        ],
        onChange: (selectedDates) => {
            calculateTotalCost(selectedDates);
        },
    });

    function calculateTotalCost(dates) {
        if (dates.length === 2) {
            const oneDay = 24 * 60 * 60 * 1000;
            const diffDays = Math.round(Math.abs((dates[1] - dates[0]) / oneDay));
            const pricePerNight = 250;
            const totalCost = diffDays * pricePerNight;
            document.getElementById("totalCost").textContent = `$${totalCost}`;
        }
    }

    new Glider(document.querySelector(".glider"), {
        slidesToShow: 1,
        dots: false,
        draggable: true,
        arrows: {
            prev: ".glider-prev",
            next: ".glider-next"
        }
    });
    </script>
    <?php include_once $comp . 'footer.php'; ?>

</body>

</html>