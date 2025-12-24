# LAMP-Stack-Blog-Website
MoonLight – A Modern Thought-Sharing Web Platform
================================================

Where thoughts turn into stories.

MoonLight is a modern full-stack web application that allows users to share their thoughts in real time.
It focuses on clean UI/UX, a secure backend, and a smooth user experience.
This project is suitable for college mini projects as well as portfolio presentation.

------------------------------------------------
Overview
------------------------------------------------

MoonLight is designed to demonstrate real-world backend development using PHP and MySQL,
combined with a minimal and modern frontend.
The project includes user-side submission, admin-side management, and live updates using AJAX.

------------------------------------------------
Key Highlights
------------------------------------------------

UI / UX
- Minimal and modern interface
- Floating label form inputs
- Smooth interaction flow
- Clean admin dashboard layout

Functionality
- Thought submission system
- Live thought feed using AJAX
- Secure admin authentication
- Admin-only dashboard
- Delete and manage posts

------------------------------------------------
Features
------------------------------------------------

User Side
- Submit thoughts using a simple form
- Data stored securely in database
- Live updates without page reload

Admin Side
- Secure login system
- View all submitted thoughts
- Delete unwanted posts
- Session-protected pages

------------------------------------------------
Technology Stack
------------------------------------------------

Frontend:
- HTML5
- CSS3
- JavaScript

Backend:
- PHP (Prepared Statements)

Database:
- MySQL

Other:
- AJAX
- XAMPP (Apache + MySQL)

------------------------------------------------
Project Structure
------------------------------------------------

dynamicbackendweb/

index.html          - User interface  
submit.php          - Handles form submission  
fetch_posts.php     - AJAX live post feed  
config.php          - Database connection  

admin.html          - Admin login page  
admin_login.php     - Admin authentication logic  
dashboard.php       - Admin dashboard  
delete.php          - Delete posts  
logout.php          - Admin logout  

README.md           - Project documentation  

------------------------------------------------
Database Design
------------------------------------------------

Database Name:
moonlight_db

Table: posts
- id (INT, Primary Key)
- name (VARCHAR)
- email (VARCHAR)
- message (TEXT)
- created_at (TIMESTAMP)

Table: admins
- id (INT, Primary Key)
- username (VARCHAR)
- password (VARCHAR, hashed)

------------------------------------------------
Installation & Setup
------------------------------------------------

1. Install XAMPP
2. Clone the repository from GitHub
3. Move the project folder to:
   xampp/htdocs/
4. Start Apache and MySQL from XAMPP Control Panel
5. Import the database using phpMyAdmin
6. Open the project in browser:
   http://localhost/dynamicbackendweb/index.html

------------------------------------------------
Admin Access
------------------------------------------------

Admin Login URL:
http://localhost/dynamicbackendweb/admin.html

Default Credentials:
Username: admin
Password: admin123

Note:
Change admin credentials before deployment.

------------------------------------------------
Security Practices Used
------------------------------------------------

- Prepared statements to prevent SQL injection
- Session-based authentication
- Input validation
- Output escaping
- Restricted admin routes

------------------------------------------------
Academic & Portfolio Usage
------------------------------------------------

- College Mini Project
- Backend Learning Project
- Full-Stack Demonstration
- Resume / Portfolio Ready

------------------------------------------------
Author
------------------------------------------------

Jeya Sabarinath  
Cyber Sab  

Cybersecurity and Full-Stack Development Enthusiast  
Focused on secure and scalable systems

------------------------------------------------
Future Enhancements
------------------------------------------------

- Edit and update posts
- Role-based admin system
- Cloud deployment
- UI animations and themes
- REST API version

------------------------------------------------
License
------------------------------------------------

This project is open-source and free to use for learning, academic, and personal purposes.

------------------------------------------------
MoonLight
Built with passion, logic, and clean code
------------------------------------------------
