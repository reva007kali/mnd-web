<x-layout>
    @php
        $blogs = [
            [
                'img' => 'img/blog-1.jpg',
                'title' => 'Tips Sukses Bekerja di Kapal Pesiar',
                'excerpt' =>
                    'Bekerja di kapal pesiar bukan hanya soal perjalanan, tetapi juga kesiapan mental dan profesionalisme...',
                'date' => '2025-08-01',
            ],
            [
                'img' => 'img/blog-2.jpg',
                'title' => 'Kenapa Industri Perhotelan Selalu Berkembang',
                'excerpt' =>
                    'Dunia hospitality selalu menarik karena terus beradaptasi dengan teknologi dan tren global...',
                'date' => '2025-08-10',
            ],
            [
                'img' => 'img/blog-3.jpg',
                'title' => '5 Alasan Memilih Karir di Bidang F&B Service',
                'excerpt' =>
                    'F&B Service adalah salah satu bidang paling menjanjikan di industri hotel, dengan peluang luas...',
                'date' => '2025-08-15',
            ],
        ];
    @endphp

    <section
        class="min-h-[60vh] flex flex-col items-center justify-center relative bg-blue-900 text-white py-16 text-center">
        <h1 class="text-4xl font-bold">{{ ucfirst(str_replace('-', ' ', $slug)) }}</h1>
        <p class="mt-2 text-lg">Artikel & Insight Maritim Nusa Dewata</p>
    </section>

    <section class="py-12 bg-gray-50">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 bg-white rounded-xl shadow-md p-6 space-y-4">
            <p class="text-gray-600 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec justo nec nulla feugiat malesuada.
                Phasellus bibendum, metus vel malesuada gravida, sapien justo cursus lectus, vel aliquet turpis risus
                nec orci.
                Cras malesuada erat sit amet sapien malesuada, id ultrices erat sagittis.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Vivamus finibus arcu vel ipsum cursus, at ultrices felis dignissim.
                Proin luctus nec magna id ullamcorper. Sed ut fringilla ligula.
            </p>
        </div>
    </section>
</x-layout>
