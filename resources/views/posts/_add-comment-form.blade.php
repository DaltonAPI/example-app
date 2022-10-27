@auth
    <x-panel>
        <h4 class="title"><b class="light-color">Leave your thoughts</b></h4>
        <div class="leave-comment">
            <form action="/posts/{{$post->id}}/comments" method="get" enctype="multipart/form-data"class="w-full p-4">

                <div class="mb-2">
                    <label for="comment" class="text-lg text-gray-600">Add a comment</label>
                    <input class="w-full h-20 p-2 border rounded focus:outline-none focus:ring-gray-300 focus:ring-1"
                           name="body" placeholder="" required/>
                    @error('body')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <input style="display: none" type="text" name="id" value="{{$post->id }}"/>
                </div>

                <button type="submit" class="btn btn-2">Comment</button>
            </form>

        </div><!-- leave-comment -->
    </x-panel>
@else
    <p>
        <a class="underline text-sm text-gray-600 hover:text-gray-900">Register</a>
        or  <a class="underline text-sm text-gray-600 hover:text-gray-900">Login</a>
        to leave a comment
    </p>

@endauth
