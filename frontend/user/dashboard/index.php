<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airbnb Customer Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
     <style>
        /* Custom scrollbar for webkit browsers */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
    <!-- Mobile Header -->
    <header class="md:hidden bg-white/90 backdrop-blur-md shadow-md fixed top-0 left-0 right-0 z-50">
        <div class="flex justify-between items-center p-4">
            <img src="airbnb-logo.png" alt="Airbnb Logo" class="h-8 w-auto">
            <button id="mobile-menu-toggle" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </header>

    <!-- Mobile Sidebar (Sliding Drawer) -->
    <div id="mobile-sidebar" class="fixed inset-y-0 left-0 max-w-xs w-full bg-white/95 backdrop-blur-md shadow-xl z-50 transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden">
        <div class="p-6 border-b border-gray-200 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img src="user-avatar.png" alt="User Avatar" class="h-10 w-10 rounded-full ring-2 ring-rose-500/50">
                <div>
                    <p class="font-semibold text-gray-800">John Doe</p>
                    <p class="text-sm text-gray-500">Premium Member</p>
                </div>
            </div>
            <button id="mobile-sidebar-close" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <nav class="p-4 space-y-2">
            <button class="sidebar-nav-item w-full flex items-center space-x-3 py-3 px-4 rounded-lg text-gray-700 hover:bg-rose-50 hover:text-rose-600 transition-colors group active" data-section="overview">
                <i data-feather="grid" class="w-5 h-5 group-hover:text-rose-600"></i>
                <span>Overview</span>
            </button>
            <button class="sidebar-nav-item w-full flex items-center space-x-3 py-3 px-4 rounded-lg text-gray-700 hover:bg-rose-50 hover:text-rose-600 transition-colors group" data-section="bookings">
                <i data-feather="calendar" class="w-5 h-5 group-hover:text-rose-600"></i>
                <span>Bookings</span>
            </button>
            <button class="sidebar-nav-item w-full flex items-center space-x-3 py-3 px-4 rounded-lg text-gray-700 hover:bg-rose-50 hover:text-rose-600 transition-colors group" data-section="notification">
                <i data-feather="bell" class="w-5 h-5 group-hover:text-rose-600"></i>
                <span>Notifications</span>
            </button>
            <button class="sidebar-nav-item w-full flex items-center space-x-3 py-3 px-4 rounded-lg text-gray-700 hover:bg-rose-50 hover:text-rose-600 transition-colors group" data-section="payments">
                <i data-feather="credit-card" class="w-5 h-5 group-hover:text-rose-600"></i>
                <span>Payments</span>
            </button>
            <button class="sidebar-nav-item w-full flex items-center space-x-3 py-3 px-4 rounded-lg text-gray-700 hover:bg-rose-50 hover:text-rose-600 transition-colors group" data-section="profile">
                <i data-feather="user" class="w-5 h-5 group-hover:text-rose-600"></i>
                <span>Profile</span>
            </button>
        </nav>
    </div>

    <!-- Desktop and Mobile Main Content -->
    <div class="flex">
        <!-- Desktop Sidebar (Hidden on Mobile) -->
        <aside class="hidden md:flex w-64 bg-white/90 backdrop-blur-md shadow-xl h-screen sticky top-0 flex-col">
            <div class="p-6 border-b border-gray-200 flex items-center space-x-4">
                <img src="airbnb-logo.png" alt="Airbnb Logo" class="h-10 w-auto">
                <h1 class="text-xl font-bold text-gray-800">Dashboard</h1>
            </div>

            <nav class="flex-grow p-4 space-y-2">
                <button class="sidebar-nav-item w-full flex items-center space-x-3 py-3 px-4 rounded-lg text-gray-700 hover:bg-rose-50 hover:text-rose-600 transition-colors group active" data-section="overview">
                    <i data-feather="grid" class="w-5 h-5 group-hover:text-rose-600"></i>
                    <span>Overview</span>
                </button>
                <button class="sidebar-nav-item w-full flex items-center space-x-3 py-3 px-4 rounded-lg text-gray-700 hover:bg-rose-50 hover:text-rose-600 transition-colors group" data-section="bookings">
                    <i data-feather="calendar" class="w-5 h-5 group-hover:text-rose-600"></i>
                    <span>Bookings</span>
                </button>
                <button class="sidebar-nav-item w-full flex items-center space-x-3 py-3 px-4 rounded-lg text-gray-700 hover:bg-rose-50 hover:text-rose-600 transition-colors group" data-section="notification">
                    <i data-feather="bell" class="w-5 h-5 group-hover:text-rose-600"></i>
                    <span>Notifications</span>
                </button>
                <button class="sidebar-nav-item w-full flex items-center space-x-3 py-3 px-4 rounded-lg text-gray-700 hover:bg-rose-50 hover:text-rose-600 transition-colors group" data-section="payments">
                    <i data-feather="credit-card" class="w-5 h-5 group-hover:text-rose-600"></i>
                    <span>Payments</span>
                </button>
                <button class="sidebar-nav-item w-full flex items-center space-x-3 py-3 px-4 rounded-lg text-gray-700 hover:bg-rose-50 hover:text-rose-600 transition-colors group" data-section="profile">
                    <i data-feather="user" class="w-5 h-5 group-hover:text-rose-600"></i>
                    <span>Profile</span>
                </button>
            </nav>

            <div class="p-4 border-t border-gray-200">
                <div class="flex items-center space-x-3">
                    <img src="user-avatar.png" alt="User Avatar" class="h-12 w-12 rounded-full ring-2 ring-rose-500/50">
                    <div>
                        <p class="font-semibold text-gray-800">John Doe</p>
                        <p class="text-sm text-gray-500">Premium Member</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content Area (Padded for Mobile) -->
        <main class="flex-grow p-4 md:p-10 pt-20 md:pt-10 overflow-y-auto w-full" id="main-content">
           <!-- Overview Section -->
        <section id="overview-section" class="dashboard-section">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Welcome Card -->
                <div class="md:col-span-2 bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-8">
                    <div class="flex justify-between items-center">
                        <div>
                            <h1 class="text-4xl font-bold text-gray-900 mb-4">Welcome back, John!</h1>
                            <div class="w-full bg-gray-200 rounded-full h-3 mb-3">
                                <div class="bg-rose-500 h-3 rounded-full" style="width: 80%"></div>
                            </div>
                            <p class="text-sm text-gray-600">Profile 80% Complete – Add a profile picture to complete your profile</p>
                        </div>
                        <button class="bg-rose-500 text-white px-6 py-3 rounded-xl hover:bg-rose-600 transition-colors shadow-md">
                            Complete Profile
                        </button>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-6 grid grid-cols-2 gap-4">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-rose-600">12</div>
                        <div class="text-sm text-gray-600">Total Trips</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-rose-600">8</div>
                        <div class="text-sm text-gray-600">Countries</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-rose-600">$4.2K</div>
                        <div class="text-sm text-gray-600">Total Spent</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-rose-600">23</div>
                        <div class="text-sm text-gray-600">Nights Booked</div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-b pb-3 border-gray-200">
                        Upcoming Bookings
                        <a href="#" class="float-right text-sm text-rose-600 hover:underline">View All</a>
                    </h2>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="font-medium text-gray-700">Paris Apartment</p>
                                <p class="text-sm text-gray-500">June 15 - June 22</p>
                            </div>
                            <span class="bg-rose-100 text-rose-600 px-3 py-1 rounded-full text-xs">Confirmed</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="font-medium text-gray-700">Barcelona Studio</p>
                                <p class="text-sm text-gray-500">July 10 - July 15</p>
                            </div>
                            <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-xs">Pending</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6 border-b pb-3 border-gray-200">
                        Recent Notifications
                        <a href="#" class="float-right text-sm text-rose-600 hover:underline">View All</a>
                    </h2>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-rose-500 rounded-full mt-2"></div>
                            <div>
                                <p class="text-gray-700">New message from host</p>
                                <p class="text-sm text-gray-500">Regarding your upcoming booking</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-green-500 rounded-full mt-2"></div>
                            <div>
                                <p class="text-gray-700">Booking Confirmed</p>
                                <p class="text-sm text-gray-500">Your Paris trip is confirmed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


          
          <section id="bookings-section" class="dashboard-section hidden">
            <div class="container mx-auto px-4 py-8">
                <h1 class="text-3xl font-bold mb-8 text-gray-900">My Bookings</h1>

                <!-- Booking Filters and Tabs -->
                <div class="mb-6 flex justify-between items-center">
                    <div class="flex space-x-4">
                        <button class="px-4 py-2 bg-rose-500 text-white rounded-lg hover:bg-rose-600 transition-colors active" data-tab="current">
                            Current Bookings
                        </button>
                        <button class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors" data-tab="upcoming">
                            Upcoming
                        </button>
                        <button class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors" data-tab="past">
                            Past Bookings
                        </button>
                    </div>
                    <div class="relative">
                        <input type="text" placeholder="Search bookings..." class="w-64 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-rose-500">
                        <svg class="absolute right-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Current Bookings Content -->
                <div id="current-bookings" class="booking-tab-content">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-xl font-semibold text-gray-800">Paris Apartment</h2>
                                <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs">Confirmed</span>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="text-sm text-gray-600">Check-in</p>
                                    <p class="font-medium">June 15, 2024</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Check-out</p>
                                    <p class="font-medium">June 22, 2024</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Location</p>
                                    <p class="font-medium">Paris, France</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Guests</p>
                                    <p class="font-medium">2 Adults</p>
                                </div>
                            </div>
                            <div class="mt-4 flex space-x-3">
                                <button class="flex-1 bg-rose-500 text-white py-2 rounded-lg hover:bg-rose-600 transition-colors">
                                    View Details
                                </button>
                                <button class="flex-1 border border-rose-500 text-rose-500 py-2 rounded-lg hover:bg-rose-50 transition-colors">
                                    Manage Booking
                                </button>
                            </div>
                        </div>

                        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-xl font-semibold text-gray-800">Barcelona Studio</h2>
                                <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-xs">Pending</span>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="text-sm text-gray-600">Check-in</p>
                                    <p class="font-medium">July 10, 2024</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Check-out</p>
                                    <p class="font-medium">July 15, 2024</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Location</p>
                                    <p class="font-medium">Barcelona, Spain</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Guests</p>
                                    <p class="font-medium">2 Adults</p>
                                </div>
                            </div>
                            <div class="mt-4 flex space-x-3">
                                <button class="flex-1 bg-rose-500 text-white py-2 rounded-lg hover:bg-rose-600 transition-colors">
                                    View Details
                                </button>
                                <button class="flex-1 border border-rose-500 text-rose-500 py-2 rounded-lg hover:bg-rose-50 transition-colors">
                                    Modify Booking
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Bookings Content (Initially Hidden) -->
                <div id="upcoming-bookings" class="booking-tab-content hidden">
                    <div class="text-center py-12 bg-gray-50 rounded-lg">
                        <svg class="mx-auto w-16 h-16 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <h2 class="text-xl text-gray-700 mb-2">No Upcoming Bookings</h2>
                        <p class="text-gray-500">Explore new destinations and start planning your next trip!</p>
                        <button class="mt-4 bg-rose-500 text-white px-6 py-2 rounded-lg hover:bg-rose-600 transition-colors">
                            Find Trips
                        </button>
                    </div>
                </div>

                <!-- Past Bookings Content (Initially Hidden) -->
                <div id="past-bookings" class="booking-tab-content hidden">
                    <div class="space-y-4">
                        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Rome Apartment</h3>
                                <p class="text-sm text-gray-600">March 10 - March 17, 2024</p>
                            </div>
                            <div class="flex space-x-3">
                                <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                                    View Receipt
                                </button>
                                <button class="bg-rose-500 text-white px-4 py-2 rounded-lg hover:bg-rose-600 transition-colors">
                                    Rebook
                                </button>
                            </div>
                        </div>
                        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Amsterdam Hostel</h3>
                                <p class="text-sm text-gray-600">January 15 - January 20, 2024</p>
                            </div>
                            <div class="flex space-x-3">
                                <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                                    View Receipt
                                </button>
                                <button class="bg-rose-500 text-white px-4 py-2 rounded-lg hover:bg-rose-600 transition-colors">
                                    Rebook
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                // Tab switching functionality
                document.querySelectorAll('[data-tab]').forEach(tab => {
                    tab.addEventListener('click', () => {
                        // Remove active state from all tabs
                        document.querySelectorAll('[data-tab]').forEach(t => {
                            t.classList.remove('active', 'bg-rose-500', 'text-white');
                            t.classList.add('text-gray-600', 'hover:bg-gray-100');
                        });

                        // Add active state to clicked tab
                        tab.classList.add('active', 'bg-rose-500', 'text-white');
                        tab.classList.remove('text-gray-600', 'hover:bg-gray-100');

                        // Hide all booking tab contents
                        document.querySelectorAll('.booking-tab-content').forEach(content => {
                            content.classList.add('hidden');
                        });

                        // Show selected tab content
                        const tabId = tab.getAttribute('data-tab');
                        document.getElementById(`${tabId}-bookings`).classList.remove('hidden');
                    });
                });
            </script>
        </section>

         <section id="notification-section" class="dashboard-section">
                        <div class="container mx-auto px-4 py-8">
                            <h1 class="text-3xl font-bold mb-8 text-gray-900">Notifications</h1>

                        <!-- Notification Filters and Tabs -->
                        <div class="mb-6 flex justify-between items-center">
                            <div class="flex space-x-4">
                                <button class="px-4 py-2 bg-rose-500 text-white rounded-lg hover:bg-rose-600 transition-colors active" data-tab="unread">
                                    Unread
                                </button>
                                <button class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors" data-tab="all">
                                    All Notifications
                                </button>
                                <button class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors" data-tab="archived">
                                    Archived
                                </button>
                            </div>
                            <div class="flex items-center space-x-4">
                                <button class="text-gray-600 hover:text-gray-800 transition-colors">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </button>
                                <button class="text-gray-600 hover:text-gray-800 transition-colors">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                                <div class="relative">
                                    <input type="text" placeholder="Search notifications..." class="w-64 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-rose-500">
                                    <svg class="absolute right-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Unread Notifications Content -->
                        <div id="unread-notifications" class="notification-tab-content">
                            <div class="space-y-4">
                                <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 flex justify-between items-center">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-2 h-2 bg-rose-500 rounded-full"></div>
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-800">New Booking Message</h3>
                                            <p class="text-sm text-gray-600">Your Paris host sent you a message about check-in details</p>
                                            <p class="text-xs text-gray-500 mt-1">2 hours ago</p>
                                        </div>
                                    </div>
                                <div class="flex space-x-3">
                                    <button class="bg-rose-500 text-white px-4 py-2 rounded-lg hover:bg-rose-600 transition-colors">
                                        Read Message
                                    </button>
                                    <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                                        Mark as Read
                                    </button>
                                </div>
                            </div>

                            <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    <div class="w-2 h-2 bg-rose-500 rounded-full"></div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-800">Booking Confirmation</h3>
                                        <p class="text-sm text-gray-600">Your Barcelona studio booking is now confirmed</p>
                                        <p class="text-xs text-gray-500 mt-1">5 hours ago</p>
                                    </div>
                                </div>
                                <div class="flex space-x-3">
                                    <button class="bg-rose-500 text-white px-4 py-2 rounded-lg hover:bg-rose-600 transition-colors">
                                        View Booking
                                    </button>
                                    <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                                        Mark as Read
                                    </button>
                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- All Notifications Content (Initially Hidden) -->
                        <div id="all-notifications" class="notification-tab-content hidden">
                            <div class="space-y-4">
                                <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 flex justify-between items-center">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-800">Booking Completed</h3>
                                            <p class="text-sm text-gray-600">Your Rome trip has been successfully completed</p>
                                            <p class="text-xs text-gray-500 mt-1">2 days ago</p>
                                        </div>
                                    </div>
                                    <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                                        View Details
                                    </button>
                                </div>

                            <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    <div class="w-2 h-2 bg-yellow-500 rounded-full"></div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-800">Upcoming Trip Reminder</h3>
                                        <p class="text-sm text-gray-600">Your Paris trip is coming up in 7 days</p>
                                        <p class="text-xs text-gray-500 mt-1">3 days ago</p>
                                    </div>
                                </div>
                                <button class="bg-rose-500 text-white px-4 py-2 rounded-lg hover:bg-rose-600 transition-colors">
                                    View Booking
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Archived Notifications Content (Initially Hidden) -->
                    <div id="archived-notifications" class="notification-tab-content hidden">
                        <div class="text-center py-12 bg-gray-50 rounded-lg">
                            <svg class="mx-auto w-16 h-16 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-2v8m0 0l3-3m-3 3L9 8m-5 5h14a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <h2 class="text-xl text-gray-700 mb-2">No Archived Notifications</h2>
                            <p class="text-gray-500">Your archived notifications will appear here.</p>
                        </div>
                    </div>
                </div>

                <script>
                    // Tab switching functionality
                    document.querySelectorAll('[data-tab]').forEach(tab => {
                        tab.addEventListener('click', () => {
                            // Remove active state from all tabs
                            document.querySelectorAll('[data-tab]').forEach(t => {
                                t.classList.remove('active', 'bg-rose-500', 'text-white');
                                t.classList.add('text-gray-600', 'hover:bg-gray-100');
                            });

                            // Add active state to clicked tab
                            tab.classList.add('active', 'bg-rose-500', 'text-white');
                            tab.classList.remove('text-gray-600', 'hover:bg-gray-100');

                            // Hide all notification tab contents
                            document.querySelectorAll('.notification-tab-content').forEach(content => {
                                content.classList.add('hidden');
                            });

                            // Show selected tab content
                            const tabId = tab.getAttribute('data-tab');
                            document.getElementById(`${tabId}-notifications`).classList.remove('hidden');
                        });
                    });
                </script>
        </section>

           <section id="payments-section" class="dashboard-section">
            <div class="container mx-auto px-4 py-8">
                <div class="flex justify-between items-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-900">Payment History</h1>
                    <div class="flex space-x-4">
                        <button class="bg-rose-500 text-white px-4 py-2 rounded-lg hover:bg-rose-600 transition-colors">
                            Add Payment Method
                        </button>
                        <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                            Export Statements
                        </button>
                    </div>
                </div>

                <!-- Financial Overview -->
                <div class="grid md:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Total Spent</h3>
                            <svg class="w-6 h-6 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 100-4 2 2 0 000 4z"></path>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-gray-900">$4,256.78</div>
                        <div class="text-sm text-green-600 mt-2">+12.5% from last year</div>
                    </div>
                    <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Upcoming Payments</h3>
                            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-gray-900">$687.50</div>
                        <div class="text-sm text-gray-600 mt-2">2 Pending Payments</div>
                    </div>
                    <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Refunds</h3>
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-gray-900">$129.99</div>
                        <div class="text-sm text-gray-600 mt-2">1 Recent Refund</div>
                    </div>
                    <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Payment Methods</h3>
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                        </div>
                        <div class="text-3xl font-bold text-gray-900">3</div>
                        <div class="text-sm text-gray-600 mt-2">Visa, PayPal, Mastercard</div>
                    </div>
                </div>

                <!-- Payment Filters -->
                <div class="mb-6 flex justify-between items-center">
                    <div class="flex space-x-4">
                        <button class="px-4 py-2 bg-rose-500 text-white rounded-lg hover:bg-rose-600 transition-colors active" data-tab="recent">
                            Recent
                        </button>
                        <button class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors" data-tab="trips">
                            Trip Payments
                        </button>
                        <button class="px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors" data-tab="refunds">
                            Refunds
                        </button>
                    </div>
                    <div class="relative">
                        <input type="text" placeholder="Search transactions..." class="w-64 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-rose-500">
                        <svg class="absolute right-3 top-3 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Recent Transactions -->
                <div id="recent-transactions" class="payment-tab-content">
                    <div class="bg-white shadow-lg rounded-2xl overflow-hidden">
                        <table class="w-full">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Jun 15, 2024</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Paris Apartment Booking</div>
                                        <div class="text-sm text-gray-500">Visa ●●●● 4532</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">$1,250.00</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Completed
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right">
                                        <button class="text-rose-600 hover:text-rose-900 text-sm">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">May 22, 2024</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Barcelona Studio Deposit</div>
                                        <div class="text-sm text-gray-500">PayPal</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">$350.50</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Pending
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right">
                                        <button class="text-rose-600 hover:text-rose-900 text-sm">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Apr 10, 2024</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Rome Trip Refund</div>
                                        <div class="text-sm text-gray-500">Mastercard ●●●● 7890</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">$129.99</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                            Refunded
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right">
                                        <button class="text-rose-600 hover:text-rose-900 text-sm">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Trip Payments (Hidden by Default) -->
                <div id="trip-transactions" class="payment-tab-content hidden">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-xl font-semibold text-gray-800">Paris Apartment</h3>
                                <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs">Paid</span>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Total Cost</span>
                                    <span class="font-medium">$1,250.00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Payment Date</span>
                                    <span>June 15, 2024</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Payment Method</span>
                                    <span>Visa ●●●● 4532</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-xl font-semibold text-gray-800">Barcelona Studio</h3>
                                <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-xs">Pending</span>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Total Cost</span>
                                    <span class="font-medium">$350.50</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-

                                    <div class="flex justify-between">
                                    <span class="text-gray-600">Payment Date</span>
                                    <span>May 22, 2024</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Payment Method</span>
                                    <span>PayPal</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Refunds (Hidden by Default) -->
                <div id="refund-transactions" class="payment-tab-content hidden">
                    <div class="space-y-4">
                        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800">Rome Trip Cancellation</h3>
                                    <p class="text-sm text-gray-500">Original Booking: March 10 - March 17, 2024</p>
                                </div>
                                <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs">Refunded</span>
                            </div>
                            <div class="grid md:grid-cols-3 gap-4">
                                <div>
                                    <p class="text-sm text-gray-600">Original Amount</p>
                                    <p class="font-medium">$579.99</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Refund Amount</p>
                                    <p class="font-medium text-green-600">$129.99</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600">Refund Date</p>
                                    <p>April 10, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                // Tab switching functionality
                document.querySelectorAll('[data-tab]').forEach(tab => {
                    tab.addEventListener('click', () => {
                        // Remove active state from all tabs
                        document.querySelectorAll('[data-tab]').forEach(t => {
                            t.classList.remove('active', 'bg-rose-500', 'text-white');
                            t.classList.add('text-gray-600', 'hover:bg-gray-100');
                        });

                        // Add active state to clicked tab
                        tab.classList.add('active', 'bg-rose-500', 'text-white');
                        tab.classList.remove('text-gray-600', 'hover:bg-gray-100');

                        // Hide all payment tab contents
                        document.querySelectorAll('.payment-tab-content').forEach(content => {
                            content.classList.add('hidden');
                        });

                        // Show selected tab content
                        const tabId = tab.getAttribute('data-tab');
                        document.getElementById(`${tabId}-transactions`).classList.remove('hidden');
                    });
                });
            </script>
        </section>

    <section id="profile-section" class="dashboard-section hidden">
        <div class="container mx-auto px-4 py-8">
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Profile Sidebar -->
                <div class="md:col-span-1 bg-white shadow-lg rounded-2xl p-6 h-fit">
                    <div className="text-center">
                        <div className="relative inline-block mb-4">
                            <img 
                                src="/api/placeholder/200/200" 
                                alt="Profile" 
                                className="w-32 h-32 rounded-full mx-auto object-cover border-4 border-rose-100"
                            />
                            <button className="absolute bottom-0 right-0 bg-rose-500 text-white p-2 rounded-full shadow-lg hover:bg-rose-600">
                                <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </button>
                        </div>
                        <h2 className="text-2xl font-bold text-gray-900">John Doe</h2>
                        <p className="text-gray-600">Travel Enthusiast</p>
                        <div className="mt-4 flex justify-center space-x-4">
                            <a href="#" className="text-gray-500 hover:text-rose-500">
                                <svg className="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                                </svg>
                            </a>
                            <a href="#" className="text-gray-500 hover:text-rose-500">
                                <svg className="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path>
                                </svg>
                            </a>
                            <a href="#" className="text-gray-500 hover:text-rose-500">
                                <svg className="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162S8.597 18.163 12 18.163s6.162-2.759 6.162-6.162S15.403 5.838 12 5.838zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div className="mt-6 border-t pt-4">
                        <nav className="space-y-2">
                            <button className="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg active:bg-rose-50 active:text-rose-600 flex items-center">
                                <svg className="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Personal Info
                            </button>
                            <button className="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg active:bg-rose-50 active:text-rose-600 flex items-center">
                                <svg className="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Account Settings
                            </button>
                            <button className="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg active:bg-rose-50 active:text-rose-600 flex items-center">
                                <svg className="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                </svg>
                                Payment Methods
                            </button>
                        </nav>
                    </div>
                </div>

                <!-- Profile Content -->
                <div class="md:col-span-2 space-y-6">
                    <!-- Personal Information -->
                    <div class="bg-white shadow-lg rounded-2xl p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-2xl font-semibold text-gray-900">Personal Information</h2>
                            <button class="text-rose-500 hover:text-rose-600 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                                Edit
                            </button>
                        </div>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">First Name</label>
                                <input type="text" value="John" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-rose-500 focus:border-rose-500" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Last Name</label>
                                <input type="text" value="Doe" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-rose-500 focus:border-rose-500" />
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">Email Address</label>
                                <input type="email" value="john.doe@example.com" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-rose-500 focus:border-rose-500" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                                <input type="tel" value="+1 (555) 123-4567" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-rose-500 focus:border-rose-500" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Nationality</label>
                                <select class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-rose-500 focus:border-rose-500">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>United Kingdom</option>
                                    <option>Australia</option>
                                </select>
                            </div>
                        </div>
                    </div>

                
            </main>
        </div>
    </section>      
    
    <script>
        // Initialize Feather icons
        feather.replace();

        // Mobile Sidebar Toggle
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileSidebarClose = document.getElementById('mobile-sidebar-close');
        const mobileSidebar = document.getElementById('mobile-sidebar');

        mobileMenuToggle.addEventListener('click', () => {
            mobileSidebar.classList.remove('-translate-x-full');
        });

        mobileSidebarClose.addEventListener('click', () => {
            mobileSidebar.classList.add('-translate-x-full');
        });

        // Navigation functionality
        document.querySelectorAll('.sidebar-nav-item').forEach(item => {
            item.addEventListener('click', () => {
                // Remove active class from all items
                document.querySelectorAll('.sidebar-nav-item').forEach(btn => {
                    btn.classList.remove('active', 'bg-rose-50', 'text-rose-600');
                });

                // Add active class to clicked item
                item.classList.add('active', 'bg-rose-50', 'text-rose-600');

                // Hide all sections
                document.querySelectorAll('.dashboard-section').forEach(section => {
                    section.classList.add('hidden');
                });

                // Show selected section
                const sectionId = `${item.dataset.section}-section`;
                document.getElementById(sectionId).classList.remove('hidden');

                // Close mobile sidebar if open
                mobileSidebar.classList.add('-translate-x-full');
            });
        });
    </script>
</body>

</html>