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