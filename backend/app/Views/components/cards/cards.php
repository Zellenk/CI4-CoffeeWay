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
    /* Keep your original CSS here (no change needed) */
</style>


<style>
    /* Container to center all cards */
    .cards-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 5rem;
        /* more space between cards */
        flex-wrap: wrap;
        /* make responsive */
        margin-top: 3rem;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 12px;
        padding: 2rem;
        /* bigger padding */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        max-width: 350px;
        /* slightly wider */
        text-align: center;
        background: #fff;
    }

    .card-image {
        width: 100%;
        height: 250px;
        /* bigger image */
        margin-bottom: 1.5rem;
        overflow: hidden;
        border-radius: 8px;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
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

    .photo-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 1rem;
        margin-bottom: 3rem;
    }

    .photo-grid img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s;
    }

    .photo-grid img:hover {
        transform: scale(1.05);
    }
</style>