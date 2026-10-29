@extends('components.layouts.app')
@section('title', 'GALLERY | Kanaya Organizer')
@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
<section class="bg-black font-heading py-16 px-6 text-center">
<div class="flex items-center justify-center gap-5 mb-6">
    <span class="w-10 h-px bg-[#E4B65D]"></span>
    <p class="text-[#E4B65D] text-sm tracking-widest font-heading">
        PORTOFOLIO
    </p>
    <span class="w-10 h-px bg-[#E4B65D]"></span>
</div>
<h1 class="font-heading text-4xl md:text-5xl whitespace-nowrap">
    <span class="italic text-white">Our Beautiful</span>
    <span class="italic text-[#E4B65D]">Moments</span>
</h1>
</section>

<section class="bg-black max-w-7xl mx-auto px-6 py-10">

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
<img
    src="{{ asset('img/1.jpg') }}"
    alt="Dekorasi Pernikahan"
    class="w-full h-72 object-cover group-hover:scale-105 transition duration-300">

<img
    src="{{ asset('img/2.jpg') }}"
    alt="Momen Bahagia"
    class="w-full h-72 object-cover group-hover:scale-105 transition duration-300">

<img
    src="{{ asset('img/3.jpg') }}"
    alt="Resepsi Pernikahan"
    class="w-full h-72 object-cover group-hover:scale-105 transition duration-300">

<img
    src="{{ asset('img/4.jpg') }}"
    alt="Wedding Celebration"
    class="w-full h-72 object-cover group-hover:scale-105 transition duration-300">

<img
    src="{{ asset('img/5.jpg') }}"
    alt="Wedding Moment"
    class="w-full h-72 object-cover group-hover:scale-105 transition duration-300">

<img
    src="{{ asset('img/6.jpg') }}"
    alt="Wedding Inspiration"
    class="w-full h-72 object-cover group-hover:scale-105 transition duration-300">
</div>
</section>

@endsection