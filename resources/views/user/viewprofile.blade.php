<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        nav {
            background-color: #3498db;
            padding: 15px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: fixed;  /* Set the navbar to fixed position */
            top: 0;           /* Position it at the top */
            z-index: 1000;
        }

        nav .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav ul {
            list-style-type: none;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #ecf0f1;
        }

        .profile-container {
            max-width: 600px;
            width: 100%;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h1 {
            text-align: center;
            color: #3498db;
        }

        .profile-info {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }

        .profile-info div {
            margin-bottom: 15px;
        }

        label {
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        p {
            margin: 0;
            color: #555;
        }

        .edit-profile-link {
            text-align: center;
            margin-top: 20px;
        }

        .edit-profile-link a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            transition: color 0.3s;
        }

        .edit-profile-link a:hover {
            color: #2980b9;
        }
    </style>
</head>
<body>
<nav>
    <div class="logo">Your Logo</div>
    <ul>
        <li><a href="{{ route('registration.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('registration.userProfile') }}">Profile</a></li>
        <li><a href="{{ route('registration.setting') }}">Settings</a></li>
        <li><a href="{{ route('session.destroy') }}">Logout</a></li>
    </ul>
</nav>

<div class="profile-container">
    <h1>User Profile</h1>

    <div class="profile-info">
        <div>
            <label for="firstName">First Name:</label>
            <p>{{ $user->firstName }}</p>
        </div>
        <div>
            <label for="lastName">Last Name:</label>
            <p>{{ $user->lastName }}</p>
        </div>
        <div>
            <label for="email">Email Address:</label>
            <p>{{ $user->email }}</p>
        </div>
        <div>
            <label for="age">Age:</label>
            <p>{{ $user->age }}</p>
        </div>
        <div>
            <label for="gender">Gender:</label>
            <p>{{ $user->gender }}</p>
        </div>
        <div>
            <label for="address">Address:</label>
            <p>{{ $user->address }}</p>
        </div>
        <div>
            <label for="phoneNumber">Phone Number:</label>
            <p>{{ $user->phoneNumber }}</p>
        </div>
    </div>

     <div class="edit-profile-link">
        <a href="{{ route('registration.editProfile', ['user' => $user]) }}">Edit Profile</a>
    </div>

</div>
</body>
</html>
