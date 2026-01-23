<section class="py-24 bg-gray-100 dark:bg-background-dark" id="plans-grid">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8 items-start">
            <!-- Basic Plan -->
            <div class="bg-white dark:bg-surface-dark p-10 rounded-xl border border-gray-200 dark:border-accent-dark flex flex-col hover:border-primary/50 transition-colors">
                <h4 class="text-xl font-bold mb-2">Basic</h4>
                <div class="flex items-baseline gap-1 mb-6">
                    <span class="text-4xl font-black">₹999</span>
                    <span class="text-gray-500 text-sm">/mo</span>
                </div>
                <ul class="space-y-4 mb-10 flex-grow">
                    <li class="flex items-start gap-3 text-sm">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span>Access to gym equipment</span>
                    </li>
                    <li class="flex items-start gap-3 text-sm">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span>Limited trainer support</span>
                    </li>
                    <li class="flex items-start gap-3 text-sm">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span>Fixed workout hours</span>
                    </li>
                </ul>
                <button onclick="openJoinModal('basic')" class="w-full py-4 rounded-lg bg-primary text-white font-bold hover:bg-primary/90 transition-all uppercase tracking-wider">Join</button>
            </div>
            
            <!-- Standard Plan (Most Popular) -->
            <div class="bg-white dark:bg-surface-dark p-10 rounded-xl border-2 border-primary ring-4 ring-primary/10 flex flex-col relative scale-105 shadow-2xl z-10">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-primary text-white text-[10px] font-black px-4 py-1 rounded-full uppercase tracking-[0.2em]">Most Popular</div>
                <h4 class="text-xl font-bold mb-2">Standard</h4>
                <div class="flex items-baseline gap-1 mb-6">
                    <span class="text-4xl font-black">₹1,999</span>
                    <span class="text-gray-500 text-sm">/mo</span>
                </div>
                <ul class="space-y-4 mb-10 flex-grow">
                    <li class="flex items-start gap-3 text-sm">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span>Full gym access</span>
                    </li>
                    <li class="flex items-start gap-3 text-sm">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span>Group classes included</span>
                    </li>
                    <li class="flex items-start gap-3 text-sm">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span>Trainer guidance</span>
                    </li>
                    <li class="flex items-start gap-3 text-sm">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span>Flexible workout hours</span>
                    </li>
                </ul>
                <button onclick="openJoinModal('standard')" class="w-full py-4 rounded-lg bg-primary text-white font-bold hover:bg-primary/90 transition-all shadow-lg shadow-primary/20 uppercase tracking-wider">Join</button>
            </div>
            
            <!-- Premium Plan -->
            <div class="bg-white dark:bg-surface-dark p-10 rounded-xl border border-gray-200 dark:border-accent-dark flex flex-col hover:border-primary/50 transition-colors">
                <h4 class="text-xl font-bold mb-2">Premium</h4>
                <div class="flex items-baseline gap-1 mb-6">
                    <span class="text-4xl font-black">₹2,999</span>
                    <span class="text-gray-500 text-sm">/mo</span>
                </div>
                <ul class="space-y-4 mb-10 flex-grow">
                    <li class="flex items-start gap-3 text-sm">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span>Full access to all facilities</span>
                    </li>
                    <li class="flex items-start gap-3 text-sm">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span>Personal trainer support</span>
                    </li>
                    <li class="flex items-start gap-3 text-sm">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span>Diet consultation</span>
                    </li>
                    <li class="flex items-start gap-3 text-sm">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span>Priority support</span>
                    </li>
                </ul>
                <button onclick="openJoinModal('premium')" class="w-full py-4 rounded-lg bg-primary text-white font-bold hover:bg-primary/90 transition-all uppercase tracking-wider">Join</button>
            </div>
        </div>
    </div>
</section>
