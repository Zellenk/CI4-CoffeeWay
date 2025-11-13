<?php
// Page: admin/dashboard
// Data contract:
// $requestsCount: number
// $servicesCount: number
?>

<!doctype html>
<html lang="en">
<?= view('components/head', ['title' => 'Coffee Way Admin']) ?>

<body class="bg-[#f7efe4] min-h-screen font-sans text-slate-900">

    <?= view('components/header') ?>


    <main class="mx-auto px-6 py-10 max-w-6xl">
        <div class="md:flex md:space-x-6">
            <?= view('components/aside/admin_manager', ['active' => 'dashboard']) ?>

            <section class="flex-1">
                <h2 class="mb-6 font-semibold text-[#5b3a29] text-3xl tracking-wide">
                    ☕ Coffee Way Dashboard
                </h2>

                <?php if (is_string($requestsCount) || is_string($servicesCount)) : ?>
                    <?= view('components/cards/card', ['title' => $requestsCount, 'value' => 0]); ?>
                <?php else : ?>

                    <!-- Statistics Cards -->
                    <div class="gap-6 grid grid-cols-1 sm:grid-cols-3">
                        <?= view('components/cards/card_stat', [
                            'title' => 'Total Orders',
                            'value' => $requestsCount,
                            'icon' => 'shopping-cart'
                        ]) ?>

                        <?= view('components/cards/card_stat', [
                            'title' => 'Available Products',
                            'value' => $servicesCount,
                            'icon' => 'package'
                        ]) ?>

                        <?= view('components/cards/card_stat', [
                            'title' => 'Pending Pickups',
                            'value' => 0,
                            'icon' => 'calendar'
                        ]) ?>
                    </div>

                    <!-- Coffee Management Section -->
                    <div class="gap-6 grid grid-cols-1 lg:grid-cols-2 mt-8">
                        <div class="bg-white shadow-lg p-6 border-[#c67f4e] border-l-4 rounded-xl">
                            <h3 class="font-semibold text-[#5b3a29] text-lg">Product Management</h3>
                            <p class="mt-1 text-gray-600 text-sm">
                                Manage all caffeinated products — from espresso to pastries.
                            </p>
                            <div class="mt-4">
                                <a href="/admin/services"
                                    class="bg-[#c67f4e] hover:bg-[#9f6030] px-4 py-2 rounded-lg text-white transition">
                                    Manage Menu
                                </a>
                            </div>
                        </div>

                        <div class="bg-white shadow-lg p-6 border-[#6f4e37] border-l-4 rounded-xl">
                            <h3 class="font-semibold text-[#5b3a29] text-lg">Recent Updates</h3>
                            <p class="mt-2 text-gray-600 text-sm">
                                No new updates yet — new system logs, order history, and barista activities will appear here.
                            </p>
                        </div>
                    </div>

                    <!-- Monthly Activity Graph Placeholder -->
                    <div class="bg-white shadow-md mt-8 p-6 rounded-xl">
                        <h3 class="mb-4 font-semibold text-[#5b3a29] text-lg">Monthly Orders Activity</h3>
                        <div class="flex justify-center items-center bg-[#f3e8da] rounded-md w-full h-48 text-gray-500 text-sm">
                            📊 Graph coming soon...
                        </div>
                    </div>

                <?php endif; ?>
            </section>
        </div>
    </main>

    <?= view('components/footer') ?>
</body>

</html>