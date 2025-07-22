<div class="modal fade" id="taskModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <form id="taskForm">
      @csrf
      <input type="hidden" name="id" id="task-id">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="taskModalTitle">Create Task</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" id="task-title" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Description</label>
            <textarea name="description" id="task-desc" class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label>Status</label>
            <select name="status" id="task-status" class="form-control" required>
              <option value="todo">To-Do</option>
              <option value="in_progress">In Progress</option>
              <option value="done">Done</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" id="taskSubmitBtn">Save</button>
        </div>
      </div>
    </form>
  </div>
</div>
