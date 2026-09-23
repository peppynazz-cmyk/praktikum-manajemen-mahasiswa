<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <h3 class="text-lg font-semibold mb-6">
                        Form Tambah Mahasiswa
                    </h3>

                    <form action="{{ route('mahasiswa.store') }}" method="POST">

                        @csrf

                        <!-- NIM -->
                        <div class="mb-4">
                            <label for="nim"
                                   class="block font-medium text-sm text-gray-700">
                                NIM
                            </label>

                            <input type="text"
                                   name="nim"
                                   id="nim"
                                   value="{{ old('nim') }}"
                                   required
                                   class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">

                            @error('nim')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Nama -->
                        <div class="mb-4">
                            <label for="nama"
                                   class="block font-medium text-sm text-gray-700">
                                Nama Mahasiswa
                            </label>

                            <input type="text"
                                   name="nama"
                                   id="nama"
                                   value="{{ old('nama') }}"
                                   required
                                   class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">

                            @error('nama')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Program Studi -->
                        <div class="mb-4">
                            <label for="program_studi"
                                   class="block font-medium text-sm text-gray-700">
                                Program Studi
                            </label>

                            <input type="text"
                                   name="program_studi"
                                   id="program_studi"
                                   value="{{ old('program_studi') }}"
                                   required
                                   class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">

                            @error('program_studi')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email"
                                   class="block font-medium text-sm text-gray-700">
                                Email
                            </label>

                            <input type="email"
                                   name="email"
                                   id="email"
                                   value="{{ old('email') }}"
                                   required
                                   class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">

                            @error('email')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Angkatan -->
                        <div class="mb-6">
                            <label for="angkatan"
                                   class="block font-medium text-sm text-gray-700">
                                Angkatan
                            </label>

                            <input type="number"
                                   name="angkatan"
                                   id="angkatan"
                                   value="{{ old('angkatan') }}"
                                   required
                                   class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">

                            @error('angkatan')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Tombol -->
                        <div class="flex items-center gap-3">

    <!-- Tombol Simpan -->
    <button type="submit"
            style="background-color: #2563eb; color: white; padding: 10px 20px; border-radius: 6px; font-weight: 600; border: none; cursor: pointer;">
        Simpan
    </button>

    <!-- Tombol Batal -->
    <a href="{{ route('mahasiswa.index') }}"
       style="background-color: #6b7280; color: white; padding: 10px 20px; border-radius: 6px; font-weight: 600; text-decoration: none; display: inline-block;">
        Batal
    </a>

</div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>