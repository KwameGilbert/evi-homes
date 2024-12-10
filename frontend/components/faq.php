<section class="py-12 bg-gray-100">
    <div class="container mx-auto px-4 lg:px-8">
        <!-- Section Title -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-blue-black">Need Help?</h2>
            <p class="text-gray-600 mt-2">Here are some frequently asked questions to assist you.</p>
        </div>

        <!-- FAQ List -->
        <div class="space-y-6">
            <!-- FAQ Item -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <button class="w-full flex justify-between items-center text-left text-blue-black font-medium text-lg" onclick="toggleFAQ(this)">
                    <span>How do I book a stay?</span>
                    <span class="text-yellow-500">&plus;</span>
                </button>
                <p class="hidden mt-4 text-gray-600">You can book a stay by selecting your preferred dates, number of guests, and choosing a property from our listings. Click 'Book Now' to proceed.</p>
            </div>

            <!-- Repeat FAQ Item -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <button class="w-full flex justify-between items-center text-left text-blue-black font-medium text-lg" onclick="toggleFAQ(this)">
                    <span>What is your cancellation policy?</span>
                    <span class="text-yellow-500">&plus;</span>
                </button>
                <p class="hidden mt-4 text-gray-600">Cancellations made 48 hours before check-in are fully refundable. For more details, visit our cancellation policy page.</p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <button class="w-full flex justify-between items-center text-left text-blue-black font-medium text-lg" onclick="toggleFAQ(this)">
                    <span>How do I contact customer support?</span>
                    <span class="text-yellow-500">&plus;</span>
                </button>
                <p class="hidden mt-4 text-gray-600">You can reach our support team via email at support@yourwebsite.com or call us at (123) 456-7890.</p>
            </div>
        </div>

        <!-- Link to Full Help Page -->
        <div class="text-center mt-6">
            <a href="/help" class="text-yellow-500 font-medium hover:underline">View All FAQs</a>
        </div>
    </div>

    <script>
        function toggleFAQ(button) {
            const answer = button.nextElementSibling;
            const isVisible = !answer.classList.contains('hidden');
            document.querySelectorAll('.hidden').forEach(p => p.classList.add('hidden'));
            if (!isVisible) answer.classList.remove('hidden');
        }
    </script>
</section>