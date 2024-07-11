@php
$var_page = 'User Guide';
$var_tab = 'Education';
@endphp

@extends('componant.main-layout')
<title>User Guide</title>
@section('content')


<div class="card mb-5 mb-xl-8">
    <div class="card-body py-lg-8 py-sm-0 mb-4">
        <!--begin::Sign-in Method-->
        <div class="card mb-5 mb-xl-7">
            <!--begin::Card body-->
                <div class="card-body border-top">
                    <div class="d-md-flex d-sm-flex flex-md-row flex-sm-column align-items-center justify-content-between align-items-start">
                        <div class="d-flex flex-column">
                            <div>
                                <h2>User Guide</h2>
                            </div>
                            <div>
                                <p>short description goes here</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center gap-3">
                            <div>
                                <input type="text" id="myInput" placeholder="Search..." class="form-control input-sm" name="">
                            </div>

                            
                            <div class="d-flex justify-content-end align-items-center d-none" id="delete-selected-toolbar" data-kt-customer-table-toolbar="selected">
                                <button type="button" class="btn btn-danger" onclick="deletebulkguide();" data-bs-toggle="modal" data-bs-target="#delete-guide-bulk">Delete Selected</button>
                            </div>
                            <div>
                                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
        <i class="ki-outline ki-plus fs-2"></i>Add New</button> -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-guide">
        Add User</button>
                            </div>
                        </div>
                    </div>
                
                
                    <!--begin::Table-->
                    <x-customer-table 
                    titleColumnName="User Guide Title" 
                    :data="$userguide"
                    editModalId="edit-user-guide" 
                    deleteModalId="delete-user-guide"
                    editFunction="edituserguide" 
                    deleteFunction="deleteuserguide" 
                    />
                                         <!--end::Table-->

    <div class="d-flex flex-stack flex-wrap pt-10">
        <!--begin::Pages-->
    <ul class="pagination">
       
        {{ $userguide->links( "pagination::bootstrap-4") }}
    
    </ul>
    <!--end::Pages-->
    <div class="fs-6 fw-semibold text-gray-700">Showing {{$userguide->count()}} of {{ $userguide->total() }} of {{ $userguide->total() }} entries</div>
    
</div>
    <div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar"></div>


                </div>
                <!--end::Card body-->
        </div>
        <!--end::Sign-in Method-->

    </div>
    <!--end::Body-->
</div>


@endsection