@props([
    'href' => '#',
    'variant' => 'primary'
])

<a href="{{ $href }}"
   {{ $attributes->class([
       'inline-block px-6 py-3 rounded-full font-semibold transition duration-300',
       'bg-rose-600 text-white hover:bg-rose-700' => $variant === 'primary',
       'border border-rose-600 text-rose-600 hover:bg-rose-50' => $variant === 'secondary',
   ]) }}>
    {{ $slot }}
</a>