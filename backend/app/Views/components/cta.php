<style>
    * {

        margin: 0;
        padding: 0;
        box-sizing:
            border-box;
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap');
        font-style: Bold;
    }
</style>
<section class="hero">
    <h1>Welcome to Coffee Way!</h1>
    <p>We provide the best coffee in town for your kayod needs!</p>
    <?= view('components/buttons/accentbutton', ['label' => 'Buy Now', 'href' => '/shop']) ?>
</section>