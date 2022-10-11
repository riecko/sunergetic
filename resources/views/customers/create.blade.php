<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>
    <x-flash-success/>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{ route('customer.store') }}">
                        @csrf
                        <div class="p-2 flex items-center">
                            <label for="title" class="w-20">Email:</label>
                            <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="email"/>
                        </div>
                        <div class="p-2 flex items-center">
                            <label for="body" class="w-20">Firstname:</label>
                            <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="firstname"/>
                        </div>
                        <div class="p-2 flex items-center">
                            <label for="body" class="w-20">Lastname:</label>
                            <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="lastname"/>
                        </div>
                        <div class="p-2 flex items-center">
                            <label for="body" class="w-20">Address:</label>
                            <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="address"/>
                        </div>
                        <div class="p-2 flex items-center">
                            <label for="body" class="w-20">Zipcode:</label>
                            <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="zipcode"/>
                        </div>
                        <div class="p-2 flex items-center">
                            <label for="body" class="w-20">City:</label>
                            <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="city"/>
                        </div>
                        <div class="p-2 flex items-center">
                            <label for="body" class="w-20">Phone:</label>
                            <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="phone"/>
                        </div>
                        <div class="p-6">
                        <input type="submit" class="inline-flex items-center px-4 py-2 mb-4 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" value="Add customer">
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>