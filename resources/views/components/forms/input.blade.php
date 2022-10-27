@props(['name'])


<div>
    <x-forms.label name="{{$name}}" />

    <input class="border border-gray-200 p-2 w-full rounded"
           name="{{ $name }}"
           id="{{ $name }}"

           required
        {{ $attributes }}
        {{ $attributes(['value' => old($name)]) }}
    >

</div>
