<nav class="bg-white shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4"> <!-- Logo/Brand -->
            <div class="flex items-center space-x-2"> <span class="text-xl font-bold text-blue-600">PHP Learnings</span> </div> <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-1"> <a href="#" class="nav-link active">Home</a> <a href="#" class="nav-link">All Tasks</a> <a href="#" class="nav-link">Completed</a> <a href="#" class="nav-link">Pending</a> <a href="#" class="nav-link">About</a> </div> <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="outline-none hamburger">
                    <svg class="w-6 h-6 text-gray-500 hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path class="hamburger-line line1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"></path>
                        <path class="hamburger-line line2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16"></path>
                        <path class="hamburger-line line3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu">
            <a href="#" class="menu-item block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 rounded font-medium" style="--item-index: 0">Home</a>
            <a href="#" class="menu-item block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 rounded" style="--item-index: 1">All Tasks</a>
            <a href="#" class="menu-item block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 rounded" style="--item-index: 2">Completed</a>
            <a href="#" class="menu-item block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 rounded" style="--item-index: 3">Pending</a>
            <a href="#" class="menu-item block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 rounded" style="--item-index: 4">About</a>
        </div>
    </div>
</nav>