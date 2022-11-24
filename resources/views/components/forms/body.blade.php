@props(['name'])


<div>

    <div class="input-group mb-3">
        <input class="w-full h-20 p-2 border rounded focus:outline-none focus:ring-gray-300 focus:ring-1"
               aria-label="Amount (to the nearest dollar)"
               name="{{ $name }}"
               id="{{ $name }}"

               required
               {{ $attributes }}
               {{ $attributes(['value' => old($name)]) }}


               required/>


    </div>

</div>
