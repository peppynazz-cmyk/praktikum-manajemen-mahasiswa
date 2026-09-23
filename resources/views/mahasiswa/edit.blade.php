<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- NIM -->
                        <div class="mb-4">
                            <label for="nim" class="block font-medium text-sm text-gray-700">
                                NIM
                            </label>

                            <input
                                type="text"
                                name="nim"
                                id="nim"
                                value="{{ old('nim', $mahasiswa->nim) }}"
                                class="block mt-1 w-full rounded-md border-gray-300 shadow-sm"
                                required
                            >

                            @error('nim')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Nama -->
                        <div class="mb-4">
                            <label for="nama" class="block font-medium text-sm text-gray-700">
                                Nama
                            </label>

                            <input
                                type="text"
                                name="nama"
                                id="nama"
                                value="{{ old('nama', $mahasiswa->nama) }}"
                                class="block mt-1 w-full rounded-md border-gray-300 shadow-sm"
                                required
                            >

                            @error('nama')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Program Studi -->
                        <div class="mb-4">
                            <label for="program_studi" class="block font-medium text-sm text-gray-700">
                                Program Studi
                            </label>

                            <input
                                type="text"
                                name="program_studi"
                                id="program_studi"
                                value="{{ old('program_studi', $mahasiswa->program_studi) }}"
                                class="block mt-1 w-full rounded-md border-gray-300 shadow-sm"
                                required
                            >

                            @error('program_studi')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="block font-medium text-sm text-gray-700">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                id="email"
                                value="{{ old('email', $mahasiswa->email) }}"
                                class="block mt-1 w-full rounded-md border-gray-300 shadow-sm"
                                required
                            >

                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Angkatan -->
                        <div class="mb-4">
                            <label for="angkatan" class="block font-medium text-sm text-gray-700">
                                Angkatan
                            </label>

                            <input
                                type="number"
                                name="angkatan"
                                id="angkatan"
                                value="{{ old('angkatan', $mahasiswa->angkatan) }}"
                                class="block mt-1 w-full rounded-md border-gray-300 shadow-sm"
                                required
                            >

                            @error('angkatan')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Tombol -->
                        <div class="flex items-center gap-3 mt-6">

                            <button
                                type="submit"
                                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700"
                            >
                                Update
                            </button>

                            <a
                                href="{{ route('mahasiswa.index') }}"
                                class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600"
                            >
                                Kembali
                            </a>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>