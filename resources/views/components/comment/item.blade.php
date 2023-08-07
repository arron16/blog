<li class="flex justify-between gap-x-6 py-5">
    <div class="flex gap-x-4">
        <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{ $comment->user->avatar }}" alt="">
        <div class="min-w-0 flex-auto">
            <p class="text-sm font-semibold leading-6 text-gray-900">
                {{ $comment->user->name }}
            </p>
            <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                {{ $comment->user->email }}
            </p>
        </div>

        <p>{{ $comment->comment }}</p>
    </div>

    <div class="hidden sm:flex sm:flex-col sm:items-end">
        @if (auth()->user()->id === $comment->user_id)
            <p class="text-sm leading-6 text-gray-900">
                <form action="/comment/{{ $comment->id }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete Comment</button>
                </form>
            </p>
        @endif

        <p class="mt-1 text-xs leading-5 text-gray-500">
            <time datetime="2023-01-23T13:23Z">
                {{ $comment->created_at->diffForHumans() }}
            </time>
        </p>
    </div>
</li>