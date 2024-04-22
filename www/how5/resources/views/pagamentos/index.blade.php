
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
                   
          <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
              <a class="navbar-brand h1" href={{ route('pagamentos.index') }}>CRUDphotos</a>
              <div class="justify-end ">
                <div class="col ">
                  <a class="btn btn-sm btn-success" href={{ route('pagamentos.create') }}>Add Pagamento</a>
                </div>
              </div>
            </div>
          </nav>                

  <div class="container mt-5">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
      @foreach ($pagamentos as $pagamento)
        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">

          <div class="card">
            <div class="card-header">
              <h5 class="card-title">{{ $pagamento->itemdesc }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $pagamento->valor }}</p>
            </div>


            <div class="card-body">
              <p class="card-text">{{ $pagamento->valor }}</p>
            </div>

            <div class="card-body">
              <p class="card-text">{{ $pagamento->showDatePag() }}</p>
            </div>

            <div class="card-body">
              <p class="card-text">{{ $pagamento->showDateVenc() }}</p>
            </div>

            <div class="card-body">
              <p class="card-text">{{ $pagamento->situacao }}</p>
            </div>


            <div class="card-footer">
              <div class="row">
                <div class="col-sm">
                  <a href="{{ route('pagamentos.edit', $pagamento->id) }}"
            class="btn btn-primary btn-sm">Edit</a>
                </div>
                <div class="col-sm">
                    <form action="{{ route('pagamentos.destroy', $pagamento->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  

  </div>
            </div>
        </div>
    </div>
</x-app-layout>
