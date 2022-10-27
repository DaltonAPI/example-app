<link rel="stylesheet" href="post-box.css" type="text/css">


<div class="widget-post mb-5" aria-labelledby="post-header-title">
    <div class="widget-post__header">
        <h2 class="widget-post__title" id="post-header-title">
            <i class="fa fa-pencil" aria-hidden="true"></i>
            write post
        </h2>
    </div>
    <form id="widget-form" class="widget-post__form" name="form" aria-label="post widget">
        <div class="widget-post__content">
            <label for="post-content" class="sr-only">share your moments</label>
            <textarea name="post" id="post-content" class="widget-post__textarea scroller" placeholder="share your moments"></textarea>
        </div>
        <div class="widget-post__options" id="stock-options">
            <label for="search" class="sr-only">Select Symbol</label>
            <input type="search" placeholder="Select Symbol" class=" widget-post___input widget-post--search search--stock" id="search">
            <label for="search" class="sr-only">Select Symbol</label>
            <input type="search" placeholder="Select Symbol" class=" widget-post___input widget-post--search search--stock" id="search">
            <label for="search" class="sr-only">Select Symbol</label>
            <input type="search" placeholder="Select Symbol" class=" widget-post___input widget-post--search search--stock" id="search">




        </div>
        <div class="widget-post__actions post--actions">
            <div class="post-actions__attachments">
{{--                <button type="button" class="btn post-actions__stock attachments--btn" aria-controls="stock-options" aria-haspopup="true">--}}
{{--                    <i class="fa fa-usd" aria-hidden="true"></i>--}}
{{--                    stock--}}
{{--                </button>--}}
                <button type="button" class="btn post-actions__upload attachments--btn">
                    <label for="upload-image" class="post-actions__label">
                        <i class="fa fa-upload" aria-hidden="true"></i>
                        upload image
                    </label>
                </button>
                <input type="file" id="upload-image" accept="image/*" multiple>
            </div>
            <div class="post-actions__widget">
                <button class="btn post-actions__publish">publish</button>
            </div>
        </div>
    </form>
</div>
<script src="post-box.js"></script>
