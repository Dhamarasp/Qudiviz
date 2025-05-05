@extends('app')
@section('title', 'Community')

@section('content')
    <!-- Community Header -->
    <div class="bg-teal-500 text-white py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold">Community</h1>
                    <p class="text-teal-100">Connect with language learners worldwide</p>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="bg-white text-teal-500 px-4 py-2 rounded-lg font-bold hover:bg-gray-100">
                        <i class="fas fa-plus mr-2"></i>
                        <span class="hidden sm:inline">New Post</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Community Tabs -->
    <div class="bg-white border-b">
        <div class="max-w-5xl mx-auto px-4">
            <div class="flex overflow-x-auto scrollbar-hide">
                <button class="px-4 py-4 font-medium text-teal-500 border-b-2 border-teal-500 whitespace-nowrap">
                    Discussions
                </button>
                <button class="px-4 py-4 font-medium text-gray-500 hover:text-gray-700 whitespace-nowrap">
                    Questions
                </button>
                <button class="px-4 py-4 font-medium text-gray-500 hover:text-gray-700 whitespace-nowrap">
                    Study Groups
                </button>
                <button class="px-4 py-4 font-medium text-gray-500 hover:text-gray-700 whitespace-nowrap">
                    Language Exchange
                </button>
                <button class="px-4 py-4 font-medium text-gray-500 hover:text-gray-700 whitespace-nowrap">
                    Events
                </button>
            </div>
        </div>
    </div>

    <!-- Search and Filter -->
    <div class="max-w-5xl mx-auto px-4 py-6">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="relative flex-grow">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-search text-gray-400"></i>
                </div>
                <input type="text" placeholder="Search discussions..."
                    class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
            </div>
            <div class="flex-shrink-0">
                <select
                    class="block w-full px-3 py-3 border border-gray-300 rounded-lg bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent">
                    <option selected>All Languages</option>
                    <option>English</option>
                    <option>Spanish</option>
                    <option>French</option>
                    <option>German</option>
                    <option>Japanese</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Community Content -->
    <div class="max-w-5xl mx-auto px-4 py-8">
        <!-- Featured Discussion -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-6">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <div class="h-10 w-10 rounded-full bg-blue-500 flex items-center justify-center">
                        <span class="text-white font-bold">J</span>
                    </div>
                </div>
                <div class="ml-4 flex-grow">
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="font-bold">John Doe</span>
                            <span class="text-gray-500 text-sm ml-2">@johndoe</span>
                            <span
                                class="bg-teal-100 text-teal-800 text-xs font-medium px-2.5 py-0.5 rounded ml-2">English</span>
                        </div>
                        <span class="text-sm text-gray-500">2 hours ago</span>
                    </div>

                    <h3 class="font-bold text-lg mt-2">Tips for improving listening comprehension?</h3>
                    <p class="text-gray-700 mt-1">I've been learning English for about 6 months now, and while my reading
                        and
                        writing are improving, I still struggle with understanding native speakers. Any tips or resources
                        that have
                        worked for you?</p>

                    <div class="flex flex-wrap gap-2 mt-3">
                        <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-1 rounded">listening</span>
                        <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-1 rounded">comprehension</span>
                        <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-1 rounded">beginner</span>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center space-x-4">
                            <button class="flex items-center text-gray-500 hover:text-teal-500">
                                <i class="far fa-comment mr-1"></i>
                                <span>24 replies</span>
                            </button>
                            <button class="flex items-center text-gray-500 hover:text-red-500">
                                <i class="far fa-heart mr-1"></i>
                                <span>45</span>
                            </button>
                        </div>
                        <button class="text-gray-500 hover:text-teal-500">
                            <i class="fas fa-share-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Discussion List -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-4 bg-gray-50 border-b flex justify-between items-center">
                <h2 class="font-bold">Recent Discussions</h2>
                <div class="flex items-center">
                    <span class="text-sm text-gray-500 mr-2">Sort by:</span>
                    <select class="text-sm border-none bg-transparent focus:outline-none focus:ring-0">
                        <option>Recent</option>
                        <option>Popular</option>
                        <option>Most Replies</option>
                    </select>
                </div>
            </div>

            <ul class="divide-y divide-gray-200">
                <!-- Discussion 1 -->
                <li class="p-4 hover:bg-gray-50">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="h-10 w-10 rounded-full bg-pink-500 flex items-center justify-center">
                                <span class="text-white font-bold">S</span>
                            </div>
                        </div>
                        <div class="ml-4 flex-grow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="font-bold">Sarah Smith</span>
                                    <span class="text-gray-500 text-sm ml-2">@sarahsmith</span>
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded ml-2">French</span>
                                </div>
                                <span class="text-sm text-gray-500">5 hours ago</span>
                            </div>

                            <h3 class="font-bold mt-2">French pronunciation resources?</h3>
                            <p class="text-gray-700 mt-1 line-clamp-2">I'm having trouble with French pronunciation,
                                especially the
                                'r' sound. Does anyone have good resources or exercises?</p>

                            <div class="flex items-center justify-between mt-3">
                                <div class="flex items-center space-x-4">
                                    <span class="flex items-center text-gray-500">
                                        <i class="far fa-comment mr-1"></i>
                                        <span>12</span>
                                    </span>
                                    <span class="flex items-center text-gray-500">
                                        <i class="far fa-heart mr-1"></i>
                                        <span>18</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Discussion 2 -->
                <li class="p-4 hover:bg-gray-50">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="h-10 w-10 rounded-full bg-green-500 flex items-center justify-center">
                                <span class="text-white font-bold">M</span>
                            </div>
                        </div>
                        <div class="ml-4 flex-grow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="font-bold">Mike Johnson</span>
                                    <span class="text-gray-500 text-sm ml-2">@mikej</span>
                                    <span
                                        class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded ml-2">Japanese</span>
                                </div>
                                <span class="text-sm text-gray-500">Yesterday</span>
                            </div>

                            <h3 class="font-bold mt-2">Best apps for learning Kanji?</h3>
                            <p class="text-gray-700 mt-1 line-clamp-2">I'm looking for recommendations on apps that are good
                                for
                                learning and practicing Kanji. I've tried a few but would love to hear what's working for
                                others.</p>

                            <div class="flex items-center justify-between mt-3">
                                <div class="flex items-center space-x-4">
                                    <span class="flex items-center text-gray-500">
                                        <i class="far fa-comment mr-1"></i>
                                        <span>32</span>
                                    </span>
                                    <span class="flex items-center text-gray-500">
                                        <i class="far fa-heart mr-1"></i>
                                        <span>56</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Discussion 3 -->
                <li class="p-4 hover:bg-gray-50">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="h-10 w-10 rounded-full bg-purple-500 flex items-center justify-center">
                                <span class="text-white font-bold">E</span>
                            </div>
                        </div>
                        <div class="ml-4 flex-grow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="font-bold">Emma Davis</span>
                                    <span class="text-gray-500 text-sm ml-2">@emmad</span>
                                    <span
                                        class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded ml-2">Spanish</span>
                                </div>
                                <span class="text-sm text-gray-500">2 days ago</span>
                            </div>

                            <h3 class="font-bold mt-2">Spanish language exchange partners?</h3>
                            <p class="text-gray-700 mt-1 line-clamp-2">I'm looking for a language exchange partner to
                                practice Spanish
                                with. I'm at an intermediate level (B1) and can help with English in return.</p>

                            <div class="flex items-center justify-between mt-3">
                                <div class="flex items-center space-x-4">
                                    <span class="flex items-center text-gray-500">
                                        <i class="far fa-comment mr-1"></i>
                                        <span>15</span>
                                    </span>
                                    <span class="flex items-center text-gray-500">
                                        <i class="far fa-heart mr-1"></i>
                                        <span>23</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Discussion 4 -->
                <li class="p-4 hover:bg-gray-50">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="h-10 w-10 rounded-full bg-yellow-500 flex items-center justify-center">
                                <span class="text-white font-bold">T</span>
                            </div>
                        </div>
                        <div class="ml-4 flex-grow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="font-bold">Tom Wilson</span>
                                    <span class="text-gray-500 text-sm ml-2">@tomw</span>
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded ml-2">German</span>
                                </div>
                                <span class="text-sm text-gray-500">3 days ago</span>
                            </div>

                            <h3 class="font-bold mt-2">German grammar resources for beginners</h3>
                            <p class="text-gray-700 mt-1 line-clamp-2">I'm just starting to learn German and finding the
                                grammar quite
                                challenging. Any recommendations for beginner-friendly resources?</p>

                            <div class="flex items-center justify-between mt-3">
                                <div class="flex items-center space-x-4">
                                    <span class="flex items-center text-gray-500">
                                        <i class="far fa-comment mr-1"></i>
                                        <span>28</span>
                                    </span>
                                    <span class="flex items-center text-gray-500">
                                        <i class="far fa-heart mr-1"></i>
                                        <span>34</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="p-4 border-t text-center">
                <button class="text-teal-500 hover:text-teal-600 font-medium">
                    Load More Discussions
                </button>
            </div>
        </div>

        <!-- Community Stats -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white rounded-xl shadow-md p-5">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-teal-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-users text-teal-500 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold">24,521</h3>
                        <p class="text-gray-500">Community Members</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md p-5">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-teal-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-comments text-teal-500 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold">1,248</h3>
                        <p class="text-gray-500">Active Discussions</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md p-5">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-teal-100 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-language text-teal-500 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold">12</h3>
                        <p class="text-gray-500">Languages Supported</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Post Button (Mobile) -->
    <div class="fixed bottom-20 right-4 md:hidden z-10">
        <button
            class="bg-teal-500 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg hover:bg-teal-600">
            <i class="fas fa-plus text-xl"></i>
        </button>
    </div>
@endsection
