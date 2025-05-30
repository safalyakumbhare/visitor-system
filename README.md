# Visitor Management System for Flat Society

A web-based application designed to streamline the process of managing visitor activities in a flat society. This system enhances security, improves monitoring, and simplifies access to visitor records for admins and flat owners.

## User Interface 👨‍💻
<ol>
    <li>
        <p>Login Page</p>
        <img src="screenshots/login.png" alt="Project_Screenshots" width="400" height="200">
    </li>
    <li>
        <p>User Registration Page</p>
        <img src="screenshots/register.png" alt="Project_Screenshots" width="400" height="200">
    </li>
    <li>
        <p>Admin Dashboard</p>
        <img src="screenshots/admin-dashboard.png" alt="Project_Screenshots" width="400" height="200">
    </li>
    <li>
        <p>Admin's (Flat Owners Monitor Page)</p>
        <img src="screenshots/users-admin-dashboard.png" alt="Project_Screenshots" width="400" height="200">
    </li>
    <li>
        <p>Admin's {Visitors Monitoring Page)</p>
        <img src="screenshots/visitors-monitor-page.png" alt="Project_Screenshots" width="400" height="200">
    </li>
    <li>
        <p>User Dashboard</p>
        <img src="screenshots/user-dashboard.png" alt="Project_Screenshots" width="400" height="200">
    </li>
</ol>


## Technologies Used

- **Frontend:** Bootstrap 5, AJAX
- **Backend:** Core Laravel 11
- **Database:** MySQL

---

## Features

### Admin Role (Watchman):
- Add flat owners with their details (name, flat number, password, etc.).
- Record visitor details including in-time, out-time, purpose, and visited flat.
- View and manage all visitor logs.

### Flat Owner Role:
- Log in to monitor visitor activity specific to their flat.
- Filter visitor logs by date for easy retrieval of information.
- View complete visitor details including the purpose and duration of visits.

### Additional Features:
- Real-time visitor updates using AJAX for a seamless experience.
- Secure authentication and role-based access control.
- Responsive design built with Bootstrap 5 for optimal usability on all devices.

---




## Installation

Follow these steps to set up the project locally:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/your-username/visitor-management-system.git
   ```

2. **Navigate to the Project Directory:**
   ```bash
   cd visitor-management-system
   ```

3. **Install Dependencies:**
   ```bash
   composer install
   npm install
   ```

4. **Set Up Environment:**
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update the `.env` file with your database and application configuration.

5. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```

6. **Run Migrations:**
   ```bash
   php artisan migrate
   ```

7. **Start the Development Server:**
   ```bash
   php artisan serve
   ```

8. **Access the Application:**
   Open `http://localhost:8000` in your web browser.

---

## Usage

1. **Admin Login:**
   - Use the credentials set during user creation to log in as the admin (watchman).
   - Add flat owners and manage visitor logs.

2. **Flat Owner Login:**
   - Flat owners can log in to monitor visitors for their specific flats and filter logs by date.

---



For any inquiries or feedback, please reach out to [safalyakumbhare@gmail.com].
