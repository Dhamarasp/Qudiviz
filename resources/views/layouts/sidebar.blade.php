@if (request()->is('lessons') ||
        request()->is('practices') ||
        request()->is('leaderboard') ||
        request()->is('community'))
    <!-- Mobile menu, show/hide based on menu state -->
    <div class="hidden md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white shadow-lg">
            <a href="{{ route('lessons') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-500 hover:bg-gray-100">
                <i class="fas fa-crown mr-2"></i>
                Lessons
            </a>
            <a href="{{ route('practices') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-500 hover:bg-gray-100">
                <i class="fas fa-fire mr-2"></i>
                Practice
            </a>
            <a href="{{ route('community') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-500 hover:bg-gray-100">
                <i class="fas fa-users mr-2"></i>
                Community
            </a>
            <a href="{{ route('leaderboard') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-500 hover:bg-gray-100">
                <i class="fas fa-trophy mr-2"></i>
                Leaderboard
            </a>
            <a href="shop.html"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-500 hover:bg-gray-100">
                <i class="fas fa-heart mr-2"></i>
                Shop
            </a>
            <a href="profile.html"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-500 hover:bg-gray-100">
                <i class="fas fa-user mr-2"></i>
                Profile
            </a>
            <a href="help.html"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-500 hover:bg-gray-100">
                <i class="fas fa-question-circle mr-2"></i>
                Help
            </a>
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="flex items-center px-3">
                    <div class="flex-shrink-0">
                        <div class="h-10 w-10 rounded-full bg-purple-500 flex items-center justify-center">
                            <span class="text-white font-bold">D</span>
                        </div>
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-gray-800">Dhamar222</div>
                    </div>
                    <div class="ml-3 flex gap-2">
                        <div class="flex items-center bg-gray-100 rounded-full px-3 py-1">
                            <i class="fas fa-fire text-orange-500"></i>
                            <span class="ml-1 font-bold">12</span>
                        </div>
                        <div class="flex items-center bg-gray-100 rounded-full px-3 py-1">
                            <i class="fas fa-heart text-red-500"></i>
                            <span class="ml-1 font-bold">5</span>
                        </div>
                        <div class="flex items-center bg-gray-100 rounded-full px-3 py-1">
                            <i class="fas fa-trophy text-yellow-500"></i>
                            <span class="ml-1 font-bold">340</span>
                        </div>
                    </div>
                </div>
                <div class="mt-3 px-2 space-y-1">
                    <a href="index.html"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-red-500 hover:bg-gray-100">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Sign out
                    </a>
                </div>
            </div>
        </div>
    </div>
@endif