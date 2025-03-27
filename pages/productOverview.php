<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- import files -->
    <?php include '../library/head.php'; ?>
    <?php include '../library/nav.php'; ?>

    <div>
        <div class="p-4">
            <div class="lg:max-w-6xl max-w-xl mx-auto">
                <div class="grid items-start grid-cols-1 lg:grid-cols-2 gap-8 max-lg:gap-12 max-sm:gap-8">
                    <div class="w-full lg:sticky top-0">
                        <div class="flex flex-row gap-2">
                            <div class="flex flex-col gap-2 w-16 max-sm:w-14 shrink-0">
                                <img src="https://readymadeui.com/images/fashion-img-1.webp" alt="Product1"
                                    class="aspect-[64/85] object-cover object-top w-full cursor-pointer  border-b-2 border-black" />
                                <img src="https://readymadeui.com/images/fashion-img-2.webp" alt="Product2"
                                    class="aspect-[64/85] object-cover object-top w-full cursor-pointer  border-b-2 border-transparent" />
                                <img src="https://readymadeui.com/images/fashion-img-3.webp" alt="Product3"
                                    class="aspect-[64/85] object-cover object-top w-full cursor-pointer  border-b-2 border-transparent" />
                                <img src="https://readymadeui.com/images/fashion-img-4.webp" alt="Product4"
                                    class="aspect-[64/85] object-cover object-top w-full cursor-pointer  border-b-2 border-transparent" />
                            </div>
                            <div class="flex-1">
                                <img src="https://readymadeui.com/images/fashion-img-1.webp" alt="Product"
                                    class="w-full  aspect-[548/712] object-cover" />
                            </div>
                        </div>
                    </div>

                    <div class="w-full">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 sm:text-3xl">Women Embroidered A-line Kurta</h3>
                            <p class="text-slate-500 mt-2 text-sm">Women Embroidered Georgette A-line Kurta With Attached Dupatta (Maroon)
                            </p>
                            <div class="flex items-center flex-wrap gap-4 mt-6">
                                <h4 class="text-slate-900 text-2xl sm:text-3xl font-semibold">$12</h4>
                                <p class="text-slate-500 text-lg"><strike>$16</strike> <span class="text-sm ml-1.5">Tax included</span></p>
                            </div>
                        </div>

                        <hr class="my-6 border-slate-300" />

                        <div>
                            <h3 class="text-lg sm:text-xl font-semibold text-slate-900">Sizes</h3>
                            <div class="flex flex-wrap gap-4 mt-4">
                                <button type="button"
                                    class="w-10 h-9 border border-slate-300 hover:border-blue-600 text-sm  flex items-center justify-center shrink-0">SM</button>
                                <button type="button"
                                    class="w-10 h-9 border border-blue-600 hover:border-blue-600 text-sm  flex items-center justify-center shrink-0">MD</button>
                                <button type="button"
                                    class="w-10 h-9 border border-slate-300 hover:border-blue-600 text-sm  flex items-center justify-center shrink-0">LG</button>
                                <button type="button"
                                    class="w-10 h-9 border border-slate-300 hover:border-blue-600 text-sm  flex items-center justify-center shrink-0">XL</button>
                            </div>

                            <div class="mt-6 flex flex-wrap gap-4">
                                
                                <a href="../pages/cart.php">
                                <button type="button"
                                    class="no-underline inline-block rounded-full border-indigo-600 bg-black px-5 py-3 font-medium text-white shadow-sm transition-colors hover:bg-grey-700">Add
                                    to cart</button>
                                </a>
                            </div>
                        </div>
                        <hr class="my-6 border-slate-300" />
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>