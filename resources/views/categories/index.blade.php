<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Catégories</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('categories.create') }}" class="mb-4 inline-block bg-indigo-500 text-white px-4 py-2 rounded">
                Nouvelle catégorie
            </a>

            <div class="bg-white shadow rounded p-6">
                @forelse($categories as $category)
                    <div class="flex items-center justify-between py-2 border-b">
                        <div class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded-full inline-block" style="background-color: {{ $category->color }}"></span>
                            {{ $category->name }}
                        </div>
                        <div class="flex gap-2">
                            <a href="{{ route('categories.edit', $category) }}" class="text-indigo-500">Éditer</a>
                            <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Supprimer</button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500">Aucune catégorie pour l'instant.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>