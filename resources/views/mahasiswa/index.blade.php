<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Judul dan tombol tambah -->
                    <div class="flex justify-between items-center mb-6">

                        <div>
                            <h3 class="text-lg font-semibold">
                                Daftar Mahasiswa
                            </h3>

                            <!-- Menampilkan role user yang sedang login -->
                            <p class="text-sm text-gray-600 mt-1">
                                Role:
                                <span class="font-semibold text-blue-600">
                                    {{ auth()->user()->role }}
                                </span>
                            </p>
                        </div>

                        <!-- Tombol tambah hanya untuk admin -->
                       @if(auth()->user()->role === 'admin')
    <a href="{{ route('mahasiswa.create') }}"
       style="background-color: #16a34a; color: white; padding: 10px 16px; border-radius: 6px; display: inline-block; text-decoration: none;">
        + Tambah Mahasiswa
    </a>
@endif

                    </div>

                    <!-- Pesan berhasil -->
                    @if(session('success'))
                        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Tabel mahasiswa -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full border border-gray-300">

                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="border px-4 py-2">No</th>
                                    <th class="border px-4 py-2">NIM</th>
                                    <th class="border px-4 py-2">Nama</th>
                                    <th class="border px-4 py-2">Program Studi</th>
                                    <th class="border px-4 py-2">Email</th>
                                    <th class="border px-4 py-2">Angkatan</th>

                                    <!-- Kolom aksi hanya untuk admin -->
                                    @if(auth()->user()->role === 'admin')
                                        <th class="border px-4 py-2">Aksi</th>
                                    @endif
                                </tr>
                            </thead>

                            <tbody>

                                @forelse($mahasiswa as $item)

                                    <tr>

                                        <td class="border px-4 py-2">
                                            {{ $loop->iteration }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->nim }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->nama }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->program_studi }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->email }}
                                        </td>

                                        <td class="border px-4 py-2">
                                            {{ $item->angkatan }}
                                        </td>

                                        <!-- Aksi hanya untuk admin -->
                                        @if(auth()->user()->role === 'admin')

                                            <td class="border px-4 py-2">

                                                <div class="flex gap-2">

                                                    <!-- Tombol Edit -->
                                                    <a href="{{ route('mahasiswa.edit', $item->id) }}"
   style="background-color: #2563eb; color: white; padding: 6px 12px; border-radius: 6px; text-decoration: none; display: inline-block;">
    Edit
</a>
                                                    <!-- Tombol Hapus -->
                                                    <form action="{{ route('mahasiswa.destroy', $item->id) }}"
                                                          method="POST"
                                                          onsubmit="return confirm('Yakin ingin menghapus data ini?');">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit"
                                                                class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                                            Hapus
                                                        </button>

                                                    </form>

                                                </div>

                                            </td>

                                        @endif

                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="7"
                                            class="border px-4 py-4 text-center">
                                            Belum ada data mahasiswa.
                                        </td>
                                    </tr>

                                @endforelse

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>