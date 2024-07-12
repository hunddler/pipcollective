@php
    $var_page = 'Tools';
    $var_tab = 'Calculater';
@endphp

@extends('componant.main-layout')
<title>Tools</title>
@section('content')
    <div class="card mb-5 mb-xl-8">
        <div class="card-body py-lg-8 py-sm-0 mb-4">
            <div class="row mb-5">
                <div class="col-md-4 col-12">
                    <div class="card">
                        <div class="card-body py-7 px-7">
                            <div class="d-flex flex-row align-items-center gap-4">
                                <div>
                                    <i class="ki-outline ki-chart fs-2hx ms-n1 text-gray-500"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <div>
                                        <p class="mb-2">Total Trades Placed</p>
                                    </div>
                                    <div>
                                        <h2>457</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12">
                    <div class="card">
                        <div class="card-body py-7 px-7">
                            <div class="d-flex flex-row align-items-center gap-4">
                                <div>
                                    <i class="ki-outline ki-graph-3 fs-2hx ms-n1 text-gray-500"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <div>
                                        <p class="mb-2">Combined Lot Size</p>
                                    </div>
                                    <div>
                                        <h2>35</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12">
                    <div class="card">
                        <div class="card-body py-7 px-7">
                            <div class="d-flex flex-row align-items-center gap-4">
                                <div>
                                    <i class="ki-outline ki-chart-pie-3 fs-2hx ms-n1 text-gray-500"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <div>
                                        <p class="mb-2">Average Lot Size</p>
                                    </div>
                                    <div>
                                        <h2>4.8</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-5 mb-xl-7">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse">
                    <div class="card-title m-0">
                        <h2 class="fw-bold m-0 ">Trade Range Calculator</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body border-top">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="d-flex justify-content-between flex-row">
                                    <div>
                                        <b>Average Lot Size +</b>
                                    </div>
                                    <div>
                                        <p>:Upper Lot Size</p>
                                    </div>
                                </div>
                                <select class="form-control">
                                    <option>0%</option>
                                    <option>5%</option>
                                    <option>10%</option>
                                    <option>15%</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="d-flex justify-content-between flex-row">
                                    <div>
                                        <b>Average Lot Size -</b>
                                    </div>
                                    <div>
                                        <p>:Lower Lot Size</p>
                                    </div>
                                </div>
                                <select class="form-control">
                                    <option>0%</option>
                                    <option>5%</option>
                                    <option>10%</option>
                                    <option>15%</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <button class="btn btn-primary">Calculate</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div
                                class="d-flex flex-row align-items-center lot-size py-5 justify-content-between primary-text">
                                <div>
                                    <i class="ki-outline ki-arrow-up"></i> Upper Lot Size:
                                </div>
                                <div>
                                    1.4
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div
                                class="d-flex flex-row align-items-center lot-size py-5 justify-content-between primary-text">
                                <div>
                                    <i class="ki-outline ki-arrow-down"></i> Lower Lot Size:
                                </div>
                                <div>
                                    1.4
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
            </div>

            <div class="card mb-5 mb-xl-7">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse">
                    <div class="card-title m-0">
                        <h2 class="fw-bold m-0 ">Trade Range Calculator</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body border-top">
                    <div class="row mb-5">
                        <div class="col-md-12 mb-5">
                            <div class="form-group">
                                <label class="lable-control mb-3">Starting Balance:</label>
                                <input type="number" class="form-control" name="">
                            </div>
                        </div>

                        <div class="col-md-6 mb-5">
                            <div class="form-group">
                                <label class="lable-control mb-3">Number Of Months:</label>
                                <input type="number" class="form-control" name="">
                            </div>
                        </div>

                        <div class="col-md-6 mb-5">
                            <div class="form-group">
                                <label class="lable-control mb-3">Monthly Gain (%):</label>
                                <input type="number" class="form-control" name="">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <button class="btn btn-primary btn-lg">Calculate</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <table id="example" class="table table-striped table-bordered dataTable" cellspacing="0"
                                width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 137px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 215px;">Position</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 100px;">Office</th>
                                        <th class="sorting_desc" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            aria-sort="descending" style="width: 44px;">Age</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 93px;">Start date</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 77px;">Salary</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Name</th>
                                        <th rowspan="1" colspan="1">Position</th>
                                        <th rowspan="1" colspan="1">Office</th>
                                        <th rowspan="1" colspan="1">Age</th>
                                        <th rowspan="1" colspan="1">Start date</th>
                                        <th rowspan="1" colspan="1">Salary</th>
                                    </tr>
                                </tfoot>
                                <tbody>


                                    <tr role="row" class="odd">
                                        <td class="">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td class="sorting_1">66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="">Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td class="sorting_1">66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="">Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td class="sorting_1">65</td>
                                        <td>2008/09/26</td>
                                        <td>$645,750</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="">Olivia Liang</td>
                                        <td>Support Engineer</td>
                                        <td>Singapore</td>
                                        <td class="sorting_1">64</td>
                                        <td>2011/02/03</td>
                                        <td>$234,500</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="">Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td class="sorting_1">64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="">Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td class="sorting_1">64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="">Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td class="sorting_1">63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="">Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td class="sorting_1">63</td>
                                        <td>2010/01/04</td>
                                        <td>$125,250</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="">Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td class="sorting_1">62</td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td class="sorting_1">61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="">Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td class="sorting_1">64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="">Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td class="sorting_1">63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="">Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td class="sorting_1">63</td>
                                        <td>2010/01/04</td>
                                        <td>$125,250</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="">Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td class="sorting_1">62</td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td class="sorting_1">61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="">Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td class="sorting_1">64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="">Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td class="sorting_1">63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="">Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td class="sorting_1">63</td>
                                        <td>2010/01/04</td>
                                        <td>$125,250</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="">Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td class="sorting_1">62</td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td class="sorting_1">61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="">Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td class="sorting_1">64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="">Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td class="sorting_1">63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="">Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td class="sorting_1">63</td>
                                        <td>2010/01/04</td>
                                        <td>$125,250</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="">Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td class="sorting_1">62</td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td class="sorting_1">61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
            </div>

            <!--end::Sign-in Method-->
        </div>
        <!--end::Body-->
    </div>
@endsection
