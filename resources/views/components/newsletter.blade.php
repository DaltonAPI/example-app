


<div class="sidebar-section newsletter-area">
    <h5 class="title"><b>Subscribe to our newsletter </b></h5>

    <form action="/newsletter" method="get">
        <input class="email-input" type="text" placeholder="Your email here" name="email">
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <button class="btn btn-2" type="submit">SUBSCRIBE</button>
    </form>
</div><!-- sidebar-section newsletter-area -->
