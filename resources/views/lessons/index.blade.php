@extends('app')
@section('title', 'Lesson')

@section('content')
    <!-- Language Header -->
    <div class="bg-green-600 text-white py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_the_United_Kingdom_%283-5%29.svg/330px-Flag_of_the_United_Kingdom_%283-5%29.svg.png"
                        alt="Spanish Flag" class="w-12 h-12 rounded-full border-2 border-white">
                    <h1 class="ml-3 text-2xl font-bold">English</h1>
                </div>
                <div class="flex items-center space-x-2">
                    <a href="switch-language.html"
                        class="bg-white text-green-500 px-4 py-2 rounded-lg font-bold hover:bg-gray-100">
                        Switch Language
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Skill Tree -->
    <div class="max-w-3xl mx-auto px-4 py-8">
        <!-- Unit 1 -->
        <div class="mb-12">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-bold">Unit 1: Basics</h2>
                <span class="text-sm text-gray-500">3/5 completed</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Completed Lesson -->
                <a href="sub-lessons.html"
                    class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center hover:shadow-lg transition border-2 border-green-500">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-check text-white text-xl"></i>
                    </div>
                    <span class="font-bold">Greetings</span>
                    <span class="text-sm text-gray-500">Completed</span>
                </a>

                <!-- Completed Lesson -->
                <a href="sub-lessons.html"
                    class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center hover:shadow-lg transition border-2 border-green-500">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-check text-white text-xl"></i>
                    </div>
                    <span class="font-bold">Introductions</span>
                    <span class="text-sm text-gray-500">Completed</span>
                </a>

                <!-- Current Lesson -->
                <a href="sub-lessons.html"
                    class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center hover:shadow-lg transition border-2 border-yellow-400">
                    <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-star text-white text-xl"></i>
                    </div>
                    <span class="font-bold">Food & Drinks</span>
                    <span class="text-sm text-gray-500">In Progress</span>
                </a>

                <!-- Locked Lesson -->
                <a href="#"
                    class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center hover:shadow-lg transition opacity-70">
                    <div class="w-16 h-16 bg-gray-300 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-lock text-gray-500 text-xl"></i>
                    </div>
                    <span class="font-bold">Numbers</span>
                    <span class="text-sm text-gray-500">Locked</span>
                </a>

                <!-- Locked Lesson -->
                <a href="#"
                    class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center hover:shadow-lg transition opacity-70">
                    <div class="w-16 h-16 bg-gray-300 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-lock text-gray-500 text-xl"></i>
                    </div>
                    <span class="font-bold">Colors</span>
                    <span class="text-sm text-gray-500">Locked</span>
                </a>
            </div>
        </div>

        <!-- Unit 2 -->
        <div class="mb-12">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-bold">Unit 2: Phrases</h2>
                <span class="text-sm text-gray-500">0/5 completed</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Locked Lesson -->
                <a href="#"
                    class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center hover:shadow-lg transition opacity-70">
                    <div class="w-16 h-16 bg-gray-300 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-lock text-gray-500 text-xl"></i>
                    </div>
                    <span class="font-bold">Common Phrases</span>
                    <span class="text-sm text-gray-500">Locked</span>
                </a>

                <!-- Locked Lesson -->
                <a href="#"
                    class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center hover:shadow-lg transition opacity-70">
                    <div class="w-16 h-16 bg-gray-300 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-lock text-gray-500 text-xl"></i>
                    </div>
                    <span class="font-bold">Questions</span>
                    <span class="text-sm text-gray-500">Locked</span>
                </a>

                <!-- Locked Lesson -->
                <a href="#"
                    class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center hover:shadow-lg transition opacity-70">
                    <div class="w-16 h-16 bg-gray-300 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-lock text-gray-500 text-xl"></i>
                    </div>
                    <span class="font-bold">Travel</span>
                    <span class="text-sm text-gray-500">Locked</span>
                </a>

                <!-- Locked Lesson -->
                <a href="#"
                    class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center hover:shadow-lg transition opacity-70">
                    <div class="w-16 h-16 bg-gray-300 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-lock text-gray-500 text-xl"></i>
                    </div>
                    <span class="font-bold">Shopping</span>
                    <span class="text-sm text-gray-500">Locked</span>
                </a>

                <!-- Locked Lesson -->
                <a href="#"
                    class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center hover:shadow-lg transition opacity-70">
                    <div class="w-16 h-16 bg-gray-300 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-lock text-gray-500 text-xl"></i>
                    </div>
                    <span class="font-bold">Dining</span>
                    <span class="text-sm text-gray-500">Locked</span>
                </a>
            </div>
        </div>

        <!-- Unit 3 -->
        <div>
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-bold">Unit 3: Grammar</h2>
                <span class="text-sm text-gray-500">0/5 completed</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Locked Lesson -->
                <a href="#"
                    class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center hover:shadow-lg transition opacity-70">
                    <div class="w-16 h-16 bg-gray-300 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-lock text-gray-500 text-xl"></i>
                    </div>
                    <span class="font-bold">Present Tense</span>
                    <span class="text-sm text-gray-500">Locked</span>
                </a>

                <!-- Locked Lesson -->
                <a href="#"
                    class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center hover:shadow-lg transition opacity-70">
                    <div class="w-16 h-16 bg-gray-300 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-lock text-gray-500 text-xl"></i>
                    </div>
                    <span class="font-bold">Past Tense</span>
                    <span class="text-sm text-gray-500">Locked</span>
                </a>

                <!-- Locked Lesson -->
                <a href="#"
                    class="bg-white rounded-xl shadow-md p-4 flex flex-col items-center hover:shadow-lg transition opacity-70">
                    <div class="w-16 h-16 bg-gray-300 rounded-full flex items-center justify-center mb-3">
                        <i class="fas fa-lock text-gray-500 text-xl"></i>
                    </div>
                    <span class="font-bold">Future Tense</span>
                    <span class="text-sm text-gray-500">Locked</span>
                </a>
            </div>
        </div>
    </div>
@endsection
