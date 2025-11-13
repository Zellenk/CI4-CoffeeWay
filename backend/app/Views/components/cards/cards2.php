<div class="cards-container">
    <?php foreach ($cards as $card): ?>
        <div class="card">
            <div class="card-image">
                <img src="<?= esc($card['image']) ?>" alt="<?= esc($card['title']) ?>">
            </div>
            <h3><?= esc($card['title']) ?></h3>
            <p><?= esc($card['desc']) ?></p>
        </div>
    <?php endforeach; ?>
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