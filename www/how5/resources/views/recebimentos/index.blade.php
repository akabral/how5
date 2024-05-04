
<x-app-layout>
    <x-slot name="header">




    <div class="container mt-5">
      <div class="flex flex-row space-x-4">
        <div class="flex-1 basis-1/4">
          <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
              {{ __('Contas a Receber') }}
          </h2>
        </div>
        <div class="flex-1 -1/4"></div>
        <div class="basis-1/2">
          
        <a class=" text-gray-900 dark:text-gray-100 block bg-white dark:bg-gray-800/50
                      dark:bg-gradient-to-bl from-gray-700/50
                      via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5
                      shadow-2xl shadow-gray-500/20 dark:shadow-none
                      font-semibold"
            style="padding: 5px; background-color: #484d53;"
            href={{ route('recebimentos.create') }}>Novo Recebimento</a>


        </div>
      </div>   
    </div>   





    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                

                  <div class="container mt-5">

                    <div class="space-y-4 scale-100 p-6 bg-white dark:bg-gray-800/50
                      dark:bg-gradient-to-bl from-gray-700/50
                      via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5
                      rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none
                      f"
                      >
                        <span class="block bg-white dark:bg-gray-800/50
                      dark:bg-gradient-to-bl from-gray-700/50
                      via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5
                      shadow-2xl shadow-gray-500/20 dark:shadow-none
                      font-semibold
                      ">
                          <div class="flex space-x-4 ...">
                            <div class="flex-1 ...">Item</div>
                            <div class="flex-1 ...">Valor</div>
                            <div class="flex-1 ...">Data Recebimento</div>
                            <div class="flex-1 ...">Data Vencimento</div>
                            <div class="flex-1 ...">Situacao</div>
                            <div class="flex-1 ...">Acoes</div>
                          </div>
                        </span>

                      @foreach ($recebimentos as $recebimento)
                      <span class="block dark:bg-gray-700/50
                      dark:hover:bg-gray-700
                      via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5
                      shadow-2xl shadow-gray-500/20 dark:shadow-none
                      motion-safe:hover:scale-[1.0] transition-all duration-250 
                      focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="flex space-x-4.">
                              <div class="flex-1 ">{{ $recebimento->itemdesc }}</div>
                              <div class="flex-1 ">{{ $recebimento->valor }}</div>
                              <div class="flex-1 ">{{ $recebimento->showDatePag() }}</div>
                              <div class="flex-1 ">{{ $recebimento->showDateVenc() }}</div>
                              <div class="flex-1 ">{{ $recebimento->situacao }}</div>
                              <div class="flex-1 ">
                                  <a 
                                  class="dark:bg-gray-700/50 dark:hover:bg-gray-800"
                                   style= " padding-left: 5px; padding-right: 10px;
                                    padding-bottom: 3px; padding-top: 3px;"
                                  href="{{ route('recebimentos.edit', $recebimento->id) }}">Editar</a>
                                    <form action="{{ route('recebimentos.destroy', $recebimento->id) }}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit"
                                        class="dark:bg-gray-700/50 dark:hover:bg-gray-800"
                                        style= " padding-left: 5px; padding-right: 10px;
                                          padding-bottom: 3px; padding-top: 3px;"
                                        >Apagar</button>
                                    </form>
                            </div>
                        </div>
                      </span>

                      @endforeach
                      </div>
                  






                    </div>

                  </div>
                


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
