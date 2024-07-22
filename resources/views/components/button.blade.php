@props([
    'href' => null,
])

@if (!!$href)
    <a
        {{ $attributes->merge(['href' => $href, 'class' => 'px-3 py-2 text-white font-semibold bg-blue-500 rounded shadow hover:text-blue-200 hover:bg-blue-700']) }}>{{ $slot }}</a>
@else
    <button
        {{ $attributes->merge(['class' => 'px-3 py-2 text-white font-semibold bg-blue-500 rounded shadow hover:text-blue-200 hover:bg-blue-700']) }}>{{ $slot }}</button>
@endif
