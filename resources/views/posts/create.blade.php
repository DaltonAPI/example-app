

<x-layout>
    <div style="margin-top: 200px">
        <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
            <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
                <div class="mb-4">
                    <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
                        Create Post
                    </h1>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session()->has('message'))
                    <div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{!! session('message') !!}</div>
                @endif
                <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                    <form  method="POST" action="/createPost" enctype="multipart/form-data">
                        @csrf
                        <!-- Title -->
                        <x-forms.input  name="title" id="title"/>

                        <x-forms.textArea name="body" />

                        <x-forms.upload name="image_url" />



                        <select class="form-select mt-3" aria-label="Default select example" name="category_id">
                            @foreach($categories as $category  )
                                <option selected value="{{$category->id}}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}
                                >{{ ucwords($category->name)}}</option>
                            @endforeach
                        </select>
                        <div class="flex items-center justify-start mt-4 gap-x-2">
                            <x-submit>
                                Post
                            </x-submit>
                            <button type="submit"
                                    class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
