<style>
    section.hero {
        text-align: center;
        padding: 10rem 2rem 12rem 2rem;
        background-color: rgba(255, 255, 255, 0);
        border-radius: 12px;
        max-width: 1000px;
        margin: 8rem auto;
    }

    section.hero h1 {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        color: #2c3e50;
        text-align: center;
    }

    section.hero p {
        font-size: 1.25rem;
        margin-bottom: 2rem;
        color: #555;
        text-align: center;
    }

    .accent-button {
        display: flex;
        justify-content: center;
        margin-bottom: 3rem;
    }

    /* --- CARD SECTION LAYOUT --- */
    .cards-section {
        margin-top: 6rem;
        padding: 6rem 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Container */
    .cards-container {
        display: flex;
        flex-direction: column;
        gap: 3rem;
        align-items: center;
    }

    /* Card Layout (horizontal) */
    .card {
        display: flex;
        align-items: stretch;
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        overflow: hidden;
        width: 95%;
        max-width: 1100px;
        /* bigger card */
        min-height: 350px;
        /* taller card */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 14px 32px rgba(0, 0, 0, 0.18);
    }

    /* Card Image (left side) */
    .card-image {
        flex: 1 1 50%;
        height: auto;
        min-height: 350px;
        /* ensures image fills card height */
        overflow: hidden;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .card:hover .card-image img {
        transform: scale(1.06);
    }

    .card h3 {
        font-size: 2rem;
        /* larger title */
        color: #2c3e50;
        margin-bottom: 0.6rem;
    }

    .card p {
        font-size: 1.15rem;
        color: #555;
        line-height: 1.6;
    }

    /* Content area beside the image */
    .card-content {
        flex: 1 1 50%;
        padding: 1.5rem 2rem;
        /* smaller padding */
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* vertically center text */
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .card {
            flex-direction: column;
            text-align: center;
            width: 100%;
        }

        .card-image {
            width: 100%;
            height: 250px;
        }

        .card-content {
            padding: 1.5rem;
        }

        .card h3 {
            text-align: center;
        }

        .card p {
            text-align: center;
        }
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
            ['image' => 'https://images.unsplash.com/photo-1554118811-1e0d58224f24?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Y2FmZXxlbnwwfHwwfHx8MA%3D%3D', 'title' => 'Vibrant and Cozy', 'desc' => 'Enjoy the ambiance of The Coffee Way.'],
        ];

        $cards2 = [
            ['image' => 'https://as2.ftcdn.net/jpg/05/55/85/73/1000_F_555857328_6wArN02eAsxd2HNJSqm3jiBAYo15kSZD.jpg', 'title' => 'Fun and Exciting', 'desc' => 'Best place to have fun and hang out with your friends.'],
        ];


        echo view('components/cards/cards', ['cards' => $cards1]);

        echo view('components/cards/cards', ['cards' => $cards2]);

        ?>
    </div>
</section>