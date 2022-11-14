@props(['post'])



    <div class="col-lg-12 col-md-12 " style="margin-top: -40px;">
        <div class="single-post">

            <div class="image-wrapper">
                <a href="{{$post->body}}" >
                    @if ($post->image_extension === 'png' or $post->image_extension === 'jpg' or $post->image_extension === 'gif' or $post->image_extension === 'jpeg'or $post->image_extension === 'webp' )
                        <img  class="rounded-xl" src="{{ $post->url ? asset($post->url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Blog Image">
                    @endif
                    @if ($post->image_extension === 'mp4' or $post->image_extension === 'mp3'  or $post->image_extension === 'mov')
                        <video style=" border-radius: 15px" class="img-fluid w-100" controls autoplay muted playsinline loop poster="http://placehold.it/350x350">
                            <source src="{{ $post->url ? asset($post->url) : asset('../images/blog-7-500x400.jpg' ) }}" type="video/mp4">
                        </video>
                    @endif
                </a>
            </div>
            <h6 style="color: gray !important;" class="mb-2" ><a href="/posts/{{$post->id}}"><b>{{$post->title}}</b></a></h6>
            <div class="flex items-center" >
                <img class="w-10 h-10 rounded-full mr-4" src="{{ $post->author->avatar ? asset($post->author->url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Avatar of Writer">
                <div class="text-sm mr-5" style="margin-left: -17px">
                    <p class="text-gray-900 leading-none " style="font-weight: bold"><a  href="/?author={{$post->author->username}}">{{$post->author->name}}</a></p>
                    <p class="text-gray-600">Published {{$post->created_at->diffForHumans()}}</p>
                </div>
            </div>


            <div class="icons" style="margin-top: 8px">
                <x-category-button  :category="$post->category"/>
                <ul class="right-area social-icons">
                    <x-actions :post="$post"></x-actions>

                </ul>
            </div>




        </div><!-- single-post -->
    </div><!-- col-sm-6 -->


