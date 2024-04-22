
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   


                <div class="container h-100 mt-5">
                  <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-10 col-md-8 col-lg-6">
                      <h3>Update pagamento</h3>
                      <form action="{{ route('pagamentos.update', $pagamento->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="itemdesc" :value="__('Itemdesc')" />
                            <x-text-input id="itemdesc" name="itemdesc" type="text" 
                            class="mt-1 block w-full" :value="old('itemdesc', $pagamento->itemdesc)" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('itemdesc')" />
                        </div>


                        <div>
                            <x-input-label for="qtd" :value="__('Qtd')" />
                            <x-text-input id="qtd" name="qtd" type="text" 
                            class="mt-1 block w-full" :value="old('qtd', $pagamento->qtd)" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('qtd')" />
                        </div>


                        <div>
                            <x-input-label for="valor" :value="__('Valor')" />
                            <x-text-input id="valor" name="valor" type="text" 
                            class="mt-1 block w-full" :value="old('valor', $pagamento->valor)" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('valor')" />
                        </div>


                        <div>
                            <x-input-label for="datavenc" :value="__('Datavenc')" />
                            <x-text-input id="datavenc" name="datavenc" type="text" 
                            class="mt-1 block w-full" :value="old('datavenc', $pagamento->showDateVenc())" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('datavenc')" />
                        </div>

                        <div>
                            <x-input-label for="datapag" :value="__('Datapag')" />
                            <x-text-input id="datapag" name="datapag" type="text" 
                            class="mt-1 block w-full" :value="old('datapag', $pagamento->showDatePag())" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('datapag')" />
                        </div>

                        <div>
                            <x-input-label for="obs" :value="__('Obs')" />
                            <x-text-input id="obs" name="obs" type="text" 
                            class="mt-1 block w-full" :value="old('obs', $pagamento->obs)" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('obs')" />
                            </div>

                        <div>
                        <x-input-label for="situacao" :value="__('Situacao')" />
                        <select 
                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" 
                            name="situacao" id="situacao">
                            @foreach ($pagamento->getSituacoes() as $situacao)
                                <option value="{{ $situacao }}" 
                                  @if (old('situcao', $pagamento->situacao) == $situacao) 
                                    {{ 'selected=selected' }} 
                                    @endif
                                >
                                    {{ $situacao }} 
                                </option>
                            @endforeach
                        </select>
                        </div>

                        <button type="submit" class="btn mt-3 btn-primary">Update pagamento</button>
                      </form>
                    </div>
                  </div>
                </div>




                

                </div>
            </div>
        </div>
    </div>
</x-app-layout>






