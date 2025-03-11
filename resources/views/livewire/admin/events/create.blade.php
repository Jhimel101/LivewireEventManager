<div>
    <h2 class="text-xl font-bold mb-4">Create Event</h2>

    <form wire:submit.prevent="saveEvent">
        <div class="mb-4">
            <label class="block">Title</label>
            <input type="text" wire:model="title" class="border p-2 w-full">
        </div>

        <div class="mb-4">
            <label class="block">Date</label>
            <input type="date" wire:model="date" class="border p-2 w-full">
        </div>

        <div class="mb-4">
            <label class="block">Venue</label>
            <input type="text" wire:model="venue" class="border p-2 w-full">
        </div>

        <div class="mb-4">
            <label class="block">Price</label>
            <input type="number" wire:model="price" class="border p-2 w-full">
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2">Save Event</button>
    </form>
</div>