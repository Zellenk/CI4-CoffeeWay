<?php
// Sample card data
$cards = [
    [
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgqpEjWZM4UwJMAWrJkeSuyhnrWYfHvMdIKQ&s',
        'title' => 'Cappuccino',
        'desc' => 'An Italian classic with steamed milk, espresso, and a thick coating of frothed milk.'
    ],
    [
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDpLx80GyTXGVcswRB9HHm-zHlvZqpq2xW-w&s',
        'title' => 'Iced Cafe Latte',
        'desc' => 'A refreshing mix of espresso poured over cold milk and ice, perfect for a hot day.'
    ],
    [
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPrr8LfAbOr9iobH8p2S1K3AtkDj2Ezxem9A&s',
        'title' => 'Iced Matcha Latte',
        'desc' => 'Smooth Matcha tea, combined with cold milk and ice.'
    ],
];

$cards2 = [
    [
        'image' => 'https://www.thespruceeats.com/thmb/YEI_JAfLHd6fbfCYUukcW5E2TYg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/SES-cafe-au-lait-recipe-1374920-hero-01-b1463e806a7947e7b8b17979ab70eab3.jpg',
        'title' => 'French Cafe au Lait',
        'desc' => 'A strong brewed coffee served with an equal amount of hot, steamed milk, traditionally French-style.'
    ],
    [
        'image' => 'https://myeverydaytable.com/wp-content/uploads/americano-1024x576.png',
        'title' => 'Americano',
        'desc' => 'Simple yet bold espresso shots diluted with hot water.'
    ],
    [
        'image' => 'https://images.immediate.co.uk/production/volatile/sites/30/2020/08/flat-white-d8ada0f.jpg?quality=90&webp=true&resize=440,400',
        'title' => 'Flat White',
        'desc' => 'A smooth, velvet texture made with a double shot of espresso and thin layer of microfoam milk.'
    ],
];

$cards3 = [
    [
        'image' => 'https://lifesimplified.gorenje.com/wp-content/uploads/2024/06/gorenje-blog-refreshing_cold_brew_coffee.jpg',
        'title' => 'Cold Brew',
        'desc' => 'Coffee steeped in cold water for 12+ hours, resulting in a smooth, low-acid, and naturally sweet concentrate.'
    ],
    [
        'image' => 'https://athome.starbucks.com/sites/default/files/styles/recipe_banner_xlarge/public/2024-05/CaffeMocha_RecipeHeader_848x539_%402x.jpg.webp?itok=ov3gQo8W',
        'title' => 'Mocha',
        'desc' => 'A decadent blend of espresso, steamed milk, and rich chocolate syrup, often topped with whipped cream.'
    ],
    [
        'image' => 'https://eatlittlebird.com/wp-content/uploads/2017/08/vietnamese-coffee-2.jpg',
        'title' => 'Vietnamese Coffee',
        'desc' => 'Boldly brewed coffee, traditionally mixed with sweetened condensed milk, served hot or iced.'
    ],
];

$cards4 = [
    [
        'image' => 'https://images.ctfassets.net/e8bhhtr91vp3/4v9X0NPdU6zsq1UwHXfYpV/01f6e8e5099ed9a7a9d7bf336d76b1fd/image.png?w=800&q=80',
        'title' => 'Black Tea',
        'desc' => 'A classic, fully oxidized tea with a deep, robust, and malty flavor.'
    ],
    [
        'image' => 'https://www.trewithendairy.co.uk/wp-content/uploads/2024/08/Masala-Chai-Tea-1.png',
        'title' => 'Masala Chai Tea',
        'desc' => 'A spiced Indian beverage made with strong black tea, milk, and a blend of aromatic herbs and spices.'
    ],
    [
        'image' => 'https://images.ctfassets.net/jbquigiuzvay/OWJ69RtCdmnJNck95Lm9W/7f448fd561cb6eb372eb8904cbabb792/The_Top_Health_Benefits_of_Jasmine_Tea__Including_Antioxidant_Activity.webp',
        'title' => 'Jasmine Tea',
        'desc' => 'Delicately scented tea, often green tea, infused with the fragrant aroma of jasmine blossoms.'
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

    <?= view('components/cards/cards2', ['cards' => $cards]) ?>
    <?= view('components/cards/cards3', ['cards' => $cards2]) ?>
    <?= view('components/cards/cards2', ['cards' => $cards3]) ?>
    <?= view('components/cards/cards3', ['cards' => $cards4]) ?>

    <div class="divider"></div>

    <?= view('components/footer') ?>

</body>

</html>