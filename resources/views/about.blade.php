@extends('layouts.app')

@section('title', 'About Us | FitZone Studio')

@section('content')
<section class="relative w-full h-[400px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center z-0" style='background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDLoHUmWdk9fBnEgPOP4HdtTdhjeuUHMY-ujzMZ9GDPZQYRXrUVS6ZOjpqpNB9Vjwi5-NV2_VXNaUSLxNBVoKwNmGavHnRWCu6a8qN1BRIB3DtGu4tTB5_kV9oHNaQjw5RFyfXT9m5kZZXy3xXRrDAWMW3uHtlvE52PWvXwOtSnHOE025oFNJV_t9N0F3EdOBsFhuXr367hTnUoGq_RAluDJ5lcvbbpKdFJOmU1R0EqUlzofHYd8AaAJgWtfUI8cQg_7-yC_I79yKBx");'></div>
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-black text-white leading-tight mb-4 uppercase tracking-tight">
            About <span class="text-primary">FitZone Studio</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto">
            Your fitness journey starts here. Discover our story and the community that makes us more than just a gym.
        </p>
    </div>
</section>

<section class="py-24 px-4 max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 gap-16 items-center">
        <div class="relative">
            <div class="absolute -inset-4 bg-primary/10 rounded-xl blur-lg"></div>
            <img alt="Friendly Gym Floor" class="relative rounded-xl shadow-2xl w-full h-[500px] object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_8tnozcgG8ZRqXnGC4xhcinBVbjiK0Ea5py2IouWV85SeApV6Vz85j8coAwkK7sfSZ885Atki5hPUy-wGvkGjTzL5A-okng18iBHxUzaSjMi5fYIwlWR4PUGHsfuU6qtbe5jpAdWr38FUuHq4E7nuz0XvoEaP4ayz6u8uWYkyOEjYw54H7mC6IhNO1PH6gw8kLBQlOLhbYJtRBS8FhGQpAb6BsjtH4RLDbiZzCoxgHpuF6J-k9hmCNCvol-HNaMxGn-SSuIBdod82"/>
        </div>
        <div class="space-y-12">
            <div>
                <h2 class="text-primary font-bold tracking-widest uppercase text-sm mb-2">Who We Are</h2>
                <h3 class="text-3xl font-bold mb-4">A Local Hub for Transformation</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                    Founded in the heart of our city, FitZone Studio was born from a simple idea: fitness should be accessible, professional, and community-driven.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <div>
                    <h4 class="text-xl font-bold mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">target</span> Our Mission
                    </h4>
                    <p class="text-sm text-gray-600 dark:text-gray-400">To empower our local community through expert guidance and a supportive environment.</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">visibility</span> Our Vision
                    </h4>
                    <p class="text-sm text-gray-600 dark:text-gray-400">To be the most welcoming fitness destination where every member feels seen and supported.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('about.partials.why-choose-us')
@include('about.partials.values')
@include('about.partials.community')
@include('about.partials.cta')
@endsection
