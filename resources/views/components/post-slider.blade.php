@props(['posts'])
<div class="main-slider">
    <div id="slider">
        @foreach ($posts->skip(2)->take(2) as $post)
            <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
                @if ($post->image_extension === 'png' or $post->image_extension === 'jpg' or $post->image_extension === 'gif' )
                    <img  class="rounded-xl" src="{{ $post->image_url ? asset('storage/' .$post->image_url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Blog Image">
                @endif
                @if ($post->image_extension === 'mp4' or $post->image_extension === 'mp3' )
                    <video  controls >
                        <source  src="{{ $post->image_url ? asset('storage/' .$post->image_url) : asset('../images/blog-7-500x400.jpg' ) }}" type="video/mp4">
                    </video>
                @endif

                <div class="slider-content ls-l" style="top:60%; left:30%;" data-ls="offsetyin:100%; offsetxout:-50%; durationin:800; delayin:100; durationout:400; parallaxlevel:0;">
                    <h6 ><b>{{$post->title}}</b></h6>
                    <x-category-button  :category="$post->category"/>
                    <h6>Published {{$post->created_at->diffForHumans()}}</h6>
                </div>

            </div>
        @endforeach




    </div>
</div>
