<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Produk
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700">Nama Barang</label>
                        <input type="text" name="nama_barang" value="{{ $product->nama_barang }}" class="w-full border rounded px-3 py-2">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Status Barang</label>
                        <input type="text" name="status_barang" value="{{ $product->status_barang }}" class="w-full border rounded px-3 py-2">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Jumlah Barang</label>
                        <input type="number" name="jumlah_barang" value="{{ $product->jumlah_barang }}" class="w-full border rounded px-3 py-2">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Gambar Barang</label>
                        <input type="file" name="gambar_barang" class="w-full">
                        @if($product->gambar_barang)
                            <img src="{{ asset('storage/' . $product->gambar_barang) }}" class="h-20 mt-2">
                        @endif
                    </div>

                    <div class="flex space-x-2">
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Update</button>
                        <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-gray-500 text-white rounded">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

