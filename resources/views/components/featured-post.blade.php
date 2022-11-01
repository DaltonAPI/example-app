@props(['post'])


    <div class="single-post">
        <div class="flex items-center mb-2">
            <img class="w-10 h-10 rounded-full mr-4"  src="{{ $post->author->avatar ? asset($post->author->url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Avatar of Writer">
            <div class="text-sm">
                <p class="text-gray-900 leading-none " style="font-weight: bold"><a href="/?author={{$post->author->username}} ">{{$post->author->name}}</a></p
                <p class="text-gray-600">Published {{$post->created_at->diffForHumans()}}</p>

            </div>
        </div>
        <div class="image-wrapper">


            @if ($post->image_extension === 'png' or $post->image_extension === 'jpg' or $post->image_extension === 'gif' )
                <img  class="rounded-xl" src="{{ $post->url ? asset($post->url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Blog Image">
            @endif
                @if ($post->image_extension === 'mp4' or $post->image_extension === 'mp3' )
                    <video controls  class="img-fluid w-100"  >
                        <source src="{{ $post->url ? asset($post->url) : asset('../images/blog-7-500x400.jpg' ) }}" type="video/mp4">
                    </video>
            @endif

        </div>
         <div class="icons">
            <div class="left-area">
                <x-category-button  :category="$post->category"/>
            </div>
            <x-actions :post="$post"></x-actions>
        </div>

        <h3 class="title"><a href="/posts/{{$post->id}}"><b class="light-color">{{$post->title}}</b></a></h3>
        <p>{{$post->excerpt}}</p>



    </div><!-- single-post -->

