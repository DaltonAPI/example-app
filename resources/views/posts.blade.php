<x-layout>

{{--        <x-post-slider :posts="$posts"></x-post-slider>--}}
    <div class="main-slider">
        <div id="slider">



            @foreach ($posts as $item)
                <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">

                    @if ($item->image_extension === 'png' or $item->image_extension === 'jpg' or $item->image_extension === 'gif' )
                        <img  class="ls-bg" src="{{ $item->image_url ? asset('storage/' .$item->image_url) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Blog Image">
                    @endif
{{--                    @if ($item->image_extension === 'mp4' or $item->image_extension === 'mp3' )--}}
{{--                        <video  class="ls-bg"  controls>--}}
{{--                            <source src="{{ $item->image_url ? asset('storage/' .$item->image_url) : asset('../images/blog-7-500x400.jpg' ) }}" type="video/mp4">--}}
{{--                        </video>--}}
{{--                    @endif--}}

                    <div class="slider-content ls-l" style="top:60%; left:30%;" data-ls="offsetyin:100%; offsetxout:-50%; durationin:800; delayin:100; durationout:400; parallaxlevel:0;">
                        <a href="/post/?category={{$item->category->slug}}&{{http_build_query(request()->except('category'))}}" class="btn caegory-btn"><b>{{$item->category->slug}}</b></a>
                        <h3 class="title"><b>{{$item->title}}</b></h3>
                        <h6>Published {{$item->created_at->diffForHumans()}}</h6>
                    </div>

                </div>
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
                    <x-post-box/>
                    <div class="blog-posts">

                        @if($posts->count())
                            <x-featured-post :post="$posts[0]"/>
                            @if($posts->count() > 1)
                                <div class="row">
                                    @foreach($posts->skip(2) as $post)
                                        <x-post-card :post="$post"/>
                                    @endforeach
                                    <x-last-card :post="$posts[1]"/>
                                </div><!-- row -->
                            @endif
                            <a class="btn load-more-btn" target="_blank" href="#">LOAD OLDER POSTS</a>
                        @else
                            <p>No post yet available. Please check back later</p>
                        @endif
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
                            @foreach($posts->skip(5)->take(5) as $post  )
                                <x-latest :post="$post"/>
                            @endforeach
                        </div><!-- sidebar-section latest-post-area -->

                       <x-advertisement/>

                            <div class="sidebar-section instagram-area">
                                <h4 class="title"><b class="light-color">User List</b></h4>
                                <ul class="instagram-img">
                                    @foreach($users as $user)
                                        <img class="w-10 h-10 rounded-full mr-4" src="{{ $user->avatar ? asset('storage/' .$user->avatar) : asset('../images/blog-7-500x400.jpg' ) }}" alt="Avatar of Writer">
                                    @endforeach
                                </ul>
                            </div><!-- sidebar-section instagram-area -->




                    </div><!-- about-author -->
                </div><!-- col-lg-4 -->

            </div><!-- row -->
            {{ $posts->links() }}
        </div><!-- container -->
    </section><!-- section -->
{{--    <x-other-post/>--}}
</x-layout>











