@props(['name'])

@error($name)
    <p class="mt-1 text-end text-red-500 text-sm font-semibold">
        {{ $message }}
    </p>
@enderror
