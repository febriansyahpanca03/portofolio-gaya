<footer class="border-t border-rose-100 bg-white/60">
    <div class="mx-auto flex max-w-6xl flex-col items-center gap-4 px-6 py-8 text-sm text-stone-500 sm:flex-row sm:justify-between">
        <p>&copy; {{ date('Y') }} {{ $profile['name'] }}. All rights reserved.</p>

        <div class="flex items-center gap-5">
            <a href="{{ $profile['linkedin'] }}" target="_blank" rel="noopener" class="transition hover:text-rose-600">LinkedIn</a>
            <a href="{{ $profile['portfolio_link'] }}" target="_blank" rel="noopener" class="transition hover:text-rose-600">Portofolio Digital</a>
            <a href="https://wa.me/{{ $profile['phone_link'] }}" target="_blank" rel="noopener" class="transition hover:text-rose-600">WhatsApp</a>
        </div>
    </div>
</footer>