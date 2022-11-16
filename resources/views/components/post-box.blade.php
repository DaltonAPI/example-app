
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


         <div  style="background-color: #212121" class="mb-5 w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                <form method="POST" action="/createPost" enctype="multipart/form-data">
                    @csrf
                    <!-- Title -->
                    <x-forms.input  name="title" id="title" placeholder="What's happening" style="margin-bottom: 15px"/>

                    <x-forms.textArea name="body" placeholder="Choose a valid url for your news" style="margin-bottom: 15px"/>
                    <x-forms.upload name="image_url" />
                    <select class="form-select mt-3" aria-label="Default select example" name="category_id" style="margin-bottom: 15px">
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

                    </div>
                </form>
            </div>


