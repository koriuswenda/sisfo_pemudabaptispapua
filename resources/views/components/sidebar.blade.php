<div class="side-nav side-nav-transparent side-nav-expand">
    <div class="side-nav-header">
        <div class="logo px-6">
            <img src="{{asset('assets/img/logo/logo-light-full.png')}}" alt="Logo SIPP DLHK">
        </div>
    </div>
    <div class="side-nav-content relative side-nav-scroll">
        <nav class="menu menu-transparent px-4 pb-4">

            @php
                $segment = request()->segment(1);
                $active = 'bg-[#4F46E5] rounded-lg pl-2';
            @endphp

            <div class="menu-group mt-5">
                <ul>
                    <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2 {{$segment == 'dasbor' ? $active : ''}}">
                        <a class="menu-item-link hover:text-black/70 {{$segment == 'dasbor' ? 'text-white' : ''}}" href="{{ route('dasbor') }}">
                            <i class="fa-solid fa-dashboard text-lg"></i>
                            <span class="menu-item-text">Dasbor</span>
                        </a>
                    </li>
                </ul>
            </div>
            {{-- menu-group end --}}

            <div class="menu-group">
                <div class="menu-title menu-title-transparent">
                    Data Master
                </div>
                <ul>
                    <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2 {{$segment == 'pemuda' ? $active : ''}}">
                        <a class="menu-item-link hover:text-black/70 {{$segment == 'pemuda' ? 'text-white' : ''}}" href="{{ route('pemuda') }}">
                            <i class="fa-solid fa-users text-lg"></i>
                            <span class="menu-item-text">Data Pemuda</span>
                        </a>
                    </li>
                    <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2 {{$segment == 'gereja' ? $active : ''}}">
                        <a class="menu-item-link hover:text-black/70 {{$segment == 'gereja' ? 'text-white' : ''}}" href="{{ route('gereja') }}">
                            <i class="fa-solid fa-users text-lg"></i>
                            <span class="menu-item-text">Data Gereja</span>
                        </a>
                    </li>
                    <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2 {{$segment == 'wilayah' ? $active : ''}}">
                        <a class="menu-item-link hover:text-black/70 {{$segment == 'wilayah' ? 'text-white' : ''}}" href="{{ route('wilayah') }}">
                            <i class="fa-solid fa-users text-lg"></i>
                            <span class="menu-item-text">Data Wilayah</span>
                        </a>
                    </li>
                </ul>
            </div>
            {{-- menu-group end --}}

            <div class="menu-group">
                <div class="menu-title menu-title-transparent">
                    Informasi & Publikasi
                </div>
                <ul>
                    <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2 {{$segment == 'pengumuman' ? $active : ''}}">
                        <a class="menu-item-link hover:text-black/70 {{$segment == 'pengumuman' ? 'text-white' : ''}}" href="{{ route('pengumuman') }}">
                            <i class="fa-solid fa-info text-lg"></i>
                            <span class="menu-item-text">Pengumuman</span>
                        </a>
                    </li>
                    <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2 {{$segment == 'agenda' ? $active : ''}}">
                        <a class="menu-item-link hover:text-black/70 {{$segment == 'agenda' ? 'text-white' : ''}}" href="{{ route('agenda') }}">
                            <i class="fa-solid fa-calendar text-lg"></i>
                            <span class="menu-item-text">Agenda Kegiatan</span>
                        </a>
                    </li>
                    <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2 {{$segment == 'galeri' ? $active : ''}}">
                        <a class="menu-item-link hover:text-black/70 {{$segment == 'galeri' ? 'text-white' : ''}}" href="{{ route('galeri') }}">
                            <i class="fa-solid fa-image text-lg"></i>
                            <span class="menu-item-text">Galeri</span>
                        </a>
                    </li>
                    <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2 {{$segment == 'jadwal' ? $active : ''}}">
                        <a class="menu-item-link hover:text-black/70 {{$segment == 'jadwal' ? 'text-white' : ''}}" href="{{ route('jadwal') }}">
                            <i class="fa-solid fa-calendar-check text-lg"></i>
                            <span class="menu-item-text">Jadwal Ibadah</span>
                        </a>
                    </li>
                </ul>
            </div>
            {{-- menu-group end --}}
            
            
            @hasanyrole('adminmaster')

            {{-- {{ Auth::user()->roles->pluck('name')[0] ?? 'adminmaster' }} --}}

            <div class="menu-group">
                <div class="menu-title menu-title-transparent">
                    Pengaturan
                </div>

                <ul>
                    <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2">
                        <a class="menu-item-link" href="{{ route('dasbor') }}">
                            <i class="fa-solid fa-users text-lg"></i>
                            <span class="menu-item-text">Pengguna</span>
                        </a>
                    </li>
                    <li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2">
                        <a class="menu-item-link" href="{{ route('dasbor') }}">
                            <i class="fa-solid fa-gear text-lg"></i>
                            <span class="menu-item-text">Informasi Situs</span>
                        </a>
                    </li>
                </ul>

            </div>
            {{-- menu-group end --}}
            
            @endhasanyrole

            @hasanyrole('operatorsinode|operatorwilayah|operatorgereja|adminmaster')

            
            {{-- menu-group end --}}
            
            @endhasanyrole

        </nav>
    </div>
</div>
