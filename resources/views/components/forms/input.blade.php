@props(['name'])


<div>

    <div class="input-group mb-3">

        <input type="text"
               class="form-control"

               aria-label="Amount (to the nearest dollar)"
               name="{{ $name }}"
               id="{{ $name }}"

               required
            {{ $attributes }}
            {{ $attributes(['value' => old($name)]) }}

        >

    </div>

</div>
