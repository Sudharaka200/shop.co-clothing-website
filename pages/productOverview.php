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
                            <h3 class="text-lg sm:text-xl font-semibold text-slate-900">Women Embroidered A-line Kurta</h3>
                            <p class="text-slate-500 mt-2 text-sm">Women Embroidered Georgette A-line Kurta With Attached Dupatta (Maroon)
                            </p>
                            <div class="flex items-center flex-wrap gap-4 mt-6">
                                <h4 class="text-slate-900 text-2xl sm:text-3xl font-semibold">$12</h4>
                                <p class="text-slate-500 text-lg"><strike>$16</strike> <span class="text-sm ml-1.5">Tax included</span></p>
                            </div>

                            <div class="flex items-center gap-4 mt-4">
                                <div class="flex items-center gap-1 text-lg px-2.5 bg-green-600 text-white rounded-full">
                                    <p>4</p>
                                    <svg class="w-[13px] h-[13px] fill-white" viewBox="0 0 14 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                    </svg>
                                </div>
                                <p class="text-slate-500 text-sm">253 ratings and 27 reviews</p>
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
                                    class="px-4 py-3 border border-blue-600 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium">Add
                                    to cart</button>
                                </a>
                            </div>
                        </div>

                        <hr class="my-6 border-slate-300" />

                        <div>
                            <h3 class="text-lg sm:text-xl font-semibold text-slate-900">Select Delivery Location</h3>
                            <p class="text-slate-500 text-sm mt-2">Enter the pincode of your area to check product availability.</p>
                            <div class="flex items-center gap-2 mt-6 max-w-sm">
                                <input type='number' placeholder='Enter pincode'
                                    class="bg-slate-100 px-4 py-2.5 text-sm w-full  border-0 outline-0" />
                                <button type='button'
                                    class="border-0 outline-0 bg-blue-600 hover:bg-blue-700 text-white  px-4 py-2.5 text-sm">Apply</button>
                            </div>
                        </div>

                        <hr class="my-6 border-slate-300" />

                        <div>
                            <h3 class="text-lg sm:text-xl font-semibold text-slate-900">Product Information</h3>
                            <div class="mt-4" role="accordion">
                                <div class="hover:bg-slate-100 transition-all">
                                    <button type="button"
                                        class="w-full text-sm font-semibold text-left px-4 py-2.5 text-slate-900 flex items-center">
                                        <span class="mr-4">Product details</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-current ml-auto shrink-0 -rotate-180"
                                            viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                                                clip-rule="evenodd" data-original="#000000"></path>
                                        </svg>
                                    </button>
                                    <div class="pb-4 px-4">
                                        <p class="text-sm text-slate-500 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>

                                <div class="hover:bg-slate-100 transition-all">
                                    <button type="button"
                                        class="w-full text-sm font-semibold text-left px-4 py-2.5 text-slate-900 flex items-center">
                                        <span class="mr-4">Vendor details</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-current ml-auto shrink-0 -rotate-90"
                                            viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                                                clip-rule="evenodd" data-original="#000000"></path>
                                        </svg>
                                    </button>
                                    <div class="pb-4 px-4 hidden">
                                        <p class="text-sm text-slate-500 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>

                                <div class="hover:bg-slate-100 transition-all">
                                    <button type="button"
                                        class="w-full text-sm font-semibold text-left px-4 py-2.5 text-slate-900 flex items-center">
                                        <span class="mr-4">Return and exchange policy</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-current ml-auto shrink-0 -rotate-90"
                                            viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                                                clip-rule="evenodd" data-original="#000000"></path>
                                        </svg>
                                    </button>
                                    <div class="pb-4 px-4 hidden">
                                        <p class="text-sm text-slate-500 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="my-6 border-slate-300" />

                        <div>
                            <h3 class="text-lg sm:text-xl font-semibold text-slate-900">Customer Reviews</h3>
                            <div class="flex items-center gap-1.5 mt-6">
                                <svg class="w-5 h-5 fill-blue-600" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-5 h-5 fill-blue-600" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-5 h-5 fill-blue-600" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-5 h-5 fill-blue-600" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                                <svg class="w-5 h-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                </svg>
                            </div>

                            <div class="flex items-center flex-wrap gap-4 mt-4">
                                <h4 class="text-2xl sm:text-3xl text-slate-900 font-semibold">4.0 / 5</h4>
                                <p class="text-sm text-slate-500">Based on 253 ratings</p>
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="flex items-start">
                                <img src="https://readymadeui.com/team-2.webp" class="w-12 h-12 rounded-full border-2 border-white" />
                                <div class="ml-3">
                                    <h4 class="text-slate-900 text-sm font-semibold">John Doe</h4>
                                    <div class="flex space-x-1 mt-1">
                                        <svg class="w-[14px] h-[14px] fill-blue-600" viewBox="0 0 14 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                        </svg>
                                        <svg class="w-[14px] h-[14px] fill-blue-600" viewBox="0 0 14 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                        </svg>
                                        <svg class="w-[14px] h-[14px] fill-blue-600" viewBox="0 0 14 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                        </svg>
                                        <svg class="w-[14px] h-[14px] fill-blue-600" viewBox="0 0 14 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                        </svg>
                                        <svg class="w-[14px] h-[14px] fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                        </svg>
                                        <p class="text-xs text-slate-500 !ml-2">2 months ago</p>
                                    </div>
                                    <p class="text-sm text-slate-500 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="block text-blue-600 hover:underline text-sm mt-6 font-semibold">Read all
                                reviews</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>