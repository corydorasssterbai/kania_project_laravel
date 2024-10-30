<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Dr.Martens</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <!-- Memanggil Vite CSS -->
    @vite('resources/css/app.css')
    
    <style>
        /* Navigation */
        nav {
            display: grid;
            grid-template-columns: auto 1fr auto auto;
            align-items: center;
            gap: 2rem;
            padding: 1rem 2rem;
        }

        .menu {
            justify-self: start;
        }

        .flag {
            justify-self: end;
            margin-right: 1rem;
        }

        /* Slider */
        .swiper-slide {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .swiper-slide-active {
            opacity: 1;
        }

        .main-slider {
            height: calc(100vh - 80px);
            width: 100%;
        }

        .main-slider .swiper-slide {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .main-slider .swiper-slide img {
            height: 70vh;
            width: auto;
            margin-right: 10%;
        }

        /* Thumbnails */
        .thumbs {
            position: fixed;
            right: 2rem;
            top: 50%;
            transform: translateY(-50%);
            width: 100px;
            height: auto;
        }

        .thumbs .swiper-slide {
            width: 80px !important;
            height: 80px;
            margin-bottom: 1rem;
            cursor: pointer;
        }

        .thumbs .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        /* Text & Numbers */
        .number {
            position: absolute;
            top: 2rem;
            right: 2rem;
            font-size: 5rem;
            color: rgba(255, 255, 255, 0.5);
            font-weight: bold;
        }

        .text {
            position: absolute;
            left: 2rem;
            top: 25%;
        }
    </style>
</head>

<body class="bg-[#ac6730] overflow-hidden">
    <main>
        <!-- Navigation -->
        <nav>
            <div class="logo w-32">
                <img src="/image assets/DrMartens-removebg-preview.png" alt="" class="w-full">
            </div>
            <div class="menu text-white text-2xl">
                <i class="ri-bar-chart-horizontal-line"></i>
            </div>
            <div class="flag flex items-center gap-2">
                <img src="/image assets/Berkas_Flag of Indonesia_svg - Wikipedia bahasa Indonesia, ensiklopedia bebas.jpeg" alt="" class="w-6 h-4 object-cover">
                <i class="ri-arrow-down-s-fill text-white"></i>
                <div class="current">
                    <span class="text-white">IND</span>
                </div>
            </div>
            <button class="text-white text-xl justify-self-end">
                <i class="ri-search-line"></i>
            </button>
        </nav>

        <!-- Main Content -->
        <div class="container relative h-[calc(100vh-80px)]">
            <!-- Main Slider -->
            <div class="swiper main-slider">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide" style="background: #ac6730">
                        <div class="text">
                            <h2 class="text-white text-7xl font-bold leading-tight">Dr.</h2>
                            <h2 class="text-white text-7xl font-bold leading-tight">Martens</h2>
                            <p class="text-white text-xl mt-4">8053 Leather Shoes</p>

                            <div class="size-options mt-8 flex gap-4">
                                <a href="#" class="text-white bg-white/20 rounded-full px-6 py-2">38</a>
                                <a href="#" class="text-white bg-white/20 rounded-full px-6 py-2">39</a>
                                <a href="#" class="text-white bg-white/20 rounded-full px-6 py-2">40</a>
                                <a href="{{ route ('about') }}"class="text=1xl font-bold mb-4">Selengkapnya...</a>
                            </div>
                        </div>
                        <img src="/image assets/8053 Leather Shoes.png">
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide" style="background: #6f2a29">
                        <div class="text">
                            <h2 class="text-white text-7xl font-bold leading-tight">Dr.</h2>
                            <h2 class="text-white text-7xl font-bold leading-tight">Martens</h2>
                            <p class="text-white text-xl mt-4">1460 Smooth Leather</p>
                            <div class="size-options mt-8 flex gap-4">
                                <a href="#" class="text-white bg-white/20 rounded-full px-6 py-2">38</a>
                                <a href="#" class="text-white bg-white/20 rounded-full px-6 py-2">39</a>
                                <a href="#" class="text-white bg-white/20 rounded-full px-6 py-2">40</a>
                            </div>
                        </div>
                        <img src="/image assets/530a0b22-57f7-413d-8c5c-20921e782b61-removebg-preview.png">
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide" style="background: #ac6730">
                        <div class="text">
                            <h2 class="text-white text-7xl font-bold leading-tight">Dr.</h2>
                            <h2 class="text-white text-7xl font-bold leading-tight">Martens</h2>
                            <p class="text-white text-xl mt-4">1461 Quad Smooth Leather</p>
                            <div class="size-options mt-8 flex gap-4">
                                <a href="#" class="text-white bg-white/20 rounded-full px-6 py-2">38</a>
                                <a href="#" class="text-white bg-white/20 rounded-full px-6 py-2">39</a>
                                <a href="#" class="text-white bg-white/20 rounded-full px-6 py-2">40</a>
                            </div>
                        </div>
                        <img src="/image assets/67d551c3e2231df06e966a84f4afc970-removebg-preview.png">
                    </div>
                </div>
            </div>

            <!-- Thumbnails -->
            <div class="swiper thumbs">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-white/10 rounded-lg p-2">
                        <div class="number text-3xl">01</div>
                        <img src="/image assets/8053 Leather Shoes.png"/>
                    </div>
                    <div class="swiper-slide bg-white/10 rounded-lg p-2">
                        <div class="number text-3xl">02</div>
                        <img src="/image assets/530a0b22-57f7-413d-8c5c-20921e782b61-removebg-preview.png"/>
                    </div>
                    <div class="swiper-slide bg-white/10 rounded-lg p-2">
                        <div class="number text-3xl">03</div>
                        <img src="/image assets/67d551c3e2231df06e966a84f4afc970-removebg-preview.png"/>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        const thumbs = new Swiper('.thumbs', {
            direction: 'vertical',
            spaceBetween: 10,
            slidesPerView: 3,
            watchSlidesProgress: true,
        });

        const swiper = new Swiper('.main-slider', {
            spaceBetween: 10,
            thumbs: {
                swiper: thumbs
            }
        });
    </script>
</body>
</html>