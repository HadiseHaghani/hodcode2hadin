<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hadin Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Tanha&display=swap" rel="stylesheet">
    
    <style>
        body {
            background-color: #121212; 
            color: #E0E0E0; 
        }
        .dark-header {
            background-color: #1E1E1E; 
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .hadin-shop-title {
            font-family: 'Bungee', 'Tanha', sans-serif;
        }
    </style>
</head>
<body class="font-sans">
    <header class="dark-header shadow-md">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-4 space-x-reverse">
                <a href="index.php">
                    <img src="<?php echo get_template_directory_uri()?>/pics/hadinlogo.png" alt="لوگو" class="w-10 h-10 ml-2">
                </a>
                <nav class="flex items-center space-x-4 space-x-reverse">
                    <a href="index.php" class="text-gray-400 hover:text-red-500 transition-colors duration-300">
                        خانه
                    </a>
                    <a href="#" class="text-gray-400 hover:text-red-500 transition-colors duration-300">
                        محصولات
                    </a>
                </nav>
            </div>
            
            <div class="flex items-center space-x-4 space-x-reverse">
                <a href="<?php echo home_url('/contact.php'); ?>" class="text-gray-400 hover:text-red-500 transition-colors duration-300">
                    ارتباط با ما
                </a>
                
                <div class="relative">
                    <a href="#" class="block hover:opacity-80 transition-opacity duration-300">
                        <img src="<?php echo get_template_directory_uri(); ?>/pics/sabad.jpg" alt="سبد خرید" class="w-8 h-8 rounded-full">
                    </a>
                    <span class="absolute top-0 right-0 bg-red-600 text-white text-xs font-bold w-5 h-5 flex items-center justify-center rounded-full transform translate-x-1/2 -translate-y-1/2">
                        1
                    </span>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 py-2 flex items-center justify-center space-x-4 space-x-reverse text-sm bg-gray-900 border-b border-gray-700">
            <a href="#" class="py-2 px-4 rounded-full text-white bg-red-600 hover:bg-red-700 transition-colors duration-300">همه محصولات</a>
            <a href="#" class="py-2 px-4 rounded-full text-gray-300 bg-gray-800 hover:bg-gray-700 transition-colors duration-300">دوربین</a>
            <a href="#" class="py-2 px-4 rounded-full text-gray-300 bg-gray-800 hover:bg-gray-700 transition-colors duration-300">کنسول بازی</a>
            <a href="#" class="py-2 px-4 rounded-full text-gray-300 bg-gray-800 hover:bg-gray-700 transition-colors duration-300">هدفون</a>
            <a href="#" class="py-2 px-4 rounded-full text-gray-300 bg-gray-800 hover:bg-gray-700 transition-colors duration-300">وسایل گیمینگ</a>
            <a href="#" class="py-2 px-4 rounded-full text-gray-300 bg-gray-800 hover:bg-gray-700 transition-colors duration-300">هدست</a>
        </div>
    </header>
    <main class="container mx-auto px-4 py-8">