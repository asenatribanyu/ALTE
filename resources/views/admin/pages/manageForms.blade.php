@extends('admin.layouts.dashboard')
@section('title', 'Pengelolaan Formulir')
@section('dashboard')
    @if (session('success'))
        @include('alert.successAlert')
    @endif
    @if ($errors->any())
        @include('alert.dangerAlert')
    @endif
    <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 dark:bg-gray-800">
        <h1 class="text-3xl font-medium text-gray-900 dark:text-white">Pengelolaan Formulir</h1>
        <small class="text-sm text-gray-900 dark:text-white">Perbaharui formulir yang akan diunduh mahasiswa jika ada
            perubahan.</small>
        <div class="my-2 border-t-2 border-gray-300"></div>
        <div class="p-3.5 bg-white rounded-lg shadow dark:bg-gray-800 overflow-x-auto">
            <table id="myTable" class="w-full text-sm display dark:text-gray-400">
                <thead class="text-black">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Formulir</th>
                        <th class="text-center">Terakhir diperbaharui</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($formulirs as $formulir)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $formulir->name }}</td>
                            <td class="text-center">{{ $formulir->updated_at->format('Y-m-d') }}</td>
                            <td class="text-center">
                                <div class="flex items-center justify-center">
                                    <a href="/storage/formulir/{{ $formulir->file }}"
                                        class="inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Unduh
                                    </a>
                                    <form id="updateForm{{ $formulir->id }}"
                                        action="/admin/manage/forms/{{ $formulir->id }}" method="POST"
                                        enctype="multipart/form-data" class="hidden">
                                        @csrf
                                        @method('put')
                                        <input type="file" id="fileInput{{ $formulir->id }}" name="file"
                                            onchange="submitForm({{ $formulir->id }})">
                                    </form>
                                    <a href="#"
                                        class="inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-green-500 rounded-lg ms-2 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-500 dark:focus:ring-green-600"
                                        onclick="uploadFile({{ $formulir->id }})">
                                        Perbarui Formulir
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
