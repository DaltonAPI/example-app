@props(['post'])

<div class="latest-post" href="#">
    <div class="l-post-image">
        @if ($post->image_extension === 'png' or $post->image_extension === 'jpg' or $post->image_extension === 'gif' )
            <img  class="rounded-xl" src="{{ $post->image_url ? asset('storage/' .$post->image_url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Blog Image">
        @endif
        @if ($post->image_extension === 'mp4' or $post->image_extension === 'mp3' )
            <video  class="img-fluid w-100"  style="height: 500px">
                <source src="{{ $post->image_url ? asset('storage/' .$post->image_url) : asset('../images/blog-7-500x400.jpg' ) }}" type="video/mp4">
            </video>
        @endif
    </div>
    <div class="post-info">
        <h5><a href="#"><b class="light-color">{{$post->title}}</b></a></h5>
        <h6 class="date"><em>{{$post->created_at->diffForHumans()}}</em></h6>
    </div>
</div>
