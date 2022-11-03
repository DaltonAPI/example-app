@props(['post'])

<div class="col-lg-6 col-md-12">
    <div class="single-post">

        <div class="image-wrapper">
            @if ($post->image_extension === 'png' or $post->image_extension === 'jpg' or $post->image_extension === 'gif' )
                <img  class="rounded-xl" src="{{ $post->url ? asset($post->url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Blog Image">
            @endif
            @if ($post->image_extension === 'mp4' or $post->image_extension === 'mp3' )
                <video class="img-fluid w-100"   controls  style="max-height: 200px !important;border-radius: 15px">
                    <source src="{{ $post->url ? asset($post->url) : asset('../images/blog-7-500x400.jpg' ) }}" type="video/mp4">
                </video>
            @endif
        </div>
        <h6 class="title"><a href="/posts/{{$post->id}}"><b class="light-color">{{$post->title}}</b></a></h6>
        <div class="flex items-center ">
            <img class="w-10 h-10 rounded-full mr-4" src="{{ $post->author->avatar ? asset($post->author->url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Avatar of Writer">
            <div class="text-sm">
                <p class="text-gray-900 leading-none " style="font-weight: bold"><a  href="/?author={{$post->author->username}}">{{$post->author->name}}</a></p>
                <p class="text-gray-600">Published {{$post->created_at->diffForHumans()}}</p>
            </div>
        </div>
        <div class="icons">
            <div class="left-area">
                <x-category-button  :category="$post->category"/>
            </div>
            <ul class="right-area social-icons">
                <x-actions :post="$post"></x-actions>

            </ul>
        </div>




    </div><!-- single-post -->
</div><!-- col-sm-6 -->
