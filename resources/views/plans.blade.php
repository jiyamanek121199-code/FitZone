@extends('layouts.app')

@section('title', 'Membership Plans | FitZone Studio')

@section('styles')
tr:nth-child(even) {
    background-color: rgba(255, 255, 255, 0.02);
}
@endsection

@section('content')
<section class="relative w-full h-[400px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center z-0" style='background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDLoHUmWdk9fBnEgPOP4HdtTdhjeuUHMY-ujzMZ9GDPZQYRXrUVS6ZOjpqpNB9Vjwi5-NV2_VXNaUSLxNBVoKwNmGavHnRWCu6a8qN1BRIB3DtGu4tTB5_kV9oHNaQjw5RFyfXT9m5kZZXy3xXRrDAWMW3uHtlvE52PWvXwOtSnHOE025oFNJV_t9N0F3EdOBsFhuXr367hTnUoGq_RAluDJ5lcvbbpKdFJOmU1R0EqUlzofHYd8AaAJgWtfUI8cQg_7-yC_I79yKBx");'></div>
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-black text-white leading-tight mb-4 uppercase tracking-tight">
            Membership <span class="text-primary">Plans</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto">
            Choose a plan that fits your fitness journey.
        </p>
    </div>
</section>

@include('plans.partials.pricing-cards')
@include('plans.partials.comparison-table')
@include('plans.partials.cta')
@endsection
