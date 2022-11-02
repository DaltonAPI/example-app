<header style="margin-bottom:110px">
    <div class="top-menu">
        <ul class="left-area welcome-area">
            <li class="hello-blog">Hello nice people, welcome to my blog</li>
            @auth
                <li><a href="mailto:contact@juliblog.com">{{Auth::user()->email}}</a></li>
            @endauth
        </ul><!-- left-area -->
        <div class="right-area">
            <div class="src-area">
                <form action="post">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <input class="src-input" type="text" placeholder="Search" value = "{{ request('search') }}">
                    <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                </form>
            </div><!-- src-area -->
            <ul class="social-icons">
                <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
                <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
                <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
            </ul><!-- right-area -->
        </div><!-- right-area -->
    </div><!-- top-menu -->
    <div class="middle-menu center-text"><a href="#" class="logo"><img src="../logo.png" alt="Logo Image"></a></div>
    <div class="bottom-area">
        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>
        <ul class="main-menu visible-on-click" id="main-menu">
            <li><a href="/" class="{{ request()->is('/') ? 'text-blue-500' : '' }}">HOME</a></li>
            <li><a href="/about" class="{{ request()->is('/about') ? 'text-blue-500' : '' }}">ABOUT</a></li>
{{--            <li><a href="/contact" class="{{ request()->is('/contact') ? 'text-blue-500' : '' }}">CONTACT</a></li>--}}
            @if (Route::has('login'))
                @auth
                    <li class="drop-down">
                        <a href="#!"  data-toggle="dropdown">
                            <img class="w-10 h-10 rounded-full mt-4" src="https://cdn.pixabay.com/photo/2013/07/13/12/07/avatar-159236__340.png" alt="Avatar of Writer">
                        </a>

                        <ul class="drop-down-menu">
                            @can('admin')
                                <li><a href="/posts">DASHBOARD</a></li>
                            @endcan
                            <li> <form method="POST" action="/logout">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form></li>
                        </ul>

                    </li>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                        <a href="/create">Create post</a>
                    </button>
                @else
                    <li> <a href="{{ route('login') }}" >LOGIN</a></li>
                    @if (Route::has('register'))
                        <li> <a href="{{ route('register') }}" >REGISTER</a></li>
                    @endif
                @endauth

            @endif


        </ul><!-- main-menu -->

    </div><!-- conatiner -->
</header>
