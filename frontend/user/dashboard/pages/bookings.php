 <section id="bookings-section" class="dashboard-section ">
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