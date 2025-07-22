<!-- resources/views/tasks/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .status-todo { background-color: #f8d7da; }
        .status-inprogress { background-color: #fff3cd; }
        .status-done { background-color: #d4edda; }
        .draggable:hover { cursor: grab; }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Task Manager</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createTaskModal">+ Add Task</button>
        </div>

        <ul id="taskList" class="list-group">
            @foreach($tasks as $task)
                <li class="list-group-item draggable" data-id="{{ $task->id }}">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <strong>{{ $task->title }}</strong>
                            <p class="mb-0 text-muted small">{{ $task->description }}</p>
                            <span class="badge
                                {{ $task->status == 'To Do' ? 'bg-danger' : ($task->status == 'In Progress' ? 'bg-warning text-dark' : 'bg-success') }}">
                                {{ $task->status }}
                            </span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-secondary me-2 edit-btn"
                                data-id="{{ $task->id }}"
                                data-title="{{ $task->title }}"
                                data-description="{{ $task->description }}"
                                data-status="{{ $task->status }}"
                                data-bs-toggle="modal"
                                data-bs-target="#editTaskModal">Edit</button>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Delete this task?')" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    @include('tasks.modals')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
    <script src="{{ asset('js/task.js') }}"></script>
</body>
</html>
