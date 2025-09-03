<x-layout>
    <section
        class="min-h-screen w-full flex flex-col items-center justify-center relative bg-center bg-no-repeat bg-cover"
        style="background-image: url(img/about-hero.jpeg)">

        {{-- dark filter --}}
        <div class="w-full h-full absolute top-0 left-0 bg-black/30"></div>
        {{-- dark filter --}}

        {{-- hero content --}}
        <div class="relative flex flex-col items-center justify-center">
            <h1 class="lg:text-6xl text-4xl font-bold text-white uppercase text-shadow-min text-center">About us</h1>
            <h2 class="text-white lg:text-3xl">MND International</h2>
        </div>
        {{-- hero content --}}

    </section>

    <!-- Hero Section -->
    <section class="relative bg-blue-900 text-white py-20">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 text-center">
            <p class="text-2xl max-w-3xl mx-auto">
                Maritim Nusa Dewata merupakan lembaga pendidikan-pelatihan yang fokus pada program
                perhotelan, pariwisata, dan kapal pesiar internasional.
            </p>
        </div>
    </section>

    <!-- Profil Singkat -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 grid md:grid-cols-2 gap-10 items-center">
            <!-- Left Image -->
            <div>
                <img src="{{ asset('img/about.jpeg') }}" alt="About Maritim Nusa Dewata"
                     class="rounded-xl shadow-lg">
            </div>
            <!-- Right Text -->
            <div>
                <h2 class="text-2xl font-bold text-blue-900 mb-4">Profil Singkat</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    MND International menawarkan berbagai program keahlian 1 tahun untuk mempersiapkan siswa menjadi staff profesional
                    di hotel dan kapal pesiar. Fokus kami adalah membekali peserta dengan keterampilan siap kerja sesuai
                    standar industri internasional.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    Program unggulan kami mencakup <strong>Housekeeping</strong>, <strong>F&B Service</strong>,
                    <strong>Culinary Cook</strong>, <strong>Barista</strong>, dan <strong>Executive Class</strong>.
                </p>
            </div>
        </div>
    </section>

    <!-- Tujuan Program Studi (Alternate) -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 grid md:grid-cols-2 gap-10 items-center">
            <!-- Left Text -->
            <div>
                <h2 class="text-2xl font-bold text-blue-900 mb-6">Tujuan Program Studi</h2>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <i data-feather="book-open" class="w-6 h-6 text-blue-900"></i>
                        <p class="text-gray-700">Mendidik dan melatih untuk meningkatkan pengetahuan dan keterampilan dalam bidang perhotelan.</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i data-feather="users" class="w-6 h-6 text-blue-900"></i>
                        <p class="text-gray-700">Menciptakan tenaga yang bertanggung jawab, disiplin, dan berkepribadian mantap sesuai kebutuhan perkembangan ilmu dan perhotelan.</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i data-feather="globe" class="w-6 h-6 text-blue-900"></i>
                        <p class="text-gray-700">Mampu menghadapi perubahan dan perkembangan pesat dunia perhotelan, didorong oleh globalisasi dan kemajuan teknologi di bidang pariwisata.</p>
                    </div>
                </div>
            </div>
            <!-- Right Image -->
            <div>
                <img src="{{ asset('img/12.jpg') }}" alt="Tujuan Program"
                     class="rounded-xl shadow-lg">
            </div>
        </div>
    </section>

    <!-- Visi (Alternate again) -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 grid md:grid-cols-2 gap-10 items-center">
            <!-- Left Image -->
            <div>
                <img src="{{ asset('img/premium.png') }}" alt="Visi"
                     class="rounded-xl shadow-lg">
            </div>
            <!-- Right Text -->
            <div>
                <h2 class="text-2xl font-bold text-blue-900 mb-6">Visi</h2>
                <div class="flex items-start space-x-3">
                    <i data-feather="target" class="w-6 h-6 text-blue-900"></i>
                    <p class="text-gray-700">
                        Menjadi program studi unggul dan terkemuka yang menghasilkan lulusan berkualitas,
                        memenuhi kebutuhan industri perhotelan, dan mampu bersaing di tingkat global.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Misi Program Studi -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 grid md:grid-cols-2 gap-10 items-center">
            <!-- Left Text -->
            <div>
                <h2 class="text-2xl font-bold text-blue-900 mb-6">Misi Program Studi</h2>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <i data-feather="layers" class="w-6 h-6 text-blue-900"></i>
                        <p class="text-gray-700">Melaksanakan pembelajaran teori dan praktik perhotelan sesuai standar kualitas kerja.</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i data-feather="cpu" class="w-6 h-6 text-blue-900"></i>
                        <p class="text-gray-700">Menerapkan ilmu pengetahuan dan teknologi dalam pengkajian, penelitian, dan kerja sama.</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i data-feather="handshake" class="w-6 h-6 text-blue-900"></i>
                        <p class="text-gray-700">Menjalin kerja sama dengan pihak internasional untuk meningkatkan kualitas lulusan.</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <i data-feather="award" class="w-6 h-6 text-blue-900"></i>
                        <p class="text-gray-700">Mengembangkan karakter mahasiswa agar berwawasan global, beretika, dan berkontribusi pada peningkatan kualitas hidup masyarakat.</p>
                    </div>
                </div>
            </div>
            <!-- Right Image -->
            <div>
                <img src="{{ asset('img/hero-img.png') }}" alt="Misi Program"
                     class="rounded-xl shadow-lg">
            </div>
        </div>
    </section>

    <!-- Motto -->
    <section class="py-16 bg-blue-900 text-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">S T U D Y | W O R K | S E T T L E</h2>
            <p class="max-w-2xl mx-auto text-lg">
                BELAJAR | BEKERJA | MENETAP menggambarkan siklus kehidupan yang saling terkait
                untuk tumbuh, berkembang, dan mencapai tujuan hidup.
            </p>
        </div>
    </section>
</x-layout>
