@foreach ($formulirs as $formulir)
    <article
        class="w-full p-3.5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 flex flex-col">
        <div>
            @include('user.partials.badgeSubmited')
        </div>
        <div class="flex-grow">
            <h5 class="my-2 text-2xl font-semibold tracking-tight text-gray-900 hover:underline dark:text-white">
                {{ $formulir->name }}
            </h5>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                Lorem ipsum odor amet, consectetuer adipiscing elit. Hac mi elit velit hendrerit nullam tempus dictum
                interdum. Ullamcorper porta risus rhoncus nisl donec.
            </p>
        </div>
        <div class="flex gap-2 mt-auto">
            <a href="/pratinjau">
                <button type="button"
                    class="px-3 py-2 text-sm font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Pratinjau
                </button>
            </a>
            <button type="button" onclick="window.location.href='/storage/formulir/{{ $formulir->file }}';"
                class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Unduh
            </button>
            @auth
                <button type="button" data-modal-target="upload-form-modal-{{ $formulir->id }}"
                    data-modal-toggle="upload-form-modal-{{ $formulir->id }}"
                    class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Unggah Formulir
                </button>
            @endauth
            @include('user.partials.uploadFormModal')
        </div>
    </article>
@endforeach
