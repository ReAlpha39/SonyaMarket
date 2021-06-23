<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div>
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <div class="px-4 py-5 sm:px-6">
                                    @if ($updateMode)
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                            Edit Barang
                                        </h3>
                                    @else
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                            Tambah Barang
                                        </h3>
                                    @endif
                                </div>
                                @include('livewire.input-barang')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
