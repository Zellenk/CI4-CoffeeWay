<?php
// Sample card data
$cards1 = [
    [
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgqpEjWZM4UwJMAWrJkeSuyhnrWYfHvMdIKQ&s',
        'title' => 'Cappuccino',
        'desc' => 'Rich espresso with steamed milk foam.'
    ],
    [
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDpLx80GyTXGVcswRB9HHm-zHlvZqpq2xW-w&s',
        'title' => 'Iced Cafe Latte',
        'desc' => 'Chilled espresso with creamy milk.'
    ],
    [
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPrr8LfAbOr9iobH8p2S1K3AtkDj2Ezxem9A&s',
        'title' => 'Iced Matcha Latte',
        'desc' => 'Smooth matcha with cold milk and ice.'
    ],
];

$cards2 = [
    [
        'image' => 'https://www.thespruceeats.com/thmb/YEI_JAfLHd6fbfCYUukcW5E2TYg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/SES-cafe-au-lait-recipe-1374920-hero-01-b1463e806a7947e7b8b17979ab70eab3.jpg',
        'title' => 'French Cafe au Lait',
        'desc' => 'Classic French-style coffee with milk.'
    ],
    [
        'image' => 'https://myeverydaytable.com/wp-content/uploads/americano-1024x576.png',
        'title' => 'Americano',
        'desc' => 'Smooth espresso with hot water.'
    ],
    [
        'image' => 'https://images.ctfassets.net/jbquigiuzvay/OWJ69RtCdmnJNck95Lm9W/7f448fd561cb6eb372eb8904cbabb792/The_Top_Health_Benefits_of_Jasmine_Tea__Including_Antioxidant_Activity.webp',
        'title' => 'Jasmine Tea',
        'desc' => 'Fragrant tea with a calming aroma.'
    ],
];

$cards3 = [
    [
        'image' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=800',
        'title' => 'Caramel Macchiato',
        'desc' => 'Velvety milk layered with espresso and caramel drizzle.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1510626176961-4b37d0f0b5c8?w=800',
        'title' => 'Cold Brew',
        'desc' => 'Smooth, slow-steeped coffee with deep flavor.'
    ],
    [
        'image' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800',
        'title' => 'Mocha Latte',
        'desc' => 'Chocolate meets espresso in this indulgent favorite.'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE WAY</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Bitter', serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-image: url("https://i.pinimg.com/1200x/1b/88/4f/1b884feae073713f3b52b6649f53eeeb.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-color: rgba(255, 255, 255, 0.6);
            background-blend-mode: lighten;
        }

        section.hero {
            flex: 1;
            padding: 2rem;
            text-align: center;
            color: #3b2f2f;
        }

        .divider {
            width: 80%;
            height: 2px;
            background: #cba57c;
            margin: 2rem auto;
            border-radius: 3px;
        }
    </style>
</head>

<body>

    <?= view('components/header') ?>

    <?= view('components/cards/cards', ['cards' => $cards1]) ?>
    <?= view('components/cards/cards2', ['cards' => $cards2]) ?>
    <?= view('components/cards/cards3', ['cards' => $cards3]) ?>

    <div class="divider"></div>

    <?= view('components/footer') ?>

</body>

</html>