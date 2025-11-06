<?php
// Page: admin/accounts
// Data contract:
// $accounts: string | object array
// $accountsCount: string | number
// $verifiedEmailAccountsCount: string | number
// $nonVerfiedEmailAccountsCount: string | number
?>

<!doctype html>
<html lang="en">
<?= view('components/head', ['title' => 'Admin — Accounts']) ?>

<body class="bg-[#f8f6f3] min-h-screen font-sans text-slate-900">
    <?= view('components/header') ?>

    <main class="mx-auto px-6 py-10 max-w-7xl">
        <div class="md:flex md:space-x-8">

            <?= view('components/aside/admin_manager', ['active' => 'accounts']) ?>

            <section class="flex-1">

                <!-- Page Title -->
                <div class="mb-8">
                    <h2 class="flex items-center gap-3 font-bold text-[#4b2e17] text-3xl">
                        👥 Accounts Management
                    </h2>
                    <p class="mt-1 text-slate-600 text-sm">
                        Manage customer and staff profiles, verification, and access permissions.
                    </p>
                </div>

                <?php if (is_string($accounts)) : ?>

                    <?= view('components/cards/card', [
                        'title' => $accounts,
                        'value' => 0
                    ]) ?>

                <?php else : ?>

                    <!-- Stats Section -->
                    <div class="gap-4 grid grid-cols-1 md:grid-cols-3 mb-8" id="accountStats">
                        <?= view('components/cards/card_stat', ['title' => 'Total Accounts', 'value' => $accountsCount]) ?>
                        <?= view('components/cards/card_stat', ['title' => 'Verified Accounts', 'value' => $verifiedEmailAccountsCount]) ?>
                        <?= view('components/cards/card_stat', ['title' => 'Unverified Accounts', 'value' => $nonVerfiedEmailAccountsCount]) ?>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex justify-between items-center mb-6">
                        <a href="<?= site_url('accounts/list'); ?>"
                            class="bg-[#4b2e17] hover:bg-[#362412] shadow px-4 py-2 rounded text-white transition">
                            📋 Accounts List
                        </a>

                        <?= view('components/modal/accounts/create', [
                            'button_label' => '➕ Add Account'
                        ]) ?>
                    </div>

                    <!-- Filter/Sort/Search -->
                    <?= view('components/control_panels/filter_search_sort/accounts') ?>

                    <!-- Account Card Grid -->
                    <?php if (count($accounts) > 0) : ?>
                        <div class="gap-6 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 mt-6">

                            <?php foreach ($accounts as $acc) : ?>
                                <div class="flex flex-col justify-between bg-white shadow-md hover:shadow-lg p-5 border border-[#e4ded7] rounded-xl transition">

                                    <div>
                                        <div class="flex items-center gap-4">
                                            <img src="<?= esc($acc->profile_image ?? '/assets/img/default_user.png') ?>"
                                                class="border border-[#4b2e17] rounded-full w-14 h-14 object-cover" />

                                            <div>
                                                <h3 class="font-semibold text-[#4b2e17] text-lg">
                                                    <?= esc($acc->first_name . ' ' . $acc->last_name) ?>
                                                </h3>
                                                <p class="text-slate-600 text-sm">
                                                    <?= esc($acc->email) ?>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="flex justify-between items-center mt-4">
                                            <span class="text-xs <?= $acc->email_activated ? 'text-green-600' : 'text-red-500' ?>">
                                                <?= $acc->email_activated ? 'Verified Email' : 'Unverified Email' ?>
                                            </span>

                                            <span class="bg-[#4b2e17]/10 px-3 py-1 rounded-full text-[#4b2e17] text-xs">
                                                <?= ucfirst(esc($acc->type)) ?>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Actions -->
                                    <div class="flex justify-end gap-3 mt-5 pt-3 border-t">
                                        <a href="<?= site_url('accounts/edit/' . $acc->id) ?>"
                                            class="text-[#4b2e17] text-sm hover:underline">Edit</a>
                                        <a href="<?= site_url('accounts/view/' . $acc->id) ?>"
                                            class="text-slate-700 hover:text-black text-sm">View</a>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>

                    <?php else : ?>
                        <p class="mt-6 text-slate-600 text-center">No accounts found.</p>
                    <?php endif; ?>

                <?php endif; ?>
            </section>

        </div>
    </main>

    <?= view('components/footer') ?>
</body>

</html>