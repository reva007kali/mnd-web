  <style>
      .swiper {
          width: 100%;
          padding-top: 50px;
          padding-bottom: 50px;
      }

      .swiper-slide {
        background: rgb(240, 240, 240);
          overflow: hidden;
          border-radius: 20px;
          background-position: center;
          background-size: cover;
          width: 300px;
          height: 300px;
      }
  </style>
  <!-- Swiper -->
  <div class="pt-25 mx-auto w-fit">
      <h1 class="text-4xl font-bold text-blue-900 uppercase">Testimoni Student</h1>
  </div>
  <div class="swiper mySwiper">
      <div class="swiper-wrapper">

          <!-- Slide 1 -->
          <div class="swiper-slide">
              <div class=" p-6 rounded-xl space-y-3">
                  <div class="flex items-center space-x-4">
                      <div class="w-1/4">
                          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="I Made"
                              class="rounded-full object-cover" />
                      </div>
                      <div>
                          <h3 class="font-bold text-blue-900">I Made</h3>
                          <p class="text-sm text-gray-500">F&amp;B Services</p>
                      </div>
                  </div>
                  <p class="text-sm text-gray-600 leading-relaxed">
                      Peluang kapal pesiar sangat menarik, baik dari sisi karier maupun wisata.
                      Bekerja di kapal pesiar menawarkan kesempatan untuk bepergian ke berbagai
                      negara dan bertemu dengan orang-orang dari seluruh dunia.
                  </p>
              </div>
          </div>

          <!-- Slide 2 -->
          <div class="swiper-slide">
              <div class=" p-6 rounded-xl space-y-3">
                  <div class="flex items-center space-x-4">
                      <div class="w-1/4">
                          <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Maria"
                              class="rounded-full object-cover" />
                      </div>
                      <div>
                          <h3 class="font-bold text-blue-900">Maria</h3>
                          <p class="text-sm text-gray-500">Housekeeping</p>
                      </div>
                  </div>
                  <p class="text-sm text-gray-600 leading-relaxed">
                      Bekerja di hotel mengajarkan saya arti detail dan kebersihan. Setiap kamar
                      yang rapi memberi kepuasan tersendiri, apalagi ketika tamu merasa nyaman
                      dengan layanan yang saya berikan.
                  </p>
              </div>
          </div>

          <!-- Slide 3 -->
          <div class="swiper-slide">
              <div class=" p-6 rounded-xl space-y-3">
                  <div class="flex items-center space-x-4">
                      <div class="w-1/4">
                          <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="Aditya"
                              class="rounded-full object-cover" />
                      </div>
                      <div>
                          <h3 class="font-bold text-blue-900">Aditya</h3>
                          <p class="text-sm text-gray-500">Culinary / Cook</p>
                      </div>
                  </div>
                  <p class="text-sm text-gray-600 leading-relaxed">
                      Dunia dapur penuh tantangan dan kreativitas. Saya belajar banyak tentang
                      bagaimana sebuah hidangan bisa membawa pengalaman baru bagi setiap tamu.
                  </p>
              </div>
          </div>

          <!-- Slide 4 -->
          <div class="swiper-slide">
              <div class=" p-6 rounded-xl space-y-3">
                  <div class="flex items-center space-x-4">
                      <div class="w-1/4">
                          <img src="https://randomuser.me/api/portraits/women/60.jpg" alt="Anita"
                              class="rounded-full object-cover" />
                      </div>
                      <div>
                          <h3 class="font-bold text-blue-900">Anita</h3>
                          <p class="text-sm text-gray-500">Barista</p>
                      </div>
                  </div>
                  <p class="text-sm text-gray-600 leading-relaxed">
                      Menjadi barista membuat saya lebih dekat dengan tamu. Kopi bukan sekadar
                      minuman, tapi pengalaman yang bisa membuat hari seseorang lebih baik.
                  </p>
              </div>
          </div>

          <!-- Slide 5 -->
          <div class="swiper-slide">
              <div class=" p-6 rounded-xl space-y-3">
                  <div class="flex items-center space-x-4">
                      <div class="w-1/4">
                          <img src="https://randomuser.me/api/portraits/men/71.jpg" alt="Rizky"
                              class="rounded-full object-cover" />
                      </div>
                      <div>
                          <h3 class="font-bold text-blue-900">Rizky</h3>
                          <p class="text-sm text-gray-500">Butler</p>
                      </div>
                  </div>
                  <p class="text-sm text-gray-600 leading-relaxed">
                      Sebagai butler, saya belajar bahwa pelayanan terbaik datang dari perhatian
                      terhadap detail kecil dan sikap profesional setiap saat.
                  </p>
              </div>
          </div>


      </div>
      <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



  <!-- Initialize Swiper -->
  <script>
      var swiper = new Swiper(".mySwiper", {
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: "auto",
          autoplay: true,
          loop: true,
          spaceBetween:30,
          pagination: {
              el: ".swiper-pagination",
          },
      });
  </script>
