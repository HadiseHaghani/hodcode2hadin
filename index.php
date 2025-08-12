<?php
get_header(); 
?>

<section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

    <?php
    $products = [
        [
            'name' => 'دوربین دیجیتال آکسون مدل AX6062',
            'category' => 'دوربین',
            'old_price' => '۲۸,۴۴۰,۰۰۰',
            'price' => '۲۷,۳۹۹,۰۰۰   ',
            'discount' => '۴',
            'image' => 'pics/camera1.jpg',
            'rating' => 4,
        ],
        [
            'name' => 'دوربین دیجیتال کانن مدل EOS 250D',
            'category' => 'دوربین',
            'old_price' => '۲۸,۴۴۰,۰۰۰',
            'price' => '۲۷,۳۹۹,۰۰۰   ',
            'discount' => '۴',
            'image' => 'pics/camera2.jpg',
            'rating' => 5,
        ],
        [
            'name' => 'هدفون بلوتوثی هایلو مدل X1 2023',
            'category' => 'هدفون',
            'old_price' => '۲۸,۴۴۰,۰۰۰',
            'price' => '۲۷,۳۹۹,۰۰۰   ',
            'discount' => '۴',
            'image' => 'pics/headphone3.jpg',
            'rating' => 4,
        ],
        [
            'name' => 'هدست بلوتوثی سونی مدل WH-CH720N',
            'category' => 'هدفون',
            'old_price' => '۲۸,۴۴۰,۰۰۰',
            'price' => '۲۷,۳۹۹,۰۰۰   ',
            'discount' => '۴',
            'image' => 'pics/headphone1.jpg',
            'rating' => 4,
        ],
        
        [
            'name' => ' هدست گیمینگ بلوتوثی سونی مدل InZone H9',
            'category' => 'هدفون',
            'old_price' => '۲۸,۴۴۰,۰۰۰',
            'price' => '۲۷,۳۹۹,۰۰۰   ',
            'discount' => '۴',
            'image' => 'pics/headphone2.jpg',
            'rating' => 5,
        ],
        [
            'name' => 'هدست بلوتوثی استریو مدل SBH54',
            'category' => 'هدفون',
            'old_price' => '   ۲۸,۴۴۰,۰۰۰    ',
            'price' => '۲۷,۳۹۹,۰۰۰   ',
            'discount' => '۴',
            'image' => 'pics/headphone4.jpg',
            'rating' => 3,
        ],
    ];

    foreach ($products as $product) {
        
        echo '<div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden flex flex-col justify-between">';
        echo '    <a href="product.php?name=' . urlencode($product['name']) . '" class="block">';
        echo ' <div class="w-full h-48 bg-white flex items-center justify-center">';
        echo '     <img src="' . get_template_directory_uri() . '/' . $product['image'] . '" alt="' . $product['name'] . '" class="max-h-full max-w-full object-contain">';
        echo ' </div>';
        echo '    </a>';
        echo '    <div class="p-4 flex-grow">';
        
        echo '        <h2 class="text-lg font-bold mt-1 mb-2">' . $product['name'] . '</h2>';
        echo '        <span class="text-sm text-gray-400">' . $product['category'] . '</span>';
        echo '<div class="flex items-center justify-between">';
        echo '    <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">' . $product['discount'] . '%</span>';
        echo '    <div class="flex items-center space-x-2">';
        echo '        <span class="text-sm text-gray-500 line-through">' . $product['old_price'] . ' تومان</span>&nbsp;&nbsp;';
        echo '        <span class="text-2xl font-bold text-red-500">' . $product['price'] . ' تومان</span>';
        echo '    </div>';
        echo '</div>';
        echo '    </div>';
        echo '    <div class="p-4 border-t border-gray-700 flex space-x-2 space-x-reverse">';
        echo '        <button class="flex-1 py-2 px-4 rounded-full bg-red-600 text-white hover:bg-red-700 transition-colors duration-300">افزودن به سبد</button>';

        echo '        <a href="product.php?name=' . urlencode($product['name']) . '" class="flex-1 text-center py-2 px-4 rounded-full border border-gray-600 text-gray-300 hover:bg-gray-700 transition-colors duration-300">مشاهده جزئیات</a>';
        echo '    </div>';
        echo '</div>';
    }
    ?>

</section>

<div class="flex justify-center mt-8 space-x-2 space-x-reverse">
    <a href="#" class="py-2 px-4 rounded-md border border-gray-700 bg-gray-800 hover:bg-gray-700 text-gray-400">قبلی</a>
    <a href="#" class="py-2 px-4 rounded-md border border-red-600 bg-red-600 text-white hover:bg-red-700">1</a>
    <a href="#" class="py-2 px-4 rounded-md border border-gray-700 bg-gray-800 hover:bg-gray-700 text-gray-400">2</a>
    <a href="#" class="py-2 px-4 rounded-md border border-gray-700 bg-gray-800 hover:bg-gray-700 text-gray-400">بعدی</a>
</div>

<?php 
get_footer(); 
?>