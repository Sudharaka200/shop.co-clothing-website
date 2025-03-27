<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- import files -->
    <?php include '../library/head.php'; ?>
    <?php include '../library/nav.php'; ?>

    <!-- Area 1 -->
    <!-- Home Banner -->
    <div class="bg-[url('../images/banner-img.png')] bg-cover bg-center h-screen flex justify-center items-center">
        <section class="lg:grid lg:h-screen lg:place-content-center">
            <div class="mx-auto w-screen max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8 lg:py-32">
                <div class="max-w-prose text-left">
                    <h1 class="text-7xl font-bold text-gray-900 font-bold sm:text-7xl">
                        FIND CLOTHES <br>
                        THAT MATCHES <br>
                        YOUR STYLE
                    </h1>

                    <p class="mt-4 text-base text-pretty text-gray-700 sm:text-lg/relaxed">
                        Browse through our diverse range of meticulously crafted garments, designed to bring out your individuality and cater to your sense of style.
                    </p>

                    <div class="mt-4 flex gap-4 sm:mt-6">
                        <a
                            class="no-underline inline-block rounded-full border-indigo-600 bg-black px-5 py-3 font-medium text-white shadow-sm transition-colors hover:bg-grey-700"
                            href="#">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- brand logos -->
    <div class="bg-black">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:gap-8">
            <div class=" rounded m-auto ">
                <img class="m-5" src="../images/logo1.png" alt="">
            </div>
            <div class=" rounded m-auto ">
                <img class="m-5" src="../images/logo2.png" alt="">
            </div>
            <div class=" rounded m-auto ">
                <img class="m-5" src="../images/logo3.png" alt="">
            </div>
            <div class=" rounded m-auto ">
                <img class="m-5" src="../images/logo4.png" alt="">
            </div>
        </div>
    </div>

    <!-- Area 1 -->
    <!-- Area 2 -->
    <div>
        <!-- product list  1-->
        <section>
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
                <header class="text-center">
                    <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">NEW ARRIVALS</h2>
                </header>

                <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <li>
                        <a href="../pages/productOverview.php" class="group block overflow-hidden">
                            <img
                                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                alt=""
                                class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                            <div class="relative bg-white pt-3">
                                <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4 no-underline">
                                    Basic Tee
                                </h3>

                                <p class="mt-2">
                                    <span class="sr-only"> Regular Price </span>

                                    <span class="tracking-wider text-gray-900 no-underline"> £24.00 GBP </span>
                                </p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="group block overflow-hidden">
                            <img
                                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                alt=""
                                class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                            <div class="relative bg-white pt-3">
                                <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4 no-underline">
                                    Basic Tee
                                </h3>

                                <p class="mt-2">
                                    <span class="sr-only"> Regular Price </span>

                                    <span class="tracking-wider text-gray-900 no-underline"> £24.00 GBP </span>
                                </p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="group block overflow-hidden">
                            <img
                                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                alt=""
                                class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                            <div class="relative bg-white pt-3">
                                <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4 no-underline">
                                    Basic Tee
                                </h3>

                                <p class="mt-2">
                                    <span class="sr-only"> Regular Price </span>

                                    <span class="tracking-wider text-gray-900 no-underline"> £24.00 GBP </span>
                                </p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="group block overflow-hidden">
                            <img
                                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                alt=""
                                class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                            <div class="relative bg-white pt-3">
                                <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4 no-underline">
                                    Basic Tee
                                </h3>

                                <p class="mt-2">
                                    <span class="sr-only"> Regular Price </span>

                                    <span class="tracking-wider text-gray-900 no-underline"> £24.00 GBP </span>
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <!-- product list  2-->
        <section>
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
                <header class="text-center">
                    <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">TOP SELLING</h2>
                </header>

                <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <li>
                        <a href="#" class="group block overflow-hidden">
                            <img
                                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                alt=""
                                class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                            <div class="relative bg-white pt-3">
                                <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                    Basic Tee
                                </h3>

                                <p class="mt-2">
                                    <span class="sr-only"> Regular Price </span>

                                    <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                                </p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="group block overflow-hidden">
                            <img
                                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                alt=""
                                class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                            <div class="relative bg-white pt-3">
                                <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                    Basic Tee
                                </h3>

                                <p class="mt-2">
                                    <span class="sr-only"> Regular Price </span>

                                    <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                                </p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="group block overflow-hidden">
                            <img
                                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                alt=""
                                class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                            <div class="relative bg-white pt-3">
                                <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                    Basic Tee
                                </h3>

                                <p class="mt-2">
                                    <span class="sr-only"> Regular Price </span>

                                    <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                                </p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="group block overflow-hidden">
                            <img
                                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                                alt=""
                                class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                            <div class="relative bg-white pt-3">
                                <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                    Basic Tee
                                </h3>

                                <p class="mt-2">
                                    <span class="sr-only"> Regular Price </span>

                                    <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                                </p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!-- Area 2 -->
    <!-- Area 3 -->
    <section
        class="overflow-hidden bg-[url(https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?q=80&w=2670&auto=format&fit=crop)] bg-cover bg-top bg-no-repeat">
        <div class="bg-black/50 p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="text-center ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-2xl font-bold text-white sm:text-3xl md:text-5xl">Latest Shirts</h2>

                <p class="hidden m-auto max-w-lg text-white/90 md:mt-6 md:block md:text-lg md:leading-relaxed">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore officia corporis quasi
                    doloribus iure architecto quae voluptatum beatae excepturi dolores.
                </p>

                <div class="mt-4 sm:mt-8">
                    <a
                        href="#"
                        class="inline-block rounded-full bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:ring-3 focus:ring-yellow-400 focus:outline-hidden">
                        Get Yours Today
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Area 3 -->
    <!-- Footer -->
        <?php include '../library/footer.php'; ?>
    <!-- Footer -->


</body>

</html>