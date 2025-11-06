<?php
// Page: admin/inquiries
// Data contract:
// $requests: string | object array
// $requestsCount: string | number
// $upcomingRequestsCount: string | number
// $pendingRequestsCount: string | number
// $accountList: object array
?>

<!doctype html>
<html lang="en">
<?= view('components/head', ['title' => 'Admin — Inquiries']) ?>

<body class="bg-[#f8f6f3] min-h-screen font-sans text-slate-900">
    <?= view('components/header') ?>

    <main class="mx-auto px-6 py-10 max-w-7xl">
        <div class="md:flex md:space-x-8">
            <?= view('components/aside/admin_manager', ['active' => 'inquiries']) ?>

            <section class="flex-1">

                <!-- Page Title -->
                <div class="mb-8">
                    <h2 class="flex items-center gap-3 font-bold text-[#4b2e17] text-3xl">
                        📩 Service Inquiries
                    </h2>
                    <p class="text-slate-600 text-sm">
                        Manage customer requests, follow-ups, and upcoming service inquiries.
                    </p>
                </div>

                <?php if (is_string($requests)) : ?>

                    <?= view('components/cards/card', [
                        'title' => $requests,
                        'value' => 0
                    ]) ?>

                <?php else : ?>

                    <!-- Overview Stats -->
                    <div class="gap-4 grid grid-cols-1 md:grid-cols-3 mb-8" id="requestsStats">
                        <?= view('components/cards/card_stat', ['title' => 'Total Inquiries', 'value' => $requestsCount]) ?>
                        <?= view('components/cards/card_stat', ['title' => 'Upcoming', 'value' => $upcomingRequestsCount]) ?>
                        <?= view('components/cards/card_stat', ['title' => 'Pending', 'value' => $pendingRequestsCount]) ?>
                    </div>

                    <!-- Filter/Search UI -->
                    <div class="mb-6">
                        <?= view('components/control_panels/filter_search_sort/requests') ?>
                    </div>

                    <!-- Inquiry List -->
                    <?php if (count($requests) > 0) : ?>
                        <div class="gap-6 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3">

                            <?php foreach ($requests as $item) : ?>
                                <div class="flex flex-col justify-between bg-white shadow-sm hover:shadow-md p-5 border border-[#e4ded7] rounded-xl transition">

                                    <!-- Inquiry Header -->
                                    <div>
                                        <h3 class="font-semibold text-[#4b2e17] text-lg line-clamp-1">
                                            <?= esc($item->subject ?? 'Service Inquiry') ?>
                                        </h3>

                                        <p class="mt-2 text-slate-600 text-sm line-clamp-2">
                                            <?= esc($item->message ?? 'No inquiry details provided.') ?>
                                        </p>

                                        <!-- Customer Info -->
                                        <?php
                                        $client = $accountList[$item->user_id] ?? null;
                                        ?>
                                        <div class="mt-3">
                                            <?php if ($client) : ?>
                                                <p class="font-medium text-[#4b2e17] text-xs">
                                                    👤 <?= esc($client->first_name . ' ' . $client->last_name) ?>
                                                </p>
                                                <p class="text-slate-600 text-xs">
                                                    ✉️ <?= esc($client->email) ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>

                                        <!-- Status Badge -->
                                        <div class="mt-4">
                                            <?php if ($item->status === 'pending') : ?>
                                                <span class="bg-red-200 px-3 py-1 rounded-full text-red-800 text-xs">
                                                    Pending
                                                </span>
                                            <?php elseif ($item->status === 'upcoming') : ?>
                                                <span class="bg-yellow-200 px-3 py-1 rounded-full text-yellow-800 text-xs">
                                                    Upcoming
                                                </span>
                                            <?php else : ?>
                                                <span class="bg-green-200 px-3 py-1 rounded-full text-green-800 text-xs">
                                                    Completed
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <!-- Actions -->
                                    <div class="flex justify-end gap-3 mt-5 pt-3 border-t">
                                        <a href="<?= site_url('inquiries/view/' . $item->id) ?>"
                                            class="text-[#4b2e17] text-sm hover:underline">
                                            View
                                        </a>
                                        <a href="<?= site_url('inquiries/edit/' . $item->id) ?>"
                                            class="text-slate-600 hover:text-black text-sm">
                                            Update
                                        </a>
                                    </div>

                                </div>
                            <?php endforeach; ?>

                        </div>
                    <?php else : ?>
                        <p class="mt-10 text-slate-600 text-sm text-center">No inquiries found.</p>
                    <?php endif; ?>

                <?php endif; ?>

            </section>
        </div>
    </main>

    <?= view('components/footer') ?>
</body>

</html>