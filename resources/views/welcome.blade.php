<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduNotes - Your Student Note-Taking Hub</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            background: linear-gradient(to bottom right, #3b82f6, #9333ea);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .welcome-container {
            text-align: center;
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
        }
        .welcome-container h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        .welcome-container p {
            margin-bottom: 20px;
            font-size: 1.1rem;
        }
        .welcome-container img {
            width: 100%;
            max-height: 250px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .buttons-container {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .button-login {
            background-color: #3b82f6;
            color: white;
        }
        .button-login:hover {
            background-color: #2563eb;
        }
        .button-register {
            background-color: #10b981;
            color: white;
        }
        .button-register:hover {
            background-color: #059669;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to EduNotes</h1>
        <p>Your ultimate platform to create, view, and manage your notes effortlessly.</p>
        <img src="https://blog.discoveryeducation.com/wp-content/uploads/2024/07/kids-with-laptops-tile-2.jpg" alt="Educational Image">
        <div class="buttons-container">
            <a href="{{ route('login') }}" class="button button-login">Log In</a>
            <a href="{{ route('register') }}" class="button button-register">Register</a>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            console.log('Welcome to EduNotes!');
        });
    </script>
</body>
</html>
