<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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

        .edit-profile-container {
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

        .edit-profile-form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2980b9;
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

<div class="edit-profile-container">
    <h1>Edit Profile</h1>

    <form class="edit-profile-form" method="post" action="{{ route('registration.update', ['user' => $user]) }}">
        @csrf
        @method( 'PUT' )

        @if(isset($user))
            <p>User data available</p>
        @else
            <p>User data not available</p>
        @endif


        @if($errors->any())
            <div class="error">
                <ul class="error-list">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" value="{{ $user->firstName }}" >

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" value="{{ $user->lastName }}" >

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required>

        <label for="age">Age:</label>
        <input type="text" id="age" name="age" value="{{ $user->age }}" >

        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" value="{{ $user->gender }}" >

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ $user->address }}" >

        <label for="phoneNumber">Phone Number:</label>
        <input type="text" id="phoneNumber" name="phoneNumber" value="{{ $user->phoneNumber }}" >

        <button type="submit">Save Changes</button>
    </form>
</div>
</body>
</html>
