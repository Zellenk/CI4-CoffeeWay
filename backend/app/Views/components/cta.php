<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap');
        font-style: Bold;
    }

    section.hero {
        text-align: center;
        padding: 10rem 5rem 16rem 5rem;
        background-color: rgba(255, 255, 255, 0);
        border-radius: 12px;
        max-width: 1000px;
        margin: 10rem auto;
    }

    section.hero h1 {
        font-size: 2.8rem;
        margin-bottom: 1.5rem;
        /* spacing under title */
        color: #2c3e50;
    }

    section.hero p {
        font-size: 1.2rem;
        margin-bottom: 2.5rem;
        /* spacing under paragraph */
        color: #555;
    }

    /* Add space between the accent button and the cards */
    .accent-button {
        display: inline-block;
        margin-bottom: 3rem;
        /* this adds space below the button */
    }

    .cards-section {
        margin-top: 10rem;
        background-color: rgba(255, 255, 255, 0);
        padding: 10rem 2rem;
        border-radius: 12px;
        max-width: 800px;
        margin: 5rem auto;
        /* space above cards section */
    }
</style>

<section class="hero">
    <h1>Welcome to Coffee Way!</h1>
    <p>We provide the best coffee in town for your kayod needs!</p>

    <!-- Accent Button -->
    <div class="accent-button">
        <?= view('components/buttons/accentbutton', ['label' => 'Buy Now', 'href' => '/shop']) ?>
    </div>

    <!-- Cards Below Button -->
    <div class="cards-section">
        <?php
        $cards1 = [
            ['image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgqpEjWZM4UwJMAWrJkeSuyhnrWYfHvMdIKQ&s', 'title' => 'Cappuccino', 'desc' => 'Rich espresso with steamed milk foam.'],
            ['image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDpLx80GyTXGVcswRB9HHm-zHlvZqpq2xW-w&s', 'title' => 'Iced Cafe Latte', 'desc' => 'Cool and creamy coffee refreshment.'],
            ['image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPrr8LfAbOr9iobH8p2S1K3AtkDj2Ezxem9A&s', 'title' => 'Iced Matcha Latte', 'desc' => 'Smooth matcha with milk and ice.'],
        ];


        echo view('components/cards/cards', ['cards' => $cards1]);

        ?>
    </div>
</section>