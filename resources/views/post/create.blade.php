<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <x-input-label for="image" :value="__('Image')" />
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image"
                            :value="old('image')" autofocus />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Title')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    
                    <div class="mt-4">
                        <x-input-label for="category_id" :value="__('Category')" />
                        <select class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="category_id" id="category_id">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id' == $category->id))>{{$category->name}}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                    </div>
                    
                    <div class="mt-4">
                        <x-input-label for="content" :value="__('Content')" />
                        <x-text-textarea id="content" class="block mt-1 w-full" type="text" name="content">
                            {{ old('content') }}
                        </x-text-textarea>
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>
                    <x-primary-button class="mt-4">
                        Submit
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
