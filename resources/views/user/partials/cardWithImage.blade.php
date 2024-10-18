<article
    class="w-full p-3.5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <img src="https://images.pexels.com/photos/2816903/pexels-photo-2816903.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
        alt="Thumbnail" class="object-cover w-full mb-2 rounded-lg h-52 md:h-72">
    @include('user.partials.badge')
    <a href="/artikel">
        <h5 class="my-2 text-2xl font-semibold tracking-tight text-gray-900 hover:underline dark:text-white">Lorem ipsum
            odor amet, consectetuer adipiscing elit.
            Rhoncus nisl natoque magnis conubia aenean egestas sem suscipit ad. Tellus tellus egestas, ultrices
            ullamcorper tristique finibus</h5>
    </a>
    <p class="mb-1 font-normal text-gray-500 dark:text-gray-400">Lorem ipsum odor amet, consectetuer adipiscing elit.
        Rhoncus nisl natoque magnis conubia aenean egestas sem suscipit ad. Tellus tellus egestas, ultrices
        ullamcorper tristique finibus.</p>
    <a href="/artikel" class="inline-flex items-center font-medium text-blue-600 text-md hover:underline">
        Lihat selengkapnya
        <svg class="w-3 h-3 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 9h12M9 3l6 6-6 6" />
        </svg>
    </a>
</article>
