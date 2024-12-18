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
  