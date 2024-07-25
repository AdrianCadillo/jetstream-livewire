<div>
    {{-- Be like water. --}}
    <h1>Contador</h1>
     <x-button wire:click='reducir'>-</x-button>
     <input type="text" wire:model="numero">
     <x-button wire:click='aumentar'>+</x-button>
    {{$numero}}
</div>
