<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../">
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<meta name="description" content="The most advanced vascom." />
		<meta name="keywords" content="vascom" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="vascom" />
		<meta property="og:url" content="https://vascomm.com" />
		<meta property="og:site_name" content="vascom | vascom" />
		<!--begin::Fonts-->
		<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<style>
			/* span.menu-title{
				color: black
			}
			span.svg-icon{
				color: black
			} */
			.header{
				background: #FFFFFF !important
			}

			div#kt_header {
				z-index: 1;
			}
			.card.card-flush.h-xl-100 {
				border-radius: 12px;
			}

			button.btn.btn-secondary.buttons-collection.dropdown-toggle.buttons-colvis {
				margin-bottom: 0px;
				background-color: #009ef7;
				color: #fff;
			}

			button.btn.btn-secondary.buttons-collection.dropdown-toggle {
				margin-bottom: 0px;
				background-color: #009ef7;
				color: #fff;
			}

			button.btn.btn-secondary.add-data {
				margin-bottom: 0px;
				background-color: #009ef7;
				color: #fff;
			}

			div#kt_header_user_menu_toggle{
				margin-left: -15.25rem!important;
				margin-top: 3rem!important;
			}
			.error {
				color: blueviolet
			}

			.aside-menu .menu-item .menu-icon {
				justify-content: center;
			}

			.pagination .page-item .page-link{
				background-color: #F2F7FC;   
				border-radius: 4px;
				color: #6C6C6C;
			}

			.pagination .page-item.active .page-link{
				background-color: #3A8ABA;
				color: #fff;
			}

			.dataTables_wrapper .dataTables_paginate {
				float: left;
			}
			.dataTables_wrapper .dataTables_length {
				float: right ;
			}
			.dataTables_wrapper .dataTables_info {
				float: right ;
				padding: 1.5rem 0 0 1rem !important;
			}

			table th:first-child{
				border-radius:10px 0 0 10px;
			}

			table th:last-child{
				border-radius:0 10px 10px 0;
			}

			/* Chrome, Safari, Edge, Opera */
			input::-webkit-outer-spin-button,
			input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
			}

			/* Firefox */
			input[type=number] {
			-moz-appearance: textfield;
			}

			@media only screen and (max-width: 768px) {
				[class*="col-"] {
					width: 100%;
				}
			}

			.sidebar-active{
				background-color: #41A0E4;
			}
		</style>
		@stack('css')
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" data-kt-aside-minimize="off" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle" style="background-color: #FFFFFF">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto" id="kt_aside_logo">
						<!--begin::Logo-->
						<img src="{{ asset('img/vascom.png') }}" alt="" class="name" style="margin-left: 25px;" width="150px">
						<!--end::Logo-->
						<!--begin::Aside toggler-->
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
							<span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
									<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Aside toggler-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					@include('layouts.sidebar')
					<!--end::Aside menu-->
					
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					@include('layouts.header')
		
					@yield('content')
					<!--begin::Footer-->
					
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		
		<!--begin::Engage drawers-->
		
		
		<!--end::Modal - Invite Friend-->
		<!--end::Modals-->
		<!--begin::Javascript-->
		{{-- <script>var hostUrl = "assets/";</script> --}}
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
		<script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/type.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/details.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/finance.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/complete.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/main.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
		<!--end::Page Custom Javascript-->
		<script src="{{ asset('assets/js/jquery-validation.js') }}"></script>
		<script src="{{ asset('assets/js/sweetalert.js') }}"></script>
		<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
		
		<script>
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
		</script>
		<!--end::Javascript-->
		@if(session('sukses'))
    <script type="text/javascript">
        Swal.fire({
                  title: "Good job!",
                  text: "{{ session("sukses") }}",
                  icon: "success",
                  type: 'success',
                  confirmButtonClass: 'btn btn-primary',
                  buttonsStyling: false,
                  showConfirmButton: false,
                });
    </script>
    @endif
    @if(session('error'))
    <script type="text/javascript">
        Swal.fire({
                  title: "Error!",
                  text: "{{ session("error") }}",
                  icon: "error",
                  type: 'error',
                  confirmButtonClass: 'btn btn-primary',
                  buttonsStyling: false,
                  showConfirmButton: false,
                });
    </script>
    @endif
		@stack('js')
	</body>
	<!--end::Body-->
</html>