@extends('admin.layouts.dashboard')
@section('title', 'Dokumen Mahasiswa')
@section('dashboard')
    <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 dark:bg-gray-800">
        <h1 class="text-3xl font-medium text-gray-900 dark:text-white">Dokumen Mahasiswa</h1>
        <small class="text-sm text-gray-900 dark:text-white">Unduh dokumen yang telah diunggah oleh mahasiswa.</small>
        <div class="my-2 border-t-2 border-gray-300"></div>
        <div class="p-3.5 bg-white rounded-lg shadow dark:bg-gray-800 overflow-x-auto">
            <table id="myTable" class="w-full text-sm display dark:text-gray-400">
                <thead class="text-black">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">NPM</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Tipe Dokumen</th>
                        <th class="text-center">Tanggal diunggah</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documents as $document)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $document->user->id }}</td>
                        <td class="text-center">{{ $document->user->name }}</td>
                        <td class="text-center">{{ $document->user->email }}</td>
                        <td class="text-center">{{ $document->tipe }}</td>
                        <td class="text-center">{{ $document->created_at }}</td>
                        <td class="text-center">
                            <button type="button" onclick="window.location.href='/storage/{{ $document->file }}';"
                                class="inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Unduh
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
