@foreach ($formulirs as $formulir)
    <article
        class="w-full p-3.5 my-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <span
            class="bg-red-100 text-red-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400">
            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 24 24">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zM13 9V3.5L18.5 9H13z" />
            </svg>
            PDF
        </span>

        <a href="#">
            <h5 class="my-2 text-2xl font-semibold tracking-tight text-gray-900 hover:underline dark:text-white">{{$formulir->name}}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">One of the things I always loved about the web is its
            immediacy. You write a piece of code, publish it somewhere and people can access it.</p>
        <a href="#" class="inline-flex items-center font-medium text-blue-600 text-md hover:underline">
            Read more
            <svg class="w-3 h-3 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 9h12M9 3l6 6-6 6" />
            </svg>
        </a>
    </article>
@endforeach
