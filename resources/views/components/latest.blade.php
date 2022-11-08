@props(['post'])

<div class="latest-post" href="#">
    <div class="l-post-image">
        @if ($post->image_extension === 'png' or $post->image_extension === 'jpg' or $post->image_extension === 'gif' or $post->image_extension === 'jpeg')
            <img  class="" src="{{ $post->url ? asset($post->url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Blog Image">
        @endif
        @if ($post->image_extension === 'mp4' or $post->image_extension === 'mp3' )
            <video  controls class="img-fluid w-100"  >
                <source src="{{ $post->url ? asset($post->url) : asset('../images/blog-7-500x400.jpg' ) }}" type="video/mp4">
            </video>
        @endif
    </div>
    <div class="post-info">
        <h6><a href="#"><b class="light-color">{{$post->title}}</b></a></h6>

    </div>
</div>
