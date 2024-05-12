<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            @forelse($notes as $note) 
                <div class="text-white bg-gray-700 p-4 mb-4 rounded-lg">
                    <h3 class="text-xl font-semibold">{{ $note->title }}</h3>
                    <p class="text-lg">{{ $note->text }}</p>
                    <span class="block mt-4"> {{ $note->updated_at->diffForHumans() }}</span>
                </div>
            @empty
            <p class="text-lg font-semibold mt-4 mb-4 text-center text-white">You do not have any records yet</p>
            @endforelse
        </div>
    </div>
</div>

</x-app-layout>
