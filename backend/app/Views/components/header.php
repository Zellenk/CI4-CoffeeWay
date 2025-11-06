<?php
$session = session();
$user = $session->get('user');
?>

<style>
    header {
        background: #3b2f2f;
        padding: 1rem 2rem;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo-title {
        display: flex;
        align-items: center;
        gap: 0.8rem;
    }

    .logo-title img {
        width: 45px;
        height: 45px;
        object-fit: contain;
        border-radius: 50%;
    }

    .logo-title h2 {
        color: wheat;
        font-size: 30px;
        font-weight: bold;
        margin: 0;
    }

    header .nav-buttons {
        display: flex;
        gap: 0.5rem;
        align-items: center;
    }

    .welcome-text {
        font-size: 18px;
        color: wheat;
        margin-right: 1rem;
    }

    form.logout-form {
        display: inline;
    }
</style>

<header>
    <div class="logo-title">
        <img src="https://cdn-icons-png.flaticon.com/512/924/924514.png" alt="Coffee Way Logo">
        <h2>COFFEE WAY</h2>
    </div>

    <div class="nav-buttons">
        <?php if ($user): ?>

            <span class="welcome-text">
                Welcome, <?= esc($user['display_name']) ?>!
            </span>

            <!-- Logout Button (POST method recommended) -->
            <form action="/logout" method="post" class="logout-form">
                <?= csrf_field() ?>
                <?= view('components/buttons/primarybutton', ['label' => 'Logout']) ?>
            </form>

        <?php else: ?>

            <?= view('components/buttons/primarybutton', ['label' => 'Get Started', 'href' => '/']) ?>
            <?= view('components/buttons/primarybutton', ['label' => 'Log In', 'href' => '/login']) ?>
            <?= view('components/buttons/primarybutton', ['label' => 'Sign up', 'href' => '/signup']) ?>

        <?php endif; ?>
    </div>
</header>