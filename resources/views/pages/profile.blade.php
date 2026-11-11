@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    <div class="page-heading"><p class="eyebrow">ACCOUNT</p><h1>Profile</h1><p>Demo user information.</p></div>
    @if ($user)
        <section class="profile">
            <div class="initial">{{ strtoupper(substr($user->full_name, 0, 1)) }}</div>
            <div><p class="eyebrow">DEMO USER</p><h2>{{ $user->full_name }}</h2><p class="muted">{{ '@'.$user->username }}</p>
                <dl><div><dt>Email</dt><dd>{{ $user->email }}</dd></div><div><dt>Member since</dt><dd>{{ $user->created_at->format('M j, Y') }}</dd></div></dl>
            </div>
        </section>
    @else
        <p class="empty">No profile record found.</p>
    @endif
@endsection
