<header>
    <style>
        #search-navbar {
            background-color: white !important;
            width: 100% !important;
            height: 35px;
            padding-left: 2.5rem !important;
            font-size: 0.875rem !important;
            color: black !important;
            border: 1px solid white !important;
            border-radius: 0.5rem !important;
        }
    </style>
    <nav id="site-naviagtion" class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2" aria-label="<?php esc_attr_e('Main Navigation', 'pmstylesoup'); ?>">
        <a href="<?php echo esc_url(home_url('/')) ?>" class="flex items-center space-x-3">
            <img src="<?php echo esc_url(get_image_path('images/stylesoup-dark.png')); ?>" class="h-20" alt="Flowbite Logo" />
        </a>
        <div class="flex md:order-2 items-center">
            <?php if (class_exists('WooCommerce')) : ?>
                <?php if (is_user_logged_in()) : ?>
                    <div class="mx-2">
                        <a href="<?php echo esc_url(wc_get_account_endpoint_url('dashboard')); ?>" class="account-link p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-white">
                                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />

                        </a>
                    </div>

                    <div class="mx-2">
                        <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="cart-link p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-white">
                                <path d=" M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                            </svg>

                        </a>
                    </div>
                <?php else : ?>
                    <div class="mx-2">
                        <a href="<?php echo esc_url(wc_get_account_endpoint_url('login')); ?>" class="account-link inline-flex justify-center items-center w-full p-2.5 text-sm text-white bg-gradient-to-r from-carrot-500 to-carrot-700 hover:from-carrot-700 hover:to-carrot-600 hover:bg-carrot-600 rounded-lg hover:text-gray-50"> Set up my Shop </a>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <?php if (is_user_logged_in()) : ?>
                <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-white rounded-lg text-sm p-2.5 me-1">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg><span class="sr-only">Search</span>
                </button>
            <?php endif; ?>
            <div class="relative hidden md:block">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"><svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg><span class="sr-only">Search icon</span></div><input type="text" id="search-navbar" class="bg-transparent w-full p-2 ps-10 text-sm text-gray-900 border border-white rounded-lg  focus:ring-carrot-500 focus:border-carrot-500 dark:text-white dark:focus:ring-carrot-500 dark:focus:border-carrot-500" placeholder="Search...">
            </div>
            <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden" aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 md:bg-transparent bg-carrot-800 bg-opacity-75 p-2 md:p-0" id="navbar-search">
            <div class="relative mt-3 md:hidden">
                <div class="absolute inset-y-0 start-0 flex items-center px-3 pointer-events-none text-white">
                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="search-navbar" class="p-2" placeholder="Search...">
            </div>
            <?php
            wp_nav_menu([
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
                'items_wrap'     => '<ul id="%1$s" class="%2$s flex flex-col p-2 md:p-0 mt-2 font-medium border border-gray-100 rounded-lg  md:space-x-8 md:flex-row md:mt-0 md:border-0 text-cgreen-500" aria-label="submenu">%3$s</ul>',
            ]);
            ?>
        </div>
</header>