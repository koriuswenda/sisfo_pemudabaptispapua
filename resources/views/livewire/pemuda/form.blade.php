<main class="h-full">
    <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
        <div class="container mx-auto">
            <form wire:submit.prevent="save">
                <div class="form-container vertical">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                        <div class="lg:col-span-2">
                            <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                <div class="card-body">
                                    <div class="form-item flex gap-2">
                                        <div class="w-1/2">
                                            <x-admin.input label="Nama Depan" id="nama_depan" name="pemuda.nama_depan" :isDisabled="$isDisabled" />
                                        </div> <!-- input item end -->

                                        <div class="w-1/2">
                                            <x-admin.input label="Nama Tengah" id="nama_tengah" name="pemuda.nama_tengah" :isDisabled="$isDisabled" />
                                        </div> <!-- input item end -->

                                        <div class="w-1/2">
                                            <x-admin.input label="Nama Belakang" id="nama_belakang" name="pemuda.nama_belakang" :isDisabled="$isDisabled" />
                                        </div> <!-- input item end -->

                                    </div>

                                    <div class="form-item flex gap-2">
                                        <div class="w-1/3">
                                            <x-admin.select label="Jenis Kelamin" id="jenis-kelamin" optionName="jenis_kelamin" :options="$jenisKelamin" name="pemuda.jenis_kelamin_id"  :isDisabled="$isDisabled" />
                                        </div> <!-- input item end -->
                                    </div>

                                    <div class="form-item flex gap-2">

                                        <div class="w-1/3">
                                            <x-admin.input label="Tempat, Tanggal Lahir" id="tempat_tanggal_lahir"
                                                name="pemuda.tempat_tanggal_lahir" :isDisabled="$isDisabled" />
                                        </div> <!-- input item end -->

                                        <div class="w-1/3">
                                            <x-admin.input label="Nomor HP" id="nomor_hp"
                                                name="pemuda.nomor_hp" :isDisabled="$isDisabled" />
                                        </div> <!-- input item end -->

                                        <div class="w-1/3">
                                            <x-admin.input label="Usia" id="usia"
                                                name="pemuda.usia" :isDisabled="$isDisabled" />
                                        </div> <!-- input item end -->

                                    </div>

                                    <div class="form-item flex gap-2">
                                        <div class="w-full">
                                            <x-admin.textarea label="Alamat" id="alamat" name="pemuda.alamat" :isDisabled="$isDisabled" /> <!-- input item end -->
                                        </div> <!-- input item end -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                <div class="card-body">

                                    <div class="form-item flex gap-2">

                                        <div class="w-full">
                                            <x-admin.upload-file title="Foto Profil" subtitle="Unggah foto pemuda ukuran persegi" id="foto" label="foto" name="pemuda.foto" :img="isset($pemuda['foto']) && !empty($pemuda) ? $pemuda['foto'] : ''" :isDisabled="$isDisabled" />
                                        </div> <!-- input item end -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @if (!$isDisabled)
                        <div id="stickyFooter" class="sticky -bottom-1 -mx-8 px-8 flex items-center justify-end py-4">
                            <div class="md:flex items-center">
                                <button class="btn btn-default btn-sm ltr:mr-2 rtl:ml-2" type="button">Discard</button>
                                <button class="btn btn-solid btn-sm" type="submit">
                                    <span class="flex items-center justify-center">
                                        <span class="text-lg">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 1024 1024" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M893.3 293.3L730.7 130.7c-7.5-7.5-16.7-13-26.7-16V112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V338.5c0-17-6.7-33.2-18.7-45.2zM384 184h256v104H384V184zm456 656H184V184h136v136c0 17.7 14.3 32 32 32h320c17.7 0 32-14.3 32-32V205.8l136 136V840zM512 442c-79.5 0-144 64.5-144 144s64.5 144 144 144 144-64.5 144-144-64.5-144-144-144zm0 224c-44.2 0-80-35.8-80-80s35.8-80 80-80 80 35.8 80 80-35.8 80-80 80z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span class="ltr:ml-1 rtl:mr-1">Save</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
</main>
