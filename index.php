<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pmstylesoup
 */
get_header();
?>
<section id="primary">
    <main id="main">
        <section id="featured_stylist" class="md:flex md:flex-row-reverse justify-center items-center max-w-screen-xl">
            <div class="p-5">
                <h2 class="my-4 font-bold text-3xl sm:text-4xl text-black">Stylist of the week</h2>
                <p class="my-2">
                    <span class="text-xl font-bold text-gray-800">Saida Kituku</span>
                    <span class="text-gray-600">&bull;</span>
                    <span class="text-carrot-600">Hairdresser</span>
                </p>
                <div class="flex items-center justify-start gap-x-5 ">
                    <a href="" aria-label="Find us on Twitter" target="_blank" rel="noopener">
                        <svg class="size-4 text-carrot-500 hover:text-carrot-600" viewBox="0 0 48 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.1 39.5c18.1 0 28.02-15 28.02-28.02 0-.42-.01-.85-.03-1.27A20 20 0 0 0 48 5.1c-1.8.8-3.7 1.32-5.65 1.55a9.9 9.9 0 0 0 4.33-5.45 19.8 19.8 0 0 1-6.25 2.4 9.86 9.86 0 0 0-16.8 8.97A27.97 27.97 0 0 1 3.36 2.3a9.86 9.86 0 0 0 3.04 13.14 9.86 9.86 0 0 1-4.46-1.23v.12A9.84 9.84 0 0 0 9.83 24c-1.45.4-2.97.45-4.44.17a9.87 9.87 0 0 0 9.2 6.84A19.75 19.75 0 0 1 0 35.08c4.5 2.89 9.75 4.42 15.1 4.42Z" fill="currentColor"></path>
                        </svg>

                    </a>
                    <a href="" aria-label="Find us on Facebook" target="_blank" rel="noopener">
                        <svg class="size-4 text-carrot-500 hover:text-carrot-600" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M48 24a24 24 0 1 0-27.75 23.7V30.95h-6.1V24h6.1v-5.29c0-6.01 3.58-9.34 9.07-9.34 2.62 0 5.37.47 5.37.47v5.91h-3.03c-2.98 0-3.91 1.85-3.91 3.75V24h6.66l-1.07 6.94h-5.59V47.7A24 24 0 0 0 48 24Z" fill="currentColor"></path>
                        </svg>

                    </a>
                    <a href="" aria-label="Find us on Instagram" target="_blank" rel="noopener">
                        <svg class="size-4 text-carrot-500 hover:text-carrot-600" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 4.32c6.41 0 7.17.03 9.7.14 2.34.1 3.6.5 4.45.83 1.11.43 1.92.95 2.75 1.79a7.38 7.38 0 0 1 1.8 2.75c.32.85.72 2.12.82 4.46.11 2.53.14 3.29.14 9.7 0 6.4-.03 7.16-.14 9.68-.1 2.35-.5 3.61-.83 4.46a7.42 7.42 0 0 1-1.79 2.75 7.38 7.38 0 0 1-2.75 1.8c-.85.32-2.12.72-4.46.82-2.53.11-3.29.14-9.69.14-6.41 0-7.17-.03-9.7-.14-2.34-.1-3.6-.5-4.45-.83a7.42 7.42 0 0 1-2.75-1.79 7.38 7.38 0 0 1-1.8-2.75 13.2 13.2 0 0 1-.82-4.46c-.11-2.53-.14-3.29-.14-9.69 0-6.41.03-7.17.14-9.7.1-2.34.5-3.6.83-4.45A7.42 7.42 0 0 1 7.1 7.08a7.38 7.38 0 0 1 2.75-1.8 13.2 13.2 0 0 1 4.46-.82c2.52-.11 3.28-.14 9.69-.14ZM24 0c-6.52 0-7.33.03-9.9.14-2.54.11-4.3.53-5.81 1.12a11.71 11.71 0 0 0-4.26 2.77 11.76 11.76 0 0 0-2.77 4.25C.66 9.8.26 11.55.14 14.1A176.6 176.6 0 0 0 0 24c0 6.52.03 7.33.14 9.9.11 2.54.53 4.3 1.12 5.81a11.71 11.71 0 0 0 2.77 4.26 11.73 11.73 0 0 0 4.25 2.76c1.53.6 3.27 1 5.82 1.12 2.56.11 3.38.14 9.9.14 6.5 0 7.32-.03 9.88-.14 2.55-.11 4.3-.52 5.82-1.12 1.58-.6 2.92-1.43 4.25-2.76a11.73 11.73 0 0 0 2.77-4.25c.59-1.53 1-3.27 1.11-5.82.11-2.56.14-3.38.14-9.9 0-6.5-.03-7.32-.14-9.88-.11-2.55-.52-4.3-1.11-5.82-.6-1.6-1.41-2.94-2.75-4.27a11.73 11.73 0 0 0-4.25-2.76C38.2.67 36.45.27 33.9.15 31.33.03 30.52 0 24 0Z" fill="currentColor"></path>
                            <path d="M24 11.67a12.33 12.33 0 1 0 0 24.66 12.33 12.33 0 0 0 0-24.66ZM24 32a8 8 0 1 1 0-16 8 8 0 0 1 0 16ZM39.7 11.18a2.88 2.88 0 1 1-5.76 0 2.88 2.88 0 0 1 5.75 0Z" fill="currentColor"></path>
                        </svg>

                    </a>
                </div>
                <p class="my-4 text-gray-600">
                    Saida Kituku, a passionate and skilled hairdresser located in Embakasi, Nairobi, is dedicated to providing exceptional hair care services. With years of experience, Saida specializes in a wide range of hairstyling techniques, including precision cutting, creative trimming, vibrant coloring, and personalized styling. <br>
                    Visit Saida Kituku's salon for a transformative and personalized hair care experience.
                </p>
                <div class="flex justify-start items-center space-x-4">
                    <button type="button" class="bg-carrot-500 uppercase py-1 px-2 rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-600 hover:font-bold hover:text-white">Book Appointment</button>
                    <a href="/stylists" class="block border border-carrot-500 uppercase py-1 px-2 rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-500 hover:font-bold hover:text-white">View other stylists</a>
                </div>
            </div>
            <div class="md:p-10 p-2 w-full">
                <div class="mx-auto image object-center border border-cgreen-100 rounded-[50%/60%_60%_40%_40%] overflow-hidden md:w-[426px] md:h-[400px] w-[326px] h-[300px] hover:shadow-md hover:shadow-cgreen-300">
                    <img src="<?php echo esc_url(get_image_path('images/stylists/saida_kituku.jpeg')); ?>">
                </div>
            </div>
        </section>
        <section id="video" class="w-full">
            <div class="flex justify-center px-2">
                <div class="rounded-lg bg-white max-w-md md:max-w-lg lg:max-w-1xl">
                    <div class="p-4">
                        <h5 class="text-gray-900 text-xl font-medium mb-2 text-center">How to Get Started</h5>
                    </div>
                    <a href="#!">
                        <video controls class="w-full rounded-md">
                            <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </a>
                </div>
            </div>
        </section>
        <section id="services" class="mt-10 bg-cgreen-200">
            <div class="p-4">
                <h5 class="text-gray-900 md:text-3xl text-2xl font-bold mb-2 text-center">Find pros by service</h5>
            </div>
            <div class="antialiased text-gray-900 p-2 grid grid-cols-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:px-20">
                <?php foreach ($services as $service) : ?>
                    <article class="bg-black hover:bg-cgreen-950 rounded-t-xl overflow-hidden shadow-sm border border-black">
                        <img class="md:h-40 h-44 w-full object-cover object-center" src="<?php echo esc_url(get_image_path($service['image'])); ?>" alt="<?= $service['name'] ?>" />
                        <a href="/services?<?= http_build_query(['service' => $service['name']]) ?>" class="block md:m-2 m-1 font-semibold md:text-md leading-tight uppercase text-center text-white text-sm"><?= $service['name'] ?></a>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>


        <section id="meet-stylesoup-pros">
            <div class="p-4">
                <h5 class="text-gray-900 text-xl font-medium mb-2 text-center">Meet StyleSoup Pros</h5>
            </div>
            <div class="grid md:grid-cols-3 grid-cols-1 gap-4 p-6 md:px-10">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="bg-white">
                        <a href="#!">
                            <video controls class="w-full rounded-md">
                                <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </a>
                        <div class="p-4">
                            <p class="text-gray-500 text-sm text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, mi sed
                                egestas tincidunt.</p>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </section>

        <section id="reviews" class="bg-carrot-500 p-6">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col gap-8 lg:flex-row">
                    <div class="lg:w-1/2">
                        <h1 class="text-black text-4xl font-bold leading-tight">The Experience</h1>
                        <p class="text-md my-4 text-gray-800">Seeking for verbal of our service quality? Find
                            them here. Everything is transparent and straightforward for your sense of jusitifcation.</p>
                        <a href="#" class="bg-white text-black py-1 px-2 rounded-lg shadow-lg leading-tight font-semibold text-sm">VIEW ALL REVIEWS
                        </a>
                    </div>
                    <div class="lg:w-1/2 lg:ml-12">
                        <div class="flex flex-col justify-between rounded-md  bg-gray-700 p-4 w-full mx-auto">
                            <p class="my-4 mb-0 text-base font-normal leading-relaxed tracking-wide text-gray-400">
                                I've been using XYZ
                                for over a year now and their customer service is excellent! Whenever I have a question, the team is always
                                available and willing to help. Highly recommend!
                            </p>
                            <div class="mt-6 flex items-center gap-6 ">
                                <div class="h-10 w-10 overflow-hidden rounded-full shadow-sm outline-neutral-800">
                                    <div class="relative inline-block overflow-hidden rounded-lg border-neutral-800">
                                        <img alt="" src="https://randomuser.me/api/portraits/women/2.jpg" width="50" height="50" decoding="async" data-nimg="1" class="inline-block " loading="lazy" style="color: transparent;">
                                    </div>
                                </div>
                                <div>
                                    <p class="leading-relaxed tracking-wide text-gray-200">Melissa Smith</p>
                                    <p class="text-xs leading-relaxed tracking-wide text-gray-400">Marketing Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="articles" class="mb-4">
            <h5 class="my-4 text-gray-900 text-xl font-medium text-center">Beauty Trends and Stylist news</h5>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  px-6 md:px-10">

                <?php
                $args = ['numberposts' => 3, 'order' => 'ASC', 'orderby' => 'title'];
                $postslist = get_posts($args);
                $i = 1;
                foreach ($postslist as $post) :  setup_postdata($post); ?>
                    <div class="md:max-w-screen-2xl w-full mx-auto p-2 sm:px-10 md:px-16">
                        <div class="rounded overflow-hidden flex flex-col w-full mx-auto">
                            <a href="<?php the_permalink() ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img class="h-40 w-full object-cover object-center" <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'thumbnail'); ?> <?php else : ?> <img class="h-40 w-full object-cover object-center" src="<?php echo esc_url(get_image_path('images/Tatoo.jpg')); ?>" alt="<?php the_title(); ?>" />
                                <?php endif ?>
                            </a>
                            <div class="bg-carrot-500 px-4 h-52 flex flex-col justify-around">
                                <div class="relative">
                                    <p class="-mt-8 font-semibold text-7xl text-white mb-2">0<?= $i ?></p>
                                </div>
                                <p class="text-black text-md">
                                    <a class="hover:text-black text-black" href="<?php the_permalink() ?>"><?php the_title(); ?></a> <br>
                                    <span class="pt-2 italic text-xs text-gray-200">By <?php the_author() ?> on <?php the_date(); ?></span>
                                </p>
                                <p class="mb-2 text-white font-semibold text-xs flex items-center justify-start gap-1 hover:underline hover:text-white hover:font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                        <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                    </svg>
                                    <a class="hover:text-white text-white hover:font-bold" href="<?php the_permalink() ?>"> Continue Reading</a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php $i++;
                endforeach; ?>
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
    </main><!-- #main -->
</section><!-- #primary -->
<?php get_footer();
