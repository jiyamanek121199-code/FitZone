@extends('layouts.app')

@section('title', 'FitZone Studio | Modern Fitness Center')

@section('content')
<!-- Hero Section -->
<section class="relative w-full h-[600px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center z-0" data-alt="Intense athlete working out in dark gym" style='background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDLoHUmWdk9fBnEgPOP4HdtTdhjeuUHMY-ujzMZ9GDPZQYRXrUVS6ZOjpqpNB9Vjwi5-NV2_VXNaUSLxNBVoKwNmGavHnRWCu6a8qN1BRIB3DtGu4tTB5_kV9oHNaQjw5RFyfXT9m5kZZXy3xXRrDAWMW3uHtlvE52PWvXwOtSnHOE025oFNJV_t9N0F3EdOBsFhuXr367hTnUoGq_RAluDJ5lcvbbpKdFJOmU1R0EqUlzofHYd8AaAJgWtfUI8cQg_7-yC_I79yKBx");'></div>
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-black text-white leading-tight mb-6 uppercase tracking-tight">
            Transform Your Body at <span class="text-primary">FitZone Studio</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto">
            Join our community-focused studio and achieve the results you've always wanted with expert guidance and modern equipment.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button onclick="openJoinModal()" class="bg-primary text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-primary/90 transition-all">Join Now</button>
            <a href="#programs" class="bg-white/10 backdrop-blur-sm text-white border border-white/20 px-8 py-4 rounded-lg font-bold text-lg hover:bg-white/20 transition-all inline-block">View Programs</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-24 px-4 max-w-7xl mx-auto" id="about">
    <div class="grid md:grid-cols-2 gap-16 items-center">
        <div class="relative group">
            <div class="absolute -inset-4 bg-primary/20 rounded-xl blur-lg group-hover:bg-primary/30 transition-all"></div>
            <img alt="Gym Interior" class="relative rounded-xl shadow-2xl w-full h-[400px] object-cover" data-alt="Modern spacious gym interior with equipment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_8tnozcgG8ZRqXnGC4xhcinBVbjiK0Ea5py2IouWV85SeApV6Vz85j8coAwkK7sfSZ885Atki5hPUy-wGvkGjTzL5A-okng18iBHxUzaSjMi5fYIwlWR4PUGHsfuU6qtbe5jpAdWr38FUuHq4E7nuz0XvoEaP4ayz6u8uWYkyOEjYw54H7mC6IhNO1PH6gw8kLBQlOLhbYJtRBS8FhGQpAb6BsjtH4RLDbiZzCoxgHpuF6J-k9hmCNCvol-HNaMxGn-SSuIBdod82"/>
        </div>
        <div class="space-y-6">
            <h2 class="text-primary font-bold tracking-widest uppercase text-sm">Our Philosophy</h2>
            <h3 class="text-3xl md:text-4xl font-bold dark:text-white text-gray-900 leading-tight">About FitZone Studio</h3>
            <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed">
                We are a local fitness center dedicated to providing a professional yet welcoming environment. Our community-focused vibe helps you stay motivated and reach your goals.
            </p>
            <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed">
                Whether you're a beginner or a seasoned athlete, our facility offers the tools and the support network necessary to push your limits.
            </p>
            <div class="pt-4">
                <a href="{{ route('about') }}" class="text-primary font-bold flex items-center gap-2 group">
                    Learn more about our mission 
                    <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section class="py-24 bg-gray-100 dark:bg-surface-dark/50" id="programs">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-black dark:text-white text-gray-900 mb-4 uppercase">Our Programs</h2>
            <div class="w-24 h-1.5 bg-primary mx-auto"></div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
            <div class="bg-white dark:bg-surface-dark p-8 rounded-xl border border-gray-200 dark:border-accent-dark hover:border-primary transition-all group shadow-sm">
                <span class="material-symbols-outlined text-primary text-4xl mb-4 group-hover:scale-110 transition-transform">fitness_center</span>
                <h4 class="text-xl font-bold mb-2">Strength</h4>
                <p class="text-sm text-gray-500 dark:text-gray-400">Build muscle and power with expert guidance.</p>
            </div>
            <div class="bg-white dark:bg-surface-dark p-8 rounded-xl border border-gray-200 dark:border-accent-dark hover:border-primary transition-all group shadow-sm">
                <span class="material-symbols-outlined text-primary text-4xl mb-4 group-hover:scale-110 transition-transform">favorite</span>
                <h4 class="text-xl font-bold mb-2">Cardio</h4>
                <p class="text-sm text-gray-500 dark:text-gray-400">Boost your endurance and heart health.</p>
            </div>
            <div class="bg-white dark:bg-surface-dark p-8 rounded-xl border border-gray-200 dark:border-accent-dark hover:border-primary transition-all group shadow-sm">
                <span class="material-symbols-outlined text-primary text-4xl mb-4 group-hover:scale-110 transition-transform">self_improvement</span>
                <h4 class="text-xl font-bold mb-2">Yoga</h4>
                <p class="text-sm text-gray-500 dark:text-gray-400">Find balance, flexibility, and inner peace.</p>
            </div>
            <div class="bg-white dark:bg-surface-dark p-8 rounded-xl border border-gray-200 dark:border-accent-dark hover:border-primary transition-all group shadow-sm">
                <span class="material-symbols-outlined text-primary text-4xl mb-4 group-hover:scale-110 transition-transform">exercise</span>
                <h4 class="text-xl font-bold mb-2">CrossFit</h4>
                <p class="text-sm text-gray-500 dark:text-gray-400">High-intensity functional movements for all.</p>
            </div>
            <div class="bg-white dark:bg-surface-dark p-8 rounded-xl border border-gray-200 dark:border-accent-dark hover:border-primary transition-all group shadow-sm">
                <span class="material-symbols-outlined text-primary text-4xl mb-4 group-hover:scale-110 transition-transform">person_celebrate</span>
                <h4 class="text-xl font-bold mb-2">Personal Training</h4>
                <p class="text-sm text-gray-500 dark:text-gray-400">One-on-one tailored coaching for results.</p>
            </div>
        </div>
    </div>
