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

                                    <div class=" flex justify-between">
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