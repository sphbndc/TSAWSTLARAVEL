@extends('layouts.app')
@section('title', 'Today')
@section('content')
    <div class="page-heading"><p class="eyebrow">TODAY'S SCHEDULE</p><h1>Today</h1><p>Tasks scheduled for {{ today()->format('F j, Y') }}.</p></div>
    @include('partials.tasks')
@endsection
