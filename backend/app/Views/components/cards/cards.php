<div class="cards-container">
    <?php foreach ($cards as $card): ?>
        <div class="card">
            <div class="card-image">
                <img src="<?= esc($card['image']) ?>" alt="<?= esc($card['title']) ?>">
            </div>
            <div class="card-content">
                <h3><?= esc($card['title']) ?></h3>
                <p><?= esc($card['desc']) ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>



<style>
    /* ===== Card Container ===== */
    .cards-container {
        display: flex;
        justify-content: center;
        align-items: stretch;
        flex-wrap: wrap;
        gap: 2rem;
        padding: 5rem 2rem;
        max-width: 2000px;
        margin: 0 auto;
    }

    /* ===== Individual Card ===== */
    .card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
        overflow: hidden;
        max-width: 3000px;
        width: 100%;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.18);
    }

    /* ===== Card Image ===== */
    .card-image {
        width: 100%;
        height: 220px;
        overflow: hidden;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .card:hover .card-image img {
        transform: scale(1.1);
    }

    /* ===== Text Content ===== */
    .card h3 {
        font-size: 1.4rem;
        color: #2c3e50;
        margin: 1.2rem 1rem 0.5rem;
    }

    .card p {
        font-size: 1rem;
        color: #666;
        padding: 0 1.2rem 1.5rem;
        line-height: 1.6;
    }

    /* ===== Responsive Design ===== */
    @media (max-width: 768px) {
        .cards-container {
            padding: 3rem 1rem;
            gap: 1.5rem;
        }

        .card {
            max-width: 90%;
        }
    }
</style>