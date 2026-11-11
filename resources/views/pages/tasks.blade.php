@extends('layouts.app')
@section('title', 'All tasks')
@section('content')
    <div class="page-heading"><p class="eyebrow">YOUR SCHEDULE</p><h1>All tasks</h1><p>Every task, ordered by due date.</p></div>
    @include('partials.tasks')
@endsection
