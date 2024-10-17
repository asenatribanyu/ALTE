@extends('admin.layouts.dashboard')
@section('dashboard')
    <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 dark:bg-gray-800">
        <h1 class="text-3xl font-medium text-gray-900 dark:text-white">Pengelolaan Formulir</h1>
        <small class="text-sm text-gray-900 dark:text-white">Perbaharui formulir yang akan diunduh mahasiswa jika ada
            perubahan.</small>
        <div class="my-2 border-t-2 border-gray-300"></div>
        <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 dark:bg-gray-800">
            <table id="myTable" class="w-full text-sm display dark:text-gray-400">
                <thead class="text-black">
                    <tr>
                        <th style="text-align: center">No</th>
                        <th style="text-align: center">Nama Formulir</th>
                        <th style="text-align: center">Terakhir diperbaharui</th>
                        <th style="text-align: center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($formulirs as $formulir)   
                    <tr>
                        <td style="text-align: center">{{ $loop->iteration }}</td>
                        <td style="text-align: center">{{ $formulir->name }}</td>
                        <td style="text-align: center">{{ $formulir->updated_at->format('Y-m-d') }}</td>
                        <td style="text-align: center">
                            <a href="/storage/formulir/{{ $formulir->file }}"
                                class="inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Unduh
                        </a>
                        <form id="updateForm{{ $formulir->id }}" action="/admin/manage/forms/{{ $formulir->id }}" method="POST" enctype="multipart/form-data" style="display:none;">
                            @csrf
                            @method('put')
                            <input type="file" id="fileInput{{ $formulir->id }}" name="file" onchange="submitForm({{ $formulir->id }})">
                        </form>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-green-500 rounded-lg ms-2 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-500 dark:focus:ring-green-600" onclick="uploadFile({{ $formulir->id }})">
                            Perbarui Formulir
                        </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
