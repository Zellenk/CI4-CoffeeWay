<?php
// Page: admin/services
// Data contract:
// $services: string | object array
// $servicesCount: string | number
// $availableServicesCount: string | number
// $notAvailableServicesCount: string | number
?>

<!doctype html>
<html lang="en">
<?= view('components/head', ['title' => 'Admin — Services']) ?>

<body class="bg-[#f8f6f3] min-h-screen font-sans text-slate-900">
    <?= view('components/header') ?>

    <main class="mx-auto px-6 py-10 max-w-7xl">
        <div class="md:flex md:space-x-8">

            <?= view('components/aside/admin_manager', ['active' => 'services']) ?>

            <section class="flex-1">
                <div class="mb-8">
                    <h2 class="flex items-center gap-3 font-bold text-[#4b2e17] text-3xl">
                        <span>☕ Services Management</span>
                    </h2>
                    <p class="mt-1 text-slate-600 text-sm">
                        Manage store offerings – availability, pricing & visibility across Coffee Way.
                    </p>
                </div>

                <?php if (is_string($services)) : ?>

                    <?= view('components/cards/card', [
                        'title' => $services,
                        'value' => 0
                    ]) ?>

                <?php else : ?>

                    <!-- ✅ Stats Section -->
                    <div class="gap-4 grid grid-cols-1 md:grid-cols-3 mb-8" id="serviceStats">
                        <?= view('components/cards/card_stat', ['title' => 'Total Active', 'value' => $servicesCount]) ?>
                        <?= view('components/cards/card_stat', ['title' => 'Available to Clients', 'value' => $availableServicesCount]) ?>
                        <?= view('components/cards/card_stat', ['title' => 'Inactive Services', 'value' => $notAvailableServicesCount]) ?>
                    </div>

                    <!-- ✅ Actions -->
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <a href="<?php echo site_url('services/list'); ?>"
                                class="bg-[#4b2e17] hover:bg-[#362412] shadow px-4 py-2 rounded text-white transition">
                                📋 View Services List
                            </a>
                        </div>

                        <?= view('components/modal/services/create', [
                            'button_label' => '➕ New Service'
                        ]) ?>
                    </div>

                    <!-- ✅ Search / Filter / Sort Panel -->
                    <?= view('components/control_panels/filter_search_sort/services') ?>

                    <!-- ✅ Preview Table Cards -->
                    <?php if (count($services) > 0) : ?>
                        <div class="gap-6 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 mt-6">
                            <?php foreach ($services as $service) : ?>
                                <div class="bg-white shadow-md hover:shadow-lg p-5 border border-[#e4ded7] rounded-xl transition">
                                    <h3 class="font-semibold text-[#4b2e17] text-lg">
                                        <?= esc($service->name) ?>
                                    </h3>
                                    <p class="mt-1 text-slate-600 text-sm">
                                        <?= esc($service->description) ?>
                                    </p>

                                    <div class="flex justify-between items-center mt-4 pt-3 border-t">
                                        <span class="text-sm <?= $service->available ? 'text-green-600' : 'text-red-500' ?>">
                                            <?= $service->available ? 'Available' : 'Unavailable' ?>
                                        </span>

                                        <a href="<?= site_url('services/edit/' . $service->id) ?>"
                                            class="text-[#4b2e17] text-sm hover:underline">
                                            Edit →
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else : ?>
                        <p class="mt-6 text-slate-600 text-center">No services found.</p>
                    <?php endif; ?>

                <?php endif; ?>
            </section>

        </div>
    </main>

    <?= view('components/footer') ?>
</body>

</html>