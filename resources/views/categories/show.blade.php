<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">{{ $category->name }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded p-6">
                <div class="flex items-center gap-3 mb-4">
                    <span class="w-6 h-6 rounded-full inline-block" style="background-color: {{ $category->color }}"></span>
                    <span class="text-lg font-medium">{{ $category->name }}</span>
                </div>

                <p class="text-gray-500">{{ $category->tasks->count() }} tâche(s) dans cette catégorie.</p>

                <div class="flex gap-2 mt-4">
                    <a href="{{ route('categories.edit', $category) }}" class="bg-indigo-500 text-white px-4 py-2 rounded">Éditer</a>
                    <a href="{{ route('categories.index') }}" class="text-gray-500 px-4 py-2">Retour</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>