<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <div class="mb-4">
                        <p class="text-sm text-gray-500">NIM</p>
                        <p class="font-semibold text-gray-800">
                            {{ $mahasiswa->nim }}
                        </p>
                    </div>

                    <div class="mb-4">
                        <p class="text-sm text-gray-500">Nama</p>
                        <p class="font-semibold text-gray-800">
                            {{ $mahasiswa->nama }}
                        </p>
                    </div>

                    <div class="mb-4">
                        <p class="text-sm text-gray-500">Program Studi</p>
                        <p class="font-semibold text-gray-800">
                            {{ $mahasiswa->program_studi }}
                        </p>
                    </div>

                    <div class="mb-4">
                        <p class="text-sm text-gray-500">Email</p>
                        <p class="font-semibold text-gray-800">
                            {{ $mahasiswa->email }}
                        </p>
                    </div>

                    <div class="mb-6">
                        <p class="text-sm text-gray-500">Angkatan</p>
                        <p class="font-semibold text-gray-800">
                            {{ $mahasiswa->angkatan }}
                        </p>
                    </div>

                    <a
                        href="{{ route('mahasiswa.index') }}"
                        class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600"
                    >
                        Kembali
                    </a>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>