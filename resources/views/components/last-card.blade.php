@props(['post'])

<div class="col-lg-12 col-md-12">
    <div class="single-post post-style-2">
        <div class="flex items-center mb-2">
            <img class="w-10 h-10 rounded-full mr-4" src="{{ $post->author->avatar ? asset('storage/' .$post->author->avatar) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Avatar of Writer">
            <div class="text-sm">
                <p class="text-gray-900 leading-none " style="font-weight: bold"><a  href="/?author={{$post->author->username}}">{{$post->author->name}}</a></p>
                <p class="text-gray-600">Published {{$post->created_at->diffForHumans()}}</p>
            </div>
        </div>
        <div class="image-wrapper width-50 left-area ">

            @if ($post->image_extension === 'png' or $post->image_extension === 'jpg' or $post->image_extension === 'gif' )
                <img  class="rounded-xl" src="{{ $post->image_url ? asset('storage/' .$post->image_url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Blog Image">
            @endif
            @if ($post->image_extension === 'mp4' or $post->image_extension === 'mp3' )
                <video  controls style="min-width: 100%">
                    <source src="{{ $post->image_url ? asset('storage/' .$post->image_url) : asset('../images/blog-7-500x400.jpg' ) }}" type="video/mp4">
                </video>
            @endif


        </div>

        <div class="post-details width-50 right-area">

            <div class="icons">
                <div class="left-area">
                  <x-category-button  :category="$post->category"/>
                </div>
                <ul class="right-area social-icons">
                    <x-actions :post="$post"></x-actions>
                </ul>
            </div>
            <h6 class="date"><em>Published {{$post->created_at->diffForHumans()}}</em></h6>
            <h3 class="title"><a href="/posts/{{$post->id}}"><b class="light-color">{{$post->title}}y</b></a></h3>
{{--            <p>{{$post->body}}</p>--}}

        </div><!-- post-details -->

    </div><!-- single-post -->
</div><!-- col-sm-6 -->
