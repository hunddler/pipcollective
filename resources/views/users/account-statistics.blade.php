@php
$var_page = 'Account Statistics';
$var_tab = 'Calculater';
@endphp

@extends('componant.main-layout')
<title>Account Statistics</title>
@section('content')
<div class="card mb-5 mb-xl-8">
    <div class="card-body py-lg-8 py-sm-0 mb-4">
        <div class="card mb-5 mb-xl-7">
            <div class="card-header border-0 cursor-pointer">
                <div class="card-title m-0">
                    <h2 class="fw-bold m-0 ">Account Profit & Loss</h2>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_charts_widget_4" class="min-h-auto" style="height: 450px"></div>
            </div>
        </div>
        <!--begin::Sign-in Method-->
        <div class="card mb-5 mb-xl-7">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#my_account">
                <div class="card-title m-0">
                    <h2 class="fw-bold m-0 ">Account Statistics</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Content-->
            <div id="my_account" class="collapse show">
                <!--begin::Card body-->
                <div class="card-body border-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Balance</p>
                                </div>
                                <div>
                                    <b class="mb-0">64090146.69</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Average Profit Trade</p>
                                </div>
                                <div>
                                    <b class="mb-0">1262.34</b>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Credit Facility</p>
                                </div>
                                <div>
                                    <b class="mb-0">64090146.69</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Maximum</p>
                                </div>
                                <div>
                                    <b class="mb-0">1262.34</b>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Floating P/L</p>
                                </div>
                                <div>
                                    <b class="mb-0">64090146.69</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Maximal</p>
                                </div>
                                <div>
                                    <b class="mb-0">1262.34</b>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Equity</p>
                                </div>
                                <div>
                                    <b class="mb-0">64090146.69</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Average</p>
                                </div>
                                <div>
                                    <b class="mb-0">1262.34</b>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Free Margin</p>
                                </div>
                                <div>
                                    <b class="mb-0">64090146.69</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Gross Loss</p>
                                </div>
                                <div>
                                    <b class="mb-0">1262.34</b>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Margin</p>
                                </div>
                                <div>
                                    <b class="mb-0">64090146.69</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Total Net Profit</p>
                                </div>
                                <div>
                                    <b class="mb-0">1262.34</b>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Margin Level</p>
                                </div>
                                <div>
                                    <b class="mb-0">64090146.69</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Profit Factor</p>
                                </div>
                                <div>
                                    <b class="mb-0">1262.34</b>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Gross Profit</p>
                                </div>
                                <div>
                                    <b class="mb-0">64090146.69</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Balance Drawdown</p>
                                </div>
                                <div>
                                    <b class="mb-0">1262.34</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Expected Payoff</p>
                                </div>
                                <div>
                                    <b class="mb-0">64090146.69</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Balance Drawdown Absolute</p>
                                </div>
                                <div>
                                    <b class="mb-0">1262.34</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Sharpe Ratio</p>
                                </div>
                                <div>
                                    <b class="mb-0">64090146.69</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Total Trades</p>
                                </div>
                                <div>
                                    <b class="mb-0">1262.34</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Balance Drawdown Maximal</p>
                                </div>
                                <div>
                                    <b class="mb-0">64090146.69</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Balance Drawdown Relative</p>
                                </div>
                                <div>
                                    <b class="mb-0">1262.34</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Short Traders (Won%)</p>
                                </div>
                                <div>
                                    <b class="mb-0">64090146.69</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Long Trades (won%)</p>
                                </div>
                                <div>
                                    <b class="mb-0">1262.34</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Profit Traders (% of total)</p>
                                </div>
                                <div>
                                    <b class="mb-0">64090146.69</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Loss Trades (% of Total)</p>
                                </div>
                                <div>
                                    <b class="mb-0">1262.34</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Larges Loss Trade</p>
                                </div>
                                <div>
                                    <b class="mb-0">64090146.69</b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row justify-content-between acc-statement-row">
                                <div>
                                    <p class="mb-0">Largest Profit Trad</p>
                                </div>
                                <div>
                                    <b class="mb-0">1262.34</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Sign-in Method-->
    </div>
    <!--end::Body-->
</div>
@endsection