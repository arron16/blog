<x-app-layout> <x-slot name="header"> <x-post.header header="Post"/> </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-8 pb-4">
            <a href="{{ route('post.index') }}" class="rounded-md bg-blue-700 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-white hover:text-black hover:border-2 border-2 border-gray-100 hover:border-black focus-visible:outline  focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($post->author()->is(auth()->user()))
                        <div class="mt-2 flex items-center justify-end gap-x-6">
                            <form action="/post/{{ $post->id }}" method="POST">
                                @csrf
                                @method('DELETE')
    
                                <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete Post</button>
                                <a href="{{ route('post.edit', ['post' => $post->id]) }}" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit Post</a>
                            </form>
                        </div>
                    @endif
    
                    <x-post.show :post="$post"/>
                </div>
            </div>
        </div>
    
        <br>
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6">
                        <ul role="list" class="divide-y divide-gray-100">
                            <li class="flex justify-between gap-x-6 py-5">
                                <strong>Comments</strong>
                            </li>
    
                            <x-comment.form :post="$post" />
    
                            @foreach ($comments as $comment)
                                <x-comment.item :comment="$comment" />
                            @endforeach
                          </ul>
    
                          {{ $comments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>