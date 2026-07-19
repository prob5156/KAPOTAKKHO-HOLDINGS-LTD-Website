<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password — Kapotakkhho Holdings Ltd.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <script src="https://cdn.tailwindcss.com"></script>
    <style>body { font-family: 'Inter', sans-serif; } .font-serif { font-family: 'Playfair Display', serif; }</style>
</head>
<body class="min-h-screen bg-[#0a0f1e] flex items-center justify-center relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-[radial-gradient(#c9a84c_1px,transparent_1px)] [background-size:28px_28px]"></div>
    </div>
    <div class="relative z-10 w-full max-w-md px-4">
        <div class="text-center mb-8">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-amber-500 to-amber-700 flex items-center justify-center mx-auto mb-4">
                <span class="text-white font-serif font-bold text-2xl">K</span>
            </div>
            <h1 class="font-serif text-white text-2xl font-bold">Kapotakkhho Holdings</h1>
            <p class="text-slate-400 text-sm mt-1">Password Recovery</p>
        </div>
        <div class="bg-[#111827]/90 border border-slate-800 rounded-2xl p-8 shadow-2xl">
            <h2 class="text-white font-semibold text-lg mb-2 text-center">Forgot your password?</h2>
            <p class="text-slate-400 text-sm text-center mb-6">Enter your email and we'll send you a reset link.</p>

            @if(session('status'))
                <div class="mb-4 px-4 py-3 bg-green-900/40 border border-green-700 rounded-lg text-green-400 text-sm">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
                @csrf
                <div>
                    <label for="email" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                        class="w-full bg-[#0a0f1e] border @error('email') border-red-500 @else border-slate-700 @enderror rounded-xl px-4 py-3 text-sm text-white placeholder-slate-600 focus:outline-none focus:border-amber-500 transition-colors"
                        placeholder="admin@kapotakkhho.com">
                    @error('email')
                        <p class="mt-1 text-red-400 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full py-3.5 bg-amber-600 hover:bg-amber-500 text-slate-950 font-bold text-sm uppercase tracking-widest rounded-xl transition-all duration-300">
                    Send Reset Link
                </button>
            </form>
            <p class="text-center text-slate-500 text-xs mt-6">
                <a href="{{ route('login') }}" class="text-amber-500 hover:text-amber-400 transition-colors">← Back to login</a>
            </p>
        </div>
    </div>
</body>
</html>
