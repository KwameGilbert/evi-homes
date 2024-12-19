<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airbnb Customer Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
    <style>
        /* Custom scrollbar for webkit browsers */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
    <!-- Sidebar -->
    <?php include_once './components/mobile-sidebar.php' ?>

    <!-- Desktop and Mobile Main Content -->
    <div class="flex">
        <?php include_once './components/desktop-sidebar.php' ?>

        <!-- Main Content Area (Padded for Mobile) -->
        <main class="flex-grow p-4 md:p-10 pt-20 md:pt-10 overflow-y-auto w-full" id="main-content">

            <?php include_once './pages/overview.php' ?>

        </main>
    </div>

    <script src="./scripts/index.js"></script>
    <script>
        function loadPage(pageName) {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', `./pages/${pageName}.php`, true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    const mainContent = document.getElementById('main-content');
                    mainContent.innerHTML = xhr.responseText;

                    // Execute any scripts in the fetched content
                    const scripts = mainContent.getElementsByTagName('script');
                    for (let i = 0; i < scripts.length; i++) {
                        eval(scripts[i].innerText);
                    }
                } else {
                    console.error('Failed to load page:', xhr.status, xhr.statusText);
                }
            };
            xhr.onerror = function() {
                console.error('Request error...');
            };
            xhr.send();
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Add event listeners to sidebar nav items
            const navItems = document.querySelectorAll('.sidebar-nav-item');
            navItems.forEach(item => {
                item.addEventListener('click', function() {
                    const section = this.getAttribute('data-section');
                    loadPage(section);

                    document.querySelectorAll('.sidebar-nav-item').forEach(btn => {
                        btn.classList.remove('active', 'bg-rose-50', 'text-rose-600');
                    });

                    // Add active class to clicked item
                    item.classList.add('active', 'bg-rose-50', 'text-rose-600');
                });
            });
        });

        // Example usage:
        // loadPage('overview-section');
    </script>
</body>

</html>