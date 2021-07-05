<div>
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:gap-6">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form>
                    <div class="sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-1 gap-6">
                                @if ($updateMode)
                                    <input type="hidden" wire:model="selected_id">
                                @endif
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nama_pegawai" class="block text-sm font-medium text-gray-700">
                                        Nama Pegawai
                                    </label>
                                    <input wire:model="nama_pegawai" type="text" name="nama_pegawai" id="nama_pegawai" autocomplete="nama_barang"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="alamat" class="block text-sm font-medium text-gray-700">
                                        Alamat
                                    </label>
                                    <input wire:model="alamat" type="text" name="alamat" id="alamat" autocomplete="alamat"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="no_telp" class="block text-sm font-medium text-gray-700">
                                        No Telepon
                                    </label>
                                    <input wire:model="no_telp" type="text" name="no_telp" id="no_telp" autocomplete="no_telp"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button wire:click="closeModal()" type="button"
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Cancel
                            </button>
                            @if ($updateMode)
                                <button wire:click="update" type="button"
                                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Update
                                </button>
                            @else
                                <button wire:click.prevent="createPegawai" type="button"
                                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Save
                                </button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
