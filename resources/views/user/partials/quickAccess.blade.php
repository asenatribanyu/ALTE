<article
    class="w-full p-3.5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <div class="border-gray-200 border-b-[5px] dark:border-gray-700">
        <h1 class="pb-2 text-xl font-semibold text-black dark:text-white">Akses Cepat</h1>
    </div>
    <div class="overflow-y-auto h-[206px] mt-3 pr-3">
        <ul class="space-y-3 list-none">
            @foreach ($formulirs as $formulir)
                <li class="flex items-center justify-between">
                    <div class="flex items-center">
                        <span
                            class="bg-red-100 text-red-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400 me-2">
                            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M4 2a2 2 0 0 1 2-2h6.293a1 1 0 0 1 .707.293l4.707 4.707A1 1 0 0 1 18 5.707V16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V2Zm9 0v4h4l-4-4ZM6 12h8v-1H6v1Zm0 2h8v-1H6v1Zm0 2h5v-1H6v1Z" />
                            </svg>
                            PDF
                        </span>
                        <span class="text-green-700">{{ $formulir->name }}</span>
                    </div>
                    <a href="/storage/formulir/{{ $formulir->file }}" class="text-blue-700 hover:underline">Unduh</a>
                </li>
            @endforeach
            @foreach ($artikels as $artikel)
                <li class="flex items-center justify-between">
                    <div class="flex items-center">
                        <span
                            class="bg-red-100 text-red-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400 me-2">
                            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M4 2a2 2 0 0 1 2-2h6.293a1 1 0 0 1 .707.293l4.707 4.707A1 1 0 0 1 18 5.707V16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V2Zm9 0v4h4l-4-4ZM6 12h8v-1H6v1Zm0 2h8v-1H6v1Zm0 2h5v-1H6v-1Z" />
                            </svg>
                            PDF
                        </span>
                        <span class="text-green-700">{{ $artikel->judul }}</span>
                    </div>
                    <a href="/storage/{{ $artikel->file }}" class="text-blue-700 hover:underline">Unduh</a>
                </li>
            @endforeach
        </ul>
    </div>
</article>
