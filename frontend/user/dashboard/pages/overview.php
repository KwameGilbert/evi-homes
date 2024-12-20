<!-- Dashboard Overview Section -->
<section id="dashboard-overview" class="dashboard-section">
    <!-- Financial Overview -->
    <div class="grid md:grid-cols-3 gap-6 mb-8">
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
                <h3 class="text-lg font-semibold text-gray-800">Total Days/Nights</h3>
                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="text-3xl font-bold text-gray-900">45 Nights</div>
            <div class="text-sm text-gray-600 mt-2">Across 3 trips</div>
        </div>
        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Payment Method</h3>
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                </svg>
            </div>
            <div class="text-3xl font-bold text-gray-900">Visa</div>
            <div class="text-sm text-gray-600 mt-2">Default Method</div>
        </div>
    </div>

    <!-- Activity and Notifications -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
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

        <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
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

    <!-- Profile Completion Progress -->
    <div class="bg-white shadow-lg rounded-2xl p-6 mt-8 border border-gray-100">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Profile Progress</h2>
        <div class="relative w-full h-4 bg-gray-200 rounded-full overflow-hidden">
            <div class="absolute top-0 left-0 h-full bg-green-500" style="width: 75%;"></div>
        </div>
        <p class="text-sm text-gray-600 mt-2">75% Complete. Update your profile to reach 100%.</p>
        <a href="#" class="text-sm text-rose-600 hover:underline mt-2 block">Complete Now</a>
    </div>
</section>