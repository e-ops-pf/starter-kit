@props(['name'])

@if($type === 'file' && $multiple)
    @foreach ($errors->get( rtrim($name, []) . '.*') as $messages)
        @foreach ($messages as $message)
            <p class="text-sm text-error mt-1">
                {{ $message }}
            </p>
        @endforeach
    @endforeach
@else
    @php
        $message = $errors->first($name);
    @endphp

    @if($message)
        <p class="text-sm text-error mt-1">
            {{ $message }}
        </p>
    @endif
@endif