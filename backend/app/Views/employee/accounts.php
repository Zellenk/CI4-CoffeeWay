<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Accounts - Coffee Way</title>

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

        .section {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
            animation: fadeInUp 0.8s ease-out;
        }

        .container {
            background: white;
            width: 100%;
            max-width: 1100px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            padding: 2rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid #ccc;
            padding-bottom: 1rem;
        }

        .header h2 {
            color: #2c3e50;
            font-size: 28px;
        }

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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 0.8rem;
            text-align: left;
        }

        th {
            background-color: #3b2f2f;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
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

    <section class="section">
        <div class="container">
            <div class="header">
                <h2>Manage Accounts</h2>
            </div>

            <div class="nav-tabs">
                <a href="/employee/dashboard">Dashboard</a>
                <a href="/employee/accounts" class="active">Accounts</a>
                <a href="/employee/services">Services</a>
                <a href="/employee/inquiries">Inquiries</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($users)): ?>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <!-- FIX: Change array access ($user['...']) to object access ($user->...) -->
                                <td><?= esc($user->id) ?></td>
                                <td><?= esc($user->first_name . ' ' . $user->middle_name . ' ' . $user->last_name) ?></td>
                                <td><?= esc($user->email) ?></td>
                                <td><?= esc(ucfirst($user->type)) ?></td>
                                <td><?= $user->account_status ? 'Active' : 'Inactive' ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">No users found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </section>

    <?= view('components/footer') ?>
</body>

</html>