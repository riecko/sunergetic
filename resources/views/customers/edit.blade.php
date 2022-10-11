<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>
    <x-auth-validation-errors :errors="$errors" />
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{ route('customer.update') }}">
                    <input type="hidden" name="id" value="{{ $data['data']['id'] }}">
                    @csrf
                    <div class="p-2 flex items-center">
                        <label for="title" class="w-20">Email:</label>
                        <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="email" value="{{ $data['data']['email'] }}"/>
                    </div>
                    <div class="p-2 flex items-center">
                        <label for="body" class="w-20">Firstname:</label>
                        <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="firstname" value="{{ $data['data']['firstname'] }}"/>
                    </div>
                    <div class="p-2 flex items-center">
                        <label for="body" class="w-20">Lastname:</label>
                        <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="lastname" value="{{ $data['data']['lastname'] }}"/>
                    </div>
                    <div class="p-2 flex items-center">
                        <label for="body" class="w-20">Address:</label>
                        <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="address" value="{{ $data['data']['address'] }}"/>
                    </div>
                    <div class="p-2 flex items-center">
                        <label for="body" class="w-20">Zipcode:</label>
                        <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="zipcode" value="{{ $data['data']['zipcode'] }}"/>
                    </div>
                    <div class="p-2 flex items-center">
                        <label for="body" class="w-20">City:</label>
                        <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="city" value="{{ $data['data']['city'] }}"/>
                    </div>
                    <div class="p-2 flex items-center">
                        <label for="body" class="w-20">Phone:</label>
                        <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="phone" value="{{ $data['data']['phone'] }}"/>
                    </div>
                    <div class="p-6">
                    <form action="{{ route('customer.update')}}" method="post">
                    @csrf
                        @method('PUT')
                        <button type="submit" class="inline-flex items-center px-4 py-1 bg-red-800 border border-transparent rounded-lg font-semibold text-xs text-white tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">Update</button>
                    </form>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>