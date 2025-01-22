# Visitor Management System for Flat Society

A web-based application designed to streamline the process of managing visitor activities in a flat society. This system enhances security, improves monitoring, and simplifies access to visitor records for admins and flat owners.

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

## Technologies Used

- **Backend:** Core Laravel 11
- **Frontend:** Bootstrap 5, AJAX
- **Database:** MySQL

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



For any inquiries or feedback, please reach out to [your-safalyakumbhare@gmail.com].
