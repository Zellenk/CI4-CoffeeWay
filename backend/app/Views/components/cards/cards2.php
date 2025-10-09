<!-- cards.php -->
<div class="cards-container">
    <div class="card">
        <div class="card-image">
            <img src="https://www.thespruceeats.com/thmb/YEI_JAfLHd6fbfCYUukcW5E2TYg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/SES-cafe-au-lait-recipe-1374920-hero-01-b1463e806a7947e7b8b17979ab70eab3.jpg" alt="Card 1 Image">
        </div>
        <h3>French Cafe au Lait</h3>
        <p>XXXXXXXXX.</p>
    </div>

    <div class="card">
        <div class="card-image">
            <img src="https://myeverydaytable.com/wp-content/uploads/americano-1024x576.png" alt="Card 2 Image">
        </div>
        <h3>Americano</h3>
        <p>XXXXXXXXX.</p>
    </div>

    <div class="card">
        <div class="card-image">
            <img src="https://images.ctfassets.net/jbquigiuzvay/OWJ69RtCdmnJNck95Lm9W/7f448fd561cb6eb372eb8904cbabb792/The_Top_Health_Benefits_of_Jasmine_Tea__Including_Antioxidant_Activity.webp" alt="Card 3 Image">
        </div>
        <h3>Jasmine Tea</h3>
        <p>XXXXXXXXX.</p>
    </div>
</div>

<style>
    /* Container to center all cards */
    .cards-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 5rem;
        flex-wrap: wrap;
        margin-top: 3rem;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        max-width: 350px;
        text-align: center;
        background: #fff;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Hover effect on entire card */
    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    .card-image {
        width: 100%;
        height: 250px;
        margin-bottom: 1.5rem;
        overflow: hidden;
        border-radius: 8px;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.4s ease;
    }

    /* Subtle zoom effect on image when hovered */
    .card:hover .card-image img {
        transform: scale(1.1);
    }

    .card h3 {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
        color: #2c3e50;
    }

    .card p {
        font-size: 1rem;
        color: #555;
    }
</style>