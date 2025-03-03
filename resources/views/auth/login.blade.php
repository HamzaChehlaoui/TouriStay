<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find Your Home Away</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        .bg-image {
            background-image: url('https://images.squarespace-cdn.com/content/v1/5667502ddf40f3e05badcf49/1469130713610-40XLXPKKLGDN0CUI1XGD/bigstock-Real-Estate-Agent-111071192.jpg?format=2500w');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transition: all 1.5s ease;

        }

        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .btn-hover {
            transition: all 0.3s ease;
            overflow: hidden;
            position: relative;
        }

        .btn-hover:after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.5s;
        }

        .btn-hover:hover:after {
            transform: translate(-50%, -50%) scale(1);
        }

        .gradient-text {
            background: linear-gradient(45deg, #000000, #666666);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
    </style>
</head>
<body class="bg-image min-h-screen">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-black bg-opacity-50 backdrop-blur-  transition-all duration-700">
        <div class="max-w-md w-full mx-auto p-6 bg-white rounded-xl shadow-lg border border-gray-100 animate__animated animate__fadeIn">
            <!-- Logo or Branding -->
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold gradient-text" id="brandTitle">Find Your Home Away</h2>
                <p class="text-gray-500 text-sm mt-1 animate__animated" id="brandSubtitle">Sign in to manage your bookings and favorites</p>
            </div>

            <!-- House Illustration -->
            <div class="flex justify-center mb-6">
                <svg class="w-16 h-16 text-black" id="houseSvg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600 animate__animated animate__fadeIn">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" id="loginForm">
                @csrf

                <!-- Email Address -->
                <div class="mb-4 animate__animated" style="animation-delay: 0.1s;">
                    <label for="email" class="block text-gray-700 font-medium">Email</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </div>
                        <input id="email"
                            class="block mt-1 w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md focus:ring-black focus:border-black form-control"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="username"
                            placeholder="you@example.com" />
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs mt-2 animate__animated animate__headShake">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mt-4 animate__animated" style="animation-delay: 0.2s;">
                    <label for="password" class="block text-gray-700 font-medium">Password</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input id="password"
                            class="block mt-1 w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md focus:ring-black focus:border-black form-control"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="••••••••" />
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <button type="button" id="togglePassword" class="text-gray-400 hover:text-gray-600 focus:outline-none">
                                <svg class="h-5 w-5" id="eyeIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs mt-2 animate__animated animate__headShake">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="block mt-4 animate__animated" style="animation-delay: 0.3s;">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-800 shadow-sm focus:ring-indigo-800" name="remember">
                        <span class="ms-2 text-sm text-gray-600">Remember me</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-6 animate__animated" style="animation-delay: 0.4s;">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-indigo-800 hover:text-indigo-800 transition-colors duration-200" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif

                    <button type="submit" id="loginBtn" class="px-4 py-2 bg-black hover:bg-gray-600 text-white font-medium rounded-md transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 btn-hover">
                        Sign in
                    </button>
                </div>

                <!-- Registration Link -->
                <div class="text-center mt-6 pt-4 border-t border-gray-100 animate__animated" style="animation-delay: 0.5s;">
                    <p class="text-sm text-gray-600">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="font-medium text-indigo-800 hover:text-indigo-800">
                            Create an account
                        </a>
                    </p>
                </div>
            </form>

            <!-- Optional social logins -->
            <div class="mt-6 animate__animated" style="animation-delay: 0.6s;">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center text-xs">
                        <span class="px-2 bg-white text-gray-500">Or continue with</span>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-1 gap-3">
                    <button type="button" id="googleBtn" class="py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-transform duration-200 transform hover:scale-105">
                        <svg class="h-5 w-5 text-gray-500 inline-block mr-1" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.545 10.239v3.821h5.445c-.712 2.315-2.647 3.972-5.445 3.972-3.332 0-6.033-2.701-6.033-6.032s2.701-6.032 6.033-6.032c1.498 0 2.866.549 3.921 1.453l2.814-2.814C17.503 2.988 15.139 2 12.545 2 7.021 2 2.543 6.477 2.543 12s4.478 10 10.002 10c8.396 0 10.249-7.85 9.426-11.748l-9.426-.013z"/>
                        </svg>
                        Google
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize animations
            const elementsToAnimate = document.querySelectorAll('.animate__animated');
            elementsToAnimate.forEach(element => {
                if (!element.classList.contains('animate__fadeIn')) {
                    element.classList.add('animate__fadeIn');
                }
            });

            // Toggle password visibility
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');

            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                if (type === 'text') {
                    eyeIcon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                    `;
                } else {
                    eyeIcon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    `;
                }
            });

            // Form input animations
            const inputs = document.querySelectorAll('input');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('scale-105');
                    this.parentElement.style.transition = 'all 0.3s ease';
                });

                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('scale-105');
                });
            });

            // Logo animation
            const houseSvg = document.getElementById('houseSvg');
            houseSvg.addEventListener('mouseover', function() {
                this.classList.add('animate__animated', 'animate__heartBeat');
            });

            houseSvg.addEventListener('animationend', function() {
                this.classList.remove('animate__animated', 'animate__heartBeat');
            });

            // Button effects
            const loginBtn = document.getElementById('loginBtn');
            loginBtn.addEventListener('click', function(e) {
                if (!validateForm()) {
                    e.preventDefault();
                }
            });

            // Simple form validation with visual feedback
            function validateForm() {
                let isValid = true;
                const emailInput = document.getElementById('email');
                const passwordInput = document.getElementById('password');

                if (!emailInput.value || !emailInput.value.includes('@')) {
                    emailInput.classList.add('border-red-500');
                    emailInput.parentElement.classList.add('animate__animated', 'animate__shakeX');
                    setTimeout(() => {
                        emailInput.parentElement.classList.remove('animate__animated', 'animate__shakeX');
                    }, 1000);
                    isValid = false;
                } else {
                    emailInput.classList.remove('border-red-500');
                }

                if (!passwordInput.value || passwordInput.value.length < 6) {
                    passwordInput.classList.add('border-red-500');
                    passwordInput.parentElement.classList.add('animate__animated', 'animate__shakeX');
                    setTimeout(() => {
                        passwordInput.parentElement.classList.remove('animate__animated', 'animate__shakeX');
                    }, 1000);
                    isValid = false;
                } else {
                    passwordInput.classList.remove('border-red-500');
                }

                return isValid;
            }

            // Background parallax effect
            window.addEventListener('mousemove', function(e) {
                const x = e.clientX / window.innerWidth;
                const y = e.clientY / window.innerHeight;

                // document.querySelector('.bg-image').style.backgroundPosition = `${50 + x * 10}% ${50 + y * 10}%`;
            });

            // Google button effect
            const googleBtn = document.getElementById('googleBtn');
            googleBtn.addEventListener('mouseover', function() {
                this.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
            });

            googleBtn.addEventListener('mouseout', function() {
                this.style.boxShadow = '';
            });

            // Title effect
            const brandTitle = document.getElementById('brandTitle');
            brandTitle.addEventListener('mouseover', function() {
                this.classList.add('animate__animated', 'animate__pulse');
            });

            brandTitle.addEventListener('animationend', function() {
                this.classList.remove('animate__animated', 'animate__pulse');
            });
        });
    </script>
</body>
</html>
