<aside class="w-64 bg-slate-800 text-white min-h-screen p-4 flex flex-col justify-between">
    <div>
        <!-- Application Logo -->
        <div class="text-2xl font-bold mb-6 tracking-wide px-2">
            MyApp Admin
        </div>

        <!-- Navigation Links -->
        <nav class="space-y-1">
            {{-- <a href="#" class="block py-2.5 px-4 rounded transition duration-200 'ddd' ? 'bg-blue-600 text-white' : 'text-slate-400 hover:bg-slate-700 hover:text-white' }}">
                Dashboard
            </a> --}}
            {{-- <a href="{{ route('dashboard') }}" 
               class="block py-2.5 px-4 rounded transition duration-200 {{ request()->routeIs('dashboard') ? 'bg-blue-600 text-white' : 'text-slate-400 hover:bg-slate-700 hover:text-white' }}">
                Dashboard
            </a>
            <a href="{{ route('users.index') }}" 
               class="block py-2.5 px-4 rounded transition duration-200 {{ request()->routeIs('users.*') ? 'bg-blue-600 text-white' : 'text-slate-400 hover:bg-slate-700 hover:text-white' }}">
                Users
            </a>
            <a href="{{ route('settings') }}" 
               class="block py-2.5 px-4 rounded transition duration-200 {{ request()->routeIs('settings') ? 'bg-blue-600 text-white' : 'text-slate-400 hover:bg-slate-700 hover:text-white' }}">
                Settings
            </a> --}}
        </nav>
    </div>

    <!-- Footer Profile/Logout Section -->
    <div class="border-t border-slate-700 pt-4 px-2">
        <span class="block text-sm text-slate-300">{{ 'Guest' }}</span>{{-- auth()->user()->name ?? 'Guest' --}}
    </div>
</aside>
