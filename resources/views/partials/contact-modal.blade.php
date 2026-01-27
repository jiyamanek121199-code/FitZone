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
    
    // Clear any previous error states
    clearFormErrors('contactForm');
}

function closeContactModal() {
    const modal = document.getElementById('contactModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = 'auto';
}

function clearFormErrors(formId) {
    const form = document.getElementById(formId);
    const errorElements = form.querySelectorAll('.error-message');
    errorElements.forEach(el => el.remove());
    
    const inputElements = form.querySelectorAll('input');
    inputElements.forEach(input => {
        input.classList.remove('border-red-500', 'focus:ring-red-500');
    });
}

function showFormErrors(formId, errors) {
    clearFormErrors(formId);
    const form = document.getElementById(formId);
    
    Object.keys(errors).forEach(field => {
        const input = form.querySelector(`[name="${field}"]`);
        if (input) {
            input.classList.add('border-red-500', 'focus:ring-red-500');
            
            const errorDiv = document.createElement('p');
            errorDiv.className = 'error-message text-red-500 text-xs mt-1';
            errorDiv.textContent = errors[field][0];
            input.parentElement.appendChild(errorDiv);
        }
    });
}

async function submitContactForm(event) {
    event.preventDefault();
    const form = document.getElementById('contactForm');
    const success = document.getElementById('contactSuccess');
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalBtnText = submitBtn.innerHTML;
    
    // Show loading state
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span class="flex items-center justify-center gap-2"><svg class="animate-spin h-5 w-5" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Submitting...</span>';
    
    // Get form data
    const formData = {
        name: form.querySelector('[name="name"]').value,
        email: form.querySelector('[name="email"]').value,
        phone: form.querySelector('[name="phone"]').value,
    };
    
    try {
        const response = await fetch('/api/contact', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            body: JSON.stringify(formData),
        });
        
        const data = await response.json();
        
        if (response.ok && data.success) {
            // Hide form and show success message
            form.classList.add('hidden');
            success.classList.remove('hidden');
        } else if (response.status === 422) {
            // Validation errors
            showFormErrors('contactForm', data.errors);
        } else {
            alert(data.message || 'Something went wrong. Please try again.');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('Network error. Please check your connection and try again.');
    } finally {
        // Reset button state
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalBtnText;
    }
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
