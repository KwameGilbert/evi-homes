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
         <div id="all-notifications" class="notification-tab-content ">
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