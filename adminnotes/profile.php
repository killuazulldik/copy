<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f4f4f4;
        }
        .header{
    margin-left: 3px;
    font-weight:bold;
    font-size: 30px;
    padding-top: 4px;
    padding-bottom: 40px;
}

        .profile-card {
            background-color: #fff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height:800px;
    margin-right:30px;
    margin-left:220px;
    background: rgb(255, 255, 255);
  
        }
        .profile-wrapper{
    padding-top:60px;
}
        .profile-card h1 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
        }

        .input-container {
            margin-bottom: 20px;
        }

        .input-container label {
            display: block;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .input-container input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }

        .input-container input:focus {
            border-color: #007bff;
        }

        .error-msg {
            color: red;
            font-size: 14px;
        }

        .btn-container {
            text-align: center;
        }

        .btn-container button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
        <?php include 'sidebar.php' ?>
       
                   
            <div style="  " class="profile-container">
            
            
                <div style="" class="profile-wrapper">
                  
                   <div class="profile-card ">
                    <div class="header"> My Profile</div>
            <form action="process_profile.php" method="POST">
                <div class="input-container">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Enter your full name">
                </div>
                <div class="input-container">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="input-container">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username">
                </div>
                <div class="input-container">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password">
                </div>
                <div class="input-container">
                    <label for="conpassword">Confirm Password</label>
                    <input type="password" id="conpassword" name="conpassword" placeholder="Confirm your password">
                </div>
            
            </form>
        </div>
    </div>
</body>
</html>
