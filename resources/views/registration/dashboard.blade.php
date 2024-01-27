<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }
        .dashboard-links {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .dashboard-link {
            flex: 1;
            text-align: center;
            padding: 15px;
            background-color: #4caf50;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .dashboard-link a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .dashboard-link a:hover {
            color: #fff;
            text-decoration: underline;
        }

        nav {
            background-color: #00274e;
            padding: 15px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        li {
            margin-right: 20px;
        }

        a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        .dashboard {
            padding: 20px;
            margin: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #00274e;
        }

        .user-info {
            margin-top: 20px;
            padding: 15px;
            background-color: #f0f8ff;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .user-info p {
            color: #00274e;
            margin-bottom: 10px;
        }

        .user-info a {
            color: #4caf50;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .user-info a:hover {
            color: #45a049;
        }

        .financial-summary {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .summary-box {
            flex: 1;
            padding: 20px;
            background-color: #f0f8ff;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-right: 20px;
        }

        .summary-box h2 {
            color: #00274e;
        }

        .summary-box p {
            color: #666;
        }
    </style>
</head>
<body>
<nav>
    <div class="logo">Your Financial Logo</div>
    <ul>
        <li><a href="{{ '/' }}">Home</a></li>
        <li><a href="{{ route('registration.userProfile') }}">Profile</a></li>
        <li><a href="{{ route('registration.setting') }}">Settings</a></li>
        <li><a href="{{ route('session.destroy') }}">Logout</a></li>
    </ul>
</nav>

@if(auth()->check())
    <div class="dashboard">
        <h1>Welcome to Your Financial Dashboard</h1>

        <div class="user-info">
            <p>Hello, {{ auth()->user()->firstName }}!</p>

            @if(auth()->user()->account)
                <h2>Account Number: {{ auth()->user()->account->accountNumber }}!</h2>
                <p>Account Balance: {{ auth()->user()->account->balance }}</p>
            @else
                <p>No associated account found.</p>
            @endif

            <a href="{{ route('registration.userProfile') }}">View Profile</a>
        </div>

        <div class="financial-summary">
            <div class="summary-box">
                <h2>Account Balance</h2>
                @if(auth()->user()->account)
                    <p>{{ auth()->user()->account->balance }}</p>
                @else
                    <p>No associated account found.</p>
                @endif
            </div>

            <div class="summary-box">
                <h2>Income This Month</h2>
                <p>$5,000.00</p>
            </div>

            <div class="summary-box">
                <h2>Expenses This Month</h2>
                <p>$3,000.00</p>
            </div>
        </div>


        <div class="dashboard-links">
            <div class="dashboard-link">
{{--            <a href="{{ route('transfer') }}">Transfer</a>--}}
            </div>

            <div class="dashboard-link">
{{--            <a href="{{ route('transaction.history') }}">Transaction History</a>--}}
            </div>

            <div class="dashboard-link">
{{--            <a href="{{ route('last.transaction.history') }}">Last Transaction History</a>--}}
            </div>
        </div>
    </div>
@else
    <script>window.location = "{{ route('welcome') }}";</script>
@endif
</body>
</html>
