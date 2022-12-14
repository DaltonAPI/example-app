<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>TITLE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">


    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


    <!-- Stylesheets -->

    <link href="../common-css/bootstrap.css" rel="stylesheet">

    <link href="../common-css/ionicons.css" rel="stylesheet">


    <link href="../02-Single-post/css/styles.css" rel="stylesheet">

    <link href="../02-Single-post/css/responsive.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="../test.css" rel="stylesheet">

</head>
<body>

<x-header></x-header>

<section class="blog-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-12">
                <div class="blog-posts">

                    <div class="single-post">

                        <div class="image-wrapper">
                            @if ($post->image_extension === 'png' or $post->image_extension === 'jpg' or $post->image_extension === 'gif' or $post->image_extension === 'jpeg' or $post->image_extension === 'webp')
                                <img  class="rounded-xl" src="{{ $post->url ? asset($post->url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Blog Image">
                            @endif
                            @if ($post->image_extension === 'mp4' or $post->image_extension === 'mp3'  or $post->image_extension === 'mov')
                                <video style=" border-radius: 15px" class="img-fluid w-100" controls autoplay muted playsinline loop poster="http://placehold.it/350x350">
                                    <source src="{{ $post->url ? asset($post->url) : asset('../images/blog-7-500x400.jpg' ) }}" type="video/mp4">
                                </video>
                            @endif

                        </div>
                        <h4 class="mb-2 mt-2" ><a class="me" href="{{$post->body}}"><b  >{{$post->title}}</b></a></h4>
                        <div class="content">
                            <div class="author">
                                <img class="author__avatar" src="{{ $post->author->avatar ? asset($post->author->url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="George Clooney">
                                <div class="author__details">
                                    <div><br/><a  href="/?author={{$post->author->username}}" rel="author">{{$post->author->name}}</a></div>
                                    <time title="29 July 2020" style="font-size: 0.7rem">{{$post->created_at->diffForHumans()}}</time>
                                </div>
                            </div>
                        </div>
                        <div class="icons">
                            <div class="left-area">
                               <x-category-button  :category="$post->category"/>
                            </div>
                           <x-actions :post="$post"></x-actions>
                        </div>
                        <p style="color: #007aff" class="desc"><a href="{{ $post->body }}">Source: {{ $post->body }}</a></p>
                        <p >{{ $post->description }}</a></p>

                    </div><!-- single-post -->


                    <div class="leave-comment-area">
                       @include('posts._add-comment-form')
                        <div class="comments-area">
                            <h4 class="title"><b class="light-color">{{   $post->comments->count()}} Comment</b></h4>
                            @foreach($post->comments as $comment)
                                <x-comments :comment="$comment"></x-comments>
                            @endforeach
                        </div><!-- comments-area -->

                    </div><!-- comments-area -->

                </div><!-- blog-posts -->
            </div><!-- col-lg-4 -->


            <div class="col-lg-4 col-md-12">
                <div class="sidebar-area">
                    <x-profile-card/>
                    <div class="sidebar-section src-area">
                        <x-search/>
                    </div><!-- sidebar-section src-area -->
                    <x-newsletter/>
                    <div class="sidebar-section category-area">
                        <div class="sidebar-section tags-area">
                            <h4 class="title"><b class="light-color">Categories</b></h4>
                            <ul class="tags">
                                <x-dropdown-item>
                                    <li><a class="btn" href="/">All Post</a></li>
                                </x-dropdown-item>
                                @foreach ($categories as $category)
                                    <x-category-list>
                                        <li><a class="btn"
                                               href="/?category={{$category->slug}}&{{http_build_query(request()->except('category'))}}">{{ ucwords($category->name) }}</a>
                                        </li>
                                    </x-category-list>
                                @endforeach
                            </ul>
                        </div><!-- sidebar-section tags-area -->
                    </div><!-- sidebar-section category-area -->

                    <div class="sidebar-section latest-post-area">
                        <h4 class="title"><b class="light-color">Latest Posts</b></h4>
                        @foreach($posts->take(5) as $post  )
                            <x-latest :post="$post"/>
                        @endforeach
                    </div><!-- sidebar-section latest-post-area -->

                    <x-advertisement/>

                    <x-user-list/>



                </div><!-- about-author -->
            </div><!-- col-lg-4 -->

        </div><!-- row -->
    </div><!-- container -->
</section><!-- section -->


<

<x-footer></x-footer>

<!-- SCIPTS -->

<script src="../common-js/jquery-3.1.1.min.js"></script>

<script src="../common-js/tether.min.js"></script>

<script src="../common-js/bootstrap.js"></script>

<script src="../common-js/scripts.js"></script>

</body>
</html>
