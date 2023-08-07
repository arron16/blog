<x-app-layout>
    <x-slot name="header">
        <x-post.header header="Create New Post"/>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6">
                        <x-post.form isEdit="{{ false }}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>