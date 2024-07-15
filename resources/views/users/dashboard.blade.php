@php
$var_page = 'Dashboard';
$var_tab = 'Dashboard';
$tab = '';
if($var_tab !== '')
{
$tab = $var_tab;
}else
{
$tab = 'Dashboard';
}
@endphp

<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Dashboard</title>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="PipCollective" />
		<meta property="og:url" content="https://www.pipcollective.com" />
		<meta property="og:site_name" content="PipCollective" />
		<link rel="canonical" href="http://index.html" />
		<link rel="shortcut icon" href="{{asset('assets/media/logos/logo.png')}}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				
<div style="background-image: url('{{ asset('assets/media/auth/bg.png') }}'); background-size:cover" id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}" >
    <!--begin::Header container-->
    <div class="app-container container-xxl d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
        <!--begin::Header mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
                <i class="ki-outline ki-abstract-14 fs-2"></i>
            </div>
        </div>
        <!--end::Header mobile toggle-->
        <!--begin::Logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-18">
            <a href="index.html">
                <img alt="Logo" src="{{asset('assets/media/logos/logo.png')}}" class="h-45px d-sm-none" />
                <img alt="Logo" src="{{asset('assets/media/logos/logo.png')}}" class="h-45px d-none d-sm-block" />
            </a>
        </div>


        <!--end::Logo-->
        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <!--begin::Menu-->
                <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
                    <!--begin:Menu item-->
                    @if(auth::user()->role == 'users')
					<div class="menu-item me-0 me-lg-2 @if($tab == 'Dashboard') here menu-here-bg @endif">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <a href="{{url('user/dashboard')}}">
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </span>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                       

                    <!--begin:Menu item-->
                    <div class="menu-item me-0 me-lg-2 @if($tab == 'My Accounts') here menu-here-bg @endif">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <a href="{{url('user/my-accounts')}}">
                                <span class="menu-title">My Accounts</span>
                            </a>
                        </span>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->

                    <div class="menu-item me-0 me-lg-2 @if($tab == 'EA') here menu-here-bg @endif">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <a href="{{url('user/eadownload')}}">
                                <span class="menu-title">EA & Setfiles</span>
                            </a>
                        </span>
                        <!--end:Menu link-->
                    </div>

                    <div class="menu-item me-0 me-lg-2 @if($tab == 'Calculater') here menu-here-bg @endif">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <a href="{{url('user/upload-history')}}">
                                <span class="menu-title">Calculators</span>
                            </a>
                        </span>
                        <!--end:Menu link-->
                    </div>

                    <div class="menu-item me-0 me-lg-2 @if($tab == 'User-Education') here menu-here-bg @endif">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <a href="{{url('user/user-guide')}}">
                                <span class="menu-title">Education</span>
                            </a>
                        </span>
                        <!--end:Menu link-->
                    </div>
                    @endif

                    <!--begin:Menu item-->
               
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                  
                    <!--end:Menu item-->


                </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->
            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">
                <!--begin::Chat-->
                <div class="app-navbar-item ms-1 ms-lg-5">
                    <!--begin::Menu wrapper-->
                    <div class="btn btn-icon btn-custom btn-active-color-primary w-35px h-35px w-md-40px h-md-40px position-relative">
                        

                        <div class="menu-item" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-menu-offset="-15px, 0">
                            <a href="#" class="menu-link">
                                <span class="menu-title position-relative"> 
                                <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                    <i class="ki-outline ki-night-day theme-light-show fs-1"></i>
                                    <i class="ki-outline ki-moon theme-dark-show fs-1"></i>
                                </span></span>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-outline ki-night-day fs-2"></i>
                                        </span>
                                        <span class="menu-title">Light</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-outline ki-moon fs-2"></i>
                                        </span>
                                        <span class="menu-title">Dark</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-0">
                                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="ki-outline ki-screen fs-2"></i>
                                        </span>
                                        <span class="menu-title">System</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Chat-->
                <!--begin::User menu-->
                <div class="app-navbar-item ms-5" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <img class="symbol symbol-circle symbol-35px symbol-md-40px" src="{{asset('assets/media/avatars/300-13.jpg')}}" alt="user" />
                    </div>
                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="{{asset('assets/media/avatars/300-13.jpg')}}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">{{auth::user()->name}} 
                                    </div>
                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{auth::user()->email}}</a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="my-profile.html" class="menu-link px-5">My Profile</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="settings.html" class="menu-link px-5">
                                <span class="menu-text">Settings</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" role="button"  class="menu-link px-5">Sign Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                           </form>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::User menu-->
            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Toolbar-->
					<div id="kt_app_toolbar" class="app-toolbar py-6" style="background-image: url('{{ asset('assets/media/auth/bg.png') }}'); background-size: cover;">
						<!--begin::Toolbar container-->
						<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex align-items-start">
							<!--begin::Toolbar container-->
							<div class="d-flex flex-column flex-row-fluid">
								<!--end::Toolbar wrapper=-->
								<!--begin::Toolbar wrapper=-->
								<div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-lg-10 pt-sm-6 pb-7">
									<!--begin::Page title-->
									<div class="page-title me-5">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-white fw-bold fs-2 flex-column justify-content-center my-2">Dashboard</h1>

										<!--begin::Toolbar wrapper-->
										<div class="d-flex align-items-center pt-1">
											<ul class="breadcrumb breadcrumb-separatorless fw-semibold">
												<!--begin::Item-->
												<li class="breadcrumb-item text-white fw-bold lh-1">
													<a href="index.html" class="text-gray-600 text-hover-primary">
														<i class="ki-outline ki-home text-gray-600 fs-6"></i>
														Dashboard
													</a>
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												
												<!--end::Item-->
												<!--begin::Item-->
												
												<!--end::Item-->
											</ul>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Page title-->
								</div>
								<!--end::Toolbar wrapper=-->
							</div>
							<!--end::Toolbar container=-->
						</div>
						<!--end::Toolbar container-->
					</div>
					<!--end::Toolbar-->
					<!--begin::Wrapper container-->
					<div class="app-container container-xxl">
						<!--begin::Main-->
						<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
							<!--begin::Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								<!--begin::Content-->
								<div id="kt_app_content" class="app-content flex-column-fluid">
									<!--begin::Row-->
									<div class="row g-5 g-xl-8">
										
										<!--begin::Col-->
										<div class="col-xl-12 ps-xl-6">
											<div class="row">
												<div class="col-xl-8">
													<!--begin::Sign-in Method-->
											        <div class="card mb-5 mb-xl-7">
											            <!--begin::Card header-->
											            <div class="card-header border-0 cursor-pointer" role="button">
											                <div class="card-title m-0">
											                    <h1 class="fw-bold m-0 ">Welcome to PipCollective 🎉</h1>
											                </div>
											            </div>
											            <!--end::Card header-->
											            <!--begin::Card body-->
											            <div class="card-body border-top">
											                <iframe src="https://player.vimeo.com/video/456269546?h=0ed43adde6&color=ffffff&title=0&byline=0&portrait=0" class="vimeo_video" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
											                
											            </div>
											            <!--end::Card body-->
											        </div>
											        <!--end::Sign-in Method-->
												</div>
												<div class="col-xl-4">
													<div class="row">
														<div class="col-md-12 col-12 mb-5">
									                        <div class="card">
									                            <div class="card-body">
									                                <div class="d-flex flex-column gap-5">
									                                    <div>
									                                        <h3>Checkout our self learning AI support bot, knowledgeable on all things we do here at ThePipCollective.</h3>
									                                    </div>
									                                    <div>
									                                        <a href="#" class="text-primary">Click the chat icon on the bottom right of this page or our website.</a>
									                                    </div>
									                                </div>
									                            </div>
									                        </div>
									                    </div>

									                    <div class="col-md-12 col-12 mb-5">
									                        <div class="card">
									                            <div class="card-body">
									                                <div class="d-flex flex-column gap-5">
									                                    <div>
									                                        <h3>Get started now with ThePipCollective organization Pack</h3>
									                                    </div>
									                                    <div>
									                                        <button class="btn btn-primary btn-block w-100">Download Here</button>
									                                    </div>
									                                </div>
									                            </div>
									                        </div>
									                    </div>

									                </div>
												</div>
											</div>
											
											
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->

									<div class="row">
										<div class="col-md-4 col-12 mb-5">
					                        <div class="card">
					                            <div class="card-body">
					                                <div class="d-flex flex-column">
					                                    <div class="d-flex flex-md-row flex-row align-items-center gap-5">
					                                        <div>
					                                            <i class="fa-brands fa-discord fs-2hx"></i>
					                                        </div>
					                                        <div class="d-flex flex-column">
					                                            <div>
					                                                <h3>Join our Discord</h3>
					                                            </div>
					                                            <div>
					                                                <p>Full of like minded traders, all on the journey to success</p>
					                                            </div>
					                                        </div>
					                                    </div>
					                                    <div>
					                                        <button class="btn btn-primary btn-block w-100">Join Our Discord</button>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>

					                    <div class="col-md-4 col-12 mb-5">
					                        <div class="card">
					                            <div class="card-body">
					                                <div class="d-flex flex-column">
					                                    <div class="d-flex flex-md-row flex-row align-items-center gap-5">
					                                        <div>
					                                            <i class="ki-duotone ki-question fs-3hx">
					                                             <span class="path1"></span>
					                                             <span class="path2"></span>
					                                            </i>
					                                        </div>
					                                        <div class="d-flex flex-column">
					                                            <div>
					                                                <h3>Need Help</h3>
					                                            </div>
					                                            <div>
					                                                <p>Create a ticket now to get the support you need from our team?</p>
					                                            </div>
					                                        </div>
					                                    </div>
					                                    <div>
					                                        <button class="btn btn-primary btn-block w-100">Create a Support ticket</button>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>

					                    <div class="col-md-4 col-12 mb-5">
					                        <div class="card">
					                            <div class="card-body">
					                                <div class="d-flex flex-column">
					                                    <div class="d-flex flex-md-row flex-row align-items-center gap-5">
					                                        <div>
					                                            <i class="ki-duotone ki-cloud-download fs-3hx">
					                                             <span class="path1"></span>
					                                             <span class="path2"></span>
					                                            </i>
					                                        </div>
					                                        <div class="d-flex flex-column">
					                                            <div>
					                                                <h3>Download</h3>
					                                            </div>
					                                            <div>
					                                                <p>Get started now with The PipCollective organization Pack</p>
					                                            </div>
					                                        </div>
					                                    </div>
					                                    <div>
					                                        <button class="btn btn-primary btn-block w-100">Download</button>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
									</div>

								</div>
								<!--end::Content-->
							</div>
							<!--end::Content wrapper-->
							
						</div>
						<!--end:::Main-->
					</div>
					<!--end::Wrapper container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-outline ki-arrow-up"></i>
		</div>
		<!--end::Scrolltop-->

		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>