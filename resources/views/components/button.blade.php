@props(['type' => 'submit', 'text'])

<button 
    type="{{ $type }}" 
    class="w-full bg-primary hover:bg-secondary text-white font-bold py-2 px-4 rounded transition duration-300"
>
    {{ $text }}
</button>
