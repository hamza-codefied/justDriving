<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Just Driving</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-30px) rotate(5deg);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 0.6;
                transform: scale(1);
            }

            50% {
                opacity: 0.8;
                transform: scale(1.05);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .animate-float {
            animation: float 8s ease-in-out infinite;
        }

        .animate-pulse-slow {
            animation: pulse 4s ease-in-out infinite;
        }


        .delay-100 {
            animation-delay: 0.15s;
            opacity: 0;
        }

        .delay-200 {
            animation-delay: 0.3s;
            opacity: 0;
        }

        .delay-300 {
            animation-delay: 0.45s;
            opacity: 0;
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .card-hover::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .card-hover:hover::before {
            left: 100%;
        }

        .card-hover:hover {
            transform: translateY(-10px) scale(1.01);
            box-shadow: 0 20px 40px -10px rgba(51, 132, 255, 0.25);
        }

        .icon-container {
            background: linear-gradient(135deg, #3384FF 0%, #2563EB 100%);
            position: relative;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        .btn-gradient {
            background: linear-gradient(135deg, #3384FF 0%, #2563EB 100%);
            position: relative;
            overflow: hidden;
        }

        .btn-gradient::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .btn-gradient:hover::before {
            left: 100%;
        }

        .btn-gradient:hover {
            background: linear-gradient(135deg, #2563EB 0%, #1e40af 100%);
            box-shadow: 0 10px 25px -5px rgba(51, 132, 255, 0.5);
        }
    </style>
</head>

<body class="min-h-screen overflow-x-hidden">
    <!-- Light Background with Subtle Gradient -->
    <div class="fixed inset-0 bg-gradient-to-br from-white via-[#f8fafc] to-[#f1f5f9]"></div>

    <!-- Subtle Background Decorations -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <!-- Minimal floating orbs -->
        <div class="absolute top-20 left-20 w-80 h-80 bg-[#3384FF] opacity-3 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-[#3384FF] opacity-2 rounded-full blur-3xl animate-float"
            style="animation-delay: 2s;"></div>
    </div>

    <!-- Header -->
    <div class="relative z-20">
        @include('layouts.header')
    </div>

    <!-- Main Content -->
    <div class="relative z-10 flex items-center justify-center px-4 py-20">
        <div class="w-full max-w-7xl mx-auto">
            <!-- Clean Title Section -->
            <div class="text-center mb-16 md:mb-20 animate-fade-in-up">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-[#3384FF] mb-4">
                    Login
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 font-medium">
                    Vælg din login type for at fortsætte
                </p>
            </div>

            <!-- Enhanced Login Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
                <!-- Køreskole Card -->
                <div
                    class="glass-effect rounded-3xl shadow-2xl p-10 card-hover animate-fade-in-up delay-100 border border-gray-200/50 hover:border-[#3384FF]/50">
                    <div class="flex flex-col items-center text-center">
                        <!-- Enhanced Icon -->
                        <div
                            class="icon-container w-24 h-24 rounded-3xl flex items-center justify-center mb-8 shadow-xl transform hover:scale-110 transition-transform duration-300">
                            <svg class="w-12 h-12 text-white relative z-10" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>

                        <!-- Title -->
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Køreskole</h2>

                        <!-- Description -->
                        <p class="text-gray-600 mb-8 text-base leading-relaxed min-h-[60px]">
                            Adgang til køreskole administration systemet.
                        </p>

                        <!-- Enhanced Login Button -->
                        <button
                            class="btn-gradient w-full text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg relative">
                            <span class="relative z-10">Login</span>
                        </button>
                    </div>
                </div>

                <!-- Kørelærer Card -->
                <div
                    class="glass-effect rounded-3xl shadow-2xl p-10 card-hover animate-fade-in-up delay-200 border border-gray-200/50 hover:border-[#3384FF]/50">
                    <div class="flex flex-col items-center text-center">
                        <!-- Enhanced Icon -->
                        <div
                            class="icon-container w-24 h-24 rounded-3xl flex items-center justify-center mb-8 shadow-xl transform hover:scale-110 transition-transform duration-300">
                            <svg class="w-12 h-12 text-white relative z-10" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>

                        <!-- Title -->
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Kørelærer</h2>

                        <!-- Description -->
                        <p class="text-gray-600 mb-8 text-base leading-relaxed min-h-[60px]">
                            Adgang til kørelærerens administration system.
                        </p>

                        <!-- Enhanced Login Button -->
                        <button
                            class="btn-gradient w-full text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg relative">
                            <span class="relative z-10">Login</span>
                        </button>
                    </div>
                </div>

                <!-- Elever Card -->
                <div
                    class="glass-effect rounded-3xl shadow-2xl p-10 card-hover animate-fade-in-up delay-300 border border-gray-200/50 hover:border-[#3384FF]/50">
                    <div class="flex flex-col items-center text-center">
                        <!-- Enhanced Icon -->
                        <div
                            class="icon-container w-24 h-24 rounded-3xl flex items-center justify-center mb-8 shadow-xl transform hover:scale-110 transition-transform duration-300">
                            <svg class="w-12 h-12 text-white relative z-10" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>

                        <!-- Title -->
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Elever</h2>

                        <!-- Description -->
                        <p class="text-gray-600 mb-8 text-base leading-relaxed min-h-[60px]">
                            Adgang for elever.
                        </p>

                        <!-- Enhanced Login Button -->
                        <button
                            class="btn-gradient w-full text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg relative">
                            <span class="relative z-10">Login</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Enhanced Back to Home Link -->
            <div class="text-center mt-16 animate-fade-in-up delay-300">
                <a href="{{ route('home') }}"
                    class="inline-flex items-center gap-2 text-gray-700 hover:text-[#3384FF] transition-all duration-300 font-medium group">
                    <svg class="w-5 h-5 transform group-hover:-translate-x-1 transition-transform duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span>Tilbage til forsiden</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="relative z-20">
        @include('layouts.footer')
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Enhanced intersection observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver(function (entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all animated elements
            document.querySelectorAll('.animate-fade-in-up').forEach(el => {
                observer.observe(el);
            });

            // Add ripple effect to buttons
            document.querySelectorAll('.btn-gradient').forEach(button => {
                button.addEventListener('click', function (e) {
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;

                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.classList.add('ripple');

                    this.appendChild(ripple);

                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
        });
    </script>

    <style>
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            transform: scale(0);
            animation: ripple-animation 0.6s ease-out;
            pointer-events: none;
        }

        @keyframes ripple-animation {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    </style>
</body>

</html>