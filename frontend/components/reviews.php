<section class="py-12 bg-gray-100">
  <div class="container mx-auto px-4 lg:px-8">
    <!-- Section Title -->
    <div class="text-center mb-8">
      <h2 class="text-3xl font-bold text-blue-black">What Guests Are Saying</h2>
      <p class="text-gray-600 mt-2">Hear from our happy guests about their stays!</p>
    </div>

    <!-- Carousel -->
    <div class="relative overflow-hidden">
      <div class="carousel flex space-x-6 transition-transform duration-500" id="testimonialCarousel">
        <!-- Testimonial Card -->
        <div class="flex-none bg-white rounded-lg shadow-lg p-6 w-80">
          <div class="flex items-center mb-4">
            <img src="https://via.placeholder.com/64" alt="User Avatar" class="w-16 h-16 rounded-full border-2 border-yellow-500">
            <div class="ml-4">
              <h4 class="text-lg font-bold text-blue-black">John Doe</h4>
              <div class="flex items-center">
                <span class="text-yellow-500 text-sm">★★★★☆</span>
                <span class="text-gray-600 text-sm ml-2">(4.8)</span>
              </div>
            </div>
          </div>
          <p class="text-gray-600">"I had an amazing stay! The apartment was clean, cozy, and the staff was incredibly welcoming."</p>
        </div>

        <!-- Repeat Testimonial Cards -->
        <div class="flex-none bg-white rounded-lg shadow-lg p-6 w-80">
          <div class="flex items-center mb-4">
            <img src="https://via.placeholder.com/64" alt="User Avatar" class="w-16 h-16 rounded-full border-2 border-yellow-500">
            <div class="ml-4">
              <h4 class="text-lg font-bold text-blue-black">Jane Smith</h4>
              <div class="flex items-center">
                <span class="text-yellow-500 text-sm">★★★★★</span>
                <span class="text-gray-600 text-sm ml-2">(5.0)</span>
              </div>
            </div>
          </div>
          <p class="text-gray-600">"The location was perfect, and the apartment had all the amenities we needed. Highly recommend!"</p>
        </div>

        <div class="flex-none bg-white rounded-lg shadow-lg p-6 w-80">
          <div class="flex items-center mb-4">
            <img src="https://via.placeholder.com/64" alt="User Avatar" class="w-16 h-16 rounded-full border-2 border-yellow-500">
            <div class="ml-4">
              <h4 class="text-lg font-bold text-blue-black">Emily Brown</h4>
              <div class="flex items-center">
                <span class="text-yellow-500 text-sm">★★★★☆</span>
                <span class="text-gray-600 text-sm ml-2">(4.7)</span>
              </div>
            </div>
          </div>
          <p class="text-gray-600">"Beautiful space with excellent service. Can't wait to book again for my next vacation!"</p>
        </div>
      </div>

      <!-- Navigation Arrows -->
      <button class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-blue-black text-white rounded-full p-2 hover:bg-yellow-500" id="prevSlide">
        &larr;
      </button>
      <button class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-blue-black text-white rounded-full p-2 hover:bg-yellow-500" id="nextSlide">
        &rarr;
      </button>
    </div>
  </div>

  <!-- Script for Automatic Scrolling -->
  <script>
    const carousel = document.getElementById('testimonialCarousel');
    const prevSlide = document.getElementById('prevSlide');
    const nextSlide = document.getElementById('nextSlide');
    let offset = 0;
    const cardWidth = 320; // Adjust based on card width + spacing
    const totalCards = document.querySelectorAll('.carousel > div').length;

    function moveCarousel(step) {
      offset = (offset + step + totalCards) % totalCards;
      carousel.style.transform = `translateX(-${offset * cardWidth}px)`;
    }

    // Manual Navigation
    prevSlide.addEventListener('click', () => moveCarousel(-1));
    nextSlide.addEventListener('click', () => moveCarousel(1));

    // Automatic Scrolling
    setInterval(() => {
      moveCarousel(1);
    }, 3000); // Change slide every 3 seconds
  </script>
</section>
