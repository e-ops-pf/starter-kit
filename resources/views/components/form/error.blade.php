@props(['name'])

@error($name)
<p class="text-sm text-error mt-1">
    {{ $message }}
</p>
@enderror