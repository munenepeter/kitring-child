<?php
get_header();

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

<script src="//unpkg.com/alpinejs" defer></script>

<section class="bg-white ">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
        <?php if ($stylist_name !== '') : ?>
            <div class="items-center bg-cgreen-50 hover:bg-cgreen-100 rounded-lg shadow sm:flex md:w-full">
                <img class="w-full md:h-full h-auto object-cover rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                <div class="p-5 text-left">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 ">
                        <a href="#"><?= $current_stylist['name'] ?></a>
                    </h3>
                    <span class="text-gray-500 "> <?= ucwords($current_stylist['services']) ?>, <?= ucwords($current_stylist['location']) ?></span>
                    <p class="mt-3 mb-4 font-light text-gray-500 "> <?= $current_stylist['bio'] ?></p>
                    <div class="flex justify-start items-center space-x-4">
                        <button type="button" class="bg-carrot-500 uppercase py-1 px-2 rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-600 hover:font-bold hover:text-white">Book Appointment</button>

                        <a href="/stylists?stylist=<?= urlencode($current_stylist['name']) ?>" class="block text-center border border-carrot-500 py-1 px-2 uppercase rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-500 hover:font-bold hover:text-white">View this stylist</a>
                    </div>
                </div>
            </div>

            <section class="px-4 py-8 mx-auto max-w-7xl">
                <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
                    <h1 class="mb-6 text-2xl font-extrabold leading-none tracking-normal text-gray-900 md:text-3xl md:tracking-tight">
                        <span class="block w-full text-carrot-500 lg:inline">Here's some of <?= $current_stylist['name'] ?>'s works </span>
                    </h1>
                </div>

            </section>

            <section>

                <div x-data="{
        imageGalleryOpened: false,
        imageGalleryActiveUrl: null,
        imageGalleryImageIndex: null,
        imageGalleryOpen(event) {
            this.imageGalleryImageIndex = event.target.dataset.index;
            this.imageGalleryActiveUrl = event.target.src;
            this.imageGalleryOpened = true;
        },
        imageGalleryClose() {
            this.imageGalleryOpened = false;
            setTimeout(() => this.imageGalleryActiveUrl = null, 300);
        },
        imageGalleryNext(){
            if(this.imageGalleryImageIndex == this.$refs.gallery.childElementCount){
                this.imageGalleryImageIndex = 1;
            } else {
                this.imageGalleryImageIndex = parseInt(this.imageGalleryImageIndex) + 1;
            }
            this.imageGalleryActiveUrl = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').src;
        },
        imageGalleryPrev() {
            if(this.imageGalleryImageIndex == 1){
                this.imageGalleryImageIndex = this.$refs.gallery.childElementCount;
            } else {
                this.imageGalleryImageIndex = parseInt(this.imageGalleryImageIndex) - 1;
            }

            this.imageGalleryActiveUrl = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').src;
            
        }
    }" @image-gallery-next.window="imageGalleryNext()" @image-gallery-prev.window="imageGalleryPrev()" @keyup.right.window="imageGalleryNext();" @keyup.left.window="imageGalleryPrev();" x-init="
        imageGalleryPhotos = $refs.gallery.querySelectorAll('img');
        for(let i=0; i<imageGalleryPhotos.length; i++){
            imageGalleryPhotos[i].setAttribute('data-index', i+1);
        }
    " class="w-full h-full select-none">
                    <div class="max-w-6xl mx-auto duration-1000 delay-300 opacity-0 select-none ease animate-fade-in-view" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                        <ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 lg:grid-cols-5">
                            <li><img x-on:click="imageGalleryOpen" src="https://images.pexels.com/photos/2356059/pexels-photo-2356059.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 01"></li>

                            <li><img x-on:click="imageGalleryOpen" src="https://images.pexels.com/photos/3618162/pexels-photo-3618162.jpeg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 07"></li>
                            <li><img x-on:click="imageGalleryOpen" src="https://images.unsplash.com/photo-1689217634234-38efb49cb664?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 08"></li>
                            <li><img x-on:click="imageGalleryOpen" src="https://images.unsplash.com/photo-1520350094754-f0fdcac35c1c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 09"></li>
                            <li><img x-on:click="imageGalleryOpen" src="https://cdn.devdojo.com/images/june2023/mountains-10.jpeg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 10"></li>
                            <li><img x-on:click="imageGalleryOpen" src="https://cdn.devdojo.com/images/june2023/mountains-06.jpeg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 06"></li>
                        </ul>
                    </div>
                    <template x-teleport="body">
                        <div x-show="imageGalleryOpened" x-transition:enter="transition ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:leave="transition ease-in-in duration-300" x-transition:leave-end="opacity-0" @click="imageGalleryClose" @keydown.window.escape="imageGalleryClose" x-trap.inert.noscroll="imageGalleryOpened" class="fixed inset-0 z-[99] flex items-center justify-center bg-black bg-opacity-50 select-none cursor-zoom-out" x-cloak>
                            <div class="relative flex items-center justify-center w-11/12 xl:w-4/5 h-11/12">
                                <div @click="$event.stopPropagation(); $dispatch('image-gallery-prev')" class="absolute left-0 flex items-center justify-center text-white translate-x-10 rounded-full cursor-pointer xl:-translate-x-24 2xl:-translate-x-32 bg-white/10 w-14 h-14 hover:bg-white/20">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                                    </svg>
                                </div>
                                <img x-show="imageGalleryOpened" x-transition:enter="transition ease-in-out duration-300" x-transition:enter-start="opacity-0 transform scale-50" x-transition:leave="transition ease-in-in duration-300" x-transition:leave-end="opacity-0 transform scale-50" class="object-contain object-center w-full h-full select-none cursor-zoom-out" :src="imageGalleryActiveUrl" alt="" style="display: none;">
                                <div @click="$event.stopPropagation(); $dispatch('image-gallery-next');" class="absolute right-0 flex items-center justify-center text-white -translate-x-10 rounded-full cursor-pointer xl:translate-x-24 2xl:translate-x-32 bg-white/10 w-14 h-14 hover:bg-white/20">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

            </section>

        <?php else : ?>
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 ">Our Stylists</h2>
                <p class="font-light text-gray-500 lg:mb-16 sm:text-xl ">Explore the whole collection of available stylists around your area offering afforable services</p>
            </div>
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                <?php foreach ($allStylists as $a_stylist) : ?>
                    <div class="items-center bg-cgreen-50 hover:bg-cgreen-100 rounded-lg shadow sm:flex md:w-full">
                        <img class="w-full md:h-full h-auto object-cover rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                        <div class="p-5 text-left">
                            <h3 class="text-xl font-bold tracking-tight text-gray-900 ">
                                <a href="#"><?= $a_stylist['name'] ?></a>
                            </h3>
                            <span class="text-gray-500 "> <?= ucwords($a_stylist['service']) ?>, <?= ucwords($a_stylist['location']) ?></span>
                            <p class="mt-3 mb-4 font-light text-gray-500 "> <?= $a_stylist['bio'] ?></p>
                            <div class="flex justify-start items-center space-x-4">
                                <button type="button" class="bg-carrot-500 uppercase py-1 px-2 rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-600 hover:font-bold hover:text-white">Book Appointment</button>

                                <a href="/stylists?stylist=<?= urlencode($a_stylist['name']) ?>" class="block text-center border border-carrot-500 py-1 px-2 uppercase rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-500 hover:font-bold hover:text-white">View this stylist</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        <?php endif; ?>

        <section class="mt-4 flex justify-center mx-auto">
            <div class="md:flex md:justify-center md:gap-8 gap-4 p-2 rounded-lg bg-cgreen-100">
                <span><b>Want to become one of our stylists? </b> We are growing our community.</span>
                <span class="flex items-center text-cgreen-600 gap-1">
                    <a href="#" class="text-cgreen-600 hover:underline">Join our team </a>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-cgreen-600">
                        <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                </span>
            </div>

        </section>
    </div>



