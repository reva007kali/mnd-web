<x-layout>

    <section
        class="min-h-[60vh] w-full flex flex-col items-center justify-center relative bg-center bg-no-repeat bg-cover"
        style="background-image: url(img/gallery-bg.png)">

        {{-- dark filter --}}
        <div class="w-full h-full absolute top-0 left-0 bg-black/30"></div>
        {{-- dark filter --}}

        {{-- hero content --}}
        <div class="relative flex flex-col items-center justify-center">
            <h1 class="lg:text-6xl text-3xl font-bold text-white uppercase text-shadow-min text-center">Gallery</h1>
            <h2 class="text-white lg:text-3xl text-xl">MND International</h2>
        </div>
        {{-- hero content --}}

    </section>

    <!-- Gallery Grid -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 lg:gap-8">
                @php
                    $photos = [
                        [
                            'img' => 'img/12.jpg',
                            'caption' => 'Kegiatan F&B Service Training',
                            'date' => '2025-08-01',
                        ],
                        ['img' => 'img/20.jpeg', 'caption' => 'Praktikum Culinary Cook', 'date' => '2025-08-05'],
                        ['img' => 'img/11.jpg', 'caption' => 'Kelas Housekeeping', 'date' => '2025-08-10'],
                        ['img' => 'img/21.jpeg', 'caption' => 'Barista Workshop', 'date' => '2025-08-15'],
                        [
                            'img' => 'img/22.jpeg',
                            'caption' => 'Executive Class Graduation',
                            'date' => '2025-08-20',
                        ],
                        [
                            'img' => 'img/about-hero.jpeg',
                            'caption' => 'Outbound & Team Building',
                            'date' => '2025-08-25',
                        ],
                    ];
                @endphp

                @foreach ($photos as $index => $photo)
                    <div class="relative group rounded-lg overflow-hidden cursor-pointer"
                        onclick="openModal('{{ asset($photo['img']) }}', '{{ $photo['caption'] }}', '{{ $photo['date'] }}')">
                        <img src="{{ asset($photo['img']) }}" alt="{{ $photo['caption'] }}"
                            class="w-full h-48 object-cover rounded-lg shadow-md group-hover:opacity-80 transition">
                        <div
                            class="absolute inset-0 bg-black/60 flex flex-col justify-end p-3 opacity-0 group-hover:opacity-100 transition">
                            <p class="text-white text-sm font-semibold">{{ $photo['caption'] }}</p>
                            <span class="text-gray-300 text-xs">{{ date('d M Y', strtotime($photo['date'])) }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modal Popup -->
    <div id="galleryModal" class="fixed inset-0 bg-black bg-opacity-80 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg max-w-2xl w-full mx-4 overflow-hidden">
            <div class="relative">
                <button onclick="closeModal()" class="absolute top-2 right-2 bg-gray-100 p-2 rounded-full">
                    <i data-feather="x" class="w-5 h-5 text-gray-700"></i>
                </button>
                <img id="modalImage" src="" class="w-full object-contain max-h-[70vh]" />
            </div>
            <div class="p-4">
                <p id="modalCaption" class="text-gray-800 font-semibold"></p>
                <span id="modalDate" class="text-gray-500 text-sm"></span>
            </div>
        </div>
    </div>

    <script>
        function openModal(img, caption, date) {
            document.getElementById("modalImage").src = img;
            document.getElementById("modalCaption").textContent = caption;
            document.getElementById("modalDate").textContent = new Date(date).toLocaleDateString("id-ID", {
                day: "numeric",
                month: "long",
                year: "numeric"
            });
            document.getElementById("galleryModal").classList.remove("hidden");
            document.getElementById("galleryModal").classList.add("flex");
        }

        function closeModal() {
            document.getElementById("galleryModal").classList.add("hidden");
            document.getElementById("galleryModal").classList.remove("flex");
        }

        feather.replace();
    </script>
</x-layout>
