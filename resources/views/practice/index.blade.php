@extends('app')
@section('title', 'Lesson')

@section('content')
    <!-- Practice Header -->
    <div class="bg-orange-500 text-white py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold">Practice</h1>
                    <p class="text-orange-100">Strengthen your skills and maintain your streak</p>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="bg-white text-orange-500 px-4 py-2 rounded-lg font-bold">
                        <i class="fas fa-fire mr-2"></i>
                        <span>12 Day Streak</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Practice Content -->
    <div class="max-w-5xl mx-auto px-4 py-8">
        <!-- Practice Types -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <!-- Daily Practice -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="bg-orange-100 p-4 flex items-center">
                    <div class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-fire text-white text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-lg font-bold">Daily Practice</h2>
                        <p class="text-sm text-gray-600">Maintain your streak</p>
                    </div>
                </div>
                <div class="p-6">
                    <p class="mb-4">Complete a quick practice session to maintain your streak and review what you've
                        learned.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">5-10 minutes</span>
                        <a href="quiz.html"
                            class="bg-orange-500 text-white px-4 py-2 rounded-lg font-bold hover:bg-orange-600">
                            Start Practice
                        </a>
                    </div>
                </div>
            </div>

            <!-- Weak Skills -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="bg-blue-100 p-4 flex items-center">
                    <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-dumbbell text-white text-xl"></i>
                    </div>
                    <div>
                        <h2 class="text-lg font-bold">Weak Skills</h2>
                        <p class="text-sm text-gray-600">Strengthen areas you need help with</p>
                    </div>
                </div>
                <div class="p-6">
                    <p class="mb-4">Focus on the skills where you've made the most mistakes to improve your overall
                        proficiency.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">10-15 minutes</span>
                        <a href="index.html"
                            class="bg-blue-500 text-white px-4 py-2 rounded-lg font-bold hover:bg-blue-600">
                            Practice Weak Skills
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Practice Categories -->
        <h2 class="text-xl font-bold mb-4">Practice by Category</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
            <!-- Vocabulary -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-book text-purple-500"></i>
                    </div>
                    <h3 class="text-lg font-bold">Vocabulary</h3>
                </div>
                <p class="text-gray-600 mb-4">Practice words and phrases you've learned.</p>
                <div class="flex justify-between items-center">
                    <span class="text-xs bg-purple-100 text-purple-600 px-2 py-1 rounded-full">120 words</span>
                    <a href="index.html" class="text-purple-500 hover:text-purple-600 font-bold">
                        Practice <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Grammar -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-pencil-alt text-green-500"></i>
                    </div>
                    <h3 class="text-lg font-bold">Grammar</h3>
                </div>
                <p class="text-gray-600 mb-4">Review grammar rules and sentence structures.</p>
                <div class="flex justify-between items-center">
                    <span class="text-xs bg-green-100 text-green-600 px-2 py-1 rounded-full">8 rules</span>
                    <a href="index.html" class="text-green-500 hover:text-green-600 font-bold">
                        Practice <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Listening -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-headphones text-yellow-500"></i>
                    </div>
                    <h3 class="text-lg font-bold">Listening</h3>
                </div>
                <p class="text-gray-600 mb-4">Improve your listening comprehension skills.</p>
                <div class="flex justify-between items-center">
                    <span class="text-xs bg-yellow-100 text-yellow-600 px-2 py-1 rounded-full">15 exercises</span>
                    <a href="index.html" class="text-yellow-500 hover:text-yellow-600 font-bold">
                        Practice <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Speaking -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-microphone text-red-500"></i>
                    </div>
                    <h3 class="text-lg font-bold">Speaking</h3>
                </div>
                <p class="text-gray-600 mb-4">Practice pronunciation and speaking skills.</p>
                <div class="flex justify-between items-center">
                    <span class="text-xs bg-red-100 text-red-600 px-2 py-1 rounded-full">10 exercises</span>
                    <a href="index.html" class="text-red-500 hover:text-red-600 font-bold">
                        Practice <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Reading -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-glasses text-blue-500"></i>
                    </div>
                    <h3 class="text-lg font-bold">Reading</h3>
                </div>
                <p class="text-gray-600 mb-4">Improve your reading comprehension with short texts.</p>
                <div class="flex justify-between items-center">
                    <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded-full">12 texts</span>
                    <a href="index.html" class="text-blue-500 hover:text-blue-600 font-bold">
                        Practice <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Writing -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center mr-3">
                        <i class="fas fa-pen text-indigo-500"></i>
                    </div>
                    <h3 class="text-lg font-bold">Writing</h3>
                </div>
                <p class="text-gray-600 mb-4">Practice writing sentences and short paragraphs.</p>
                <div class="flex justify-between items-center">
                    <span class="text-xs bg-indigo-100 text-indigo-600 px-2 py-1 rounded-full">8 exercises</span>
                    <a href="index.html" class="text-indigo-500 hover:text-indigo-600 font-bold">
                        Practice <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Practice Stats -->
        <div class="bg-white rounded-xl shadow-md p-6">
            <h2 class="text-xl font-bold mb-4">Your Practice Stats</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <h3 class="text-sm font-medium text-gray-500 mb-2">Practice Sessions</h3>
                    <div class="flex items-end">
                        <span class="text-3xl font-bold mr-2">42</span>
                        <span class="text-sm text-green-500 mb-1">+3 this week</span>
                    </div>
                </div>

                <div>
                    <h3 class="text-sm font-medium text-gray-500 mb-2">Total Practice Time</h3>
                    <div class="flex items-end">
                        <span class="text-3xl font-bold mr-2">8.5h</span>
                        <span class="text-sm text-green-500 mb-1">+45m this week</span>
                    </div>
                </div>

                <div>
                    <h3 class="text-sm font-medium text-gray-500 mb-2">Accuracy Rate</h3>
                    <div class="flex items-end">
                        <span class="text-3xl font-bold mr-2">87%</span>
                        <span class="text-sm text-green-500 mb-1">+2% this week</span>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <h3 class="text-sm font-medium text-gray-500 mb-2">Weekly Practice Activity</h3>
                <div class="grid grid-cols-7 gap-2">
                    <div class="flex flex-col items-center">
                        <div class="w-full bg-orange-100 rounded-md h-24 relative">
                            <div class="absolute bottom-0 w-full bg-orange-500 rounded-b-md" style="height: 30%"></div>
                        </div>
                        <span class="text-xs mt-1">Mon</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="w-full bg-orange-100 rounded-md h-24 relative">
                            <div class="absolute bottom-0 w-full bg-orange-500 rounded-b-md" style="height: 60%"></div>
                        </div>
                        <span class="text-xs mt-1">Tue</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="w-full bg-orange-100 rounded-md h-24 relative">
                            <div class="absolute bottom-0 w-full bg-orange-500 rounded-b-md" style="height: 45%"></div>
                        </div>
                        <span class="text-xs mt-1">Wed</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="w-full bg-orange-100 rounded-md h-24 relative">
                            <div class="absolute bottom-0 w-full bg-orange-500 rounded-b-md" style="height: 75%"></div>
                        </div>
                        <span class="text-xs mt-1">Thu</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="w-full bg-orange-100 rounded-md h-24 relative">
                            <div class="absolute bottom-0 w-full bg-orange-500 rounded-b-md" style="height: 20%"></div>
                        </div>
                        <span class="text-xs mt-1">Fri</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="w-full bg-orange-100 rounded-md h-24 relative">
                            <div class="absolute bottom-0 w-full bg-orange-500 rounded-b-md" style="height: 50%"></div>
                        </div>
                        <span class="text-xs mt-1">Sat</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="w-full bg-orange-100 rounded-md h-24 relative">
                            <div class="absolute bottom-0 w-full bg-orange-500 rounded-b-md" style="height: 10%"></div>
                        </div>
                        <span class="text-xs mt-1">Sun</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