</section>






<!-- <figure class="my-8 md:flex bg-carrot-50 rounded-xl p-8 md:p-0">
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
            <div class="my-2 text-slate-700 ">
              
            </div>

            <div class="flex justify-start items-center space-x-4">
                <button type="button" class="bg-carrot-500 uppercase py-1 px-2 rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-600 hover:font-bold hover:text-white">Book Appointment</button>

                <a href="/stylists" class="block border border-carrot-500 uppercase py-1 px-2 rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-500 hover:font-bold hover:text-white">View other stylists</a>
            </div>
        </figcaption>
    </div>
</figure> -->

<!-- <div class="grid grid-cols-1 md:grid-cols-2 space-x-2 bg-carrot-50">

    <figure class="my-8 md:flex bg-cgreen-50 rounded-xl p-8 md:p-0 hover:shadow-md">
        <img class="w-24 h-24 md:w-56 md:h-auto md:rounded-none rounded-full mx-auto" src="<?php echo esc_url(get_image_path('images/stylists/saida_kituku.jpeg')); ?>" alt="" width="384" height="512">
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
            <blockquote>
                <p class="text-sm">
                   
                </p>
            </blockquote>
            <figcaption class="font-medium">
                <div class="text-carrot-500">
                    <?= $a_stylist['name'] ?>
                </div>
                <div class="my-2 text-slate-700 ">
                    <?= ucwords($a_stylist['service']) ?>, <?= ucwords($a_stylist['location']) ?>
                </div>

                <div class="flex justify-start items-center space-x-4">
                    <button type="button" class="bg-carrot-500 py-1 px-2 uppercase py-1 px-2 rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-600 hover:font-bold hover:text-white">Book Appointment</button>

                    <a href="/stylists?stylist=<?= urlencode($a_stylist['name']) ?>" class="block text-center border border-carrot-500 py-1 px-2 uppercase py-1 px-2 rounded-lg shadow-lg leading-tight font-semibold text-sm text-black hover:bg-carrot-500 hover:font-bold hover:text-white">View this stylist</a>
                </div>
            </figcaption>
        </div>
    </figure>
</div> -->

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
