<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php include_once __DIR__ . '/../../components/shared/header.php' ?>

    <section class="max-h-screen py-5 pb-11 flex items-center justify-center bg-gray-100 p-4">
        <div class="bg-white shadow-lg rounded-lg p-6 max-w-md w-full">
            <!-- Header -->
            <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Login</h2>
            <p class="text-gray-600 text-center mb-4">Welcome back! Please log in to your account.</p>

            <!-- Login Form -->
            <form>
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                    <input type="email" id="email" placeholder="Enter your email"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-yellow-500 focus:border-yellow-500">
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                    <input type="password" id="password" placeholder="Enter your password"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:ring-yellow-500 focus:border-yellow-500">
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-yellow-500 text-white py-2 rounded-lg hover:bg-yellow-600 transition">Login</button>
            </form>

            <!-- Additional Links -->
            <div class="mt-4 text-center">
                <p class="text-gray-600">
                    Don’t have an account?
                    <a href="../signup" class="text-yellow-500 hover:underline">Sign Up</a>
                </p>
            </div>
        </div>
    </section>

    <?php include_once __DIR__ . '/../../components/shared/footer.html' ?>
</body>

</html>