@props(['label', 'id', 'name', 'type', 'placeholder', 'required' => false])

<div>
    <label for="{{ $id }}" class="block text-gray-700 text-sm font-medium mb-1">{{ $label }}</label>
    <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        id="{{ $id }}" 
        placeholder="{{ $placeholder }}" 
        class="shadow-sm border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-primary"
        value="{{ old($name) }}"
        @if ($required) required @endif
    />
</div>
