<div>
     
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
     <x-input wire:model='numero1' class="w-full mb-1" placeholder="Numero 1..." id="numero1"></x-input>
     <x-input-error for="numero1"></x-input-error>

     <x-input wire:model='numero2' class="w-full mb-1" placeholder="Numero 2..."></x-input>
     <x-input-error for="numero2"></x-input-error>

     <x-button wire:click="sumar">Calcular  </x-button>

     <h4></h4>
</div>

@script
<script type="module">
 
    $wire.on('suma',function(mensaje){
      alert(mensaje);
      $('#numero1').focus()
    });

    
</script>
@endscript
