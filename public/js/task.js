// public/js/task.js
document.addEventListener('DOMContentLoaded', () => {
    const taskList = document.getElementById('taskList');

    if (!taskList) {
        console.error("taskList not found in DOM.");
        return;
    }

    new Sortable(taskList, {
        animation: 150,
        onEnd: () => {
            const order = [...taskList.children].map(li => li.dataset.id);
            console.log('Sending reorder request:', order); //

            fetch('/tasks/reorder', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ order })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    console.log('Tasks reordered successfully.');
                } else {
                    alert('Server error updating order.');
                }
            })
            .catch(error => {
                console.error('Reorder error:', error);
                alert('Reordering failed.');
            });
        }
    });

    // Handle Edit Button Logic
    document.querySelectorAll('.edit-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.getElementById('editForm').action = `/tasks/${btn.dataset.id}`;
            document.getElementById('editTitle').value = btn.dataset.title;
            document.getElementById('editDescription').value = btn.dataset.description;
            document.getElementById('editStatus').value = btn.dataset.status;
        });
    });
});
