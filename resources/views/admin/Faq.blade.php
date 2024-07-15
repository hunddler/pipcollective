@php
$var_page = 'FAQs';
$var_tab = 'Education';
@endphp

@extends('componant.main-layout')
<title>FAQs</title>
<style>
  .deleteepiccard{
    top: 5px !important;
    left: -250px !important;
}

.positionrelative {
    position: relative;
}

.deleteflag {
    cursor: auto;
    position: absolute;
    border-radius: 5px;
    display: none;
    width: 285px;
    z-index: 1111;
    top: 140;
    left: 80px;
    padding: 10px;
    background-color: white;
    box-shadow: 0px 2px 2px 4px rgb(87 106 134 / 20%);
}


</style>
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
                                <h2>FAQ’s</h2>
                            </div>
                            <div>
                                <p>short description goes here</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center gap-3">
                            <div>
                                <input type="text" id="" placeholder="Search..." class="form-control p-3 form-control-solid input-sm myInput" name="">
                            </div>
                            <div class="d-flex justify-content-end align-items-center d-none" id="delete-selected-toolbar" data-kt-customer-table-toolbar="selected">
                                <button type="button" class="btn btn-danger" onclick="deletebulkfaq();" data-bs-toggle="modal" data-bs-target="#delete-faq-bulk">Delete Selected</button>
                            </div>
                            <div>
                                <button type="button" onclick="GetFaqCat();" class="btn btn-primary categories-btn" data-bs-toggle="modal" data-bs-target="#kt_modal_add_categories">
                                Categories</button>
                                <button type="button" onclick="GetFaqCat();" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_faq">
                                Add New</button>
                            </div>
                        </div>
                    </div>


                    <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 custom-table admin-table myTable-faq" id="kt_customers_table">
                            <thead>
                                <tr class="text-start text-gray-500 mb-none fw-bold fs-7 text-uppercase gs-0">
                                    <th scope="col" class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                data-kt-check="true"
                                                data-kt-check-target="#kt_customers_table .form-check-input"
                                                value="1"
                                            />
                                        </div>
                                    </th>
                                    <th scope="col" class="mb-none admin-table"> Tittle</th>
                                    <th scope="col" class="admin-table">Category</th>
                                    <th scope="col" class="admin-table">Action</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                            @if(count($Faqs) > 0)
                            @foreach($Faqs as $faq)
                            @php
                            $category = DB::table('faq_category')->where('id',$faq->category_id)->first();
                            @endphp
                                <tr class="card-body border-top">
                                    <td data-label="Select" class="mb-none" data-label="Select">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input checkbox" type="checkbox" value="{{$faq->id}}" />
                                        </div>
                                    </td>
                                    <td data-label="Name" class="mb-none">{{$faq->question}}</td>
                                    <td data-label="Parking Space">@if($category) {{$category->title}} @endif</td>
                                    <td data-label="Status" class="text-success">
                                        <div class="action-icon">
                                            <div class="d-flex  align-items-center">
                                                <!--begin::Button-->
                                                <button type="button" onclick="updatefaq({{$faq->id}})" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_update_faq">
                                                    <i class="ki-outline ki-pencil fs-3"></i>
                                                </button>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="button" onclick="deletefaq({{$faq->id}})" class="btn btn-icon btn-active-light-primary w-30px h-30px " data-bs-toggle="modal" data-bs-target="#delete-faq">
                                                    <i class="ki-outline ki-trash fs-3"></i>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                        <!--end::Table-->

                        <div class="d-flex flex-stack flex-wrap pt-10">
                            <!--begin::Pages-->
                        <ul class="pagination">
                           
                            {{ $Faqs->links( "pagination::bootstrap-4") }}
                        
                        </ul>
                        <!--end::Pages-->
                        <div class="fs-6 fw-semibold text-gray-700">Showing {{$Faqs->count()}} of {{ $Faqs->total() }} of {{ $Faqs->total() }} entries</div>
                        
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