<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <x-category-tabs/>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg my-8">
                <div class="p-4 text-gray-900 grid grid-cols-2 md:grid-cols-3 gap-4">
                    @forelse ($posts as $post)
                       <x-post-item :post='$post' />
                    @empty
                        <div>
                            <p class="text-gray-900">No posts found.</p>
                        </div>
                    @endforelse
                </div>
            </div>
            {{ $posts->onEachSide(1)->links() }}
        </div>
    </div>
</x-app-layout>
