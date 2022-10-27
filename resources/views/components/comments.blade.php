@props(['comment'])

<div class="comment">
    <div class="author-image"><img src="{{ $comment->user->avatar ? asset('storage/' .$comment->user->avatar) : asset('images/advertise-1-400x500.jpg' ) }}" alt="Autohr Image"></div>
    <div class="comment-info">
        <h5><b class="light-color">{{$comment->user->username}}</b></h5>
        <h6 class="date"><em>{{$comment->created_at->diffForHumans()}}</em></h6>
        <p>{{ $comment->body }}</p>
    </div>
</div><!-- comment -->
