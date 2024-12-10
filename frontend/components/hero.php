<section class="relative bg-blue-black text-gray-300">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://lesroches.edu/wp-content/uploads/2023/03/What-is-innovation-in-hotels-1-scaled.jpg"
            alt="Background" class="w-full h-full object-cover opacity-100">
    </div>
    <!-- Overlay -->
    <div class="absolute inset-0 bg-blue-black bg-opacity-50"></div>

    <!-- Content -->
    <div class="relative container mx-auto px-4 lg:px-8 py-20 text-center text-white">
        <!-- Tagline -->
        <h1 class="text-3xl md:text-5xl font-bold mb-4">
            Find your perfect stay, right here with us
        </h1>
        <p class="text-lg md:text-xl text-gray-300 mb-8">
            Relax in comfort at our exclusive apartments.
        </p>

        <!-- Search Bar -->
        <div class="bg-white rounded-lg shadow-lg max-w-4xl mx-auto p-6 space-y-4">
            <div class="flex flex-wrap gap-4">
                <!-- Date Range Picker -->
                <div class="w-full">
                    <label for="dateRange" class="block text-gray-700 font-medium mb-2">Check-in & Check-out</label>
                    <input type="text" id="dateRange" placeholder="YYYY-MM-DD to YYYY-MM-DD"
                        class="text-gray-700 w-full border border-gray-300 rounded px-4 py-2 focus:ring-yellow-500 focus:border-yellow-500">
                </div>
            </div>

            <!-- Guests Selector -->
            <div class="flex gap-4 items-end">
                <div class="flex-1">
                    <label for="guests" class="block text-gray-700 font-medium mb-2">Guests</label>
                    <input type="number" id="guests" min="1" placeholder="Number of guests"
                        class="w-full border text-gray-700 border-gray-300 rounded px-4 py-2 focus:ring-yellow-500 focus:border-yellow-500">
                </div>
                <!-- Search Button -->
                <button aria-label="Search available apartments" class="bg-yellow-500 text-white px-6 py-3 rounded-lg hover:bg-yellow-600 transition">
                    Search
                </button>
            </div>

            <!-- Trending Suggestions (Optional) -->
            <div class="mt-4 text-left">
                <p class="text-gray-700 font-medium">Trending Searches:</p>
                <div class="flex gap-2 mt-2">
                    <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-gray-300 transition">Apartment 1</span>
                    <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-gray-300 transition">Apartment 2</span>
                    <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-gray-300 transition">Apartment 3</span>
                </div>
            </div>

        </div>
    </div>

    <!-- Include Flatpickr or similar library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#dateRange", {
            mode: "range",
            dateFormat: "Y-m-d",
            allowInput: true,
        });
    </script>
</section>