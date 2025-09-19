<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-center font-semibold text-2xl text-gray-800 mb-6">
                Daftar Barang
            </h2>

            <!-- Grid Card -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($products as $product)
                    @if ($product->status_barang !== 'rusak')
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <!-- Gambar -->
                            <img src="{{ asset('storage/' . $product->gambar_barang) }}" 
                                 alt="{{ $product->nama_barang }}" 
                                 class="w-full h-48 object-cover">

                            <!-- Isi Card -->
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-gray-900">
                                    {{ $product->nama_barang }}
                                </h3>

                                <p class="mt-1 text-sm text-gray-600">
                                    Jumlah: {{ $product->jumlah_barang }}
                                </p>

                                <div class="mt-4">
                                    <a href="{{ route('pengguna.create') }}" 
                                        class="block w-full text-center bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">
                                        Pinjam Sekarang
                                    </a>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- End Grid -->

        </div>
    </div>

</body>
</html>

