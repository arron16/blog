<div class="mx-auto max-w-7xl gap-x-8 gap-y-20 px-6">
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
        {{ $post->title }}
    </h2>

    <p class="my-10 text-lg leading-8 text-gray-600">
        {{ $post->body }}
    </p>

    <ul role="list">
        <li>
            <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="{{ $post->user->avatar }}" alt="">
                <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">
                        {{ $post->user->name }}
                    </h3>
                    <p class="text-sm font-semibold leading-6 text-indigo-600">
                        {{ $post->user->email }}
                    </p>
                </div>
            </div>
        </li>

        <li class="justify-end flex">
            <div class="gap-x-4">
                <p class="mt-1 text-xs leading-5 text-gray-500">
                    <time datetime="2023-01-23T13:23Z">
                        {{ $post->created_at->format('F d, Y') }}
                    </time>
                </p>
            </div>
        </li>
    </ul>  
</div>