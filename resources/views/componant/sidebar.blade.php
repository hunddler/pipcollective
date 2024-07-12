@php
$tab = '';
if($var_tab !== '')
{
$tab = $var_tab;
}else
{
$tab = 'Education';
}
@endphp

<div class="row mb-5 mb-xl-8 g- g-xl-8">
    <!--begin::Col-->
    @if(auth::user()->role == 'admin')
    <div class="col-12">
        <!--begin::Card-->
        @if($tab == 'Education')
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('admin/user-guide')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                     <i class="ki-outline ki-document fs-2x ms-n1 text-gray-500 primary-text"></i>
                    <span class="fs-4 fw-bold  @if(url()->current() == url('admin/user-guide')) primary-text @endif">User Guide</span>
                </div>
            </div>
            <div>
                @if (url()->current() == url('admin/user-guide')) <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> @endif
            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('admin/courses')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-file fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold @if (url()->current() == url('admin/courses')) primary-text @endif ">Courses</span>
                </div>
            </div>
            <div>
                @if (url()->current() == url('admin/courses')) <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> @endif

            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('admin/inputs')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-exit-down fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold @if (url()->current() == url('admin/inputs')) primary-text @endif ">Inputs</span>
                </div>
            </div>
            <div>
                @if (url()->current() == url('admin/inputs')) <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> @endif
            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('admin/setfiles')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-receipt-square fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold @if (url()->current() == url('admin/setfiles')) primary-text @endif ">Setfiles</span>
                </div>
            </div>
            <div>
                @if (url()->current() == url('admin/setfiles')) <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> @endif
            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('admin/faqs')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-message-question fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold @if (url()->current() == url('admin/faqs')) primary-text @endif">FAQs</span>
                </div>
            </div>
            <div>
                @if (url()->current() == url('admin/faqs')) <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> @endif
            </div>
        </a>
        @else
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('admin/accounts')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-document fs-2x ms-n1 text-gray-500 primary-text "></i>
                    <span class="fs-4 fw-bold primary-text @if (url()->current() == url('admin/accounts')) primary-text @endif">Accounts</span>
                </div>
            </div>
            <div>
                <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i>
            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
      
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('admin/upload-ea')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-file fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold @if (url()->current() == url('admin/upload-ea')) primary-text @endif">Upload EA</span>
                </div>
            </div>
            <div>
                @if (url()->current() == url('admin/upload-ea')) <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> @endif
            </div>
        </a>
        @endif
        <!--end::Card-->
    </div>
    @endif

    @if(auth::user()->role == 'users')
    <div class="col-12">
        <!--begin::Card-->
        @if($tab == 'User-Education')
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('user/user-guide')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                     <i class="ki-outline ki-document fs-2x ms-n1 text-gray-500 primary-text"></i>
                    <span class="fs-4 fw-bold  @if(url()->current() == url('user/user-guide')) primary-text @endif">User Guide</span>
                </div>
            </div>
            <div>
                @if (url()->current() == url('user/user-guide')) <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> @endif
            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('user/courses')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-file fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold @if (url()->current() == url('user/courses')) primary-text @endif ">Courses</span>
                </div>
            </div>
            <div>
                @if (url()->current() == url('user/courses')) <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> @endif

            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('user/inputs')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-exit-down fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold @if (url()->current() == url('user/inputs')) primary-text @endif ">Inputs</span>
                </div>
            </div>
            <div>
                @if (url()->current() == url('user/inputs')) <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> @endif
            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
   
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('user/faqs')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-message-question fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold @if (url()->current() == url('user/faqs')) primary-text @endif">FAQs</span>
                </div>
            </div>
            <div>
                @if (url()->current() == url('user/faqs')) <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> @endif
            </div>
        </a>
        @endif

        @if($tab == 'Calculater')
        {{-- <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('user/user-guide')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                     <i class="ki-outline ki-document fs-2x ms-n1 text-gray-500 primary-text"></i>
                    <span class="fs-4 fw-bold  @if(url()->current() == url('user/user-guide')) primary-text @endif">User Guide</span>
                </div>
            </div>
            <div>
                @if (url()->current() == url('user/user-guide')) <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> @endif
            </div>
        </a> --}}
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('user/upload-history')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-file fs-2x ms-n1 text-gray-500 primary-text"></i>
                    <span class="fs-4 fw-bold primary-text  @if (url()->current() == url('user/upload-history')) primary-text @endif">Upload History</span>
                </div>
            </div>
            <div>
                @if (url()->current() == url('user/upload-history')) <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> @endif
            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('user/account-statistics')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-exit-down fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold ">Account Statistics</span>
                </div>
            </div>
            <div>
                @if (url()->current() == url('user/account-statistics')) <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> @endif
            </div>
        </a>
        <!--end::Card-->

        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('user/tools')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-receipt-square fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold ">Tools</span>
                </div>
            </div>
            <div>
                @if (url()->current() == url('user/tools')) <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> @endif
            </div>
        </a>
        @endif

        @if($tab == 'EA')
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('user/eadownload')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-document fs-2x ms-n1 text-gray-500 primary-text"></i>
                    <span class="fs-4 fw-bold @if (url()->current() == url('user/eadownload')) primary-text @endif">EA Download</span>
                </div>
            </div>
            <div>
                @if (url()->current() == url('user/eadownload')) <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> @endif
            </div>
        </a>
        <!--end::Card-->


        <!--begin::Card-->
        <a class="card flex-row align-items-center justify-content-between align-items-center text-start w-100 gap-2 text-gray-800 text-hover-primary p-8 mb-4" href="{{url('user/setfiles')}}">
            <div class="d-flex align-items-center flex-row justify-content-between">
                <div class="d-flex align-items-center gap-3">
                    <i class="ki-outline ki-receipt-square fs-2x ms-n1 text-gray-500"></i>
                    <span class="fs-4 fw-bold @if (url()->current() == url('user/setfiles')) primary-text @endif ">Setfiles</span>
                </div>
            </div>
            <div>
                @if (url()->current() == url('user/setfiles')) <i class="ki-outline ki-arrow-right fs-2x ms-n1 text-gray-500 primary-text"></i> @endif
            </div>
        </a>
        @endif
        <!--end::Card-->
    </div>


    
    @endif
    <!--end::Col-->
</div>