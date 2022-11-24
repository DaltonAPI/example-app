@props(['post'])



    <div class="col-lg-6 col-md-6 " style="margin-top: -40px;">
        <div class="single-post">
            <div class="flex items-center" >
                <img class="w-10 h-10 rounded-full mr-4" src="{{ $post->author->avatar ? asset($post->author->url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Avatar of Writer">
                <div class="text-sm mr-5" style="margin-left: -17px">
                    <p class="text-gray-900 leading-none " style="font-weight: bold"><a  href="/?author={{$post->author->username}}">{{$post->author->name}}</a></p>
                    <p class="text-gray-600">Published {{$post->created_at->diffForHumans()}}</p>
                </div>
            </div>
            <h4  ><a class="me" href="{{$post->body}}"><b  style="color: white">{{$post->title}}</b></a></h4>
            <div class="image-wrapper">
                <a href="{{$post->body}}" >
                    @if ($post->image_extension === 'png' or $post->image_extension === 'jpg' or $post->image_extension === 'gif' or $post->image_extension === 'jpeg'or $post->image_extension === 'webp' )
                        <img  class="rounded-xl " style="width: 100%" src="{{ $post->url ? asset($post->url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Blog Image">
                    @endif
                    @if ($post->image_extension === 'mp4' or $post->image_extension === 'mp3'  or $post->image_extension === 'mov')
                        <video style=" border-radius: 15px" class="img-fluid w-100" controls autoplay muted playsinline loop poster="http://placehold.it/350x350">
                            <source src="{{ $post->url ? asset($post->url) : asset('../images/blog-7-500x400.jpg' ) }}" type="video/mp4">
                        </video>
                    @endif
                </a>
            </div>
            <p>{!! Str::limit("$post->description", 60, ' ...') !!} <a href="/posts/{{$post->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg></a>  </p>
            <div class="icons" style="margin-top: 8px">
                <x-category-button  :category="$post->category"/>
                <ul class="right-area social-icons">
                    <x-actions :post="$post"></x-actions>

                </ul>
            </div>








        </div><!-- single-post -->
    </div><!-- col-sm-6 -->


