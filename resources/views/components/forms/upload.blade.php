@props(['name'])


<!-- Image_Url -->
<br><div class="mt-4">
    <div class="row">
        <div class="col-sm-5 imgUp">
            <div class="imagePreview">
               {{ $slot }}
            </div>
            <label class="btn btn-primary">
                Upload<input type="file"
                 class="uploadFile img"
                 name="{{$name}}"
                 id="{{$name}}"
                 value="{{ old($name) }}"
                 style="width: 0px;
                 height: 0px;overflow: hidden;">
            </label>
        </div><!-- col-2 -->
{{--        <i class="fa fa-plus imgAdd"></i>--}}
    </div><!-- row -->
</div><!-- container -->
