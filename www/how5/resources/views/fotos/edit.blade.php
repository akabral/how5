
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Atualizar Foto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   


                <div class="container h-100 mt-5">
                  <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-10 col-md-8 col-lg-6">
                      <form action="{{ route('fotos.update', $foto->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="descricao" :value="__('Descricao')" />
                            <x-text-area id="descricao" name="descricao"  type="textarea"  rows="5"  
                            class="mt-1 block w-full" 
                            required autofocus autocomplete="descricao">{{ old('descricao', $foto->descricao) }}</x-text-area>
                           
                            <x-input-error class="mt-2" :messages="$errors->get('descricao')" />
                        </div>


                        <div>
                            <x-input-label for="album" :value="__('Album')" />
                            <x-text-input id="album" name="album" type="text" 
                            class="mt-1 block w-full" :value="old('album', $foto->album)" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('album')" />
                        </div>



                        <div class="mb-3">
                    <label class="form-label" for="inputFile">File:</label>
                    <input 
                        type="file" 
                        name="file" 
                        id="inputFile"
                        class="form-control @error('file') is-invalid @enderror">
      
                    @error('file')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                        <button type="submit" class="btn mt-3 btn-primary">Atualizar foto</button>
                      </form>
                    </div>
                  </div>
                </div>




                

                </div>
            </div>
        </div>
    </div>
</x-app-layout>






