
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
                      <h3>Update photo</h3>
                      <form action="{{ route('photos.update', $photo->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" name="title" type="text" 
                            class="mt-1 block w-full" :value="old('title', $photo->title)" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div>
                            <x-input-label for="body" :value="__('body')" />
                            <x-text-area id="body" name="body"  type="textarea"  rows="5"  
                            class="mt-1 block w-full" 
                            required autofocus autocomplete="body">{{ old('body', $photo->body) }}</x-text-area>
                            


                            
                            <x-input-error class="mt-2" :messages="$errors->get('body')" />
                        </div>
                        <button type="submit" class="btn mt-3 btn-primary">Update photo</button>
                      </form>
                    </div>
                  </div>
                </div>




                

                </div>
            </div>
        </div>
    </div>
</x-app-layout>






