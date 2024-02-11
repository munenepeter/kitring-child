<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pmstylesoup
 */

?>
<header id="masthead" class="bg-opacity-15 bg-yellow-900 sm:bg-transparent sticky top-0">
    <nav id="site-navigation" class="text-white sm:bg-opacity-25 px-8 flex  justify-between items-center" aria-label="<?php esc_attr_e('Main Navigation', 'pmstylesoup'); ?>">
        <div>
            <a href="<?php echo esc_url(home_url('/')) ?>" rel="home">
                <img class="h-20 md:h-auto" src="<?php echo esc_url(get_image_path('images/stylesoup-dark.png')); ?>" alt="<?php bloginfo('name') ?>">
            </a>
        </div>

        <section class="hidden md:flex justify-around items-center space-x-4">

            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s flex justify-around items-center space-x-6 font-bold" aria-label="submenu">%3$s</ul>',
                )
            );

            // Display WooCommerce Cart Link
            if (class_exists('WooCommerce')) : ?>
                <?php if (!is_user_logged_in()) : ?>
                    <div class="menu-item">
                        <a href="<?php echo esc_url(wc_get_account_endpoint_url('dashboard')); ?>" class="account-link">
                            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8 w-8 rounded-full border p-1">
                                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="cart-link">
                            <span class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8 w-8 rounded-full border p-1">
                                    <path d=" M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                                </svg>
                            </span>
                        </a>
                    </div>
                <?php else : ?>
                    <div class="menu-item">
                        <a href="<?php echo esc_url(wc_get_account_endpoint_url('login')); ?>" class="account-link rounded-full inline-flex justify-center items-center w-full px-3 py-2 text-md font-bold text-white bg-gradient-to-r from-orange-500 to-orange-700 hover:from-amber-700 hover:to-orange-600 hover:bg-amber-600 md:rounded-full hover:text-gray-50">
                            <svg class="w-5 h-5 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g fill="none" stroke="none">
                                    <path d="M6 12l5.485-5.485A12 12 0 0 1 19.971 3H21v1.029a12 12 0 0 1-3.515 8.486L12 18m-6-6l6 6m-6-6L3 9l.828-.828A4 4 0 0 1 6.657 7H11l-5 5zm6 6l3 3 .828-.828A4 4 0 0 0 17 17.343V13l-5 5zm-4.5-4.5l-2.379 2.379A7.242 7.242 0 0 0 3 21a7.243 7.243 0 0 0 5.121-2.121L10.5 16.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M16.778 7.916a.5.5 0 1 1-.556-.832.5.5 0 0 1 .556.832z" fill="#212121" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                            <span>Get Started</span>
                        </a>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <!-- Display Search Form -->
            <div class="menu-item">
                <form action="<?php echo esc_url(home_url('/')); ?>" class="max-w-xs w-full">
                    <div class="relative">
                        <input type="text" name="s" style="background:transparent; width:100%; padding:6px 10px 6px 10px; border: 2px solid white; height:36px; border-radius:15px; text-color: white; margin-top:2px;" class="placeholder:text-white appearance-none" placeholder="Search" value="<?php echo get_search_query(); ?>">
                        <button type="submit" class="outline-none focus:outline-none">
                            <svg class="text-gray-50 h-4 w-4 absolute top-2.5 right-3 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
                                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <section class="md:hidden flex justify-around items-center space-x-4">
            <?php if (class_exists('WooCommerce')) : ?>
                <?php if (is_user_logged_in()) : ?>
                    <div class="menu-item">
                        <a href="<?php echo esc_url(wc_get_account_endpoint_url('dashboard')); ?>" class="account-link">
                            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8 w-8 rounded-full border p-1">
                                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="cart-link">
                            <span class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8 w-8 rounded-full border p-1">
                                    <path d=" M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                                </svg>
                            </span>
                        </a>
                    </div>
                <?php else : ?>
                    <div class="menu-item">
                        <a href="<?php echo esc_url(wc_get_account_endpoint_url('login')); ?>" class="account-link rounded-full inline-flex justify-center items-center w-full px-3 py-2 text-md font-bold text-white bg-gradient-to-r from-orange-500 to-orange-700 hover:from-amber-700 hover:to-orange-600 hover:bg-amber-600 md:rounded-full hover:text-gray-50">
                            <svg class="w-5 h-5 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g fill="none" stroke="none">
                                    <path d="M6 12l5.485-5.485A12 12 0 0 1 19.971 3H21v1.029a12 12 0 0 1-3.515 8.486L12 18m-6-6l6 6m-6-6L3 9l.828-.828A4 4 0 0 1 6.657 7H11l-5 5zm6 6l3 3 .828-.828A4 4 0 0 0 17 17.343V13l-5 5zm-4.5-4.5l-2.379 2.379A7.242 7.242 0 0 0 3 21a7.243 7.243 0 0 0 5.121-2.121L10.5 16.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M16.778 7.916a.5.5 0 1 1-.556-.832.5.5 0 0 1 .556.832z" fill="#212121" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                            <span>Get Started</span>
                        </a>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </section>
    </nav>
    <div class="block md:hidden text-white pb-2 -mt-2">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
                'items_wrap'     => '<ul id="%1$s" class="%2$s flex justify-around items-center space-x-6 font-bold" aria-label="submenu">%3$s</ul>',
            )
        );
        ?>
    </div>

    <!-- #site-navigation -->
    <!-- Display Search Form -->
    <form action="<?php echo esc_url(home_url('/')); ?>" class="block md:hidden max-w-sm mx-2 pb-2">
        <div class="relative">
            <input type="text" name="s" style="background:transparent; width:100%; padding:6px 10px 6px 10px; border: 2px solid white; height:36px; border-radius:15px; text-color: white; margin-top:2px;" class="placeholder:text-white appearance-none" placeholder="Search" value="<?php echo get_search_query(); ?>">
            <button type="submit" class="outline-none focus:outline-none">
                <svg class="text-gray-50 h-4 w-4 absolute top-2.5 right-3 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                    </path>
                </svg>
            </button>
        </div>
    </form>
</header><!-- #masthead -->