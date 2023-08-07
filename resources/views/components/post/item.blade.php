
<div class="bg-white hover:bg-gray-900 transition duration-300 ease-in-out border-2 border-gray-500 hover:text-white hover:border-4 hover:scale-110 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" >
    <div class="p-6 dark:text-gray-100">
        <a href="/post/{{ $post->id }}" class="w-[1152px] h-[280px] absolute">
        <article class="flex max-w-xl flex-col items-start justify-between">
            <img src="{{ $post->user->avatar }}" alt="" class="h-10 w-10 rounded-full border border-gray-400 bg-gray-50">
            <div class="relative mt-12 flex items-center gap-x-2">
                <div class="text-sm leading-6">
                    <p class="font-bold ">
                        <a href="/post/{{ $post->id }}">
                            <span class="absolute inset-0"></span>
                            {{ $post->user->name }}
                        </a>
                    </p>
                    <p>
                        {{ $post->user->email }}
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-x-4 text-xs">
                <time datetime="2020-03-16" >{{ $post->created_at->format('F d, Y') }}</time>
            </div>
            <div class="group relative">
                <h3 class="mt-3 text-lg font-semibold leading-6 ">
                    <a href="/post/{{ $post->id }}">
                        <span class="absolute inset-0"></span>
                        {{ $post->title }} 
                </h3>
                <p class="mt-3 line-clamp-3 text-sm leading-6 w-[1050px]">
                    {{ $post->body }}
                </p>
            </div>
        </article>
          </a> 
    </div>
</div>
