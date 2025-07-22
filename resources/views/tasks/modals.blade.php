<!-- resources/views/tasks/modals.blade.php -->
<!-- Create Modal -->
<div class="modal fade" id="createTaskModal" tabindex="-1">
  <div class="modal-dialog">
    <form class="modal-content" action="{{ route('tasks.store') }}" method="POST">
      @csrf
      <div class="modal-header"><h5 class="modal-title">Add Task</h5></div>
      <div class="modal-body">
        <input class="form-control mb-2" name="title" placeholder="Task Title" required>
        <textarea class="form-control mb-2" name="description" placeholder="Description"></textarea>
        <select class="form-select" name="status" required>
          <option value="To Do">To Do</option>
          <option value="In Progress">In Progress</option>
          <option value="Done">Done</option>
        </select>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary">Save</button>
      </div>
    </form>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editTaskModal" tabindex="-1">
  <div class="modal-dialog">
    <form id="editForm" class="modal-content" method="POST">
      @csrf @method('PUT')
      <div class="modal-header"><h5 class="modal-title">Edit Task</h5></div>
      <div class="modal-body">
        <input class="form-control mb-2" name="title" id="editTitle" required>
        <textarea class="form-control mb-2" name="description" id="editDescription"></textarea>
        <select class="form-select" name="status" id="editStatus" required>
          <option value="To Do">To Do</option>
          <option value="In Progress">In Progress</option>
          <option value="Done">Done</option>
        </select>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</div>
