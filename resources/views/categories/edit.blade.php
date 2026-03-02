<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Éditer : {{ $category->name }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded p-6">
                <form action="{{ route('categories.update', $category) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nom</label>
                        <input type="text" name="name" value="{{ old('name', $category->name) }}"
                            class="mt-1 block w-full rounded border-gray-300 shadow-sm">
                        @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Couleur</label>
                        <input type="color" name="color" value="{{ old('color', $category->color) }}"
                            class="mt-1 block rounded border-gray-300">
                        @error('color') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex gap-2">
                        <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded">Mettre à jour</button>
                        <a href="{{ route('categories.index') }}" class="text-gray-500 px-4 py-2">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>