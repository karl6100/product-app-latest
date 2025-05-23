<x-layouts.app :title="__('Checkout')">
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-1/2 -z-10 aspect-1155/678 w-144.5 max-w-none -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-288.75" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Create Product</h2>
    </div>
    <form action="{{ route('products.store') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
        @csrf
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
        <div class="sm:col-span-2">
            <label for="name" class="block text-sm/6 font-semibold text-gray-900">Name</label>
            <div class="mt-2.5">
            <input type="text" name="name" id="name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                @error('name')
                    <p class="mt-2 text-sm text-red-600" id="first_name-error">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="price" class="block text-sm/6 font-semibold text-gray-900">Price</label>
            <div class="mt-2.5">
            <input type="number" name="price" id="price" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                @error('price')
                    <p class="mt-2 text-sm text-red-600" id="first_name-error">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="sku" class="block text-sm/6 font-semibold text-gray-900">SKU</label>
            <div class="mt-2.5">
            <input type="text" name="sku" id="sku" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                @error('sku')
                    <p class="mt-2 text-sm text-red-600" id="first_name-error">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="stock" class="block text-sm/6 font-semibold text-gray-900">Stock</label>
            <div class="mt-2.5">
            <input type="number" name="stock" id="stock" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                @error('stock')
                    <p class="mt-2 text-sm text-red-600" id="first_name-error">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="sm:col-span-2">
            <div class="mt-2.5">
                <flux:field variant="inline">
                    <flux:checkbox wire:model="is_active" name="is_active"/>

                    <flux:label>Is Active</flux:label>
                    <flux:error name="is_active" />
                </flux:field>
                @error('is_active')
                    <p class="mt-2 text-sm text-red-600" id="first_name-error">{{ $message }}</p>
                @enderror
            </div>
        </div>
        </div>
        <div class="mt-10">
        <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
    </div>
</x-layouts.app>
