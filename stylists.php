<?php
include_once __DIR__ . '/template-parts/layout/generic-header.php';

$stylist_name = isset($_GET["stylist"]) ? urldecode($_GET["stylist"]) : '';


$allStylists = [];

foreach ($services as $service) {
    $serviceName = $service['name'];
    $stylists = $service['stylists'] ?? [];

    foreach ($stylists as $stylist) {
        $stylist['service'] = $serviceName;
        $allStylists[] = $stylist;
    }
}
if ($stylist_name !== '') {

    $current_stylist = [];

    foreach ($allStylists as $stylist) {
        if ($stylist['name'] === $stylist_name) {
            $current_stylist['name'] = $stylist['name'];
            $current_stylist['bio'] = $stylist['bio'];
            $current_stylist['location'] = $stylist['location'];
            $current_stylist['services'] = $stylist['service'];
        }
    }
}

?>

<?php if ($stylist_name !== '') : ?>
    <figure class="my-8 md:flex bg-carrot-50 rounded-xl p-8 md:p-0">
        <img class="w-24 h-24 md:w-72 md:h-auto md:rounded-none rounded-full mx-auto" src="<?php echo esc_url(get_image_path('images/stylists/saida_kituku.jpeg')); ?>" alt="" width="384" height="512">
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
            <blockquote>
                <p class="text-lg font-medium indent-8">
                    <?= $current_stylist['bio'] ?>
                </p>
            </blockquote>
            <figcaption class="font-medium">
                <div class="text-carrot-500">
                    <?= $current_stylist['name'] ?>
                </div>
                <div class="my-2 text-slate-700 dark:text-slate-500">
                    <?= ucwords($current_stylist['services']) ?>, <?= ucwords($current_stylist['location']) ?>
                </div>

                <div class="flex justify-start items-center space-x-4">
                    <button type="button" class="bg-carrot-500 uppercase py-1 px-2 rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-600 hover:font-bold hover:text-white">Book Appointment</button>

                    <a href="/stylists" class="block border border-carrot-500 uppercase py-1 px-2 rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-500 hover:font-bold hover:text-white">View other stylists</a>
                </div>
            </figcaption>
        </div>
    </figure>
<?php else : ?>
    <div class="grid grid-cols-1 md:grid-cols-2 space-x-2 bg-carrot-50">
        <?php foreach ($allStylists as $a_stylist) : ?>
            <figure class="my-8 md:flex bg-cgreen-50 rounded-xl p-8 md:p-0 hover:shadow-md">
                <img class="w-24 h-24 md:w-56 md:h-auto md:rounded-none rounded-full mx-auto" src="<?php echo esc_url(get_image_path('images/stylists/saida_kituku.jpeg')); ?>" alt="" width="384" height="512">
                <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                    <blockquote>
                        <p class="text-sm">
                            <?= $a_stylist['bio'] ?>
                        </p>
                    </blockquote>
                    <figcaption class="font-medium">
                        <div class="text-carrot-500">
                            <?= $a_stylist['name'] ?>
                        </div>
                        <div class="my-2 text-slate-700 dark:text-slate-500">
                            <?= ucwords($a_stylist['service']) ?>, <?= ucwords($a_stylist['location']) ?>
                        </div>

                        <div class="flex justify-start items-center space-x-4">
                            <button type="button" class="bg-carrot-500 py-1 px-2 uppercase py-1 px-2 rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-600 hover:font-bold hover:text-white">Book Appointment</button>

                            <a href="/stylists?stylist=<?= urlencode($a_stylist['name']) ?>" class="block text-center border border-carrot-500 py-1 px-2 uppercase py-1 px-2 rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-500 hover:font-bold hover:text-white">View this stylist</a>
                        </div>
                    </figcaption>
                </div>
            </figure>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
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
