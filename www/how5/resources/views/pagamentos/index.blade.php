
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
              
                
                <div class="flex ...">
                  <div class="flex-6 ">
                  <a class="navbar-brand h1" href={{ route('pagamentos.index') }}>Contas a Pagar</a>
                  </div>
                  <div class="flex-1">
                    
                  </div>
                  <div class="flex-6">
                  <a class="btn btn-sm btn-success" href={{ route('pagamentos.create') }}>Add Pagamento</a>
                  </div>
                </div>                
            

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
    rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none
     ">
        <div class="flex space-x-4 ...">
          <div class="flex-1 ...">Item</div>
          <div class="flex-1 ...">Valor</div>
          <div class="flex-1 ...">Data Pagamento</div>
          <div class="flex-1 ...">Datavencimento</div>
          <div class="flex-1 ...">Situacao</div>
          <div class="flex-1 ...">Acoes</div>
        </div>
      </span>

    @foreach ($pagamentos as $pagamento)
    <span class="block dark:bg-gray-700/50
    dark:hover:bg-gray-700  
    via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5
    rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none
     motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
      <div class="flex space-x-4.">
            <div class="flex-1 ">{{ $pagamento->itemdesc }}</div>
            <div class="flex-1 ">{{ $pagamento->valor }}</div>
            <div class="flex-1 ">{{ $pagamento->showDatePag() }}</div>
            <div class="flex-1 ">{{ $pagamento->showDateVenc() }}</div>
            <div class="flex-1 ">{{ $pagamento->situacao }}</div>
            <div class="flex-1 ">
                <a href="{{ route('pagamentos.edit', $pagamento->id) }}" class="btn btn-primary btn-sm">Edit</a>
                  <form action="{{ route('pagamentos.destroy', $pagamento->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
</x-app-layout>
