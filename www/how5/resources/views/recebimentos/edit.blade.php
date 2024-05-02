
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Atualizar Recebimento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   


                <div class="container h-100 mt-5">
                  <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-10 col-md-8 col-lg-6">
                      <form action="{{ route('recebimentos.update', $recebimento->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="itemdesc" :value="__('Itemdesc')" />
                            <x-text-input id="itemdesc" name="itemdesc" type="text" 
                            class="mt-1 block w-full" :value="old('itemdesc', $recebimento->itemdesc)" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('itemdesc')" />
                        </div>


                        <div>
                            <x-input-label for="qtd" :value="__('Qtd')" />
                            <x-text-input id="qtd" name="qtd" type="text" 
                            class="mt-1 block w-full" :value="old('qtd', $recebimento->qtd)" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('qtd')" />
                        </div>


                        <div>
                            <x-input-label for="valor" :value="__('Valor')" />
                            <x-text-input id="valor" name="valor" type="text" 
                            class="mt-1 block w-full" :value="old('valor', $recebimento->valor)" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('valor')" />
                        </div>


                        <div>
                            <x-input-label for="datavenc" :value="__('Data Vencimento')" />
                            <x-text-input id="datavenc" name="datavenc" type="text" 
                            class="mt-1 block w-full" :value="old('datavenc', $recebimento->showDateVenc())" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('datavenc')" />
                        </div>

                        <div>
                            <x-input-label for="datapag" :value="__('Data Recebimento')" />
                            <x-text-input id="datapag" name="datapag" type="text" 
                            class="mt-1 block w-full" :value="old('datapag', $recebimento->showDatePag())" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('datapag')" />
                        </div>

                        <div>
                            <x-input-label for="obs" :value="__('Obs')" />
                            <x-text-input id="obs" name="obs" type="text" 
                            class="mt-1 block w-full" :value="old('obs', $recebimento->obs)" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('obs')" />
                            </div>

                        <div>
                        <x-input-label for="situacao" :value="__('Situacao')" />
                        <select 
                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" 
                            name="situacao" id="situacao">
                            @foreach ($recebimento->getSituacoes() as $situacao)
                                <option value="{{ $situacao }}" 
                                  @if (old('situcao', $recebimento->situacao) == $situacao) 
                                    {{ 'selected=selected' }} 
                                    @endif
                                >
                                    {{ $situacao }} 
                                </option>
                            @endforeach
                        </select>
                        </div>

                        <button type="submit" class="btn mt-3 btn-primary">Atualizar recebimento</button>
                      </form>
                    </div>
                  </div>
                </div>




                

                </div>
            </div>
        </div>
    </div>
</x-app-layout>






