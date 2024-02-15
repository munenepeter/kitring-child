<?php
get_header();

$service_name = trim($_GET["service"] ?? '');

$service_stylists = array_reduce($services, function ($carry, $service) use ($service_name) {
    return ($service['name'] === $service_name) ? $service['stylists'] : $carry;
}, []);


?>

<section id="features" class="container mx-auto px-4 space-y-6 bg-slate-50 py-8 dark:bg-transparent md:py-12 lg:py-20">
    <?php if ($service_name !== '') : ?>

        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 ">See who's offerring <?= $service_name ?></h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl ">Explore the whole collection of available stylists around your area offering afforable services</p>
        </div>
        <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
            <?php foreach ($service_stylists as $stylist) : ?>
                <div class="items-center bg-cgreen-50 hover:bg-cgreen-100 rounded-lg shadow sm:flex md:w-full">
                    <img class="w-full md:h-full h-auto object-cover rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                    <div class="p-5 text-left">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 ">
                            <a href="#"><?= $stylist['name'] ?></a>
                        </h3>
                        <span class="text-gray-500 "><?= ucwords($stylist['location']) ?></span>
                        <p class="mt-3 mb-4 font-light text-gray-500 "> <?= $stylist['bio'] ?></p>
                        <div class="flex justify-start items-center space-x-4">
                            <button type="button" class="bg-carrot-500 uppercase py-1 px-2 rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-600 hover:font-bold hover:text-white">Book Appointment</button>

                            <a href="/stylists?stylist=<?= urlencode($stylist['name']) ?>" class="block text-center border border-carrot-500 py-1 px-2 uppercase rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-500 hover:font-bold hover:text-white">View this stylist</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else : ?>
        <div class="mx-auto flex max-w-[58rem] flex-col items-center space-y-4 text-center">

            <h2 class="font-bold text-3xl leading-[1.1] sm:text-3xl md:text-6xl">All Services</h2>

            <p class="max-w-[85%] leading-normal text-muted-foreground sm:text-lg sm:leading-7">We offer a variety of services including
            </p>
        </div>
        <div class="mx-auto grid justify-center gap-4 grid-cols-2 md:max-w-[64rem] md:grid-cols-4">
            <?php foreach ($services as $service) : ?>
                <div class="relative overflow-hidden rounded-lg border bg-white select-none hover:shadow hover:shadow-teal-200 p-2">
                    <div class="flex h-[180px] flex-col justify-between rounded-md p-4">
                        <img class="h-12 w-12 object-cover object-center rounded-lg" src="<?php echo esc_url(get_image_path($service['image'])); ?>" alt="<?= $service['name'] ?>" />
                        <div class="space-y-2">
                            <h4 class="font-bold"><?= ucfirst($service['name']) ?></h4>
                            <p class="text-sm text-muted-foreground">We have <?= count($service['stylists']) ?> stylists offering this service</p>
                            <a href="/stylists?stylist=<?= urlencode($service['name']) ?>" class="block text-center border border-carrot-500 py-1 px-2 uppercase rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-500 hover:font-bold hover:text-white">View stylists</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
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
