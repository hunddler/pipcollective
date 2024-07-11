@php
$var_page = 'Courses';
$var_tab = 'Education';
@endphp

@extends('componant.main-layout')
<title>Courses</title>
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
                                <h2>Course</h2>
                            </div>
                            <div>
                                <p>short description goes here</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center gap-3">
                            <div>
                                <input type="text"  id="myInput" placeholder="Search..." class="form-control input-sm" name="">
                            </div>

                            <div class="d-flex justify-content-end align-items-center d-none" id="delete-selected-toolbar" data-kt-customer-table-toolbar="selected">
                                <button type="button" class="btn btn-danger" onclick="deletebulkcourse();" data-bs-toggle="modal" data-bs-target="#delete-course-bulk">Delete Selected</button>
                            </div>
                            <div>
                                
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-courses">
        Add Course</button>
                            </div>
                        </div>
                    </div>


                    <!--begin::Table-->
                    
                    <x-customer-table 
                    titleColumnName="Course Title" 
                    :data="$Courses"
                    editModalId="edit-course" 
                    deleteModalId="delete-course"
                    editFunction="editcourse" 
                    deleteFunction="deletecourse" 
                    />
                        
<!--end::Table-->

<div class="d-flex flex-stack flex-wrap pt-10">
    <!--begin::Pages-->
<ul class="pagination">
   
    {{ $Courses->links( "pagination::bootstrap-4") }}

</ul>
<!--end::Pages-->
<div class="fs-6 fw-semibold text-gray-700">Showing {{$Courses->count()}} of {{ $Courses->total() }} of {{ $Courses->total() }} entries</div>

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