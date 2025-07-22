<div class="modal fade" id="createTaskModal" tabindex="-1">
  <div class="modal-dialog">
    <form id="createTaskForm" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create Task</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="text" name="title" class="form-control mb-2" placeholder="Title" required>
        <textarea name="description" class="form-control mb-2" placeholder="Description"></textarea>
        <select name="status" class="form-select">
          <option>To Do</option>
          <option>In Progress</option>
          <option>Done</option>
        </select>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary">Save</button>
      </div>
    </form>
  </div>
</div>
