@php
    $statusClass = match($task->status) {
        'todo' => 'border-danger',
        'in_progress' => 'border-warning',
        'done' => 'border-success',
        default => 'border-secondary'
    };
@endphp

<div class="card task-card border-{{ $task->status }}" id="task-{{ $task->id }}"
     draggable="true" ondragstart="drag(event)" data-id="{{ $task->id }}">
  <div class="card-body p-2">
    <h6 class="mb‑1">{{ $task->title }}</h6>
    <p class="small text-muted mb‑2">{{ $task->description }}</p>
    <div class="text-end">
      <button class="btn btn-sm btn-outline-secondary me-1" onclick="openEdit({{ $task->id }})">Edit</button>
      <button class="btn btn-sm btn-danger" onclick="deleteTask({{ $task->id }})">Delete</button>
    </div>
  </div>
</div>
