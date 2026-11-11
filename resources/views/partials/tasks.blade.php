<section class="list-section">
    <div class="list-heading"><h2>Task list</h2><span>{{ $tasks->count() }} {{ $tasks->count() === 1 ? 'task' : 'tasks' }}</span></div>
    @forelse ($tasks as $task)
        <div class="task-row">
            <span class="task-mark {{ $task->status === 'completed' ? 'done' : '' }}">{{ $task->status === 'completed' ? '✓' : '' }}</span>
            <span class="task-title">{{ $task->title }}</span>
            <span class="status">{{ ucfirst($task->status) }}</span>
            <time datetime="{{ $task->task_date->format('Y-m-d') }}">{{ $task->task_date->format('M j, Y') }}</time>
        </div>
    @empty
        <p class="empty">No tasks scheduled for this date.</p>
    @endforelse
</section>
