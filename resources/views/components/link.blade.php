@props(['href', 'varient' => null])

@if ($varient == 'ghost')
    <a {{ $attributes->merge(['href' => $href, 'class' => 'text-sm font-semibold leading-6']) }}>{{ $slot }}</a>

@elseif ($varient == 'button')
    <a
        {{ $attributes->merge(['href' => $href, 'class' => 'px-3 py-2 text-white font-semibold bg-blue-500 rounded shadow hover:text-blue-200 hover:bg-blue-700']) }}>{{ $slot }}</a>

@elseif ($varient == 'card')
    <a
        {{ $attributes->merge(['href' => $href, 'class' => 'block px-6 py-4 bg-white rounded shadow']) }}>{{ $slot }}</a>

@else
    <a {{ $attributes->merge(['href' => $href]) }}>{{ $slot }}</a>
@endif
