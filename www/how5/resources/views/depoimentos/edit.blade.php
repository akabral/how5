
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Atualizar Depoimento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   


                <div class="container h-100 mt-5">
                  <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-10 col-md-8 col-lg-6">
                      <form action="{{ route('depoimentos.update', $depoimento->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="pessoa" :value="__('Pessoa')" />
                            <x-text-input id="pessoa" name="pessoa" type="text" 
                            class="mt-1 block w-full" :value="old('pessoa', $depoimento->pessoa)" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('pessoa')" />
                        </div>

                        <div>
                            <x-input-label for="descricao" :value="__('Descricao')" />
                            <x-text-area id="descricao" name="descricao"  type="textarea"  rows="5"  
                            class="mt-1 block w-full" 
                            required autofocus autocomplete="descricao">{{ old('descricao', $depoimento->descricao) }}</x-text-area>
                           
                            <x-input-error class="mt-2" :messages="$errors->get('descricao')" />
                        </div>




                        <div>
                        <x-input-label for="nota" :value="__('Nota')" />
                        <select 
                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" 
                            name="nota" id="nota">
                            @foreach ($depoimento->getNotas() as $nota)
                                <option value="{{ $nota }}" 
                                  @if (old('situcao', $depoimento->nota) == $nota) 
                                    {{ 'selected=selected' }} 
                                    @endif
                                >
                                    {{ $nota }} 
                                </option>
                            @endforeach
                        </select>
                        </div>



                        <button type="submit" class="btn mt-3 btn-primary">Atualizar depoimento</button>
                      </form>
                    </div>
                  </div>
                </div>




                

                </div>
            </div>
        </div>
    </div>
</x-app-layout>






