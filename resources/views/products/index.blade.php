<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Add Product</h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto">
        <div class="bg-white shadow rounded-lg p-6">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm font-medium">Nama Barang</label>
                    <input type="text" name="nama_barang" class="w-full border rounded p-2">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium">Status Barang</label>
                    <select name="status_barang" class="w-full border rounded p-2">
                        <option value="tersedia">Tersedia</option>
                        <option value="dipinjam">Dipinjam</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium">Gambar Barang</label>
                    <input type="file" name="gambar_barang" class="w-full border rounded p-2">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium">Jumlah Barang</label>
                    <input type="number" name="jumlah_barang" class="w-full border rounded p-2">
                </div>

                <button type="submit" 
                        class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-md">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
