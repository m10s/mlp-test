<div>
    <form method="POST" wire:submit.prevent="submit">
        <livewire:media-library wire:model="images" multiple />
        <button type="submit">Submit</button>
    </form>
</div>