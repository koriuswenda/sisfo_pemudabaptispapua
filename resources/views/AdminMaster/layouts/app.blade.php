
<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" href="{{ asset('./assets/img/favicon.png') }}">
		<title>{{ $siteTitle .' -' . $siteDescription ?? '' }}</title>

		<!-- Core CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<body>
		<!-- App Start-->
		<div id="root">
			<!-- App Layout-->
			<div class="app-layout-modern flex flex-auto flex-col">
				<div class="flex flex-auto min-w-0">
					<!-- Side Nav start-->
                    @include('AdminMaster.layouts.includes.sidebar')
					<!-- Side Nav end-->

					<!-- Header Nav start-->
					<div class="flex flex-col flex-auto min-h-screen min-w-0 relative w-full bg-white border-l border-gray-200">
                        @include('AdminMaster.layouts.includes.topbar')
						<div class="h-full flex flex-auto flex-col justify-between">
							<!-- Content start -->
							<main class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                    <div class="flex flex-col gap-4">

                                        <!-- ============================================================== -->
                                        <!-- Start Page Content here -->
                                        <!-- ============================================================== -->

                                        @yield('content')

                                        <!-- ============================================================== -->
                                        <!-- End Page content -->
                                        <!-- ============================================================== -->
                                    </div>
                                </div>
							</main>
							<!-- Content end -->
							<!-- Footer start -->
							@include('AdminMaster.layouts.includes.footer')
							<!-- Footer end -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Core Vendors JS -->
		<script src="{{asset('assets/js/vendors.min.js')}}"></script>

		<!-- Other Vendors JS -->
        <script src="{{asset('assets/vendors/apexcharts/apexcharts.js')}}"></script>

		<!-- Page js -->
        <script src="{{asset('assets/js/pages/project-dashboard.js')}}"></script>

		<!-- Core JS -->
        <script src="{{asset('assets/js/app.min.js')}}"></script>

	</body>

</html>
