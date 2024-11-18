<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr.Martens Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<!-- Memanggil Vite CSS -->
@vite('resources/css/app.css')

<body class="bg-[#ac6730] font-poppins">
    <!-- Navbar with Tailwind classes -->
    <nav class="fixed top-0 w-full bg-opacity-10 bg-black grid grid-cols-4 items-center gap-4 p-4 z-50">
    <div class="logo">
        <img src="/image assets/DrMartens-removebg-preview.png" alt="Dr. Martens Logo" class="w-36">
    </div>
    <div class="nav-links col-span-2 flex justify-center space-x-8">
        <a href="#home" class="text-white hover:text-amber-300">Home</a>
        <a href="#collection" class="text-white hover:text-amber-300">Collection</a>
        <a href="#about" class="text-white hover:text-amber-300">About</a>
        <a href="#contact" class="text-white hover:text-amber-300">Contact</a>
    </div>
    <div class="flex items-center gap-2">
        <img src="/image assets/Berkas_Flag of Indonesia_svg - Wikipedia bahasa Indonesia, ensiklopedia bebas.jpeg" alt="ID Flag" class="w-6 h-4">
        <span class="text-white">IND</span>
    </div>
</nav>  

    <!-- Hero Section as Home -->
    <section id="home" class="h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('/path/to/hero-background.jpg');">
        <div class="text-center text-black space-y-6">
            <h2 class="text-5xl[#00000] font-bold">Welcome to Dr. Martens</h2>
            <p class="text-xl font-light">Discover our latest collection</p>
            <div class="flex justify-center space-x-4">
            <a href="https://www.instagram.com/drmartensofficial/" target="_blank" class="px-6 py-2 rounded-full bg-black bg-opacity-20 text-white">Shop Now</a>
                <a href="#collection" class="px-6 py-2 rounded-full bg-black bg-opacity-20 text-white">Explore</a>
            </div>
        </div>
    </section>

    <!-- Collection Section -->
    <section id="collection" class="bg-white py-20">
        <h2 class="text-center text-[#ac6730] text-4xl font-semibold mb-10">Our Collection</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-6 md:px-20">
            <div class="bg-gray-100 p-6 rounded-lg text-center hover:shadow-lg transition">
                <img src="/image assets/8053 Leather Shoes.png" alt="8053 Leather Shoes" class="w-full h-64 object-contain mb-4">
                <h3 class="text-xl font-semibold text-gray-700">8053 Leather Shoes</h3>
                <p class="text-gray-500">Material: Smooth Leather, Sizes: 36-44, Colors: Black, Brown, Style: Classic</p>
                <a href="#" class="inline-block mt-4 px-4 py-2 bg-[#ac6730] text-white rounded">View Details</a>
            </div>
            <!-- Repeat for other product cards -->
            <div class="bg-gray-100 p-6 rounded-lg text-center hover:shadow-lg transition">
                <img src="/image assets/67d551c3e2231df06e966a84f4afc970-removebg-preview.png" alt="8053 Leather Shoes" class="w-full h-64 object-contain mb-4">
                <h3 class="text-xl font-semibold text-gray-700">2000 Twinkle Shoes</h3>
                <p class="text-gray-500">Material: Smooth Leather, Sizes: 36-44, Colors: Black, Brown, Style: Classic</p>
                <a href="#" class="inline-block mt-4 px-4 py-2 bg-[#ac6730] text-white rounded">View Details</a>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg text-center hover:shadow-lg transition">
                <img src="/image assets/530a0b22-57f7-413d-8c5c-20921e782b61-removebg-preview.png" alt="8053 Leather Shoes" class="w-full h-64 object-contain mb-4">
                <h3 class="text-xl font-semibold text-gray-700">6785 Biggy Shoes</h3>
                <p class="text-gray-500">Material: Smooth Leather, Sizes: 36-44, Colors: Black, Brown, Style: Classic</p>
                <a href="#" class="inline-block mt-4 px-4 py-2 bg-[#ac6730] text-white rounded">View Details</a>
            </div>  
        </div>
        
        
    </section>

    <!-- About Section -->
    <section id="about" class="bg-[#95582a] py-20 text-black">
        <div class="container mx-auto grid md:grid-cols-2 gap-8 px-6">
            <div>
                <h2 class="text-center text-black text-4xl font-semibold mb-10">About Dr. Martens</h2>
                <p class="text-black">
                    Dr. Martens has been a symbol of rebellious self-expression for over 60 years. Our iconic air-cushioned sole, welted construction, and distinctive yellow stitching have been worn by workers, rebels, and free thinkers since 1960.
                </p>
                <p class="text-black">
                    Each pair of Dr. Martens shoes is crafted with the highest quality materials and time-tested manufacturing techniques, ensuring durability and comfort that lasts for years.
                </p>
            </div>
            <div>
                <img src="/image assets/530a0b22-57f7-413d-8c5c-20921e782b61-removebg-preview.png" alt="About Dr. Martens" class="w-full rounded-lg shadow-lg">
            </div>
        </div>
    </section>
    <!-- Contact Section -->
<section id="contact" class="py-16 bg-gray-100">
    <div class="max-w-4xl mx-auto px-6">
        <!-- Section Title -->
        <h2 class="text-4xl font-bold text-center text-amber-800 mb-6">Get in Touch</h2>
        <p class="text-center text-lg text-gray-700 mb-10">We’d love to hear from you! Whether you have a question or just want to say hi, feel free to reach out.</p>
        
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Contact Form -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <form action="#" method="POST" class="space-y-4">
                    <div>
                        <label for="name" class="text-gray-700">Full Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-amber-700" required>
                    </div>
                    <div>
                        <label for="email" class="text-gray-700">Email Address</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-amber-700" required>
                    </div>
                    <div>
                        <label for="message" class="text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-amber-700" required></textarea>
                    </div>
                    <button type="submit" class="w-full px-6 py-3 rounded-lg bg-amber-800 text-white font-semibold hover:bg-amber-900 transition duration-300">Send Message</button>
                </form>
            </div>

            <!-- Contact Details -->
            <div class="space-y-6">
                <div class="flex items-center space-x-4">
                    <i class="fas fa-map-marker-alt text-amber-800 text-2xl"></i>
                    <div>
                        <h3 class="font-semibold text-lg text-gray-700">Our Location</h3>
                        <p class="text-gray-600">123 Dr. Martens Street, London, UK</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <i class="fas fa-phone-alt text-amber-800 text-2xl"></i>
                    <div>
                        <h3 class="font-semibold text-lg text-gray-700">Call Us</h3>
                        <p class="text-gray-600">+44 123 456 789</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <i class="fas fa-envelope text-amber-800 text-2xl"></i>
                    <div>
                        <h3 class="font-semibold text-lg text-gray-700">Email</h3>
                        <p class="text-gray-600">contact@drmartens.com</p>
                    </div>
                </div>

                <!-- Social Media Links -->
                <div class="flex space-x-4 mt-6 justify-center">
                    <a href="https://www.instagram.com/drmartensofficial/" target="_blank" class="text-amber-800 hover:text-amber-900"><i class="fab fa-instagram text-2xl"></i></a>
                    <a href="https://
</body>
</html>