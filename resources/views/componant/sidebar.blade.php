<div class="row mb-5 mb-xl-8 g- g-xl-8">
    <!--begin::Col-->
    @if(auth::user()->role == 'admin')
    <div class="col-12">
        <!--begin::Card-->
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
        <!--end::Card-->
    </div>
    @endif

    @if(auth::user()->role == 'users')
    <div class="col-12">
        <!--begin::Card-->
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
        <!--end::Card-->
    </div>
    @endif
    <!--end::Col-->
</div>