<div class="w-full">
    <div class="flex flex-col gap-3 md:flex-row">
        <div class="w-full md:w-8/12">
            <div
                class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 p-3.5">
                <h1 class="pb-2 text-3xl font-bold border-b-4 border-gray-200 dark:text-white">
                    Struktur Organisasi
                </h1>
                @include('user.partials.badge')
                <img src="{{ asset('img/PNPStrukturOrganisasi.png') }}" alt="Thumbnail"
                    class="object-cover w-full mt-3 rounded-lg">
                <p class="my-3 text-justify text-gray-500 dark:text-gray-400">
                    Laboratorium dipimpin oleh seorang kepala laboratorium. Dalam
                    pelaksanaan praktikum, kepala labor dibantu oleh Dosen pengampu bidang kajian
                    antara lain Elektronika Daya, Mesin Arus Searah, Mesin Arus Bolak Balik, Listrik
                    Dasar dan Pengukuran dan Elektronika Dasar dan Instrument. Dalam pelaksanaan
                    administrasi dan pengelolaan asset praktikum, kepala labor dibantu oleh seorang
                    teknisi/ laboran.
                </p>
            </div>
        </div>
        <div class="w-full md:w-4/12">
            @foreach ($randomArtikels as $artikel)
                @include('user.partials.readAlso')
            @endforeach
        </div>
    </div>
</div>
