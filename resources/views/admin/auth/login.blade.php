<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | NTFC CMS</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0e0e0e] text-[#e5e2e1] min-h-screen flex items-center justify-center p-4" style="font-family: 'Inter', sans-serif;">

    <div class="w-full max-w-md bg-[#131313] border border-white/10 rounded-xl p-8 shadow-2xl">
        <div class="text-center mb-8">
            <div class="inline-block mb-4">
                <img src="{{ asset('images/logo biru.png') }}" alt="NTFC" class="h-10 w-auto mx-auto">
            </div>
            <h1 class="text-xl font-bold text-white tracking-tight">Admin Content System</h1>
            <p class="text-xs text-white/50 mt-1">Masuk untuk mengelola konten website NTFC</p>
        </div>

        @if(session('success'))
            <div class="mb-6 p-3 rounded bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mb-6 p-3 rounded bg-red-500/10 border border-red-500/30 text-red-400 text-xs">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="email" class="block text-xs font-semibold text-white/70 uppercase tracking-wider mb-2">Email Address</label>
                <input type="email" name="email" id="email" value="{{ old('email', 'admin@ntfc.com') }}" required autofocus
                       class="w-full bg-[#1c1b1b] border border-white/15 rounded-lg px-4 py-3 text-sm text-white focus:outline-none focus:border-[#048CD6] focus:ring-1 focus:ring-[#048CD6] transition-all">
            </div>

            <div>
                <label for="password" class="block text-xs font-semibold text-white/70 uppercase tracking-wider mb-2">Password</label>
                <input type="password" name="password" id="password" required
                       class="w-full bg-[#1c1b1b] border border-white/15 rounded-lg px-4 py-3 text-sm text-white focus:outline-none focus:border-[#048CD6] focus:ring-1 focus:ring-[#048CD6] transition-all"
                       placeholder="••••••••">
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="remember" class="rounded bg-[#1c1b1b] border-white/20 text-[#048CD6] focus:ring-0">
                    <span class="text-xs text-white/60">Ingat saya</span>
                </label>
            </div>

            <button type="submit" class="w-full bg-[#048CD6] hover:bg-[#0374b3] text-white font-semibold py-3 px-4 rounded-lg text-sm transition-all duration-200 tracking-wide uppercase">
                Masuk ke Dashboard
            </button>
        </form>

        <div class="mt-8 pt-6 border-t border-white/5 text-center text-xs text-white/30">
            © {{ date('Y') }} Nusantara Tax, Finance, and Consulting.
        </div>
    </div>

</body>
</html>
