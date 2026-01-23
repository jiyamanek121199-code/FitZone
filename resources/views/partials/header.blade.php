<header class="sticky top-0 z-50 w-full border-b border-gray-200 dark:border-accent-dark bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 sm:h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-3xl">fitness_center</span>
                <h1 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">FitZone Studio</h1>
            </a>
            
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('home') ? 'text-primary font-bold border-b-2 border-primary' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('plans') ? 'text-primary font-bold border-b-2 border-primary' : '' }}" href="{{ route('plans') }}">Plans</a>
                <a class="text-sm font-medium hover:text-primary transition-colors {{ request()->routeIs('about') ? 'text-primary font-bold border-b-2 border-primary' : '' }}" href="{{ route('about') }}">About</a>
            </nav>
            
            <!-- Desktop Contact Button -->
            <button onclick="openContactModal()" class="hidden md:block bg-primary hover:bg-primary/90 text-white px-6 py-2 rounded-lg font-bold text-sm transition-all transform hover:scale-105">
                Contact Us
            </button>
            
            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" onclick="toggleMobileMenu()" class="md:hidden flex items-center justify-center w-10 h-10 rounded-lg text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-accent-dark transition-colors">
                <span id="menuIconOpen" class="material-symbols-outlined text-2xl">menu</span>
                <span id="menuIconClose" class="material-symbols-outlined text-2xl hidden">close</span>
            </button>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-background-light dark:bg-background-dark border-t border-gray-200 dark:border-accent-dark">
        <div class="px-4 py-6 space-y-4">
            <a href="{{ route('home') }}" class="block py-3 px-4 rounded-lg text-base font-medium transition-colors {{ request()->routeIs('home') ? 'bg-primary/10 text-primary' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-accent-dark' }}">
                <span class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-xl">home</span>
                    Home
                </span>
            </a>
            <a href="{{ route('plans') }}" class="block py-3 px-4 rounded-lg text-base font-medium transition-colors {{ request()->routeIs('plans') ? 'bg-primary/10 text-primary' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-accent-dark' }}">
                <span class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-xl">credit_card</span>
                    Plans
                </span>
            </a>
            <a href="{{ route('about') }}" class="block py-3 px-4 rounded-lg text-base font-medium transition-colors {{ request()->routeIs('about') ? 'bg-primary/10 text-primary' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-accent-dark' }}">
                <span class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-xl">info</span>
                    About
                </span>
            </a>
            <div class="pt-4 border-t border-gray-200 dark:border-accent-dark">
                <button onclick="openContactModal(); closeMobileMenu();" class="w-full bg-primary hover:bg-primary/90 text-white py-3 px-4 rounded-lg font-bold text-base transition-all flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-xl">mail</span>
                    Contact Us
                </button>
            </div>
        </div>
    </div>
</header>

<script>
function toggleMobileMenu() {
    const menu = document.getElementById('mobileMenu');
    const iconOpen = document.getElementById('menuIconOpen');
    const iconClose = document.getElementById('menuIconClose');
    
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        iconOpen.classList.add('hidden');
        iconClose.classList.remove('hidden');
    } else {
        closeMobileMenu();
    }
}

function closeMobileMenu() {
    const menu = document.getElementById('mobileMenu');
    const iconOpen = document.getElementById('menuIconOpen');
    const iconClose = document.getElementById('menuIconClose');
    
    menu.classList.add('hidden');
    iconOpen.classList.remove('hidden');
    iconClose.classList.add('hidden');
}

// Close mobile menu when clicking outside
document.addEventListener('click', function(e) {
    const header = document.querySelector('header');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (!header.contains(e.target) && !mobileMenu.classList.contains('hidden')) {
        closeMobileMenu();
    }
});

// Close mobile menu on window resize to desktop
window.addEventListener('resize', function() {
    if (window.innerWidth >= 768) {
        closeMobileMenu();
    }
});
</script>
