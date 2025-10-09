<style>
    footer {
        background: #3b2f2f;
        color: #f4ede3;
        text-align: center;
        padding: 1rem;
    }
</style>

<footer>
    <p>&copy; 2025 Coffee Way. All rights reserved.</p>
    <div class="nav-buttons">
        <?= view('components/buttons/secondarybutton', ['label' => 'Moodboard', 'href' => '/moodboard']) ?>
        <?= view('components/buttons/secondarybutton', ['label' => 'RoadMap', 'href' => '/roadmap']) ?>
    </div>
</footer>