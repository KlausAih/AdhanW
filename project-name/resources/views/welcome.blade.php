<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adhan Web App</title>
    <link rel="icon" href="{{ asset('img/logo-transparent-png.png') }}" type="image/x-icon"> <!-- Favicon link -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for overlay */
        #overlay {
            display: none; /* Hidden by default */
        }
        /* Sidebar styles */
        #mySidebar {
            transition: transform 0.3s ease;
            transform: translateX(-100%); /* Start off-screen */
            opacity: 0;
        }
        #mySidebar.active {
            transform: translateX(0); /* Slide in */
            opacity: 1;
        }

        /* Button styles */
        .button {
            width: 200px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 10px;
            padding: 0 15px;
            background-color: rgb(66, 66, 66);
            border-radius: 10px;
            color: white;
            border: none;
            position: relative;
            cursor: pointer;
            transition-duration: .2s;
        }

        .profile {
            width: 13px;
        }

        .profile path {
            fill: rgb(0, 206, 62);
        }

        .arrow {
            position: absolute;
            right: 0;
            width: 30px;
            height: 100%;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .button:hover {
            background-color: rgb(77, 77, 77);
        }

        .button:hover .arrow {
            animation: slide-right .6s ease-out both;
        }

        /* Arrow animation */
        @keyframes slide-right {
            0% {
                transform: translateX(-10px);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .button:active {
            transform: translate(1px, 1px);
        }

        /* Prevent link wrapping */
        .whitespace-nowrap {
            white-space: nowrap; /* Prevent wrapping */
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Sidebar (hidden by default) -->
<nav id="mySidebar" class="fixed top-0 left-0 w-64 h-full bg-green-600 text-white z-50 transform -translate-x-full transition-transform duration-300 ease-in-out">
    <div class="flex flex-col p-4">
        <button onclick="toggleSidebar()" class="text-right text-2xl p-2 focus:outline-none">✖</button>
        <a href="#quran" onclick="toggleSidebar()" class="py-2 hover:bg-green-700">Quran</a>
        <a href="#prayertimes" onclick="toggleSidebar()" class="py-2 hover:bg-green-700">Prayer Times</a>
        <a href="#podcast" onclick="toggleSidebar()" class="py-2 hover:bg-green-700">Islamic Podcast</a>
        <a href="#signin" class="button"> 
            <svg class="profile" viewBox="0 0 512 512">
                <path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256 256-114.6 256-256S397.4 0 256 0zM256 48c30.9 0 56 25.1 56 56s-25.1 56-56 56-56-25.1-56-56 25.1-56 56-56zm0 464c-62.4 0-116-36.6-141.5-89.9C151.3 397.4 202.4 368 256 368s104.7 29.4 141.5 50.1C372 511.4 318.4 512 256 512z"></path>
            </svg>
            Sign In
            <div class="arrow">›</div>
        </a>
    </div>
</nav>

<!-- Overlay -->
<div id="overlay" class="fixed top-0 left-0 w-full h-full bg-black opacity-50 hidden" onclick="toggleSidebar()"></div>

<!-- Header -->
<header class="flex justify-between items-center p-4 bg-green-600 text-white relative">
<img src="{{ asset('img/logo-transparent-png.png') }}" alt="Adhan Logo" class="h-10" />
    <div class="search-bar flex-grow mx-4">
        <input type="text" placeholder="Search..." class="w-64 p-2 rounded border-none">
    </div>
    <div class="hidden md:flex space-x-4 whitespace-nowrap">
        <a href="#quran" class="hover:bg-green-700 p-2 rounded">Quran</a>
        <a href="#prayertimes" class="hover:bg-green-700 p-2 rounded">Prayer Times</a>
        <a href="#podcast" class="hover:bg-green-700 p-2 rounded">Islamic Podcast</a>
        <a href="#signin" class="button"> 
            <svg class="profile" viewBox="0 0 512 512">
                <path d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256 256-114.6 256-256S397.4 0 256 0zM256 48c30.9 0 56 25.1 56 56s-25.1 56-56 56-56-25.1-56-56 25.1-56 56-56zm0 464c-62.4 0-116-36.6-141.5-89.9C151.3 397.4 202.4 368 256 368s104.7 29.4 141.5 50.1C372 511.4 318.4 512 256 512z"></path>
            </svg>
            Sign In
            <div class="arrow">›</div>
        </a>
    </div>
    <button class="menu-btn md:hidden text-2xl" onclick="toggleSidebar()">☰</button>
</header>

<!-- Main content -->
<main class="p-4">
    <h1 class="text-2xl font-bold">Welcome to the Adhan Web App</h1>
    <!-- Add more content as needed -->
</main>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('mySidebar');
        const overlay = document.getElementById('overlay');
        const isActive = sidebar.classList.contains('active');

        sidebar.classList.toggle('-translate-x-full', isActive);
        sidebar.classList.toggle('active', !isActive);
        overlay.classList.toggle('hidden', isActive);
    }
</script>

</body>
</html>