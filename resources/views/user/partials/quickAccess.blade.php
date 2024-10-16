<article
    class="w-full p-3.5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <div class="border-gray-200 border-b-[5px] dark:border-gray-700">
        <h1 class="pb-2 text-xl font-semibold text-black dark:text-white">Akses Cepat</h1>
    </div>
    <div class="overflow-y-auto h-[206px] mt-3 pr-3">
        <ul class="space-y-3 list-none">
            @for ($i = 0; $i < 10; $i++)
                <li class="flex items-center justify-between">
                    <span>SOP Pelaksanaan Tugas Akhir 2022</span>
                    <a href="#" class="text-red-500 hover:underline">Unduh</a>
                </li>
            @endfor
        </ul>
    </div>
</article>
