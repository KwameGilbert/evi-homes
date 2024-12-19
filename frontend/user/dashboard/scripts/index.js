 // Initialize Feather icons
        feather.replace();

        // Mobile Sidebar Toggle
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileSidebarClose = document.getElementById('mobile-sidebar-close');
        const mobileSidebar = document.getElementById('mobile-sidebar');

        mobileMenuToggle.addEventListener('click', () => {
            mobileSidebar.classList.remove('-translate-x-full');
        });

        mobileSidebarClose.addEventListener('click', () => {
            mobileSidebar.classList.add('-translate-x-full');
        });

        // Navigation functionality
      /*  document.querySelectorAll('.sidebar-nav-item').forEach(item => {
            item.addEventListener('click', () => {
                // Remove active class from all items
                document.querySelectorAll('.sidebar-nav-item').forEach(btn => {
                    btn.classList.remove('active', 'bg-rose-50', 'text-rose-600');
                });

                // Add active class to clicked item
                item.classList.add('active', 'bg-rose-50', 'text-rose-600');

                // Hide all sections
                document.querySelectorAll('.dashboard-section').forEach(section => {
                    section.classList.add('hidden');
                });

                // Show selected section
                const sectionId = `${item.dataset.section}-section`;
                document.getElementById(sectionId).classList.remove('hidden');

                // Close mobile sidebar if open
                mobileSidebar.classList.add('-translate-x-full');
            });
        });  */