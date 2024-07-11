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
    <li class="breadcrumb-item">
        <i class="ki-outline ki-right fs-7 text-gray-600 mx-n1"></i>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-gray-600 fw-bold lh-1">{{$tab}}</li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <i class="ki-outline ki-right fs-7 text-gray-600 mx-n1"></i>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-white fw-bold lh-1"></li>
    <!--end::Item-->
</ul>