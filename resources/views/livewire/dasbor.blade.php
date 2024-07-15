<main class="h-full">
    <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
        <div class="flex flex-col gap-4">

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div>
                <h4 class="mb-1">Hello, {{Auth::user()->username}}!</h4>
                <p>Selamat datang di halaman utama.</p>
            </div>

            <div class="flex flex-col xl:flex-row gap-4">
                <div class="flex flex-col gap-4 flex-auto">

                    <div class="grid grid-cols-1 lg:grid-cols-3 xl:grid-cols-3 gap-4">
                        
                        <a href="{{ route('pemuda') }}" class="hover:shadow-lg transition duration-200">
                            <div class="card card-layout-frame">
                                <div class="card-body">
                                    <div class="flex items-center gap-4">
                                        <span class="avatar avatar-rounded bg-amber-100 text-amber-600 avatar-lg text-3xl" data-avatar-size="55">
                                            <i class="fa-solid fa-users"></i>
                                        </span>
                                        <div>
                                            <div class="flex gap-1.5 items-end mb-2">
                                                <h3 class="font-bold leading-none">{{$totalPemuda}}</h3>
                                                <p class="font-semibold">Pemuda</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- end item -->
                        
                        <a href="{{ url('pemuda?search=Laki-Laki') }}" class="hover:shadow-lg transition duration-200">
                            <div class="card card-layout-frame">
                                <div class="card-body">
                                    <div class="flex items-center gap-4">
                                        <span class="avatar avatar-rounded bg-amber-100 text-amber-600 avatar-lg text-3xl" data-avatar-size="55">
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                        <div>
                                            <div class="flex gap-1.5 items-end mb-2">
                                                <h3 class="font-bold leading-none">{{$totalPemudaLakiLaki}}</h3>
                                                <p class="font-semibold">Laki-Laki</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>                        
                        <!-- end item -->
                        
                        <a href="{{ url('pemuda?search=Perempuan') }}" class="hover:shadow-lg transition duration-200">
                        <div class="card card-layout-frame">
                            <div class="card-body">
                                <div class="flex items-center gap-4">
                                    <span class="avatar avatar-rounded bg-amber-100 text-amber-600 avatar-lg text-3xl" data-avatar-size="55">
                                        <i class="fa-solid fa-user"></i>
                                    </span>
                                    <div>
                                        <div class="flex gap-1.5 items-end mb-2">
                                            <h3 class="font-bold leading-none">{{$totalPemudaPerempuan}}</h3>
                                            <p class="font-semibold">Perempuan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                        <!-- end item -->

                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 xl:grid-cols-3 gap-4">

                        <a href="{{ route('wilayah') }}" class="hover:shadow-lg transition duration-200">
                            <div class="card card-layout-frame">
                                <div class="card-body">
                                    <div class="flex items-center gap-4">
                                        <span class="avatar avatar-rounded bg-amber-100 text-amber-600 avatar-lg text-3xl" data-avatar-size="55">
                                            <i class="fa-solid fa-map"></i>
                                        </span>
                                        <div>
                                            <div class="flex gap-1.5 items-end mb-2">
                                                <h3 class="font-bold leading-none">{{$totalWilayah}}</h3>
                                                <p class="font-semibold">Wilayah</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- end item -->

                        <a href="{{ route('gereja') }}" class="hover:shadow-lg transition duration-200">
                            <div class="card card-layout-frame">
                                <div class="card-body">
                                    <div class="flex items-center gap-4">
                                        <span class="avatar avatar-rounded bg-amber-100 text-amber-600 avatar-lg text-3xl" data-avatar-size="55">
                                            <i class="fa-solid fa-church"></i>
                                        </span>
                                        <div>
                                            <div class="flex gap-1.5 items-end mb-2">
                                                <h3 class="font-bold leading-none">{{$totalGereja}}</h3>
                                                <p class="font-semibold">Gereja</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- end item -->

                    </div>
                    

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
    </div>
</main>
