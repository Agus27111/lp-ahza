@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 flex items-center justify-center px-4">
        <div class="w-full max-w-md">
            <!-- Card -->
            <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-8 md:p-12">
                <!-- Header -->
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-primary mb-2">Welcome Back</h1>
                    <p class="text-slate-600">Sign in to your account</p>
                </div>

                <!-- Login Form -->
                <form action="{{ route('login.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">
                            Email Address
                        </label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('email') border-red-500 @enderror"
                            placeholder="you@example.com" required>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-slate-700 mb-2">
                            Password
                        </label>
                        <input type="password" id="password" name="password"
                            class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('password') border-red-500 @enderror"
                            placeholder="••••••••" required>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-primary hover:bg-primary-dark text-white font-bold py-3 rounded-lg transition-all shadow-md hover:shadow-lg mt-8">
                        Sign In
                    </button>
                </form>

                <!-- Divider -->
                <div class="relative my-8">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-slate-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-slate-500">Or continue with</span>
                    </div>
                </div>

                <!-- Google Login -->
                <a href="{{ route('google.login') }}"
                    class="w-full flex items-center justify-center gap-3 bg-white hover:bg-slate-50 text-slate-700 px-4 py-3 rounded-lg font-bold transition-all shadow-md border border-slate-100">
                    <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" class="w-5 h-5"
                        alt="Google">
                    Login with Google
                </a>

                <!-- Footer -->
                <p class="text-center text-slate-600 text-sm mt-8">
                    Don't have an account?
                    <a href="#" class="text-primary font-semibold hover:underline">Contact admin</a>
                </p>
            </div>
        </div>
    </div>
@endsection
