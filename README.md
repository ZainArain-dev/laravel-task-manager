# ✅ Task Manager Web App

A simple and responsive **Task Manager Web Application** built with **Laravel (PHP 8+)**, **Bootstrap 5**, and **Vanilla JavaScript**. This app allows users to:

- Create, edit, and delete tasks.
- Mark tasks as “To Do,” “In Progress,” or “Done.”
- Reorder tasks using drag-and-drop.
- View tasks with status-based color indicators.

No login is required, and all tasks are stored in a MySQL database.

---

## 📸 Screenshots

<img width="1672" height="353" alt="image" src="https://github.com/user-attachments/assets/6408c1ea-bacf-4020-a632-b56b718406eb" />



---

## 🚀 Features

- ✅ Task creation, editing, and deletion
- 🔁 Status management: To Do, In Progress, Done
- 🖱️ Drag-and-drop task sorting
- 🎨 Status color indicators
- 📱 Mobile responsive using Bootstrap 5
- 💾 MySQL database support

---

## 🛠️ Tech Stack

- **Backend:** PHP 8+, Laravel
- **Frontend:** HTML, Bootstrap 5, JavaScript
- **Database:** MySQL
- **Other:** jQuery UI for drag-and-drop

---

## 📦 Installation

1. **Clone the repository**

```bash
git clone https://github.com/ZainArain-dev/laravel-task-manager.git
cd laravel-task-manager

2. Install dependencies
composer install

3. cp .env.example .env
4. php artisan key:generate
5. Set database credentials
6. Import the database (A MySQL database dump file is included)
mysql -u root -p your_database_name < database/db_dump.sql (bsh)
7. Run the app
php artisan serve
