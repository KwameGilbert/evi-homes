  <!-- Overview Section -->
  <section id="overview-section" class="dashboard-section">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Welcome Card -->
          <div class="md:col-span-2 bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-8">
              <div class="flex justify-between items-center">
                  <div>
                      <h1 class="text-4xl font-bold text-gray-900 mb-4">Welcome back, John!</h1>
                      <div class="w-full bg-gray-200 rounded-full h-3 mb-3">
                          <div class="bg-rose-500 h-3 rounded-full" style="width: 80%"></div>
                      </div>
                      <p class="text-sm text-gray-600">Profile 80% Complete – Add a profile picture to complete your profile</p>
                  </div>
                  <button class="bg-rose-500 text-white px-6 py-3 rounded-xl hover:bg-rose-600 transition-colors shadow-md">
                      Complete Profile
                  </button>
              </div>
          </div>

          <!-- Quick Stats -->
          <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-6 grid grid-cols-2 gap-4">
              <div class="text-center">
                  <div class="text-3xl font-bold text-rose-600">12</div>
                  <div class="text-sm text-gray-600">Total Trips</div>
              </div>
              <div class="text-center">
                  <div class="text-3xl font-bold text-rose-600">8</div>
                  <div class="text-sm text-gray-600">Countries</div>
              </div>
              <div class="text-center">
                  <div class="text-3xl font-bold text-rose-600">$4.2K</div>
                  <div class="text-sm text-gray-600">Total Spent</div>
              </div>
              <div class="text-center">
                  <div class="text-3xl font-bold text-rose-600">23</div>
                  <div class="text-sm text-gray-600">Nights Booked</div>
              </div>
          </div>
      </div>

      <!-- Recent Activity -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
          <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-6">
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

          <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl p-6">
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
  </section>