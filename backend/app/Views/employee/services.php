<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Services - Coffee Way</title>

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

        .service-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .card {
            background: #f7f5f2;
            border-radius: 10px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            color: #3b2f2f;
            margin-bottom: 0.5rem;
        }

        .card p {
            color: #555;
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
                <h2>Services Management</h2>
            </div>

            <div class="nav-tabs">
                <a href="/employee/dashboard">Dashboard</a>
                <a href="/employee/accounts">Accounts</a>
                <a href="/employee/services" class="active">Services</a>
                <a href="/employee/inquiries">Inquiries</a>
            </div>

            <div class="service-list">
                <div class="card">
                    <h3>Espresso</h3>
                    <p>Classic Italian-style espresso shot.</p>
                </div>

                <div class="card">
                    <h3>Cappuccino</h3>
                    <p>Rich espresso with steamed milk and foam.</p>
                </div>

                <div class="card">
                    <h3>Cold Brew</h3>
                    <p>Slow-steeped cold coffee for smooth taste.</p>
                </div>

                <div class="card">
                    <h3>Pastries</h3>
                    <p>Freshly baked croissants, muffins, and more.</p>
                </div>
            </div>
        </div>
    </section>

    <?= view('components/footer') ?>
</body>

</html>