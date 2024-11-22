<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Resetting margin and padding for all elements */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212; /* Dark background */
            color: #e0e0e0; /* Light text */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #1e1e1e; /* Dark container background */
            width: 100%;
            max-width: 400px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5); /* Subtle shadow */
        }

        .header h2 {
            text-align: center;
            color: #f39c12; /* Accent color */
            margin-bottom: 20px;
            font-size: 1.8rem;
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #bbb; /* Light gray text */
            font-size: 0.9rem;
        }

        input[type="text"], 
        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 0.95rem;
            border: 1px solid #444; /* Dark border */
            background-color: #2c2c2c; /* Darker input background */
            color: #e0e0e0; /* Light text */
            border-radius: 5px;
        }

        input:focus {
            outline: none;
            border-color: #f39c12; /* Accent focus color */
            box-shadow: 0 0 5px rgba(243, 156, 18, 0.5);
        }

        .btn {
            width: 100%;
            background-color: #f39c12; /* Accent button background */
            color: whitesmoke;
            padding: 10px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #e67e22; /* Slightly darker button on hover */
        }

        p {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #bbb; /* Light gray text */
        }

        p a {
            color: #f39c12; /* Accent link color */
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Register</h2>
        </div>
        <form action="register_db.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" name="email" required>
            </div>
            <div class="input-group">
                <label for="password_1">Password</label>
                <input type="password" name="password_1" required>
            </div>
            <div class="input-group">
                <label for="password_2">Confirm Password</label>
                <input type="password" name="password_2" required>
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Submit</button>
            </div>
            <p>Already a member? <a href="login.php">Sign in</a></p>
        </form>
    </div>
</body>
</html>
