<div class="p-4 w-full">
    <div class="bg-white w-1/4 border border-blue-500 rounded-lg p-4">
      <h3>CRUD</h3>
      <x-input class="mt-3" placeholder="Escriba un curso....." wire:model='curso'></x-input>
      <x-button wire:click='addCurso'>{{$textButton}}</x-button>
      <x-input-error for="curso" ></x-input-error>
       <ul class="list-disc list-inside">
          @forelse ($listaCursos as $indice=>$cursodata)
              <li>{{$cursodata}}
                <x-button class="bg-yellow-400 hover:bg-yellow-400 m-2"  wire:click="editar('{{$indice}}','{{$cursodata}}')">editar</x-button>
                <x-danger-button class="m-2" wire:click="confirmarEliminado('{{$indice}}','{{$cursodata}}')">eliminar</x-danger-button>
              </li>
          @empty
              
          @endforelse
       </ul>
    </div>
</div>

@script
<script>
    $wire.on('existe',(mensaje)=>{
          alert(mensaje)
    });

    $wire.on("ok-eliminado",function(){
        alert("Curso eliminado correctamente!")
    });

    $wire.on('confirmar',function(mensaje){
        let confirmar = confirm(mensaje);

        if(confirmar){
           $wire.dispatch("delete"); 
        }
    });
</script>
@endscript
 