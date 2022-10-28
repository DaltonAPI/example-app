

    <form method="GET" action="/">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        <input class="src-input"  name="search" type="text" placeholder="Search"  value = "{{ request('search') }}">
        {{--                            <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>--}}
    </form>


