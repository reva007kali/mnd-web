<x-layout>

    <x-hero></x-hero>

    <section class="lg:flex max-w-5xl gap-10 mx-auto lg:py-16 p-4">
        <div class="lg:w-1/2 space-y-2">
            <h1 class="text-3xl font-bold mb-2">Tentang Maritim Nusa Dewata</h1>
            <p><strong>Martim Nusa Dewata</strong> merupakan lembaga
                pendidikan-pelatihan yang fokus pada program
                perhotelan, pariwisata, dan kapal pesiar internasional</p>
            <p class="">Kami menawarkan berbagai program keahlian 1
                tahun untuk mempersiapkan siswa menjadi staff
                professional di hotel dan kapal pesiar. Kami berfokus
                pada program keahlian siap kerja seperti
                Housekeeping, F&B service, Culinary / Cook, Barista
                dan Executive Class.</p>
            <div class="mt-5 mb-6">
                <a href="#" class="px-4 py-2 gradient-btn text-white rounded-full hover:bg-blue-700">Read More</a>
            </div>
        </div>
        <div class="lg:w-1/2 overflow-hidden rounded-2xl">
            <img class="object-cover" src="img/about.jpeg" alt="">
        </div>
    </section>

    <section class="lg:px-20 relative space-x-10 mx-auto py-16 bg-center bg-no-repeat bg-cover"
        style="background-image: url(img/bg-2.png)">
        {{-- dark filter --}}
        <div class="w-full h-full absolute top-0 left-0 bg-black/50"></div>
        {{-- dark filter --}}
        <div class="mx-auto w-fit pb-10 relative">
            <h1 class="text-2xl lg:text-5xl font-bold text-white text-shadow-min uppercase">Program Kami</h1>
        </div>
        <div class="flex justify-center relative gap-10 flex-wrap">
            <!-- Box 1 -->
            <div class="w-[250px] bg-white rounded-xl overflow-hidden shadow-xl">
                <img class="rounded-xl shadow-lg" src="img/program-1.png" alt="Food & Beverage Service" />
                <div class="p-4 space-y-2">
                    <h3>Food & Beverage Service</h3>
                    <p class="text-xs text-gray-500">
                        Departemen yang bertugas melayani tamu di restoran, lounge, atau banquet, mulai dari penyajian
                        menu hingga pelayanan meja dengan standar internasional.
                    </p>
                    <a href="#"
                        class="px-2 py-1 gradient-btn text-xs text-white rounded-full hover:bg-blue-700">Read More</a>
                </div>
            </div>

            <!-- Box 2 -->
            <div class="w-[250px] bg-white rounded-xl overflow-hidden shadow-xl">
                <img class="rounded-xl shadow-lg" src="img/program-2.png" alt="Culinary / Cook" />
                <div class="p-4 space-y-2">
                    <h3>Culinary / Cook</h3>
                    <p class="text-xs text-gray-500">
                        Tim dapur hotel yang mengolah bahan makanan segar menjadi hidangan berkualitas tinggi,
                        menonjolkan rasa, estetika, dan kebersihan.
                    </p>
                    <a href="#"
                        class="px-2 py-1 gradient-btn text-xs text-white rounded-full hover:bg-blue-700">Read More</a>
                </div>
            </div>

            <!-- Box 3 -->
            <div class="w-[250px] bg-white rounded-xl overflow-hidden shadow-xl">
                <img class="rounded-xl shadow-lg" src="img/program-3.png" alt="Housekeeping" />
                <div class="p-4 space-y-2">
                    <h3>Housekeeping</h3>
                    <p class="text-xs text-gray-500">
                        Bagian yang memastikan kamar dan area publik hotel tetap bersih, rapi, nyaman, dan sesuai
                        standar layanan untuk menciptakan pengalaman menginap terbaik.
                    </p>
                    <a href="#"
                        class="px-2 py-1 gradient-btn text-xs text-white rounded-full hover:bg-blue-700">Read More</a>
                </div>
            </div>

            <!-- Box 4 -->
            <div class="w-[250px] bg-white rounded-xl overflow-hidden shadow-xl">
                <img class="rounded-xl shadow-lg" src="img/program-4.png" alt="Barista" />
                <div class="p-4 space-y-2">
                    <h3>Barista</h3>
                    <p class="text-xs text-gray-500">
                        Profesional yang meracik dan menyajikan kopi berkualitas di kafe hotel, sekaligus menciptakan
                        suasana hangat bagi para tamu.
                    </p>
                    <a href="#"
                        class="px-2 py-1 gradient-btn text-xs text-white rounded-full hover:bg-blue-700">Read More</a>
                </div>
            </div>

            <!-- Box 5 -->
            <div class="w-[250px] bg-white rounded-xl overflow-hidden shadow-xl">
                <img class="rounded-xl shadow-lg" src="img/premium.png"
                    alt="Premium class / Kuliah sambil kerja di luar negeri" />
                <div class="p-4 space-y-2">
                    <h3>Premium class</h3>
                    <p class="text-xs text-gray-500">
                        Program khusus untuk mahasiswa yang ingin belajar ilmu perhotelan sambil mendapatkan pengalaman
                        kerja nyata di hotel internasional.
                    </p>
                    <a href="#"
                        class="px-2 py-1 gradient-btn text-xs text-white rounded-full hover:bg-blue-700">Read More</a>
                </div>
            </div>

            <!-- Box 6 -->
            <div class="w-[250px] bg-white rounded-xl overflow-hidden shadow-xl">
                <img class="rounded-xl shadow-lg" src="img/program-6.png" alt="Executive Class" />
                <div class="p-4 space-y-2">
                    <h3>Executive Class</h3>
                    <p class="text-xs text-gray-500">
                        Kelas pelatihan intensif yang mempersiapkan tenaga profesional siap bekerja di posisi manajerial
                        hotel dan resort berbintang.
                    </p>
                    <a href="#"
                        class="px-2 py-1 gradient-btn text-xs text-white rounded-full hover:bg-blue-700">Read More</a>
                </div>
            </div>

            <!-- Box 7 -->
            <div class="w-[250px] bg-white rounded-xl overflow-hidden shadow-xl">
                <img class="rounded-xl shadow-lg" src="img/program-7.png" alt="Butler" />
                <div class="p-4 space-y-2">
                    <h3>Butler</h3>
                    <p class="text-xs text-gray-500">
                        Pelayan pribadi eksklusif di hotel bintang lima yang bertugas memenuhi kebutuhan khusus tamu
                        dengan layanan personal dan kerahasiaan tinggi.
                    </p>
                    <a href="#"
                        class="px-2 py-1 gradient-btn text-xs text-white rounded-full hover:bg-blue-700">Read More</a>
                </div>
            </div>

        </div>
    </section>

    <section class="lg:px-20 relative space-x-10 mx-auto py-16 px-4">
        <div class="flex flex-col gap-y-4 justify-center items-center text-center">
            <h1 class="lg:text-5xl font-bold">S T U D Y | <span class="text-blue-900">W O R K</span> | S E T T L E</h1>
            <p class="lg:text-xl">BELAJAR | BEKERJA | MENETAP menggambarkan siklus kehidupan yang saling
                terkait dan dipengaruhi satu sama lain. Ketiga fase ini dapat memberikan
                kesempatan untuk tumbuh, berkembang, dan mencapai tujuan hidup.</p>
        </div>
    </section>

    <section class="lg:px-20 relative space-x-10 mx-auto py-16 px-4 bg-gray-200">
        <div class="mx-auto w-fit pb-10 relative">
            <h1 class="text-3xl lg:text-5xl font-bold text-blue-900 uppercase">Peluang Karir</h1>
        </div>
        <div class="flex justify-center relative gap-10 flex-wrap">
            <!-- Box 1 -->
            <div class="w-[350px] bg-white rounded-xl overflow-hidden shadow-xl">
                <img class="rounded-xl shadow-lg" src="img/program-1.png" alt="Food & Beverage Service" />
                <div class="p-6 space-y-2">
                    <h3 class="text-xl">Peluang di Hotel</h3>
                    <p class="text-sm text-gray-500">Selain bekerja di Kapal Pesiar, peluang
                        kerja di hotel bisa sangat menjanjikan,
                        terutama bagi mereka yang mencari
                        kesempatan karir yang lebih luas, gaji
                        yang lebih tinggi, dan pengalaman di
                        dunia Hospitality.
                    </p>
                    <a href="#"
                        class="px-2 py-1 gradient-btn text-sm text-white rounded-full hover:bg-blue-700">Read More</a>
                </div>
            </div>

            <!-- Box 2 -->
            <div class="w-[350px] gradient-btn rounded-xl overflow-hidden shadow-xl">
                <img class="rounded-xl shadow-lg" src="img/program-2.png" alt="Culinary / Cook" />
                <div class="p-6 space-y-2 text-white">
                    <h3 class="text-xl">Peluang Di Kapal Pesiar</h3>
                    <p class="text-sm text-gray-200">Peluang kapal pesiar sangat menarik,
                        baik dari sisi karier maupun wisata.
                        Bekerja di kapal pesiar menawarkan
                        kesempatan untuk bepergian ke
                        berbagai negara dan bertemu dengan
                        orang-orang dari seluruh dunia.</p>
                    <a href="#"
                        class="px-2 py-1 bg-yellow-500 text-sm text-white rounded-full hover:bg-blue-700">Read More</a>
                </div>
            </div>

            <!-- Box 3 -->
            <div class="w-[350px] bg-white rounded-xl overflow-hidden shadow-xl">
                <img class="rounded-xl shadow-lg" src="img/program-3.png" alt="Housekeeping" />
                <div class="p-6 space-y-2">
                    <h3 class="text-xl">Peluang di dunia F&B</h3>
                    <p class="text-sm text-gray-500">Peluang di dunia F&B sangat luas, mulai
                        dari membuka restoran, kafe, hingga bisnis
                        katering. Selain itu, ada juga peluang untuk
                        membuat produk makanan atau
                        minuman yang unik viral.
                    </p>
                    <a href="#"
                        class="px-2 py-1 gradient-btn text-sm text-white rounded-full hover:bg-blue-700">Read More</a>
                </div>
            </div>

        </div>
    </section>

    <section class="max-w-6xl lg:flex items-center relative space-x-10 mx-auto py-16 px-4">
        <div class="lg:w-1/2 space-y-4 mb-4">
            <h1 class="text-4xl font-bold mb-2">Kenapa Harus <span class="text-blue-900">MND</span> International?
            </h1>
            <ul class="lg:list-disc lg:text-lg">
                <li><strong>Fasilitas pembelajaran</strong> yang lengkap sesuai dengan standar Industri.</li>
                <li><strong>Kurikulum</strong> yang selalu terbaru dan sesuai dengan kebutuhan IDUKA.</li>
                <li><strong>Instruktur</strong> berpengalaman dan berkompeten dibidangnya.</li>
                <li><strong>Program on the job training / internship</strong> di hotel dalam dan luar negeri.</li>
                <li><strong>Sistem praktek</strong> menggunakan standar pelayanan bintang 5.</li>
                <li><strong>Kami berkesinambungan</strong> membantu alumni untuk bekerja dalam / luar negeri.</li>
                <li><strong>Asrama dan pembelajaran bahasa Inggris</strong> untuk peserta didik.</li>
            </ul>
        </div>
        <div class="lg:w-1/2 flex flex-wrap justify-center gap-5 overflow-hidden rounded-2xl">
            <img class="object-cover lg:size-[220px] rounded-xl" src="img/11.jpg" alt="">
            <img class="object-cover lg:size-[220px] rounded-xl" src="img/12.jpg" alt="">
            <img class="object-cover lg:size-[220px] rounded-xl" src="img/13.webp" alt="">
            <img class="object-cover lg:size-[220px] rounded-xl" src="img/14.jpeg" alt="">
        </div>
    </section>

    <section class="lg:px-30 mx-auto px-4">
        <img class="lg:rounded-3xl shadow-2xl" src="img/banner.png" alt="">
    </section>

    <section class="lg:px-40 mx-auto px-4">
        <x-testimoni>
        </x-testimoni>
    </section>


</x-layout>
