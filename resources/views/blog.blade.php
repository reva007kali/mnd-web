<x-layout>

    <section
        class="min-h-[60vh] w-full flex flex-col items-center justify-center relative bg-center bg-no-repeat bg-cover"
        style="background-image: url(img/blog.jpg)">

        {{-- dark filter --}}
        <div class="w-full h-full absolute top-0 left-0 bg-black/30"></div>
        {{-- dark filter --}}

        {{-- hero content --}}
        <div class="relative flex flex-col items-center justify-center">
            <h1 class="lg:text-6xl text-3xl font-bold text-white uppercase text-shadow-min text-center">Blog</h1>
            <h2 class="text-white lg:text-3xl text-xl">Berita, Artikel, & Tips Dunia Perhotelan</h2>
        </div>
        {{-- hero content --}}

    </section>

    <!-- Blog List -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8">
                @php
                    $blogs = [
                        [
                            'img' => 'img/blog-1.jpg',
                            'title' => 'Tips Sukses Bekerja di Kapal Pesiar',
                            'excerpt' => 'Bekerja di kapal pesiar bukan hanya soal perjalanan, tetapi juga kesiapan mental dan profesionalisme...',
                            'date' => '2025-08-01'
                        ],
                        [
                            'img' => 'img/blog-2.jpg',
                            'title' => 'Kenapa Industri Perhotelan Selalu Berkembang',
                            'excerpt' => 'Dunia hospitality selalu menarik karena terus beradaptasi dengan teknologi dan tren global...',
                            'date' => '2025-08-10'
                        ],
                        [
                            'img' => 'img/blog-3.jpg',
                            'title' => '5 Alasan Memilih Karir di Bidang F&B Service',
                            'excerpt' => 'F&B Service adalah salah satu bidang paling menjanjikan di industri hotel, dengan peluang luas...',
                            'date' => '2025-08-15'
                        ],
                    ];
                @endphp

                @foreach ($blogs as $blog)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
                        <img src="{{ asset($blog['img']) }}" alt="{{ $blog['title'] }}" class="w-full h-48 object-cover">
                        <div class="p-5 space-y-2">
                            <span class="text-xs text-gray-500">{{ date('d M Y', strtotime($blog['date'])) }}</span>
                            <h3 class="font-bold text-lg text-blue-900">{{ $blog['title'] }}</h3>
                            <p class="text-gray-600 text-sm">{{ $blog['excerpt'] }}</p>
                            <a href="{{ route('blog.show', ['slug' => Str::slug($blog['title'])]) }}"
                               class="inline-block mt-3 text-blue-600 hover:underline text-sm font-semibold">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>