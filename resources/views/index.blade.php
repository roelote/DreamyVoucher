@extends('layouts.app2')

@section('title', 'Lista de Vouchers')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection

@section('js-top')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
@endsection

@section('content')
<div class="container mx-auto shadow-xl border mt-10 bg-white  relative">
    <div class="my-10 p-5">
            <h1 class="text-center font-bold text-2xl">VOUCHER 2022</h1>
         
            <span class="absolute right-0 top-0"><a href="{{ route('voucher.crear') }}" class="border-white block p-2 border bg-sky-600 text-white hover:bg-sky-700">CREAR NUEVO</a></span>
        <div class="container mx-auto">
            <div class="flex flex-col">
                <div class="w-full">
                    <div class="p-4 ">
                        <!-- <table> -->
                        <table id="dataTable" class="p-4 mt-5">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="p-8 text-left  text-gray-700">
                                        N°
                                    </th>
                                    <th class="p-8 text-left  text-gray-700">
                                        N° Voucher
                                    </th>
                                    <th class="p-8 text-left  text-gray-700">
                                        Servicio
                                    </th>
                                    <th class="p-8 text-left  text-gray-700">
                                        Nombre Pax
                                    </th>
                                    <th class="p-8 text-left  text-gray-700">
                                        Fecha del Servicio
                                    </th>
                                    <th class="p-8 text-left  text-gray-700">
                                        Idioma
                                    </th>
                                    <th class="p-8 text-left text-gray-700">
                                        Editar
                                    </th>
                                    <th class="p-8 text-left text-gray-700">
                                        Ver Pdf
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach($voucher as $v)
                                       <tr class="whitespace-nowrap">
                                        <td class="px-6 py-4 text-gray-900">
                                            {{$v->id}}
                                        </td>
                                        <td class="px-6 py-4 text-gray-900">
                                            {{$v->number_voucher}}
                                        </td>
                                        <td class="px-6 py-4 text-gray-900">
                                            {{$v->name_package}}
                                        </td>
                                        <td class="px-6 py-4 text-gray-900">
                                            {{$v->name_pax}}
                                        </td>
                                        <td class="px-6 py-4 text-gray-900">
                                            {{$v->date_show}}
                                        </td>
                                        <td class="px-6 py-4 text-gray-900">
                                            {{$v->language}}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('voucher.edit',$v->id) }}" class="px-6 py-1 text-white bg-blue-600 rounded">Editar</a>
                                        </td>
                                        <td class="px-6 py-4">
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



@section('scripts')

@if (session('status') == 'ok')
    <script>
            Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Voucher creado con exito! ',
            showConfirmButton: false,
            timer: 1200
            })
    </script>
@endif

@if (session('update') == 'ok')
    <script>
            Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Actualización exitosa! ',
            showConfirmButton: false,
            timer: 1200
            })
    </script>
@endif


@endsection


