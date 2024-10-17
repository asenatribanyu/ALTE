<div class="w-full">
    <div class="flex gap-3">
        <div class="w-8/12">
            <div
                class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 p-3.5">
                <h1 class="text-3xl font-bold dark:text-white">Lorem ipsum odor amet, consectetuer adipiscing elit.
                    Rhoncus nisl natoque magnis conubia aenean egestas sem suscipit ad. Tellus tellus egestas, ultrices
                    ullamcorper tristique finibus</h1>
                @include('user.partials.badge')
                <img src="https://images.pexels.com/photos/1628061/pexels-photo-1628061.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Thumbnail" class="object-cover w-full mt-3 rounded-lg">
                <p class="my-3 text-justify text-gray-500 dark:text-gray-400">Lorem ipsum odor amet, consectetuer
                    adipiscing
                    elit.
                    Rhoncus nisl natoque magnis conubia aenean egestas sem suscipit ad. Tellus tellus egestas, ultrices
                    ullamcorper tristique finibus. Justo diam nisl nisl hendrerit aptent maximus suscipit. Leo tempor
                    quisque scelerisque pulvinar tempus curae. Aplatea dolor sed, feugiat leo maximus efficitur
                    tincidunt.
                    Erat montes blandit pharetra natoque sodales hendrerit quisque. Enim proin neque ultrices semper
                    velit
                    curabitur.
                    Lorem ipsum odor amet, consectetuer adipiscing elit.
                    Rhoncus nisl natoque magnis conubia aenean egestas sem suscipit ad. Tellus tellus egestas, ultrices
                    ullamcorper tristique finibus. Justo diam nisl nisl hendrerit aptent maximus suscipit. Leo tempor
                    quisque scelerisque pulvinar tempus curae. Aplatea dolor sed, feugiat leo maximus efficitur
                    tincidunt.
                    Erat montes blandit pharetra natoque sodales hendrerit quisque. Enim proin neque ultrices semper
                    velit
                    curabitur.</p>
            </div>
        </div>
        <div class="w-4/12">
            @for ($i = 0; $i < 3; $i++)
                @include('user.partials.readAlso')
            @endfor
        </div>
    </div>
</div>
