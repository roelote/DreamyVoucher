<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dreamy tours') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mx-auto">
                        <div class="flex flex-col">
                            <div class="w-full">
                                <div class="p-4 border-b border-gray-200 shadow">
                                    <!-- <table> -->
                                    <table id="dataTable" class="p-4">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th class="p-8 text-xs text-gray-500">
                                                    ID
                                                </th>
                                                <th class="p-8 text-xs text-gray-500">
                                                    Name
                                                </th>
                                                <th class="p-8 text-xs text-gray-500">
                                                    Email
                                                </th>
                                                <th class="p-8 text-xs text-gray-500">
                                                    Created_at
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    Edit
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    Delete
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                            <tr class="whitespace-nowrap">
                                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                                    1
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    <div class="text-sm text-gray-900">
                                                        Jon doe 1
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    <div class="text-sm text-gray-500">jhondoe@example.com</div>
                                                </td>
                                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                                    2021-1-12
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    <a href="#" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</a>
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    <a href="#" class="px-4 py-1 text-sm text-white bg-red-400 rounded">Delete</a>
                                                </td>
                                            </tr>
                                            <tr class="whitespace-nowrap">
                                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                                    2
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    <div class="text-sm text-gray-900">
                                                        Jon doe 2
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    <div class="text-sm text-gray-500">jhondoe@example.com</div>
                                                </td>
                                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                                    2021-1-12
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    <a href="#" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</a>
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    <a href="#" class="px-4 py-1 text-sm text-white bg-red-400 rounded">Delete</a>
                                                </td>
                                            </tr>
                                            <tr class="whitespace-nowrap">
                                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                                    3
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    <div class="text-sm text-gray-900">
                                                        Jon doe 3
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    <div class="text-sm text-gray-500">jhondoe@example.com</div>
                                                </td>
                                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                                    2021-1-12
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    <a href="#" class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Edit</a>
                                                </td>
                                                <td class="px-6 py-4 text-center">
                                                    <a href="#" class="px-4 py-1 text-sm text-white bg-red-400 rounded">Delete</a>
                                                </td>
                                            </tr>
            
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
        </div>
    </div>
</x-app-layout>
