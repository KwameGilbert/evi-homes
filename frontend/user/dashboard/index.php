<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airbnb Customer Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50">
    <div id="dashboard-app" class="min-h-screen">
            <!-- Navigation -->
            <nav class="bg-white/90 backdrop-blur-md shadow-lg sticky top-0 z-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center h-20">
                        <div class="flex items-center space-x-8">
                            <!-- Logo -->
                            <div class="flex-shrink-0">
                                <img class="h-10 w-auto" src="airbnb-logo.png" alt="Airbnb Logo">
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden md:flex space-x-6">
                                <a href="#" class="text-gray-700 hover:text-rose-600 transition-colors duration-300 font-medium">Dashboard</a>
                                <a href="#bookings" class="text-gray-700 hover:text-rose-600 transition-colors duration-300 font-medium">Bookings</a>
                                <a href="#profile" class="text-gray-700 hover:text-rose-600 transition-colors duration-300 font-medium">Profile</a>
                            </div>
                        </div>

                        <!-- User Profile -->
                        <div class="flex items-center">
                            <div class="relative">
                                <button type="button" class="flex items-center space-x-2 focus:outline-none group">
                                    <img class="h-10 w-10 rounded-full ring-2 ring-offset-2 ring-rose-500/50 group-hover:ring-rose-600 transition-all" src="user-avatar.png" alt="User Avatar">
                                    <span class="hidden md:block text-gray-700 font-medium group-hover:text-rose-600 transition-colors">John Doe</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Main Dashboard Content -->
            <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
                <!-- Welcome Section -->
                <section class="mb-10 bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <h1 class="text-4xl font-bold text-gray-900 mb-4">Welcome back, John!</h1>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-rose-500 h-3 rounded-full" style="width: 80%"></div>
                            </div>
                            <p class="text-sm text-gray-600 mt-3">Profile 80% Complete – Add a profile picture to complete your profile</p>
                        </div>
                        <div>
                            <button class="bg-rose-500 text-white px-6 py-3 rounded-xl hover:bg-rose-600 transition-colors shadow-md">
                                Complete Profile
                            </button>
                        </div>
                    </div>
                </section>

                <!-- Dashboard Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Upcoming Bookings -->
                    <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-6 transform hover:scale-105 transition-transform">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-b pb-3 border-gray-200">Upcoming Bookings</h2>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="font-medium text-gray-700">Paris Apartment</p>
                                    <p class="text-sm text-gray-500">June 15 - June 22</p>
                                </div>
                                <span class="bg-rose-100 text-rose-600 px-3 py-1 rounded-full text-xs">Confirmed</span>
                            </div>
                            <!-- More booking items would go here -->
                        </div>
                    </div>

                    <!-- Recommended Apartments -->
                    <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-6 transform hover:scale-105 transition-transform">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-b pb-3 border-gray-200">Recommended for You</h2>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <img src="apartment-thumb.png" alt="Apartment" class="w-16 h-16 rounded-lg object-cover">
                                <div>
                                    <p class="font-medium text-gray-700">Cozy Loft in Barcelona</p>
                                    <p class="text-sm text-gray-500">$120/night</p>
                                </div>
                            </div>
                            <!-- More recommended apartments -->
                        </div>
                    </div>

                    <!-- Past Bookings -->
                    <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-6 transform hover:scale-105 transition-transform">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-b pb-3 border-gray-200">Past Bookings</h2>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="font-medium text-gray-700">New York Studio</p>
                                    <p class="text-sm text-gray-500">May 1 - May 5</p>
                                </div>
                                <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs">Completed</span>
                            </div>
                            <!-- More past booking items -->
                        </div>
                    </div>

                    <!-- Payment History -->
                    <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-6 transform hover:scale-105 transition-transform">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-b pb-3 border-gray-200">Payment History</h2>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="font-medium text-gray-700">Barcelona Booking</p>
                                    <p class="text-sm text-gray-500">May 15, 2024</p>
                                </div>
                                <span class="text-gray-700 font-medium">$350</span>
                            </div>
                            <!-- More payment history items -->
                        </div>
                    </div>

                    <!-- Notifications -->
                    <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-6 transform hover:scale-105 transition-transform">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-b pb-3 border-gray-200">Notifications</h2>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-rose-500 rounded-full mt-2"></div>
                                <div>
                                    <p class="text-gray-700">New message from host</p>
                                    <p class="text-sm text-gray-500">Regarding your upcoming booking</p>
                                </div>
                            </div>
                            <!-- More notification items -->
                        </div>
                    </div>

                    <!-- Dashboard Metrics -->
                    <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-6 transform hover:scale-105 transition-transform">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-b pb-3 border-gray-200">Your Stats</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center">
                                <p class="text-3xl font-bold text-rose-600">12</p>
                                <p class="text-sm text-gray-600">Total Trips</p>
                            </div>
                            <div class="text-center">
                                <p class="text-3xl font-bold text-rose-600">8</p>
                                <p class="text-sm text-gray-600">Countries Visited</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-white/80 backdrop-blur-md shadow-lg mt-10">
                <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                        <p class="text-gray-600">&copy; 2024 Airbnb. All rights reserved.</p>
                        <div class="flex space-x-6">
                            <a href="#help" class="text-gray-700 hover:text-rose-600 transition-colors">Help</a>
                            <a href="#privacy" class="text-gray-700 hover:text-rose-600 transition-colors">Privacy Policy</a>
                            <a href="#terms" class="text-gray-700 hover:text-rose-600 transition-colors">Terms of Service</a>
                        </div>
                    </div>
                </div>
            </footer>

    </div>

    <!-- JavaScript Files -->
    <script>
        // dashboard.js
        document.addEventListener('DOMContentLoaded', () => {
            // Populate Welcome Message
            function updateWelcomeMessage() {
                const welcomeMessageEl = document.getElementById('welcome-message');
                const userName = localStorage.getItem('userName') || 'Guest';
                welcomeMessageEl.textContent = `Welcome back, ${userName}!`;
            }

            // Update Profile Completion
            function updateProfileCompletion() {
                const profileCompletionBar = document.getElementById('profile-completion-bar');
                const completionPercentage = localStorage.getItem('profileCompletion') || '80';
                profileCompletionBar.style.width = `${completionPercentage}%`;
            }

            // Dashboard Metrics
            function loadDashboardMetrics() {
                const metricsContent = document.getElementById('dashboard-metrics-content');
                const metrics = [{
                        label: 'Total Stays',
                        value: localStorage.getItem('totalStays') || '5'
                    },
                    {
                        label: 'Nights Stayed',
                        value: localStorage.getItem('nightsStayed') || '15'
                    },
                    {
                        label: 'Money Spent',
                        value: localStorage.getItem('moneySpent') || '$2,500'
                    }
                ];

                metricsContent.innerHTML = metrics.map(metric => `
            <div class="flex justify-between mb-2">
                <span class="text-gray-600">${metric.label}</span>
                <span class="font-semibold">${metric.value}</span>
            </div>
        `).join('');
            }

            // Initialize Dashboard
            function initializeDashboard() {
                updateWelcomeMessage();
                updateProfileCompletion();
                loadDashboardMetrics();
            }

            initializeDashboard();
        });

        // user-menu.js
        document.addEventListener('DOMContentLoaded', () => {
            const userMenuButton = document.getElementById('user-menu-button');
            const userDropdown = document.getElementById('user-dropdown');

            // Toggle User Dropdown
            userMenuButton.addEventListener('click', (e) => {
                e.stopPropagation();
                userDropdown.classList.toggle('hidden');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', (e) => {
                if (!userMenuButton.contains(e.target) && !userDropdown.contains(e.target)) {
                    userDropdown.classList.add('hidden');
                }
            });
        });

        function loadRecommendedApartments() {
            const recommendedApartsEl = document.getElementById('recommended-apartments-list');
            const recommendedApartments = [{
                    name: 'Luxury Sea View',
                    price: '$250/night',
                    highlights: ['Ocean View', 'Pool']
                },
                {
                    name: 'City Center Apartment',
                    price: '$180/night',
                    highlights: ['Central Location', 'Free WiFi']
                }
            ];

            recommendedApartsEl.innerHTML = recommendedApartments.map(apartment => `
            <div class="bg-gray-50 p-4 rounded-lg mb-2">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="font-semibold">${apartment.name}</h3>
                        <p class="text-sm text-gray-600">${apartment.price}</p>
                        <div class="mt-2 flex space-x-2">
                            ${apartment.highlights.map(highlight => `
                                <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">
                                    ${highlight}
                                </span>
                            `).join('')}
                        </div>
                    </div>
                    <button class="px-3 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-xs">
                        Book Now
                    </button>
                </div>
            </div>
        `).join('');
        }

        // bookings.js
        document.addEventListener('DOMContentLoaded', () => {
            // Sample booking data (would typically come from backend)
            const sampleUpcomingBooking = {
                name: 'Cozy Beach Apartment',
                location: 'Malibu, CA',
                checkIn: '2024-07-15',
                checkOut: '2024-07-20',
                guests: 2,
                status: 'Confirmed'
            };

            const samplePastBookings = [{
                    name: 'Mountain View Cabin',
                    location: 'Lake Tahoe, CA',
                    dates: 'May 10-15, 2024',
                    reviewStatus: 'Not Reviewed'
                },
                {
                    name: 'Downtown Loft',
                    location: 'San Francisco, CA',
                    dates: 'April 5-8, 2024',
                    reviewStatus: 'Reviewed'
                }
            ];

            // Populate Upcoming Booking
            function loadUpcomingBooking() {
                const bookingDetailsEl = document.getElementById('upcoming-booking-details');
                bookingDetailsEl.innerHTML = `
            <div class="bg-blue-50 p-4 rounded-lg">
                <h3 class="text-lg font-semibold text-blue-800">${sampleUpcomingBooking.name}</h3>
                <p class="text-blue-600">${sampleUpcomingBooking.location}</p>
                <div class="mt-2 flex justify-between">
                    <div>
                        <span class="text-sm text-gray-600">Check-in:</span>
                        <span class="font-medium">${sampleUpcomingBooking.checkIn}</span>
                    </div>
                    <div>
                        <span class="text-sm text-gray-600">Check-out:</span>
                        <span class="font-medium">${sampleUpcomingBooking.checkOut}</span>
                    </div>
                </div>
                <div class="mt-2 flex justify-between items-center">
                    <span class="text-sm text-gray-600">Guests: ${sampleUpcomingBooking.guests}</span>
                    <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">
                        ${sampleUpcomingBooking.status}
                    </span>
                </div>
                <div class="mt-4 flex space-x-2">
                    <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                        View Details
                    </button>
                    <button class="w-full bg-red-50 text-red-600 py-2 rounded-lg hover:bg-red-100">
                        Cancel Booking
                    </button>
                </div>
            </div>
        `;
            }

            // Populate Past Bookings
            function loadPastBookings() {
                const pastBookingsEl = document.getElementById('past-bookings-list');
                pastBookingsEl.innerHTML = samplePastBookings.map(booking => `
            <div class="bg-gray-50 p-4 rounded-lg mb-2">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="font-semibold">${booking.name}</h3>
                        <p class="text-sm text-gray-600">${booking.location}</p>
                        <p class="text-sm text-gray-600">${booking.dates}</p>
                    </div>
                    <div>
                        <button class="px-3 py-1 ${booking.reviewStatus === 'Not Reviewed' 
                            ? 'bg-yellow-100 text-yellow-800' 
                            : 'bg-green-100 text-green-800'} rounded-full text-xs">
                            ${booking.reviewStatus === 'Not Reviewed' ? 'Leave Review' : 'Reviewed'}
                        </button>
                    </div>
                </div>
            </div>
        `).join('');
            }

            // Load Notifications
            function loadNotifications() {
                const notificationsEl = document.getElementById('notifications-list');
                const notifications = [{
                        type: 'booking',
                        message: 'Your stay begins in 3 days',
                        date: '2024-07-12',
                        icon: 'fa-calendar'
                    },
                    {
                        type: 'offer',
                        message: 'Get 10% off your next booking!',
                        date: '2024-07-10',
                        icon: 'fa-tag'
                    },
                    {
                        type: 'payment',
                        message: 'Payment for Malibu Apartment confirmed',
                        date: '2024-07-08',
                        icon: 'fa-check-circle'
                    }
                ];

                notificationsEl.innerHTML = notifications.map(notification => `
            <div class="bg-gray-50 p-4 rounded-lg mb-2 flex items-center">
                <div class="mr-4">
                    <i class="fas ${notification.icon} 
                        ${notification.type === 'booking' ? 'text-blue-600' : 
                           notification.type === 'offer' ? 'text-green-600' : 
                           'text-purple-600'} text-lg"></i>
                </div>
                <div class="flex-grow">
                    <p class="text-sm font-medium">${notification.message}</p>
                    <p class="text-xs text-gray-500">${notification.date}</p>
                </div>
                <button class="text-xs text-gray-600 hover:text-blue-600">
                    View
                </button>
            </div>
        `).join('');
            }

            // Load Payment History
            function loadPaymentHistory() {
                const paymentHistoryEl = document.getElementById('payment-history-list');
                const payments = [{
                        booking: 'Malibu Beach House',
                        date: 'July 5, 2024',
                        amount: '$1,200',
                        status: 'Paid'
                    },
                    {
                        booking: 'San Francisco Loft',
                        date: 'May 15, 2024',
                        amount: '$850',
                        status: 'Refunded'
                    }
                ];

                paymentHistoryEl.innerHTML = payments.map(payment => `
            <div class="bg-gray-50 p-4 rounded-lg mb-2 flex justify-between items-center">
                <div>
                    <p class="font-medium">${payment.booking}</p>
                    <p class="text-sm text-gray-600">${payment.date}</p>
                </div>
                <div class="text-right">
                    <p class="font-semibold">${payment.amount}</p>
                    <span class="${payment.status === 'Paid' 
                        ? 'text-green-600 bg-green-100' 
                        : 'text-red-600 bg-red-100'} 
                        px-2 py-1 rounded-full text-xs">
                        ${payment.status}
                    </span>
                </div>
            </div>
        `).join('');
            }

            // Initialize All Booking Sections
            function initializeBookings() {
                loadUpcomingBooking();
                loadPastBookings();
                loadRecommendedApartments();
                loadNotifications();
                loadPaymentHistory();
            }

            initializeBookings();
        })
    </script>
</body>

</html>