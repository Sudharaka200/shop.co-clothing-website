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
    <?php include '../library/adminNav.php'; ?>
    
    
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-gray-800">Add Products</h2>
        
        <!-- Add New Arrrivals -->
         <p>Add New Arrrivals</p>
         <div>
            <form action="sql/insert_nproducts.php" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium">Product Name</label>
                    <input type="text" id="N_product_name" name="N_product_name" placeholder="Enter your product name"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium">Description</label>
                    <input type="text" id="N_product_description" name="N_product_description" placeholder="Enter your product description"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium">Price</label>
                    <textarea id="N_product_price" name="N_product_price" placeholder="Type your price"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium">Image 1</label>
                    <textarea id="N_product_img1" name="N_product_img1" placeholder="Type your Image 1 Link"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium">Image 2</label>
                    <textarea id="N_product_img2" name="N_product_img2" placeholder="Type your Image 2 Link"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium">Image 3</label>
                    <textarea id="N_product_img3" name="N_product_img3" placeholder="Type your Image 3 Link"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium">Image 4</label>
                    <textarea id="N_product_img4" name="N_product_img4" placeholder="Type your Image 4 Link"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium">Image 5</label>
                    <textarea id="N_product_img5" name="N_product_img5" placeholder="Type your Image 5 Link"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Submit</button>
            </form>
         </div>

        <!-- Add Top Selling Products -->
         <br><br><br>
        <p>Add Top Selling Products</p>
         <div>
            <form action="sql/insert_tproducts.php" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium">Product Name</label>
                    <input type="text" id="T_product_name" name="T_product_name" placeholder="Enter your product name"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium">Description</label>
                    <input type="text" id="T_product_description" name="T_product_description" placeholder="Enter your product description"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium">Price</label>
                    <textarea id="T_product_price" name="T_product_price" rows="4" placeholder="Type your price"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium">Image 1</label>
                    <textarea id="T_product_img1" name="T_product_img1" rows="4" placeholder="Type your Image 1 Link"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium">Image 2</label>
                    <textarea id="T_product_img2" name="T_product_img2" rows="4" placeholder="Type your Image 2 Link"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium">Image 3</label>
                    <textarea id="T_product_img3" name="T_product_img3" rows="4" placeholder="Type your Image 3 Link"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium">Image 4</label>
                    <textarea id="T_product_img4" name="T_product_img4" rows="4" placeholder="Type your Image 4 Link"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium">Image 5</label>
                    <textarea id="T_product_img5" name="T_product_img5" rows="4" placeholder="Type your Image 5 Link"
                        class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Submit</button>
            </form>
         </div>

    </div>
    
</body>
</html>

