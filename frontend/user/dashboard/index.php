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
            <!-- Content remains the same as previous dashboard -->
            <section id="overview-section" class="dashboard-section">
                <h1 class="text-3xl font-bold mb-8">Dashboard</h1>
            </section>

            <!-- Other Sections (Hidden by Default) -->
            <section id="bookings-section" class="dashboard-section hidden">
                <h1 class="text-3xl font-bold mb-8">My Bookings</h1>
                <!-- Detailed bookings content would go here -->
            </section>

            <section id="notification-section" class="dashboard-section hidden">
                <h1 class="text-3xl font-bold mb-8">Notifications</h1>
                <!-- Detailed notifications content would go here -->
            </section>

            <section id="payments-section" class="dashboard-section hidden">
                <h1 class="text-3xl font-bold mb-8">Payment History</h1>
                <!-- Detailed payments content would go here -->
            </section>

            <section id="profile-section" class="dashboard-section hidden">
                <h1 class="text-3xl font-bold mb-8">User Profile</h1>
                <!-- Detailed profile content would go here -->
            </section>
        </main>
    </div>

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