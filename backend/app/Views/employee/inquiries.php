<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Inquiries - Coffee Way</title>

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
                <h2>Customer Inquiries</h2>
            </div>

            <div class="nav-tabs">
                <a href="/employee/dashboard">Dashboard</a>
                <a href="/employee/accounts">Accounts</a>
                <a href="/employee/services">Services</a>
                <a href="/employee/inquiries" class="active">Inquiries</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>101</td>
                        <td>Maria Garcia</td>
                        <td>maria@gmail.com</td>
                        <td>Do you offer vegan pastries?</td>
                        <td>Nov 12, 2025</td>
                    </tr>
                    <tr>
                        <td>102</td>
                        <td>David Kim</td>
                        <td>david@gmail.com</td>
                        <td>Can I reserve a table for 8 people?</td>
                        <td>Nov 13, 2025</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?= view('components/footer') ?>
</body>

</html>