</section>

<!-- Trainers Section -->
<section class="py-24 px-4 max-w-7xl mx-auto" id="trainers">
    <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-black dark:text-white text-gray-900 mb-4 uppercase">Meet the Experts</h2>
        <p class="text-gray-500 max-w-xl mx-auto">Professional trainers dedicated to your personal growth.</p>
    </div>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="group relative overflow-hidden rounded-xl h-[450px]">
            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Athletic male trainer smiling in gym" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIM4-BFfonQ_E9Vr6F4R-Ms-NvkyoqBLe-U2dpaFPCj7dJARD6V2ptwyM7ZkzJHobFmVnpJLy6VR0vUwkFOGLl9buWYAmjUToS5aSiqp5U0wQ_z5QXUQHjNKhewceyr0ca53KtrYxMGDKt3O1XpO-oZJLvTWwgJWzvn4_VgC11LmAzMSDdtVYucJqSEXCqHhdAeI91vYepB67Fzf3vF7AJKMObMfiqY-twlrm7-5qAqceERYHRGDAAcoD3NpXPkyUXMf-tndbZg4eF"/>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex flex-col justify-end p-8">
                <h4 class="text-white text-2xl font-bold">Alex Rivera</h4>
                <p class="text-primary font-medium">Lead Strength Coach</p>
            </div>
        </div>
        <div class="group relative overflow-hidden rounded-xl h-[450px]">
            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Athletic female trainer in workout gear" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIbUCHjBFP4RFwVbW7kCdamRqyM_Jz9BYljdCjA33jhEN-OLJ0cpk7YgB0W-E7M7zyLFpf_R44NDUyaTRfkWH9yvB_SGATQNwAJar8pE0h7r1-usei78Y9QBZKh2rCU8LQn-ku8aFYBcuOkthccgpMAhUaep-EdxzXaiNx21irqmpkYqzkTZRAQ4Wu8QR80Ik9mjhrOkM0VjfaM2pgosp5ktqIPTNuIuOmzWeqTL77zTaroltwEvukeqXMYeccLMmX8a9INmJ8xS5M"/>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex flex-col justify-end p-8">
                <h4 class="text-white text-2xl font-bold">Sarah Chen</h4>
                <p class="text-primary font-medium">Yoga Specialist</p>
            </div>
        </div>
        <div class="group relative overflow-hidden rounded-xl h-[450px]">
            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Professional trainer focusing during session" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHWS6oU0Sf1bj8ByXJpg7yda1oWWDfXk9yg4e181gv4snrO1oWaStjapNLGWweOmxZ4ZlaxFdT3YZPga6oe0qI5fDJcLXfNL-QElPTsExtBzk4CSwjg4xV_bMbzU4lOlPlz93jaL5PmAY06sk5BKgzXc-Cuu2kowIR07JyAWfRqeBN3uJ5RzJtrEXYRDyqFIqtbR_GZixqAppKcQ0BJLD1mbfeaGqFqtbi6yJwCBCX4-TiDKlzkBCbjK8DHdqxRNHo8a5eo5WNylK-"/>
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex flex-col justify-end p-8">
                <h4 class="text-white text-2xl font-bold">Marcus Thorne</h4>
                <p class="text-primary font-medium">CrossFit Lead</p>
            </div>
        </div>
    </div>
