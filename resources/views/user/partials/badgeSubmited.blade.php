<div class="flex flex-wrap items-center gap-2">
    <span
        class="bg-red-100 text-red-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400">
        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 24 24">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zM13 9V3.5L18.5 9H13z" />
        </svg>
        @if (auth()->user()->document()->latest()->first()->created_at->diffInDays(now()) > 7 && auth()->user()->document()->latest()->first()->tipe == $formulir->name )
        PDF
        @elseif(auth()->user()->document()->latest()->first()->created_at->diffInDays(now()) <= 7 && auth()->user()->document()->latest()->first()->tipe == $formulir->name)
        {{ Str::after(auth()->user()->document()->latest()->first()->file,'document/') }}
        @else
        PDF
        @endif
        
    </span>
    @if (auth()->user()->document()->latest()->first()->created_at->diffInDays(now()) > 7 && auth()->user()->document()->latest()->first()->tipe == $formulir->name)
        
    @elseif(auth()->user()->document()->latest()->first()->created_at->diffInDays(now()) <= 7 && auth()->user()->document()->latest()->first()->tipe == $formulir->name)
        <span
        class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">
            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 24 24">
                <path d="M9 16.2l-3.5-3.5L4 14l5 5 10-10-1.5-1.5L9 16.2z" />
            </svg>
            Submitted
        </span>
        <span
        class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">
        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
        </svg>
        {{ auth()->user()->document()->latest()->first()->created_at->format('Y-m-d') }}
    </span>
    @endif
</div>
