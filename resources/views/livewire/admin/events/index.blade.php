<div>
    <h2 class="text-xl font-bold mb-4">Event Management</h2>

    <a href="{{ route('admin.events.create') }}" class="bg-blue-500 text-white px-4 py-2">Create Event</a>

    <table class="w-full mt-4 border">
        <thead>
            <tr class="border-b">
                <th class="p-2">Title</th>
                <th class="p-2">Date</th>
                <th class="p-2">Price</th>
                <th class="p-2">Venue</th>
                <th class="p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr class="border-b">
                <td class="p-2">{{ $event->title }}</td>
                <td class="p-2">{{ $event->date }}</td>
                <td class="p-2">${{ $event->price }}</td>
                <td class="p-2">{{ $event->venue }}</td>
                <td class="p-2">
                    <a href="{{ route('admin.events.edit', $event->id) }}" class="text-blue-500">Edit</a>
                    <button wire:click="deleteEvent({{ $event->id }})" class="text-red-500">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>