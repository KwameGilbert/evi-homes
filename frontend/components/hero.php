<section class="relative bg-blue-black text-gray-300">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="./assets/images/hero-gb.jpg"
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
            We prioritize your optimum comfort! Unwind in our exclusive apartments
        </p>
        <!-- <p class="text-lg md:text-xl text-gray-300 mb-8">
            Relax in comfort at our exclusive apartments.
        </p> -->

        <!-- Search Bar -->

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