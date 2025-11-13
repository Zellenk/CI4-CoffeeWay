<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard - Coffee Way</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Bitter', serif;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-image: url("https://i.pinimg.com/1200x/1b/88/4f/1b884feae073713f3b52b6649f53eeeb.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-color: rgba(255, 255, 255, 0.7);
            background-blend-mode: lighten;
        }

        .dashboard-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
            animation: fadeInUp 0.8s ease-out;
        }

        .dashboard-container {
            background: white;
            width: 100%;
            max-width: 1100px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            padding: 2rem;
        }

        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid #ccc;
            padding-bottom: 1rem;
        }

        .dashboard-header h2 {
            color: #2c3e50;
            font-size: 28px;
        }

        .dashboard-header small {
            color: #555;
        }

        /* Navigation Tabs */
        .nav-tabs {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .nav-tabs a {
            text-decoration: none;
            color: white;
            background: #3b2f2f;
            padding: 0.8rem 1.5rem;
            border-radius: 8px;
            transition: background 0.3s, transform 0.2s;
        }

        .nav-tabs a:hover,
        .nav-tabs a.active {
            background: #bb0000ff;
            transform: scale(1.05);
        }

        /* Card Grid */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .card {
            background: #f7f5f2;
            border-radius: 10px;
            padding: 1.5rem;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .card h3 {
            color: #3b2f2f;
            margin-bottom: 0.5rem;
        }

        .card p {
            color: #555;
            font-size: 0.95rem;
        }

        .btn {
            background: #2c3e50;
            color: white;
            padding: 0.7rem 1.5rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 1.2rem;
            transition: background 0.3s, transform 0.2s;
        }

        .btn:hover {
            background: #bb0000ff;
            transform: scale(1.03);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <?= view('components/header') ?>

    <section class="dashboard-section">
        <div class="dashboard-container">
            <div class="dashboard-header">
                <h2>Employee Dashboard</h2>
                <small>Welcome, <?= esc($user['display_name'] ?? 'Employee') ?>!</small>
            </div>

            <!-- Navigation Tabs -->
            <div class="nav-tabs">
                <a href="/employee/dashboard" class="active">Dashboard</a>
                <a href="/employee/accounts">Accounts</a>
                <a href="/employee/services">Services</a>
                <a href="/employee/inquiries">Inquiries</a>
            </div>

            <!-- Dashboard Cards -->
            <div class="card-grid">
                <div class="card">
                    <h3>Manage Accounts</h3>
                    <p>View and update employee or customer accounts.</p>
                    <button class="btn" onclick="window.location.href='/employee/accounts'">Go to Accounts</button>
                </div>

                <div class="card">
                    <h3>Services Overview</h3>
                    <p>Manage coffee services, pricing, and offerings.</p>
                    <button class="btn" onclick="window.location.href='/employee/services'">Manage Services</button>
                </div>

                <div class="card">
                    <h3>Customer Inquiries</h3>
                    <p>Read and respond to customer messages and feedback.</p>
                    <button class="btn" onclick="window.location.href='/employee/inquiries'">View Inquiries</button>
                </div>

                <div class="card">
                    <h3>Analytics</h3>
                    <p>View key performance stats and reports.</p>
                    <button class="btn" onclick="window.location.href='/employee/reports'">View Reports</button>
                </div>
            </div>
        </div>
    </section>

    <?= view('components/footer') ?>
</body>

</html>