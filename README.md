# The Curious Mind Blog 📝

A simple yet powerful blog system built with PHP where users can create, read, and interact with blog posts. Perfect for small to medium-sized blogging communities.

## ⚡ Technologies Used

- **Frontend**
  - HTML5
  - CSS3
  - JavaScript
  - Font Awesome icons

- **Backend**
  - PHP
  - MySQL
  - Apache

## ✨ Features

- User login and registration
- Create and read blog posts
- Comment on posts
- Like posts
- Search posts
- View posts by category
- View posts by author
- Admin dashboard for management

## 🚀 Setup Guide

### Prerequisites
- XAMPP/WAMP installed on your computer
- Basic knowledge of PHP and MySQL
- Text editor (VS Code, Sublime, etc.)

### Installation Steps

1. **Set up your server environment**
   - Install XAMPP or WAMP
   - Start Apache and MySQL services

2. **Project Setup**
   - Get the project files using one of these methods:
     
     **Option 1: Clone with Git**
     ```bash
     # Open terminal and navigate to your server directory
     cd C:/xampp/htdocs    # for XAMPP
     # OR
     cd C:/wamp/www        # for WAMP

     # Clone the repository
     git clone https://github.com/Khadalicioso/the_curious_mind.git
     ```

     **Option 2: Direct Download**
     - Visit [https://github.com/Khadalicioso/the_curious_mind](https://github.com/Khadalicioso/the_curious_mind)
     - Click the green 'Code' button
     - Select 'Download ZIP'
     - Extract the ZIP file to your server directory:
       - XAMPP: `C:/xampp/htdocs/the_curious_mind`
       - WAMP: `C:/wamp/www/the_curious_mind`

3. **Database Setup**
   ```sql
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database named 'blog_db'
   - Import blog_db.sql into your new database
   ```

4. **Configure Database Connection**
   - Open `components/db.php`
   - Update these settings if needed:
     ```php
     $host = "localhost"
     $username = "root"
     $password = ""
     $database = "blog_db"
     ```

5. **Access the Website**
   - Open your browser
   - Visit: `http://localhost/the_curious_mind`
   - Default admin login:
     - Username: admin
     - Password: admin123

### Troubleshooting
- Make sure Apache and MySQL are running
- Check if database credentials are correct
- Verify all files are in the correct directory

## 📁 Project Structure

- `admin/` - Admin management files
  - Manage posts, users, and categories
  - View statistics
- `components/` - Page components
  - Header, footer, navigation
- `css/` - Stylesheets
  - Custom styles and layouts
- `js/` - JavaScript files
  - Interactive features
- PHP files - Main page files
  - home.php - Landing page
  - login.php - User authentication
  - posts.php - Blog posts
  - category.php - Category views
- `blog_db.sql` - Database file

## 👥 User Types

1. **Regular Users**
   - Read posts
   - Comment and like
   - Create their own posts

2. **Admin Users**
   - Manage all posts
   - Moderate comments
   - Manage categories

## 💡 Quick Tips

- Default admin credentials are in blog_db.sql
- Keep your PHP and MySQL versions updated
- Regularly backup your database

## 🤝 Support

For questions or issues, please contact the developer.

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---
Made with ❤️ by Khadalicioso
