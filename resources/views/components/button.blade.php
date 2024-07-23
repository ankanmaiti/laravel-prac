@props([
    'varient' => 'ghost',
])

@if ($varient == 'ghost')
    <button
        {{ $attributes->merge(['class' => "text-sm font-semibold leading-6"]) }}>{{ $slot }}</button>
@else
    <button
        {{ $attributes->merge(['class' => 'px-3 py-2 text-white font-semibold bg-blue-500 rounded shadow hover:text-blue-200 hover:bg-blue-700']) }}>{{ $slot }}</button>
@endif
