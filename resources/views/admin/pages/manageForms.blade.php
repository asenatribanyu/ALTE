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
                    <tr>
                        <td style="text-align: center">1</td>
                        <td style="text-align: center">Surat Labor</td>
                        <td style="text-align: center">13/10/2024</td>
                        <td style="text-align: center">
                            <button type="button"
                                class="inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Unduh
                            </button>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-green-500 rounded-lg ms-2 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-500 dark:focus:ring-green-600">
                                Perbarui Formulir
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
