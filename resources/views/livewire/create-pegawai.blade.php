<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Data Pegawai
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        Sonya Market
                    </p>
                </div>
                @if (session()->has('message'))
                    <div class="alert alert-info bg-green-100 text-green-800 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                        role="alert">
                        <div class="flex">
                            <div>
                                <p class="text-sm">{{ session('message') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="px-8 py-3">
                    <button wire:click="openModal()"
                        class="inline-flex items-center px-3 py-1 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Create New
                    </button>
                </div>
                @if ($isOpen)
                    @include('livewire.popup-pegawai')
                @endif
                <div class="border-t border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nama Pegawai
                                </th>
                                <th scope="col"
                                    class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Alamat
                                </th>
                                <th scope="col"
                                    class="px-8 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    No Telepon
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($pegawai as $row)
                                <tr>
                                    <td class="px-8 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            {{ $row->nama_pegawai }}
                                        </div>
                                    </td>
                                    <td class="px-8 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            {{ $row->alamat }}
                                        </div>
                                    </td>
                                    <td class="px-8 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">
                                            {{ $row->no_telp}}
                                        </div>
                                    </td>
                                    <td class="py-2 whitespace-nowrap">
                                        <button wire:click="edit({{ $row->id }})" type="button"
                                            class="inline-flex items-center px-3 py-1 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                            Edit
                                        </button>
                                        <button wire:click="delete({{ $row->id }})" type="button"
                                            class="inline-flex items-center px-3 py-1 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
