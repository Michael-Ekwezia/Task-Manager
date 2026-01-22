<?php
/**
 * CST8285 Assignment 2 - Task Management Application
 * Landing Page
 * Created by: Michael Chika Ekwezia (lead developer), Seyedarman Khoshnavapour (helped review)
 * 
 * This is the main landing page that welcomes users and provides navigation
 * to login and registration pages
 */

// Start session to check if user is already logged in
session_start();

// If user is already logged in, redirect to tasks page
if (isset($_SESSION['user_id'])) {
    header('Location: pages/tasks.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager - CST8285 Assignment 2</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="container">
        <div class="glass-card">
            <div class="header">
                <h1>📋 Task Manager</h1>
                <p>Welcome to your personal task management application</p>
                <p>Stay organized, boost productivity, and never miss a deadline again!</p>
            </div>
            
            <div class="nav-buttons">
                <a href="pages/login.php" class="btn btn-primary">🔐 Login</a>
                <a href="pages/register.php" class="btn btn-secondary">📝 Register</a>
            </div>
            
            <div style="margin-top: 40px; text-align: center;">
                <h3 style="color: white; margin-bottom: 20px;">✨ Features</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 20px;">
                    <div style="background: rgba(255, 255, 255, 0.1); padding: 20px; border-radius: 15px; border: 1px solid rgba(255, 255, 255, 0.2);">
                        <h4 style="color: white; margin-bottom: 10px;">🎯 Task Management</h4>
                        <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.9rem;">Create, organize, and track your tasks with ease</p>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.1); padding: 20px; border-radius: 15px; border: 1px solid rgba(255, 255, 255, 0.2);">
                        <h4 style="color: white; margin-bottom: 10px;">📅 Due Dates</h4>
                        <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.9rem;">Set priorities and never miss important deadlines</p>
                    </div>
                    <div style="background: rgba(255, 255, 255, 0.1); padding: 20px; border-radius: 15px; border: 1px solid rgba(255, 255, 255, 0.2);">
                        <h4 style="color: white; margin-bottom: 10px;">🔍 Smart Filtering</h4>
                        <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.9rem;">Find tasks quickly with search and filter options</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="glass-card" style="text-align: center;">
            <h3 style="color: white; margin-bottom: 15px;">👨‍💻 About This Project</h3>
            <p style="color: rgba(255, 255, 255, 0.8); line-height: 1.6;">
                This is a CST8285 Web Programming assignment demonstrating proficiency in HTML, CSS, JavaScript, PHP, and MySQL. 
                Built with procedural PHP, client-side validation, and responsive design principles.
            </p>
            <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.9rem; margin-top: 15px;">
                <strong>Team:</strong> Michael Chika Ekwezia (lead developer), Seyedarman Khoshnavapour (helped review)
            </p>
        </div>
    </div>
</body>
</html> 