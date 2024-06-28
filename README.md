### User Authentication Project

#### Description

This project provides a simple yet effective user authentication system built with HTML, CSS, JavaScript, PHP, and MySQL. It features a registration form for new users, a login form for existing users, and session management to ensure secure user authentication. The project is designed to be easily understandable and extensible, making it ideal for beginners and those looking to implement basic authentication in their web applications.

#### Features

- **User Registration:** New users can register with their name, username, password, and phone number.
- **User Login:** Registered users can log in with their username and password.
- **Password Hashing:** Passwords are securely hashed using PHP’s `password_hash` function.
- **Session Management:** User sessions are managed to maintain login state.
- **Responsive Design:** The interface is designed to be user-friendly and responsive.

#### Directory Structure

```
/UserAuthProject
│
├── /css
│   └── styles.css            # CSS styles for the project
│
├── /js
│   └── script.js             # JavaScript for toggling forms
│
├── /php
│   ├── login.php             # Handles user login
│   ├── logout.php            # Handles user logout
│   ├── register.php          # Handles user registration
│   └── start_session.php     # Starts user session (if needed)
│
├── /html
│   ├── index.html            # Main login page
│   └── welcome.html          # Welcome page after successful login
│
├── /sql
│   └── setup.sql             # SQL script to set up the database and table
│
└── README.md                 # Project description and setup instructions
```

#### Getting Started

##### Prerequisites

- **Web Server:** Apache, Nginx, or any other web server
- **PHP:** Version 7.4 or higher
- **MySQL:** Version 5.7 or higher
- **Optional:** phpMyAdmin for easier database management

##### Installation

1. **Clone the Repository:**
   ```sh
   git clone https://github.com/vishal-ravi/UserAuthProject.git
   ```

2. **Set Up the Database:**
   - Access phpMyAdmin or MySQL command line and run the `setup.sql` script located in the `/sql` directory:
     ```sql
     CREATE DATABASE UserAuth;
     USE UserAuth;
     CREATE TABLE users (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(100),
         username VARCHAR(100) UNIQUE,
         password VARCHAR(255),
         phone VARCHAR(15)
     );
     ```

3. **Move the Project to Your Web Server's Root Directory:**
   - **Windows (XAMPP):** Move `UserAuthProject` to `C:\xampp\htdocs\`.
   - **Mac (MAMP):** Move `UserAuthProject` to `/Applications/MAMP/htdocs/`.
   - **Linux (LAMP):** Move `UserAuthProject` to `/var/www/html/`.

4. **Configure Database Connection:**
   - Update the database connection details in `login.php` and `register.php` if needed:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";  // Leave this empty if you haven't set a password for MySQL
     $dbname = "UserAuth";
     ```

5. **Start Your Web Server and MySQL Server:**
   - Ensure Apache and MySQL services are running.

6. **Access the Project in Your Web Browser:**
   - Navigate to `http://localhost/UserAuthProject/html/index.html`.

#### Usage

- **Register a New User:** Fill out the registration form with name, username, password, and phone number.
- **Log In:** Use the registered username and password to log in.
- **Log Out:** Click the logout link on the welcome page to end the session.

#### Contributing

Contributions are welcome! Please fork the repository and create a pull request with your changes. Make sure your code follows the existing coding style and includes appropriate comments.

#### License

This project is open source and available under the [MIT License](LICENSE).

#### Contact

For any questions or feedback, please create an issue or contact me at [vishalravi294@gmail.com].

---

Feel free to customize the description, prerequisites, and contact information as per your requirements.
