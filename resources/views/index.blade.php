@extends('layouts.app2')

@section('title', 'Page Title')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection

@section('js-top')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
@endsection

@section('content')
<div class="container mx-auto shadow relative">
    <div class="my-10 p-5">
            <h1 class="text-center font-bold text-2xl">VOUCHER 2022</h1>
            <span class="absolute right-0 top-0"><a href="{{ route('voucher.crear') }}" class="border-white rounded-lg p-2 border bg-emerald-600 text-white hover:bg-emerald-700">CREAR NUEVO</a></span>
        <div class="container mx-auto">
            <div class="flex flex-col">
                <div class="w-full">
                    <div class="p-4 ">
                        <!-- <table> -->
                        <table id="dataTable" class="p-4 mt-5">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="p-8  text-gray-700">
                                        N°
                                    </th>
                                    <th class="p-8  text-gray-700">
                                        N° Voucher
                                    </th>
                                    <th class="p-8  text-gray-700">
                                        Servicio
                                    </th>
                                    <th class="p-8  text-gray-700">
                                        Nombre Pax
                                    </th>
                                    <th class="p-8  text-gray-700">
                                        Fecha del Servicio
                                    </th>
                                    <th class="p-8  text-gray-700">
                                        Idioma
                                    </th>
                                    <th class="p-8 text-gray-700">
                                        Edit
                                    </th>
                                    <th class="p-8 text-gray-700">
                                        Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach($voucher as $v)
                                       <tr class="whitespace-nowrap">
                                        <td class="px-6 py-4 text-center text-gray-900">
                                            {{$v->id}}
                                        </td>
                                        <td class="px-6 py-4 text-center text-gray-900">
                                            {{$v->number_voucher}}
                                        </td>
                                        <td class="px-6 py-4 text-center text-gray-900">
                                            {{$v->name_package}}
                                        </td>
                                        <td class="px-6 py-4 text-center text-gray-900">
                                            {{$v->name_pax}}
                                        </td>
                                        <td class="px-6 py-4 text-center text-gray-900">
                                            {{$v->date_package}}
                                        </td>
                                        <td class="px-6 py-4 text-center text-gray-900">
                                            {{$v->language}}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <a href="#" class="px-6 py-1 text-white bg-blue-600 rounded">Editar</a>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <a target="_blank" href="{{ route('voucher.pdf',$v->id) }}" class="px-6 py-1 text-white bg-red-600 rounded">Ver Pdf</a>
                                        </td>
                                    </tr>
                                 @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#dataTable').DataTable();
            });
        </script>
    </div>
</div>

@endsection
