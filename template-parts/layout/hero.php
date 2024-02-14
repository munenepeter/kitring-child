<?php
$current_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$dashboard_url = get_permalink(get_option('woocommerce_myaccount_page_id'));
?>
<?php if (!str_contains($current_url, $dashboard_url) || !is_account_page()) : ?>
    <style>
        .bg-cover {
            height: 434px !important;
        }

        @media (max-width: 480px) {
            .bg-cover {
                height: 200px !important;
            }
        }
    </style>
    <div class="bg-cover bg-top" style="background-image: url('<?php echo esc_url(get_image_path('images/Male-portrait-main-crop.jpg')); ?>');height: 434px !important;">
        <?php get_template_part('template-parts/layout/header', 'content'); ?>
        <section class="px-2 md:pl-12 bg-opacity-25 h-full pt-16 -mt-8">
            <h1 class="my-6 md:max-w-2xl text-4xl font-semibold tracking-tight leading-none md:text-5xl xl:text-6xl text-white ">
                Discover & book local beauty professionals</h1>

            <p class="md:mt-20 mt-6 md:max-w-2xl font-light md:text-gray-200 text-carrot-700 text-sm flex items-center justify-start gap-2 hover:underline hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
                <a href="#" class="hover:underline">Are you a beauty professional?</a>
            </p>
        </section>
    </div>
<?php else : ?>
    <div class="mb-4 pb-2 bg-opacity-65 bg-yellow-900" style="height: 112px !important;">
        <?php get_template_part('template-parts/layout/header', 'content'); ?>
    </div>
<?php endif; ?>