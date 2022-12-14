<x-layout>

{{--        <x-post-slider :posts="$posts"></x-post-slider>--}}
    <div class="main-slider" style="background-color: #212121 !important;">
        <div id="slider">
            @foreach ($posts->take(3) as $post)
                @if ($post->image_extension === 'png' or $post->image_extension === 'jpg' or $post->image_extension === 'gif' )

                        <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">

                                <img  class="ls-bg" src="{{ $post->url ? asset($post->url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Blog Image">

                                <div class="slider-content ls-l" style="top:60%; left:40%;font-size: 10px !important;" data-ls="offsetyin:100%; offsetxout:-50%; durationin:800; delayin:100; durationout:400; parallaxlevel:0;">

                                    <h5 ><b  style="color: white">{{$post->title}}</b></h5>
                                    <p >Published {{$post->created_at->diffForHumans()}}</p>

                                    <x-category-button  :category="$post->category"/>
                                </div>
                            </a>


                        </div>

                @endif
            @endforeach


        </div>
    </div>
    @if(session()->has('message'))
        <div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{!! session('message') !!}</div>
    @endif
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{!! session('success') !!}</div>
    @endif
    <section class="section blog-area">
        <div class="container ">
            <div class="row">

                <div class="col-lg-8 col-md-12">
                    <h3>What to Post</h3>
                    <p class="" style="margin-bottom: 45px">
                        Chattabox is a platform where you can create your blog. In order to create blog, you will have to register an account. This application was created for learning but feel free  to post your content. Please avoid posting graphic content, large files(over 20mb ) or misinformation of any kind.


                     </p>
                   @auth
                        <x-post-box  :categories="$categories"/>
                    @endauth
                    <div class="blog-posts mt-10">

                        @if($posts->count())
{{--                              <x-featured-post :post="$posts[3]"/>--}}
                            @if($posts->count() > 1)
                                <div class="row">
                                    @foreach($posts->skip(3) as $post)
                                        <x-post-card :post="$post"/>
                                    @endforeach
{{--                                     <x-last-card :post="$posts[4]"/>--}}
                                </div><!-- row -->
                            @endif
{{--                            <a class="btn load-more-btn" target="_blank" href="#">LOAD OLDER POSTS</a>  <a class="btn load-more-btn" target="_blank" href="#">LOAD OLDER POSTS</a>--}}
                        @else
                            <p>No post yet available. Please check back later</p>
                        @endif
                    </div><!-- blog-posts -->
                     <div class="mb-2">
                         {{ $posts->links() }}
                     </div>
                </div><!-- col-lg-4 -->
                <div class="col-lg-4 col-md-12 ">
                    <div class="sidebar-area">
                        <x-profile-card/>
                        <x-newsletter/>
                        <div class="sidebar-section src-area">
                            <x-search/>
                        </div><!-- sidebar-section src-area -->

                        <div class="sidebar-section category-area">
                            <div class="sidebar-section tags-area">
                                <h4 class="title" ><b class="light-color">Categories</b></h4>
                                <ul class="tags">
                                    <x-dropdown-item>
                                        <li><a class="btn"  style="border-radius: 5px;" href="/">All Post</a></li>
                                    </x-dropdown-item>
                                    @foreach ($categories as $category)
                                        <x-category-list>
                                            <li><a style="border-radius: 5px;" class="btn"
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

{{--                        <section class="footer-instagram-area">--}}

{{--                            <div class="container">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-12">--}}
{{--                                        <h5 class="title"><b class="light-color">User List</b></h5>--}}
{{--                                    </div><!-- col-lg-4 -->--}}
{{--                                </div><!-- row -->--}}
{{--                            </div><!-- container -->--}}

{{--                            <ul class="instagram">--}}
{{--                                @foreach($users as $user)--}}
{{--                                    <li><a href="#"><img  class="w-10 h-10 rounded-xl" src="{{ $user->avatar ? asset($user->url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Instagram Image"></a></li>--}}

{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </section><!-- section -->--}}





                    </div><!-- about-author -->
                </div><!-- col-lg-4 -->

            </div><!-- row -->

        </div><!-- container -->
    </section><!-- section -->
{{--    <x-other-post/>--}}
</x-layout>











