@props(['category'])


{{--<a  href="/categories/{{$category->slug}}"><b>{{$category->name}}</b></a>--}}
<a class="btn caegory-btn "  style="border-radius: 5px;" href="/?category={{$category->slug}}& post/{{http_build_query(request()->except('category'))}}">{{$category->name}}</a>
