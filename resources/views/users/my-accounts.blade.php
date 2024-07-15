@php
    $var_page = 'My Accounts';
    $var_tab = 'My Accounts';
@endphp

@extends('componant.main-layout')
<title>My Accounts</title>
@section('content')
<div class="card mb-5 mb-xl-8">
    <div class="card-body py-lg-8 py-sm-0 mb-4">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h2>My API License Key</h2>
            </div>
            <div class="col-md-6">
                <!--begin::Input group-->
                <div class="input-group mb-5">
                    <input type="text" readonly class="form-control" value="hjsdjcn748qy37r8cyqyn" />
                    <span class="input-group-text">
                        <i class="ki-duotone ki-copy fs-4"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                </div>
                <!--end::Input group-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <table class="table align-middle table-row-dashed fs-6 gy-5 custom-table admin-table" id="kt_customers_table">
                    <thead>
                        <tr class="text-start text-gray-500 mb-none fw-bold fs-7 text-uppercase gs-0">
                            <th scope="col">Server</th>
                            <th scope="col">Account Number</th>
                            <th scope="col">Active</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                        <tr class="card-body border-top">
                            <td data-label="Server">Vantageinternational-Level</td>
                            <td data-label="Account Number">1574176</td>
                            <td data-label="Active">True</td>
                            <td data-label="Actions"><button class="btn btn-danger btn-sm">Delete</button></td>
                        </tr>

                        <tr class="card-body border-top">
                            <td data-label="Server">Vantageinternational-Level</td>
                            <td data-label="Account Number">1574176</td>
                            <td data-label="Active">True</td>
                            <td data-label="Actions"><button class="btn btn-danger btn-sm">Delete</button></td>
                        </tr>

                        <tr class="card-body border-top">
                            <td data-label="Server">Vantageinternational-Level</td>
                            <td data-label="Account Number">1574176</td>
                            <td data-label="Active">True</td>
                            <td data-label="Actions"><button class="btn btn-danger btn-sm">Delete</button></td>
                        </tr>

                        <tr class="card-body border-top">
                            <td data-label="Server">Vantageinternational-Level</td>
                            <td data-label="Account Number">1574176</td>
                            <td data-label="Active">True</td>
                            <td data-label="Actions"><button class="btn btn-danger btn-sm">Delete</button></td>
                        </tr>

                        <tr class="card-body border-top">
                            <td data-label="Server">Vantageinternational-Level</td>
                            <td data-label="Account Number">1574176</td>
                            <td data-label="Active">True</td>
                            <td data-label="Actions"><button class="btn btn-danger btn-sm">Delete</button></td>
                        </tr>
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
        </div>
    </div>
    <!--end::Body-->
</div>
@endsection
