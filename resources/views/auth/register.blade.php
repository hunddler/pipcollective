@extends('auth.auth-layout')
<title>Register</title>
@section('content')

	<div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-3 w-md-550px px-12 py-12">
						<!--begin::Wrapper-->
						<div class="d-flex flex-center flex-column flex-column-fluid">
							<!--begin::Form-->
                            <form action="{{ route('register') }}"  method="POST" class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form">
								<!--begin::Heading-->
                               @csrf 
								<div class=" mb-11">
									<!--begin::Title-->
									<h1 class="text-gray-900 fw-bolder mb-3">Create an account</h1>
									<!--end::Title-->
									<!--begin::Subtitle-->
									<div class="text-gray-500 fw-semibold fs-6">Create an account with us. </div>
									<!--end::Subtitle=-->
								</div>
								<!--begin::Heading-->
								<!--begin::Input group=-->

								<div class="row mb-8">
									<div class="col-md-6">
										<div class="form-group">
											<label class="lable-control mb-2">First Name</label>
											<input type="text" placeholder="Jhone" name="name" autocomplete="off" class="form-control bg-transparent @error('name') is-invalid @enderror" />
										</div>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror   
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="lable-control mb-2">Last Name</label>
											<input type="text" placeholder="Doe" name="last_name" autocomplete="off" class="form-control bg-transparent" />
										</div>
									</div>
								</div>

								<div class="fv-row mb-8">
									<!--begin::Email-->
									<div class="form-group">
										<label class="lable-control mb-2">Email</label>
										<input type="email" placeholder="example009@gmail.com" name="email" autocomplete="off" class="form-control bg-transparent @error('email') is-invalid @enderror" />
									</div>

                                    @error('email')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
									
									<!--end::Email-->
								</div>
								<!--end::Input group=-->
								<div class="fv-row mb-3">
									<!--begin::Password-->
									<div class="form-group">
										<label class="lable-control mb-2">Password</label>
										<input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent @error('password') is-invalid @enderror" />
									</div>

                                    @error('password')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
									<!--end::Password-->
								</div>
								<!--end::Input group=-->
								<!--begin::Submit button-->
								<div class="d-grid mt-8">
									<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Create an account</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait... 
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Submit button-->

								<div class="row mt-8">
									<div class="col-md-12 text-center">
										<h5>Already have an account ? <a href="{{url('/login')}}">Login</a></h5>
									</div>
								</div>

							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>




@endsection