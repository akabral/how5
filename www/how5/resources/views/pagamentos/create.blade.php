
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
                            <h3>Add a pagamento</h3>
                            <form action="{{ route('pagamentos.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                <label for="itemdesc">itemdesc</label>
                                <input type="text" class="form-control" id="itemdesc" name="itemdesc" required>
                                </div>

                                <div class="form-group">
                                <label for="qtd">qtd</label>
                                <input type="text" class="form-control" id="qtd" name="qtd" " required></input>
                                </div>


                                <div class="form-group">
                                <label for="valor">valor</label>
                                <input type="text" class="form-control" id="valor" name="valor" required></input>
                                </div>


                                <div class="form-group">
                                <label for="datavenc">datavenc</label>
                                <input type="text" class="form-control" id="datavenc" name="datavenc" required></input>
                                </div>

                                <div class="form-group">
                                <label for="datapag">datapag</label>
                                <input type="text" class="form-control" id="datapag" name="datapag" required></input>
                                </div>

                                <div class="form-group">
                                <label for="obs">obs</label>
                                <textarea type="text"class="form-control" id="obs" name="obs" rows="3" required></textarea>
                                </div>
//        'situacao',
                                <br>
                                <button type="submit" class="btn btn-primary">Create pagamento</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>







