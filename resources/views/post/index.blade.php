<x-app-layout>
    <x-slot name="header">

        <div class="flex gap-5">        
            <x-post.header header="Dashboard"/>
            <div class=" gap-x-6">
                <a href="{{ route('post.create') }}" class="rounded-md bg-blue-700 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-white hover:text-black hover:border-2 border-2 border-gray-100 hover:border-black focus-visible:outline  focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create New Post</a>
            </div></div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">

        
                    <div class="grid gap-5">
            
                    @foreach ($posts as $post)
                        <x-post.item :post="$post"/>
                    @endforeach

                </div>

            </div>
        </div>
    </div> 
</x-app-layout>