
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection

@section('js-top')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Voucher 2022') }}
        </h2>
    </x-slot>
<div class="container mx-auto shadow relative bg-white">
    <div class="my-10 p-5">
        <h1 class="text-center font-bold text-2xl">VOUCHER 2022</h1>
     
        <span class="absolute right-1 top-1"><a href="" class="border-white block rounded-lg p-2 border bg-emerald-600 text-white hover:bg-emerald-700">CREAR NUEVO</a></span>
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
</x-app-layout>
