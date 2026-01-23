<!-- Contact Form Modal -->
<div id="contactModal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/70 backdrop-blur-sm p-4">
    <div class="bg-white dark:bg-surface-dark rounded-2xl shadow-2xl w-full max-w-md relative overflow-hidden">
        <!-- Close Button -->
        <button onclick="closeContactModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-white transition-colors z-10">
            <span class="material-symbols-outlined text-2xl">close</span>
        </button>
        
        <!-- Header -->
        <div class="bg-primary px-8 py-6">
            <h3 class="text-2xl font-black text-white uppercase tracking-tight">Contact Us</h3>
            <p class="text-white/80 text-sm mt-1">We'll get back to you within 24 hours</p>
        </div>
        
        <!-- Form -->
        <form id="contactForm" class="p-8 space-y-6" onsubmit="submitContactForm(event)">
            <!-- Name -->
            <div>
                <label for="contact-name" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Full Name *</label>
                <input 
                    type="text" 
                    id="contact-name" 
                    name="name" 
                    required
                    placeholder="Enter your full name"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-accent-dark bg-white dark:bg-background-dark text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                />
            </div>
            
            <!-- Email -->
            <div>
                <label for="contact-email" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Email Address *</label>
                <input 
                    type="email" 
                    id="contact-email" 
                    name="email" 
                    required
                    placeholder="your@email.com"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-accent-dark bg-white dark:bg-background-dark text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                />
            </div>
            
            <!-- Phone -->
            <div>
                <label for="contact-phone" class="block text-sm font-bold mb-2 text-gray-700 dark:text-gray-300">Phone Number *</label>
                <div class="flex">
                    <span class="inline-flex items-center px-4 py-3 rounded-l-lg border border-r-0 border-gray-300 dark:border-accent-dark bg-gray-100 dark:bg-accent-dark text-gray-600 dark:text-gray-300 font-medium text-sm">
                        +91
                    </span>
                    <input 
                        type="tel" 
                        id="contact-phone" 
                        name="phone" 
                        required
                        pattern="[0-9]{10}"
                        maxlength="10"
                        placeholder="9876543210"
                        class="w-full px-4 py-3 rounded-r-lg border border-gray-300 dark:border-accent-dark bg-white dark:bg-background-dark text-gray-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent transition-all"
                    />
                </div>
                <p class="text-xs text-gray-500 mt-1">Enter 10-digit mobile number</p>
            </div>
            
            <!-- Submit Button -->
            <button 
                type="submit" 
                class="w-full bg-primary hover:bg-primary/90 text-white py-4 rounded-lg font-bold text-lg uppercase tracking-wider transition-all transform hover:scale-[1.02] shadow-lg shadow-primary/20"
            >
                Submit
            </button>
        </form>
        
        <!-- Success Message (Hidden by default) -->
        <div id="contactSuccess" class="hidden p-8 text-center">
            <div class="w-20 h-20 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mx-auto mb-6">
                <span class="material-symbols-outlined text-green-500 text-4xl">check_circle</span>
            </div>
            <h4 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Form Submitted!</h4>
            <p class="text-gray-600 dark:text-gray-400 mb-6">Thank you for reaching out. Our team will contact you soon.</p>
            <button 
                onclick="closeContactModal()" 
                class="bg-primary hover:bg-primary/90 text-white px-8 py-3 rounded-lg font-bold transition-all"
            >
                Close
            </button>
        </div>
    </div>
</div>

<script>
function openContactModal() {
    const modal = document.getElementById('contactModal');
    const form = document.getElementById('contactForm');
    const success = document.getElementById('contactSuccess');
    
    form.classList.remove('hidden');
    form.reset();
    success.classList.add('hidden');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeContactModal() {
    const modal = document.getElementById('contactModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = 'auto';
}

function submitContactForm(event) {
    event.preventDefault();
    const form = document.getElementById('contactForm');
    const success = document.getElementById('contactSuccess');
    
    // Hide form and show success message
    form.classList.add('hidden');
    success.classList.remove('hidden');
}

// Close modal on backdrop click
document.getElementById('contactModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeContactModal();
    }
});

// Close modal on Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeContactModal();
        closeJoinModal();
    }
});
</script>
