
<div class="mt-4">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-2 border p-2" x-data="{openModalDelete: false}">
        <div class="flex justify-between">
            <div class="flex gap-1 items-center">
                <span>Tampilkan</span>
                <div
                    class="relative text-center"
                    x-data="{
                        isSelectOpen:false,
                        selected: 10,
                        select(val){
                            this.selected = val;
                            this.isSelectOpen = false;
                        }
                    }"
                >
                    <div class="border p-2 w-16 cursor-pointer rounded-lg" :class="isSelectOpen ? 'border-gray-600' : 'border-gray-400'" @click="isSelectOpen = !isSelectOpen">
                        <span class="mr-1" x-text="selected">10</span> <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="border absolute bg-white top-10 left-0 w-16 rounded-lg" x-show="isSelectOpen" @click="isSelectOpen = !isSelectOpen" @click.away="isSelectOpen = false">
                        <a href="#" class="block px-2 hover:bg-green-800 hover:text-white" @click="select(10)">10</a>
                        <a href="#" class="block px-2 hover:bg-green-800 hover:text-white" @click="select(15)">25</a>
                        <a href="#" class="block px-2 hover:bg-green-800 hover:text-white" @click="select(50)">50</a>
                        <a href="#" class="block px-2 hover:bg-green-800 hover:text-white" @click="select(100)">100</a>
                    </div>
                </div>
                <span>data</span>
            </div>
            <div class="relative w-1/3">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" class="block w-full px-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari..." required />
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 mt-4 border">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama Lengkap
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    No Hp
                </th>
                <th scope="col" class="px-6 py-3">
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    Peran
                </th>
                <th scope="col" class="px-6 py-3">
                    Aktif
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class=""></span>
                </th>
            </tr>
            </thead>
            <tbody>
                <tr class="bg-white hover:bg-gray-50 odd:bg-white even:bg-gray-100">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Admin Master
                    </th>
                    <td class="px-6 py-4">
                        admin@dlhk.kotajayapura.go.id
                    </td>
                    <td class="px-6 py-4">
                        08211234512345
                    </td>
                    <td class="px-6 py-4">
                        adminmaster
                    </td>
                    <td class="px-6 py-4">
                        adminmaster
                    </td>
                    <td class="text-center">
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        </label>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end items-center text-lg ">
                            <span class="cursor-pointer p-2 hover:text-indigo-600">
                                <i class="fa-solid fa-edit text-sm"></i>
                            </span>
                            <span class="cursor-pointer p-2 hover:text-red-500" @click="openModalDelete = true">
                                <i class="fa-solid fa-trash text-sm"></i>
                            </span>
                        </div>
                    </td>
                </tr>
                <tr class="bg-white hover:bg-gray-50 odd:bg-white even:bg-gray-100">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Samuel S.Bos
                    </th>
                    <td class="px-6 py-4">
                        samuel.sbos@gmail.com
                    </td>
                    <td class="px-6 py-4">
                        08211234512345
                    </td>
                    <td class="px-6 py-4">
                        samuel.sbos
                    </td>
                    <td class="px-6 py-4">
                        operator
                    </td>
                    <td class="text-center">
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        </label>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end items-center text-lg ">
                            <span class="cursor-pointer p-2 hover:text-indigo-600">
                                <i class="fa-solid fa-edit text-sm"></i>
                            </span>
                            <span class="cursor-pointer p-2 hover:text-red-500" @click="openModalDelete = true">
                                <i class="fa-solid fa-trash text-sm"></i>
                            </span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Modal Delete -->
        <x-modal-alpine modalName="openModalDelete" title="Peringatan!">
            <div class="p-4 text-center">
                <svg class="mx-auto mb-4 text-gray-700 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah anda yakin ingin menghapus data ini?</h3>
                <button @click="openModalDelete=false" wire:click.prevent="delete()" data-modal-hide="popup-modal" type="button" class="bg-cyan-500 text-white px-4 py-2.5 rounded-lg hover:bg-cyan-600">
                    Ya, saya yakin
                </button>
                <button @click="openModalDelete=false" data-modal-hide="popup-modal" type="button" class="bg-red-600 hover:bg-red-500 text-white px-4 py-2.5 rounded-lg ml-4">Tidak, batal</button>
            </div>
        </x-modal-alpine>
    </div>

    <x-pagination/>
</div>

