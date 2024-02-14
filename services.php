<?php
include_once __DIR__ . '/template-parts/layout/generic-header.php';

$service_name = trim($_GET["service"] ?? '');

$service_stylists = array_reduce($services, function ($carry, $service) use ($service_name) {
    return ($service['name'] === $service_name) ? $service['stylists'] : $carry;
}, []);


?>

<section>
    <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
        <h1 class="text-xl">See who's offerring <?= $service_name ?></h1>
        <div class="grid w-full grid-cols-1 gap-6 mx-auto lg:grid-cols-2">

            <?php foreach ($service_stylists as $stylist) : ?>
                <div class="p-6">
                    <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl" src="https://via.placeholder.com/150" alt="blog">

                    <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl"><?= $stylist['name'] ?></h1>
                    <p class="mx-auto text-base leading-relaxed text-gray-500">
                        <?= $stylist['bio'] ?>
                    <div class="mt-4">
                        <a href="/stylists?stylist=<?= urlencode($stylist['name']) ?>" class="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-neutral-600" title="read more"> Read More » </a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>


<!-- Newsletter -->
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8  relative -mb-32">
    <div class="bg-cgreen-700 py-8 px-6 sm:py-8 sm:px-4 lg:flex lg:items-center lg:p-16">
        <div class="lg:w-0 lg:flex-1">
            <h2 class="text-3xl font-bold tracking-tight text-white">Sign up for our newsletter</h2>
        </div>
        <div class="sm:w-full sm:max-w-lg lg:mt-0 lg:ml-4 lg:flex-1">
            <form method="post" class="sm:flex space-y-2">
                <label for="name" class="sr-only">Name</label>
                <label for="email-address" class="sr-only">Email address</label>
                <input id="name" type="name" autocomplete="name" class="w-full sm:mr-3 border-white px-8 py-3 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-700" placeholder="YOUR NAME">
                <input id="email-address" autocomplete="email" class="w-full border-white px-8 py-3 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-700" placeholder="YOUR EMAIL">
                <button type="submit" class="mt-3 flex w-full items-center justify-center border border-transparent bg-carrot-500 px-8 py-3 text-base font-medium text-white hover:bg-carrot-400 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-700 sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0 uppercase">Subscribe</button>
            </form>

        </div>
    </div>
</div>
<!-- End Newletter Section -->



<?php get_footer();
