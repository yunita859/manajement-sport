<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <form action="{{ route('pengguna.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm font-medium">Nama Peminjam</label>
                        <input type="text" name="nama_peminjam" class="w-full border rounded p-2" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium">Nama Barang</label>
                        <input type="text" name="nama_barang" class="w-full border rounded p-2" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium">Jumlah Barang</label>
                        <input type="number" name="jumlah_barang" class="w-full border rounded p-2" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium">Tanggal Pinjam</label>
                        <input type="date" name="tanggal_pinjam" class="w-full border rounded p-2" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium">Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="w-full border rounded p-2" required>
                    </div>
                    <form action="{{ route('pengguna.index') }}" method="POST">
    @csrf
    <!-- input fields -->
    <button type="submit" class="bg-amber-600 text-white px-4 py-2 rounded">
        Simpan
    </button>
</form>

                </form>
            </div>
        </div>
    </div>

</body>
</html>
