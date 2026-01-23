<footer class="bg-background-dark text-gray-400 py-20 px-4 border-t border-accent-dark" id="contact">
    <div class="max-w-7xl mx-auto grid md:grid-cols-4 gap-12">
        <div class="space-y-6">
            <a href="{{ route('home') }}" class="flex items-center gap-2 text-white">
                <span class="material-symbols-outlined text-primary text-3xl">fitness_center</span>
                <h3 class="text-xl font-bold">FitZone Studio</h3>
            </a>
            <p class="text-sm">Building a stronger community, one workout at a time. Your local partner in health and excellence.</p>
            <div class="flex gap-4">
                <a class="hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">public</span></a>
                <a class="hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">mail</span></a>
                <a class="hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">share</span></a>
            </div>
        </div>
        <div>
            <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-sm">Quick Links</h4>
            <ul class="space-y-4 text-sm">
                <li><a class="hover:text-primary transition-colors" href="{{ route('home') }}">Home</a></li>
                <li><a class="hover:text-primary transition-colors" href="{{ route('home') }}#programs">Programs</a></li>
                <li><a class="hover:text-primary transition-colors" href="{{ route('home') }}#trainers">Trainers</a></li>
                <li><a class="hover:text-primary transition-colors" href="{{ route('plans') }}">Membership Plans</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-sm">Support</h4>
            <ul class="space-y-4 text-sm">
                <li><a class="hover:text-primary transition-colors" href="#">Privacy Policy</a></li>
                <li><a class="hover:text-primary transition-colors" href="#">Terms of Service</a></li>
                <li><a class="hover:text-primary transition-colors" href="#">Safety Rules</a></li>
                <li><a class="hover:text-primary transition-colors" href="#">FAQ</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-sm">Contact Us</h4>
            <ul class="space-y-4 text-sm">
                <li class="flex items-start gap-3">
                    <span class="material-symbols-outlined text-primary">location_on</span>
                    <span>123 Fitness Ave, Wellness City,<br/>State 54321</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary">call</span>
                    <span>(555) 123-4567</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary">schedule</span>
                    <span>Mon - Sun: 05:00 - 23:00</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="max-w-7xl mx-auto pt-16 mt-16 border-t border-accent-dark text-center text-xs tracking-widest uppercase">
        © {{ date('Y') }} FitZone Studio. All Rights Reserved.
    </div>
</footer>
