<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'بازرسی' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-black dark:text-white font_iransans">
@if(auth()->check())
    <aside id="default-sidebar"
           class="fixed top-0 right-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
           aria-label="Sidebar">
        @include('components.layouts.sidebar')
    </aside>
@endif
<div class="{{ auth()->check() ? 'p-4 sm:mr-64' : '' }}">
    {{ $slot }}
</div>
</body>
</html>
