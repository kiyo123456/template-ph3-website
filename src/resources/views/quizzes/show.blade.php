<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            クイズ詳細
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-4">{{ $quiz->title }}</h1>
                    <p class="mb-4">{{ $quiz->description }}</p>
                    <!-- クイズの詳細情報を表示 -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
