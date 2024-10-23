<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Memanggil Vite CSS -->
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-200">
    <!-- Login Form -->
    <form id="LoginForm" class="bg-white p-6 rounded-lg shadow-md w-72"> <!-- W-72 (width 250px) -->
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
        
        <!-- Username -->
        <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username:</label>
            <input type="text" name="username" id="username" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#ac6730] focus:border-[#ac6730]" placeholder="Enter your username">
        </div>
        
        <!-- Password -->
        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password:</label>
            <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#ac6730] focus:border-[#ac6730]" placeholder="Enter your password">
        </div>
        
        <!-- Submit Button -->
        <button type="submit" class="w-full text-white bg-[#914f24] hover:bg-[#ac6730] py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#ac6730] focus:ring-opacity-50">
            LOGIN
        </button>
    </form>

    <!-- Include your script file -->
    <script src="/assets.js/script.js"></script>
</body>
</html>
