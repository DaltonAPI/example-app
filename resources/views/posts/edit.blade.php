


<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<!-- Stylesheets -->

<link href="../../common-css/bootstrap.css" rel="stylesheet">

<link href="../../common-css/ionicons.css" rel="stylesheet">

<link href="../../common-css/layerslider.css" rel="stylesheet">


<link href="../01-homepage/css/styles.css" rel="stylesheet">
<link href="../../test.css" rel="stylesheet">
<link href="../../01-homepage/css/responsive.css" rel="stylesheet">    <div >
        <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
            <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
                <div class="mb-4">
                    <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
                       Edit Post: {{ $post->title }}
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
                <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                    <form  method="POST" action="/{{$post->id}}/edit" enctype="multipart/form-data" >
                        @csrf
                        @method('PATCH')
                        <!-- Title -->

                        <x-forms.input name="title" :value="old('title', $post->title)"  required />

{{--                        <x-forms.input name="slug" :value="old('slug', $post->slug)"  required/>--}}

{{--                        <x-forms.input name="excerpt"  :value="old('excerpt', $post->excerpt)"  required />--}}

                        <x-forms.textArea name="body" >{{ old('body', $post->body) }}</x-forms.textArea>

                        <x-forms.upload name="image_url" ></x-forms.upload>



                        <select class="form-select mt-3" aria-label="Default select example" name="category_id">
                            @foreach(\App\models\Category::all() as $category  )
                                <option selected value="{{$category->id}}"
                                    {{ old('category_id', $category->id) == $category->id ? 'selected' : '' }}
                                >{{ ucwords($category->name)}}</option>
                            @endforeach
                        </select>
                        <div class="flex items-center justify-start mt-4 gap-x-2">
                            <x-submit>
                                Update
                            </x-submit>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<script src="../../common-js/jquery-3.1.1.min.js"></script>

<script src="../../common-js/tether.min.js"></script>

<script src="../../common-js/bootstrap.js"></script>

<script src="../../common-js/layerslider.js"></script>

<script src="../../common-js/scripts.js"></script>
<script src="../../test.js"></script>
