<form id="editTaskForm" class="modal-content" onsubmit="return false;">
  @csrf
  <input type="hidden" name="id">
  <div class="modal-header">
    <h5 class="modal-title">Edit Task</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
  </div>
  <div class="modal-body">
    <input type="text" name="title" class="form-control mb-2" required>
    <textarea name="description" class="form-control mb-2"></textarea>
    <select name="status" class="form-select">
      <option>To Do</option>
      <option>In Progress</option>
      <option>Done</option>
    </select>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-success" id="editSubmitBtn">Update Task</button>
  </div>
</form>
