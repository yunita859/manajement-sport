<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Peminjam') }}
        </h2>
    </x-slot>

    <div class="p-6">
        <table class="w-full text-left border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Nama Peminjam</th>
                    <th class="px-4 py-2">Nama Barang</th>
                    <th class="px-4 py-2">Jumlah</th>
                    <th class="px-4 py-2">Tanggal Pinjam</th>
                    <th class="px-4 py-2">Tanggal Kembali</th>
                </tr>
            </thead>
            <tbody>
                @foreach($peminjaman as $p => $pinjam)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $p+1 }}</td>
                    <td class="px-4 py-2">{{ $pinjam->nama_peminjam }}</td>
                    <td class="px-4 py-2">{{ $pinjam->nama_barang }}</td>
                    <td class="px-4 py-2">{{ $pinjam->jumlah_barang }}</td>
                    <td class="px-4 py-2">{{ $pinjam->tgl_pinjam }}</td>
                    <td class="px-4 py-2">{{ $pinjam->tgl_kembali }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>