</section>

<!-- Plans Section -->
<section class="py-24 bg-gray-100 dark:bg-surface-dark/50" id="plans">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-black dark:text-white text-gray-900 mb-4 uppercase">Membership Plans</h2>
            <p class="text-gray-500 max-w-xl mx-auto">Choose the tier that fits your lifestyle and goals.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-surface-dark p-10 rounded-xl border border-gray-200 dark:border-accent-dark flex flex-col">
                <h4 class="text-xl font-bold mb-2">Basic</h4>
                <div class="flex items-baseline gap-1 mb-6">
                    <span class="text-4xl font-black">₹999</span>
                    <span class="text-gray-500 text-sm">/month</span>
                </div>
                <ul class="space-y-4 mb-10 flex-grow">
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-xl">check_circle</span> Unlimited Gym Access</li>
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-xl">check_circle</span> Locker Room Access</li>
                    <li class="flex items-center gap-3 text-sm text-gray-400 line-through"><span class="material-symbols-outlined text-gray-400 text-xl">cancel</span> Group Classes</li>
                    <li class="flex items-center gap-3 text-sm text-gray-400 line-through"><span class="material-symbols-outlined text-gray-400 text-xl">cancel</span> Personal Trainer Session</li>
                </ul>
                <button onclick="openJoinModal('basic')" class="w-full py-3 rounded-lg border border-primary text-primary font-bold hover:bg-primary hover:text-white transition-all">Select Plan</button>
            </div>
            <div class="bg-white dark:bg-surface-dark p-10 rounded-xl border-2 border-primary ring-4 ring-primary/10 flex flex-col relative scale-105 shadow-xl">
                <div class="absolute top-0 right-10 -translate-y-1/2 bg-primary text-white text-xs font-bold px-4 py-1 rounded-full uppercase tracking-widest">Most Popular</div>
                <h4 class="text-xl font-bold mb-2">Standard</h4>
                <div class="flex items-baseline gap-1 mb-6">
                    <span class="text-4xl font-black">₹1,999</span>
                    <span class="text-gray-500 text-sm">/month</span>
                </div>
                <ul class="space-y-4 mb-10 flex-grow">
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-xl">check_circle</span> Unlimited Gym Access</li>
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-xl">check_circle</span> Locker Room Access</li>
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-xl">check_circle</span> Unlimited Group Classes</li>
                    <li class="flex items-center gap-3 text-sm text-gray-400 line-through"><span class="material-symbols-outlined text-gray-400 text-xl">cancel</span> Personal Trainer Session</li>
                </ul>
                <button onclick="openJoinModal('standard')" class="w-full py-3 rounded-lg bg-primary text-white font-bold hover:bg-primary/90 transition-all shadow-lg shadow-primary/20">Select Plan</button>
            </div>
            <div class="bg-white dark:bg-surface-dark p-10 rounded-xl border border-gray-200 dark:border-accent-dark flex flex-col">
                <h4 class="text-xl font-bold mb-2">Premium</h4>
                <div class="flex items-baseline gap-1 mb-6">
                    <span class="text-4xl font-black">₹2,999</span>
                    <span class="text-gray-500 text-sm">/month</span>
                </div>
                <ul class="space-y-4 mb-10 flex-grow">
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-xl">check_circle</span> Unlimited Gym Access</li>
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-xl">check_circle</span> All Access (Classes & Spa)</li>
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-xl">check_circle</span> 2 PT Sessions / month</li>
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-xl">check_circle</span> Nutritional Planning</li>
                </ul>
                <button onclick="openJoinModal('premium')" class="w-full py-3 rounded-lg border border-primary text-primary font-bold hover:bg-primary hover:text-white transition-all">Select Plan</button>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-24 px-4 max-w-7xl mx-auto overflow-hidden">
    <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-black dark:text-white text-gray-900 mb-4 uppercase">Member Stories</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white dark:bg-surface-dark p-8 rounded-xl border border-gray-200 dark:border-accent-dark relative">
            <span class="material-symbols-outlined text-primary/20 text-6xl absolute top-4 right-4">format_quote</span>
            <div class="flex gap-1 mb-4 text-primary">
                <span class="material-symbols-outlined text-sm">star</span>
                <span class="material-symbols-outlined text-sm">star</span>
                <span class="material-symbols-outlined text-sm">star</span>
                <span class="material-symbols-outlined text-sm">star</span>
                <span class="material-symbols-outlined text-sm">star</span>
            </div>
            <p class="text-gray-600 dark:text-gray-400 italic mb-6">"FitZone changed my life. The atmosphere is so welcoming and the coaches really know their stuff. I've never felt stronger."</p>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center font-bold text-primary">JD</div>
                <div>
                    <h5 class="font-bold">John Doe</h5>
                    <p class="text-xs text-gray-500">Member since 2021</p>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-surface-dark p-8 rounded-xl border border-gray-200 dark:border-accent-dark relative">
            <span class="material-symbols-outlined text-primary/20 text-6xl absolute top-4 right-4">format_quote</span>
            <div class="flex gap-1 mb-4 text-primary">
                <span class="material-symbols-outlined text-sm">star</span>
                <span class="material-symbols-outlined text-sm">star</span>
                <span class="material-symbols-outlined text-sm">star</span>
                <span class="material-symbols-outlined text-sm">star</span>
                <span class="material-symbols-outlined text-sm">star</span>
            </div>
            <p class="text-gray-600 dark:text-gray-400 italic mb-6">"The best gym community in town. The classes are high energy and the equipment is always top-notch and clean."</p>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center font-bold text-primary">EM</div>
                <div>
                    <h5 class="font-bold">Emily Meyer</h5>
                    <p class="text-xs text-gray-500">Member since 2022</p>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-surface-dark p-8 rounded-xl border border-gray-200 dark:border-accent-dark relative">
            <span class="material-symbols-outlined text-primary/20 text-6xl absolute top-4 right-4">format_quote</span>
            <div class="flex gap-1 mb-4 text-primary">
                <span class="material-symbols-outlined text-sm">star</span>
                <span class="material-symbols-outlined text-sm">star</span>
                <span class="material-symbols-outlined text-sm">star</span>
                <span class="material-symbols-outlined text-sm">star</span>
                <span class="material-symbols-outlined text-sm">star</span>
            </div>
            <p class="text-gray-600 dark:text-gray-400 italic mb-6">"Finally found a place where I feel comfortable lifting weights. The 'Strength' program is incredible for beginners."</p>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center font-bold text-primary">RS</div>
                <div>
                    <h5 class="font-bold">Ryan Smith</h5>
                    <p class="text-xs text-gray-500">Member since 2023</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-primary text-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-5xl font-black mb-8 leading-tight">START YOUR FITNESS JOURNEY TODAY</h2>
        <p class="text-xl mb-12 opacity-90">No commitments, just results. Join our community and see the difference.</p>
        <button onclick="openJoinModal()" class="bg-white text-primary px-12 py-5 rounded-lg font-black text-xl hover:bg-gray-100 transition-all shadow-2xl">
            JOIN NOW
        </button>
    </div>
</section>
@endsection
