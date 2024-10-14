@extends('admin.layouts.dashboard')
@section('dashboard')
    <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 dark:bg-gray-800">
        <h1 class="text-3xl font-medium text-gray-900 dark:text-white">Dokumen Mahasiswa</h1>
        <small class="text-sm text-gray-900 dark:text-white">Unduh dokumen yang telah diunggah oleh
            mahasiswa.</small>
        <div class="my-2 border-t-2 border-gray-300"></div>
        <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 dark:bg-gray-800">
            <table id="myTable" class="w-full text-sm display dark:text-gray-400">
                <thead class="text-black">
                    <tr>
                        <th style="text-align: center">No</th>
                        <th style="text-align: center">NPM</th>
                        <th style="text-align: center">Nama</th>
                        <th style="text-align: center">Email</th>
                        <th style="text-align: center">Tipe Dokumen</th>
                        <th style="text-align: center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align: center">1</td>
                        <td style="text-align: center">0620101035</td>
                        <td style="text-align: center">Nino Nakano</td>
                        <td style="text-align: center">Nino@noreply.com</td>
                        <td style="text-align: center">SOP Labor</td>
                        <td style="text-align: center">
                            <button type="button"
                                class="inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Unduh
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
