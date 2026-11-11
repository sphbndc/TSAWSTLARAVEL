<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Taskline</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="shell">
        <aside class="sidebar">
            <a class="brand" href="{{ route('welcome') }}">Taskline</a>
            <p class="sidebar-note">Tasks for Today</p>
            <nav aria-label="Main navigation">
                <a class="{{ request()->routeIs('welcome') ? 'active' : '' }}" href="{{ route('welcome') }}">Today</a>
                <a class="{{ request()->routeIs('tasks') ? 'active' : '' }}" href="{{ route('tasks') }}">All tasks</a>
                <a class="{{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">Profile</a>
                <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
            </nav>
            <p class="sidebar-footer">IT0049 · Laravel</p>
        </aside>
        <main>
            <header class="topbar"><span>Taskline / Tasks for Today</span><time>{{ today()->format('l, F j, Y') }}</time></header>
            <div class="content">@yield('content')</div>
        </main>
    </div>
</body>
</html>
