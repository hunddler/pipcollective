@php
$var_page = 'User Guide';
@endphp
@extends('componants.main-layout')
<title>User Guide</title>
@section('content')

<div class="card mb-5 mb-xl-8">
    <div class="card-body py-lg-8 py-sm-0 mb-4">
        <!--begin::Sign-in Method-->

        <div class="card-header border-0 pt-6 mb-2 mb-sm-0">
            <!--begin::Card title-->
            <div class="card-title flex-stack flex-row-fluid">
                <div class="d-flex flex-column">
                    <span class="fw-bolder fs-1x text-gray-900">User Guide</span>
                    <span class="fw-bold fs-7 text-gray-500">Short Description Goes Here</span>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                    <!--begin::Wrapper-->
                    <div class="me-10">
                        <input type="text" data-kt-customer-table-filter="search" class=" p-4 form-control form-control-solid w-100 ps-10" placeholder="Search.." />

                    </div>
                    <div class="">
                        <button class="btn btn-primary sm-btn" data-bs-toggle="modal" data-bs-target="#add-guide">Add New</button>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
                    <div class="fw-bold me-5"><span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected</div>
                    <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
                </div>
                <!--end::Group actions-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <div class="card-body pt-0">
            <div class="row mb-4">
                
             
            </div>

           <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5 custom-table" id="kt_customers_table">
                <thead>
                    <tr class="text-start text-gray-500 mb-none fw-bold fs-7 text-uppercase gs-0">
                        <th scope="col" class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input
                                    class="form-check-input"
                                    style="border: 1px solid white; margin-left: 0px;"
                                    type="checkbox"
                                    data-kt-check="true"
                                    data-kt-check-target="#kt_customers_table .form-check-input"
                                    value="1"
                                />
                            </div>
                        </th>
                        <th scope="col" class="mb-none">Title</th>
                        <th scope="col">Instruction File</th>
                        <th scope="col">Video URL</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @if(count($userguide) > 0)
                    @foreach($userguide as $guide)
                    <tr>
                        <td data-label="Select" class="mb-none" data-label="Select">
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td data-label="Type">{{$guide->title}}</td>
                        <td data-label="Location"> <i class="ki-outline ki-exit-up"></i> {{$guide->file_name}} </td>
                        <td data-label="Status">{{$guide->video_link}}</td>
                        <td data-label="Action">
                        
                            <!--begin::Menu-->
                                <!--begin::Menu item-->
                             
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="d-flex">

                                    <a href="javascript:void(0)" onclick="edituserguide({{$guide->id}},'{{$guide->title}}','{{$guide->video_link}}','{{$guide->file_name}}','{{$guide->file_type}}')"  data-bs-toggle="modal" data-bs-target="#edit-user-guide" class="nav-link px-3"><i class="ki-outline ki-pencil"></i></a>
                                    <a href="javascript:void(0)" onclick="deleteuserguide({{$guide->id}})" data-bs-toggle="modal" data-bs-target="#delete-user-guide" class="nav-link px-3" data-kt-ecommerce-order-filter="delete_row"><i class="ki-outline ki-trash"></i></a>
                                
                                </div>
                                <!--end::Menu item-->
                            
                            <!--end::Menu-->
                        </td>
                    </tr>
                    @endforeach
                    @endif
                 

                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Sign-in Method-->

        <!--begin::Sign-in Method-->
       
        <!--end::Sign-in Method-->

    </div>
    <!--end::Body-->
</div>




@endsection