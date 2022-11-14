@props(['post'])

<div class="latest-post" href="#">
    <div class="l-post-image">
        <a href="{{$post->body}}">
            <a href="{{$post->body}}" >
                @if ($post->image_extension === 'png' or $post->image_extension === 'jpg' or $post->image_extension === 'gif' or  $post->image_extension === 'webp' )
                    <img  class="rounded-xl" src="{{ $post->url ? asset($post->url) : "" }}" alt="Blog Image">
                @endif
                @if ($post->image_extension === 'mp4' or $post->image_extension === 'mp' or $post->image_extension === 'mov' )
                    <video style=" border-radius: 15px" class="img-fluid w-100" controls autoplay muted playsinline loop poster="http://placehold.it/350x350">
                        <source src="{{ $post->url ? asset($post->url) : asset('../images/blog-7-500x400.jpg' ) }}" type="video/mp4">
                    </video>
                @endif
            </a>
        </a>
    </div>
    <div class="post-info">
        <h6><a href="#"><b class="light-color">{{$post->title}}</b></a></h6>

    </div>
</div>
