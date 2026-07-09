<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Kapotakkhho Holdings Ltd.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="min-h-screen bg-[#0a0f1e] flex items-center justify-center relative overflow-hidden">

    {{-- Background pattern --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:28px_28px]"></div>
    </div>
    <div class="absolute -left-40 top-1/4 w-80 h-80 rounded-full bg-blue-800 filter blur-[180px] opacity-20"></div>
    <div class="absolute right-0 bottom-0 w-80 h-80 rounded-full bg-amber-700 filter blur-[180px] opacity-10"></div>

    <div class="relative z-10 w-full max-w-md px-4">

        {{-- Logo --}}
        <div class="text-center mb-8">
            <a href="{{ route('home') }}" class="inline-block">
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-amber-500 to-amber-700 flex items-center justify-center mx-auto mb-4 shadow-lg shadow-amber-900/30">
                    <span class="text-white font-serif font-bold text-2xl">K</span>
                </div>
            </a>
            <h1 class="font-serif text-white text-2xl font-bold">Kapotakkhho Holdings</h1>
            <p class="text-slate-400 text-sm mt-1">Admin Portal Login</p>
        </div>

        {{-- Card --}}
        <div class="bg-[#111827]/90 border border-slate-800 rounded-2xl p-8 shadow-2xl backdrop-blur-sm">
            <h2 class="text-white font-semibold text-lg mb-6 text-center">Sign in to your account</h2>

            @if(session('status'))
                <div class="mb-4 px-4 py-3 bg-green-900/40 border border-green-700 rounded-lg text-green-400 text-sm">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full bg-[#0a0f1e] border @error('email') border-red-500 @else border-slate-700 @enderror rounded-xl px-4 py-3 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-amber-500 transition-colors"
                        placeholder="admin@kapotakkhho.com">
                    @error('email')
                        <p class="mt-1 text-red-400 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password --}}
                <div>
                    <label for="password" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Password</label>
                    <input id="password" type="password" name="password" required
                        class="w-full bg-[#0a0f1e] border @error('password') border-red-500 @else border-slate-700 @enderror rounded-xl px-4 py-3 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-amber-500 transition-colors"
                        placeholder="••••••••">
                    @error('password')
                        <p class="mt-1 text-red-400 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Remember + Forgot --}}
                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" id="remember" class="w-4 h-4 rounded border-slate-600 bg-slate-800 text-amber-500 focus:ring-amber-500">
                        <span class="text-slate-400 text-sm">Remember me</span>
                    </label>
                    <a href="{{ route('password.request') }}" class="text-amber-500 text-sm hover:text-amber-400 transition-colors">Forgot password?</a>
                </div>

                {{-- Submit --}}
                <button type="submit"
                    class="w-full py-3.5 bg-amber-600 hover:bg-amber-500 text-slate-950 font-bold text-sm uppercase tracking-widest rounded-xl transition-all duration-300 shadow-lg shadow-amber-900/30">
                    Sign In
                </button>
            </form>

            <p class="text-center text-slate-500 text-xs mt-6">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-amber-500 hover:text-amber-400 transition-colors">Register here</a>
            </p>
        </div>

        <p class="text-center text-slate-600 text-xs mt-6">
            &copy; {{ date('Y') }} Kapotakkhho Holdings Ltd. All rights reserved.
        </p>
    </div>
</body>
</html>
