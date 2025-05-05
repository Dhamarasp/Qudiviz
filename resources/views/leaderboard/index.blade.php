@extends('app')
@section('title', 'Leaderboard')

@section('content')
    <!-- Leaderboard Header -->
    <div class="bg-green-500 text-white py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold">Leaderboard</h1>
                    <p class="text-green-100">Compete with friends and learners worldwide</p>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="bg-white text-green-500 px-4 py-2 rounded-lg font-bold hover:bg-gray-100">
                        Weekly
                    </button>
                    <button
                        class="bg-transparent border border-white text-white px-4 py-2 rounded-lg font-bold hover:bg-green-600">
                        All Time
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Leaderboard Content -->
    <div class="max-w-3xl mx-auto px-4 py-8">
        <!-- Your Position -->
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-md mb-6">
            <div class="flex items-center">
                <span class="text-xl font-bold w-10 text-center">8</span>
                <div class="h-12 w-12 rounded-full bg-purple-500 flex items-center justify-center mx-4">
                    <span class="text-white font-bold">U</span>
                </div>
                <div class="flex-grow">
                    <p class="font-bold">You</p>
                    <div class="flex items-center">
                        <i class="fas fa-fire text-orange-500 mr-1"></i>
                        <span class="text-sm text-gray-600">12 day streak</span>
                    </div>
                </div>
                <div class="text-right">
                    <p class="font-bold text-green-500">340 XP</p>
                    <p class="text-sm text-gray-500">This week</p>
                </div>
            </div>
        </div>

        <!-- Leaderboard List -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-4 bg-gray-50 border-b">
                <h2 class="font-bold">Weekly Leaderboard</h2>
                <p class="text-sm text-gray-500">Resets in 3 days</p>
            </div>

            <ul class="divide-y divide-gray-200">
                <!-- Top 3 with medals -->
                <li class="p-4 hover:bg-gray-50">
                    <div class="flex items-center">
                        <span class="text-xl font-bold w-10 text-center">
                            <i class="fas fa-medal text-yellow-500"></i>
                        </span>
                        <div class="h-12 w-12 rounded-full bg-red-500 flex items-center justify-center mx-4">
                            <span class="text-white font-bold">A</span>
                        </div>
                        <div class="flex-grow">
                            <p class="font-bold">Alex Johnson</p>
                            <div class="flex items-center">
                                <i class="fas fa-fire text-orange-500 mr-1"></i>
                                <span class="text-sm text-gray-600">45 day streak</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-green-500">1,240 XP</p>
                            <p class="text-sm text-gray-500">+120 today</p>
                        </div>
                    </div>
                </li>

                <li class="p-4 hover:bg-gray-50">
                    <div class="flex items-center">
                        <span class="text-xl font-bold w-10 text-center">
                            <i class="fas fa-medal text-gray-400"></i>
                        </span>
                        <div class="h-12 w-12 rounded-full bg-blue-500 flex items-center justify-center mx-4">
                            <span class="text-white font-bold">S</span>
                        </div>
                        <div class="flex-grow">
                            <p class="font-bold">Sarah Miller</p>
                            <div class="flex items-center">
                                <i class="fas fa-fire text-orange-500 mr-1"></i>
                                <span class="text-sm text-gray-600">30 day streak</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-green-500">980 XP</p>
                            <p class="text-sm text-gray-500">+80 today</p>
                        </div>
                    </div>
                </li>

                <li class="p-4 hover:bg-gray-50">
                    <div class="flex items-center">
                        <span class="text-xl font-bold w-10 text-center">
                            <i class="fas fa-medal text-yellow-700"></i>
                        </span>
                        <div class="h-12 w-12 rounded-full bg-green-500 flex items-center justify-center mx-4">
                            <span class="text-white font-bold">J</span>
                        </div>
                        <div class="flex-grow">
                            <p class="font-bold">James Wilson</p>
                            <div class="flex items-center">
                                <i class="fas fa-fire text-orange-500 mr-1"></i>
                                <span class="text-sm text-gray-600">22 day streak</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-green-500">820 XP</p>
                            <p class="text-sm text-gray-500">+65 today</p>
                        </div>
                    </div>
                </li>

                <!-- Regular positions -->
                <li class="p-4 hover:bg-gray-50">
                    <div class="flex items-center">
                        <span class="text-xl font-bold w-10 text-center">4</span>
                        <div class="h-12 w-12 rounded-full bg-pink-500 flex items-center justify-center mx-4">
                            <span class="text-white font-bold">E</span>
                        </div>
                        <div class="flex-grow">
                            <p class="font-bold">Emma Davis</p>
                            <div class="flex items-center">
                                <i class="fas fa-fire text-orange-500 mr-1"></i>
                                <span class="text-sm text-gray-600">18 day streak</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-green-500">720 XP</p>
                            <p class="text-sm text-gray-500">+40 today</p>
                        </div>
                    </div>
                </li>

                <li class="p-4 hover:bg-gray-50">
                    <div class="flex items-center">
                        <span class="text-xl font-bold w-10 text-center">5</span>
                        <div class="h-12 w-12 rounded-full bg-yellow-500 flex items-center justify-center mx-4">
                            <span class="text-white font-bold">M</span>
                        </div>
                        <div class="flex-grow">
                            <p class="font-bold">Michael Brown</p>
                            <div class="flex items-center">
                                <i class="fas fa-fire text-orange-500 mr-1"></i>
                                <span class="text-sm text-gray-600">15 day streak</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-green-500">650 XP</p>
                            <p class="text-sm text-gray-500">+30 today</p>
                        </div>
                    </div>
                </li>

                <li class="p-4 hover:bg-gray-50">
                    <div class="flex items-center">
                        <span class="text-xl font-bold w-10 text-center">6</span>
                        <div class="h-12 w-12 rounded-full bg-indigo-500 flex items-center justify-center mx-4">
                            <span class="text-white font-bold">O</span>
                        </div>
                        <div class="flex-grow">
                            <p class="font-bold">Olivia Taylor</p>
                            <div class="flex items-center">
                                <i class="fas fa-fire text-orange-500 mr-1"></i>
                                <span class="text-sm text-gray-600">10 day streak</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-green-500">520 XP</p>
                            <p class="text-sm text-gray-500">+20 today</p>
                        </div>
                    </div>
                </li>

                <li class="p-4 hover:bg-gray-50">
                    <div class="flex items-center">
                        <span class="text-xl font-bold w-10 text-center">7</span>
                        <div class="h-12 w-12 rounded-full bg-teal-500 flex items-center justify-center mx-4">
                            <span class="text-white font-bold">D</span>
                        </div>
                        <div class="flex-grow">
                            <p class="font-bold">Daniel Martinez</p>
                            <div class="flex items-center">
                                <i class="fas fa-fire text-orange-500 mr-1"></i>
                                <span class="text-sm text-gray-600">8 day streak</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-green-500">480 XP</p>
                            <p class="text-sm text-gray-500">+15 today</p>
                        </div>
                    </div>
                </li>

                <!-- Your position (highlighted) -->
                <li class="p-4 bg-yellow-50">
                    <div class="flex items-center">
                        <span class="text-xl font-bold w-10 text-center">8</span>
                        <div class="h-12 w-12 rounded-full bg-purple-500 flex items-center justify-center mx-4">
                            <span class="text-white font-bold">U</span>
                        </div>
                        <div class="flex-grow">
                            <p class="font-bold">You</p>
                            <div class="flex items-center">
                                <i class="fas fa-fire text-orange-500 mr-1"></i>
                                <span class="text-sm text-gray-600">12 day streak</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-green-500">340 XP</p>
                            <p class="text-sm text-gray-500">+20 today</p>
                        </div>
                    </div>
                </li>

                <li class="p-4 hover:bg-gray-50">
                    <div class="flex items-center">
                        <span class="text-xl font-bold w-10 text-center">9</span>
                        <div class="h-12 w-12 rounded-full bg-orange-500 flex items-center justify-center mx-4">
                            <span class="text-white font-bold">S</span>
                        </div>
                        <div class="flex-grow">
                            <p class="font-bold">Sophia Garcia</p>
                            <div class="flex items-center">
                                <i class="fas fa-fire text-orange-500 mr-1"></i>
                                <span class="text-sm text-gray-600">5 day streak</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-green-500">320 XP</p>
                            <p class="text-sm text-gray-500">+10 today</p>
                        </div>
                    </div>
                </li>

                <li class="p-4 hover:bg-gray-50">
                    <div class="flex items-center">
                        <span class="text-xl font-bold w-10 text-center">10</span>
                        <div class="h-12 w-12 rounded-full bg-gray-500 flex items-center justify-center mx-4">
                            <span class="text-white font-bold">W</span>
                        </div>
                        <div class="flex-grow">
                            <p class="font-bold">William Lee</p>
                            <div class="flex items-center">
                                <i class="fas fa-fire text-orange-500 mr-1"></i>
                                <span class="text-sm text-gray-600">3 day streak</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-green-500">280 XP</p>
                            <p class="text-sm text-gray-500">+5 today</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Invite Friends -->
        <div class="mt-8 bg-white rounded-xl shadow-md p-6 text-center">
            <h3 class="text-lg font-bold mb-2">Invite Friends to Compete</h3>
            <p class="text-gray-600 mb-4">Challenge your friends and learn together!</p>
            <button class="bg-green-500 text-white px-6 py-2 rounded-lg font-bold hover:bg-green-600">
                <i class="fas fa-user-plus mr-2"></i> Invite Friends
            </button>
        </div>
    </div>
@endsection
