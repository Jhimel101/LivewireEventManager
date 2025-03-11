<div>
    <h2 class="text-xl font-bold mb-4">Manage Events</h2>

    <!-- Success Message -->
    @if(session()->has('message'))
    <div class="p-3 bg-green-500 text-white rounded mb-4">
        {{ session('message') }}
    </div>
    @endif

    <!-- Event Form -->
    <div class="p-4 bg-white dark:bg-gray-800 shadow rounded-lg mb-4">
        <form wire:submit.prevent="{{ $isEditing ? 'updateEvent' : 'createEvent' }}">
            <div class="mb-2">
                <label class="block text-gray-600">Event Title</label>
                <input type="text" wire:model="title" class="w-full border rounded p-2">
                @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-2">
                <label class="block text-gray-600">Event Date</label>
                <input type="date" wire:model="date" class="w-full border rounded p-2">
                @error('date') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-2">
                <label class="block text-gray-600">Price</label>
                <input type="number" wire:model="price" class="w-full border rounded p-2">
                @error('price') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-2">
                <label class="block text-gray-600">Venue</label>
                <input type="text" wire:model="venue" class="w-full border rounded p-2">
                @error('venue') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                {{ $isEditing ? 'Update Event' : 'Create Event' }}
            </button>
            @if($isEditing)
            <button type="button" wire:click="resetFields" class="bg-gray-500 text-white px-4 py-2 rounded ml-2">Cancel</button>
            @endif
        </form>
    </div>

    <!-- Event List -->
    <div class="bg-white dark:bg-gray-800 shadow rounded-lg">
        <table class="w-full">
            <thead class="bg-gray-200 dark:bg-gray-700">
                <tr>
                    <th class="p-2 text-left">Title</th>
                    <th class="p-2 text-left">Date</th>
                    <th class="p-2 text-left">Price</th>
                    <th class="p-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr class="border-b">
                    <td class="p-2">{{ $event->title }}</td>
                    <td class="p-2">{{ $event->date }}</td>
                    <td class="p-2">${{ $event->price }}</td>
                    <td class="p-2">
                        <button wire:click="editEvent({{ $event->id }})" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</button>
                        <button wire:click="deleteEvent({{ $event->id }})" class="bg-red-500 text-white px-2 py-1 rounded ml-2">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $events->links() }}
        </div>
    </div>
</div>