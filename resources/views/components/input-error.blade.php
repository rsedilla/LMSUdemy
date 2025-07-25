@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'list-unstyle']) }}>
        @foreach ((array) $messages as $message)
            <li class="text-danger">{{ $message }}</li>
        @endforeach
    </ul>
@endif
