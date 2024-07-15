
<div class="modal fade" id="delete-input-bulk" style="display: none;" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-550px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div id="error-messages-delete-input-bulk" style="color: red;"></div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
               <form id="inputs-bulk-form" method="POST" class="form" action="{{url('admin/delete-input-bulk')}}">
                 @csrf
                 
                 <input type="hidden" id="input_delete_bulk" name="input_delete_bulk">
                <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3"></h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            
                            <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;"><div class="swal2-icon-content">!</div></div>
                            
                            <p>Are you sure you want to delete selected Inputs?</p>
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                          
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" data-bs-dismiss="modal"  class="btn btn-light me-3">Cancel</button>
                        <button type="submit"   class="btn btn-primary">
                            <span class="indicator-label">Delete</span>
                            <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>


<div class="modal fade" id="add-guide" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-550px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="user-guide-form" method="POST" class="form" action="{{url('upload-user-guide')}}" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Add User Guide</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        
                        <!--end::Description-->
                    </div>
                    <div id="error-messages" style="color: red;"></div>

                    <!--end::Heading-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Title</span>
                        </label>
                        <!--end::Label-->
                        <input type="text"  class="form-control form-control-solid" placeholder="Enter Title" required name="title" />
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Video Link</span>
                        </label>
                        <!--end::Label-->
                        <input type="link"  class="form-control form-control-solid" placeholder="https://www.vimoe.com" required name="video_link" />
                    </div>
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
           
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Instructions File</span>
                        </label>
                        <div class="col-md-12 fv-row mt-2">
                            <div class="fv-row">
                                <!--begin::Dropzone-->
                                <div class="dropzone dropzone-new" id="kt_modal_create_campaign_files_upload">
                                    <!--begin::Message-->
                                    <input type="file" name="file" class="fileInput-new" accept=".pdf,.csv,.xlsx" style="display: none;" required>
    
                                    <div class="dz-message needsclick d-flex flex-column align-items-center gap-3">
                                        <div>
                                            <!--begin::Icon-->
                                            <i class="ki-outline ki-file-up fs-3hx primary-text"></i>
                                            <!--end::Icon-->
                                        </div>
                                        <div>
                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drags files here or click to upload</h3>
                                                <span class="fw-semibold fs-4 text-muted">Select the option of Meta trader 4</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <img class="imagePreview-new" src="" alt="Image Preview" style="display: none;">
                                        <div class="fileIconDisplay-new" style="display: none;"></div>
                                </div>
                                <!--end::Dropzone-->
                            </div>
                        </div>

                        
                        </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
               
                    <!--end::Input group-->
                
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait... 
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<div class="modal fade" id="delete-user-guide" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-550px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div id="error-messages-delete" style="color: red;"></div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
               <form id="delete-user-guide-form" method="POST" class="form" action="{{url('admin/delete-user-guide')}}">
                 @csrf
                 
                 <input type="hidden" name="user_delete_id" value="" id="user_delete_id">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3"></h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            
                            <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;"><div class="swal2-icon-content">!</div></div>
                            
                            <p>Are you sure you want to delete selected User Guide?</p>
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                          
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" data-bs-dismiss="modal"  class="btn btn-light me-3">Cancel</button>
                        <button type="submit"   class="btn btn-primary">
                            <span class="indicator-label">Delete</span>
                            <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<div class="modal fade" id="edit-user-guide" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-550px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="edit-user-guide-form" method="POST" class="form" action="{{url('update-user-guide')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="edit_id" id="edit_id">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Update User Guide</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        
                        <!--end::Description-->
                    </div>
                    <div id="error-messages-edit" style="color: red;"></div>

                    <!--end::Heading-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Title</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" id="title"  class="form-control form-control-solid" placeholder="Enter Title" required name="title" />
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Video Link</span>
                        </label>
                        <!--end::Label-->
                        <input type="link" id="video_link"  class="form-control form-control-solid" placeholder="https://www.vimoe.com" required name="video_link" />
                    </div>
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
           
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Instructions File</span>
                        </label>
                        <div class="col-md-12 fv-row mt-2">
                            <div class="fv-row">
                                <!--begin::Dropzone-->
                                <div class="dropzone dropzone-update" id="kt_modal_create_campaign_files_upload">
                                    <!--begin::Message-->
                                    <input type="hidden" id="fileInput-edit" name="edit_file" >
                                    <input type="hidden" id="fileInput-edit-name" name="fileInput_edit_name" >
                                    <input type="file" name="file"  class="fileInput-update" accept=".pdf,.csv,.xlsx" style="display: none;" >    
                                    <div class="dz-message needsclick d-flex flex-column align-items-center gap-3">
                                        <div>
                                            <!--begin::Icon-->
                                            <i class="ki-outline ki-file-up fs-3hx primary-text"></i>
                                            <!--end::Icon-->
                                        </div>
                                        <div>
                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drags files here or click to upload</h3>
                                                <span class="fw-semibold fs-4 text-muted">Select the option of Meta trader 4</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <img class="imagePreview-update" src="" alt="Image Preview" style="display: none;">
                                    <div class="fileIconDisplay-update" id="file_type"></div>
                                </div>
                                <!--end::Dropzone-->
                            </div>

                            

                        </div>
                        </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
               
                    <!--end::Input group-->
                
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait... 
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>


<div class="modal fade" id="add-courses" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-550px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="course-form" method="POST" class="form" action="{{url('upload-courses')}}" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Add Courses</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        
                        <!--end::Description-->
                    </div>
                    <div id="error-messages-course" style="color: red;"></div>

                    <!--end::Heading-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Title</span>
                        </label>
                        <!--end::Label-->
                        <input type="text"  class="form-control form-control-solid" placeholder="Enter Title" required name="title" />
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Video Link</span>
                        </label>
                        <!--end::Label-->
                        <input type="link"  class="form-control form-control-solid" placeholder="https://www.vimoe.com" required name="video_link" />
                    </div>
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
           
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Instructions File</span>
                        </label>
                        <div class="col-md-12 mt-2 fv-row">
                            <div class="fv-row">
                                <!--begin::Dropzone-->
                                <div class="dropzone dropzone-course" id="kt_modal_create_campaign_files_upload">
                                    <!--begin::Message-->
                                    <input type="file" name="file" class="fileInput-course" accept=".pdf,.csv,.xlsx" style="display: none;" required>
    
                                    <div class="dz-message needsclick d-flex flex-column align-items-center gap-3">
                                        <div>
                                            <!--begin::Icon-->
                                            <i class="ki-outline ki-file-up fs-3hx primary-text"></i>
                                            <!--end::Icon-->
                                        </div>
                                        <div>
                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drags files here or click to upload</h3>
                                                <span class="fw-semibold fs-4 text-muted">Select the option of Meta trader 4</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <img class="imagePreview-course" src="" alt="Image Preview" style="display: none;">
                                        <div class="fileIconDisplay-course" style="display: none;"></div>
                                </div>
                                <!--end::Dropzone-->
                            </div>
                        </div>

                        
                        </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
               
                    <!--end::Input group-->
                
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait... 
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>


<div class="modal fade" id="edit-course" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-550px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="edit-course-form" method="POST" class="form" action="{{url('update-course')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="edit_id" id="course_edit_id">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Update Course</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        
                        <!--end::Description-->
                    </div>
                    <div id="error-messages-edit-course" style="color: red;"></div>

                    <!--end::Heading-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Title</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" id="course_title"  class="form-control form-control-solid" placeholder="Enter Title" required name="title" />
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Video Link</span>
                        </label>
                        <!--end::Label-->
                        <input type="link" id="course_video_link"  class="form-control form-control-solid" placeholder="https://www.vimoe.com" required name="video_link" />
                    </div>
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
           
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Instructions File</span>
                        </label>
                        <div class="col-md-12 fv-row mt-2">
                            <div class="fv-row">
                                <!--begin::Dropzone-->
                                <div class="dropzone dropzone-update-course" id="kt_modal_create_campaign_files_upload">
                                    <!--begin::Message-->
                                    <input type="hidden" id="course_fileInput-edit" name="edit_file" >
                                    <input type="hidden" id="course_fileInput-edit-name" name="fileInput_edit_name" >
                                    <input type="file" name="file"  class="fileInput-update-course" accept=".pdf,.csv,.xlsx" style="display: none;" >    
                                    <div class="dz-message needsclick d-flex flex-column align-items-center gap-3">
                                        <div>
                                            <!--begin::Icon-->
                                            <i class="ki-outline ki-file-up fs-3hx primary-text"></i>
                                            <!--end::Icon-->
                                        </div>
                                        <div>
                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drags files here or click to upload</h3>
                                                <span class="fw-semibold fs-4 text-muted">Select the option of Meta trader 4</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <img class="imagePreview-update-course" src="" alt="Image Preview" style="display: none;">
                                    <div class="fileIconDisplay-update-course" id="course_file_type"></div>
                                </div>
                                <!--end::Dropzone-->
                            </div>

                            

                        </div>
                        </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
               
                    <!--end::Input group-->
                
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait... 
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>


<div class="modal fade" id="delete-course" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-550px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div id="error-messages-delete-course" style="color: red;"></div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
               <form id="delete-course-form" method="POST" class="form" action="{{url('admin/delete-course')}}">
                 @csrf
                 
                 <input type="hidden" name="user_delete_id" value="" id="course_delete_id">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3"></h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            
                            <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;"><div class="swal2-icon-content">!</div></div>
                            
                            <p>Are you sure you want to delete selected Course?</p>
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                          
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" data-bs-dismiss="modal"  class="btn btn-light me-3">Cancel</button>
                        <button type="submit"   class="btn btn-primary">
                            <span class="indicator-label">Delete</span>
                            <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<div class="modal fade" id="delete-course-bulk" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-550px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div id="error-messages-delete-course-bulk" style="color: red;"></div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
               <form id="delete-bulk-course-form" method="POST" class="form" action="{{url('admin/delete-course-bulk')}}">
                 @csrf
                 
                 <input type="hidden" id="course_delete_bulk" name="course_delete_bulk">
                <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3"></h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            
                            <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;"><div class="swal2-icon-content">!</div></div>
                            
                            <p>Are you sure you want to delete selected Course?</p>
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                          
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" data-bs-dismiss="modal"  class="btn btn-light me-3">Cancel</button>
                        <button type="submit"   class="btn btn-primary">
                            <span class="indicator-label">Delete</span>
                            <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>


<div class="modal fade" id="delete-guide-bulk" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-550px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div id="error-messages-delete-guide-bulk" style="color: red;"></div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
               <form id="guide-bulk-course-form" method="POST" class="form" action="{{url('admin/delete-guide-bulk')}}">
                 @csrf
                 
                 <input type="hidden" id="guide_delete_bulk" name="guide_delete_bulk">
                <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3"></h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            
                            <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;"><div class="swal2-icon-content">!</div></div>
                            
                            <p>Are you sure you want to delete selected User Guide?</p>
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                          
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" data-bs-dismiss="modal"  class="btn btn-light me-3">Cancel</button>
                        <button type="submit"   class="btn btn-primary">
                            <span class="indicator-label">Delete</span>
                            <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>



<div class="modal fade" id="add-setfile" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-550px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="setfile-form" method="POST" class="form" action="{{url('upload-setfile')}}" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Add Setfile</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        
                        <!--end::Description-->
                    </div>
                    <div id="error-messages-setfile" style="color: red;"></div>

                    <!--end::Heading-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Title</span>
                        </label>
                        <!--end::Label-->
                        <input type="text"  class="form-control form-control-solid" placeholder="Enter Title" required name="title" />
                    </div>

                 
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
           
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Instructions File</span>
                        </label>
                        <div class="col-md-12 fv-row mt-2">
                            <div class="fv-row ">
                                <!--begin::Dropzone-->
                                <div class="dropzone dropzone-setfile" id="kt_modal_create_campaign_files_upload">
                                    <!--begin::Message-->
                                    <input type="file" name="file" class="fileInput-setfile" accept=".pdf,.csv,.xlsx" style="display: none;" required>
    
                                    <div class="dz-message needsclick d-flex flex-column align-items-center gap-3">
                                        <div>
                                            <!--begin::Icon-->
                                            <i class="ki-outline ki-file-up fs-3hx primary-text"></i>
                                            <!--end::Icon-->
                                        </div>
                                        <div>
                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drags files here or click to upload</h3>
                                                <span class="fw-semibold fs-4 text-muted">Select the option of Meta trader 4</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <img class="imagePreview-setfile" src="" alt="Image Preview" style="display: none;">
                                        <div class="fileIconDisplay-setfile" style="display: none;"></div>
                                </div>
                                <!--end::Dropzone-->
                            </div>
                        </div>

                        
                        </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
               
                    <!--end::Input group-->
                
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait... 
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>



<div class="modal fade" id="edit-setfile" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-550px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="edit-setfile-form" method="POST" class="form" action="{{url('update-setfile')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="edit_id" id="setfile_edit_id">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Update Setfile</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        
                        <!--end::Description-->
                    </div>
                    <div id="error-messages-edit-setfile" style="color: red;"></div>

                    <!--end::Heading-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Title</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" id="setfile_title"  class="form-control form-control-solid" placeholder="Enter Title" required name="title" />
                    </div>

                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
           
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Instructions File</span>
                        </label>
                        <div class="col-md-12 fv-row mt-2">
                            <div class="fv-row">
                                <!--begin::Dropzone-->
                                <div class="dropzone dropzone-update-setfile" id="kt_modal_create_campaign_files_upload">
                                    <!--begin::Message-->
                                    <input type="hidden" id="fileInput-edit-setfile" name="edit_file" >
                                    <input type="hidden" id="fileInput-edit-name-setfile" name="fileInput_edit_name" >
                                    <input type="file" name="file"  class="fileInput-update-setfile" accept=".pdf,.csv,.xlsx" style="display: none;" >    
                                    <div class="dz-message needsclick d-flex flex-column align-items-center gap-3">
                                        <div>
                                            <!--begin::Icon-->
                                            <i class="ki-outline ki-file-up fs-3hx primary-text"></i>
                                            <!--end::Icon-->
                                        </div>
                                        <div>
                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drags files here or click to upload</h3>
                                                <span class="fw-semibold fs-4 text-muted">Select the option of Meta trader 4</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <img class="imagePreview-update-setfile" src="" alt="Image Preview" style="display: none;">
                                    <div class="fileIconDisplay-update-setfile" id="file_type_setfile"></div>
                                </div>
                                <!--end::Dropzone-->
                            </div>

                            

                        </div>
                        </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
               
                    <!--end::Input group-->
                
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait... 
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>


<div class="modal fade" id="delete-setfile" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-550px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div id="error-messages-delete-setfile" style="color: red;"></div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
               <form id="delete-setfile-form" method="POST" class="form" action="{{url('admin/delete-setfile')}}">
                 @csrf
                 
                 <input type="hidden" name="user_delete_id" value="" id="setfile_delete_id">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3"></h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            
                            <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;"><div class="swal2-icon-content">!</div></div>
                            
                            <p>Are you sure you want to delete selected SetFile?</p>
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                          
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" data-bs-dismiss="modal"  class="btn btn-light me-3">Cancel</button>
                        <button type="submit"   class="btn btn-primary">
                            <span class="indicator-label">Delete</span>
                            <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>


<div class="modal fade" id="delete-setfile-bulk" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-550px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div id="error-messages-delete-setfile-bulk" style="color: red;"></div>

            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
               <form id="setfile-bulk-form" method="POST" class="form" action="{{url('admin/delete-setfile-bulk')}}">
                 @csrf
                 
                 <input type="hidden" id="setfile_delete_bulk" name="setfile_delete_bulk">
                <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3"></h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            
                            <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;"><div class="swal2-icon-content">!</div></div>
                            
                            <p>Are you sure you want to delete selected Setfiles?</p>
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                          
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" data-bs-dismiss="modal"  class="btn btn-light me-3">Cancel</button>
                        <button type="submit"   class="btn btn-primary">
                            <span class="indicator-label">Delete</span>
                            <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>






<div class="modal fade " id="kt_modal_add_categories" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="my_model modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_user_header">
                <!--begin::Modal title-->
                <div class="my-custom-header">
                    <h2 class="fw-bold">Categories</h2>
                <p>You can add or search for the category</p>
                </div>
                
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>

                <!--end::Close-->
            </div>
          
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body ">
                <!--begin::Form-->
                
                <form id="faq_category_form" method="POST"  class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{url('add-faq-category')}}">
                    <!--begin::Scroll-->
                    @csrf
                    <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px" style="max-height: 145px;">
                        <!--begin::Input group-->
                        <div id="error-messages-faq-category" style="color: red;"></div>

                        <div class="row custom-input">
                            <div class="col-md-12 d-flex flex-row align-items-center gap-3">
                        <div>
                            <input type="text"  placeholder="Add New Category" class="form-control w-100 faq_cat" name="title">
                        </div>
                        <div>
                            
                        <button type="submit" class="btn btn-primary" data-bs-toggle="" data-bs-target="#">
                        Save</button>
                        </div>
                    </div>
                        </div>
                    
                        <div class="col-md-12 mt-4 m-auto">
                            <!--begin::Label-->
                            <label class="required  fs-6 mb-2">All Categories</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" id="" name="search" class="form-control form-control-solid mb-3 mb-lg-0 myInput" placeholder="Search Categories" value="">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->
                        </div>
                        <div class="col-md-10 m-auto">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 custom-table admin-table categories-table myTable" id="kt_customers_table">
                        <tbody class="fw-semibold text-gray-600">
              
                        
                        </tbody>
                        </table>
                        </div>
                    
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
               
                
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>


<div class="modal fade " id="kt_modal_add_faq" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="my_model modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_user_header">
                <!--begin::Modal title-->
                <div class="my-custom-header">
                    <h2 class="fw-bold">Create FAQ’s</h2>
                <p>You can add or search for the category</p>
                </div>
                

                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>

                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body ">
                <!--begin::Form-->
                <form id="kt_modal_add_faq_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST" action="{{url('admin/add-faqs')}}">
                    <!--begin::Scroll-->
                  @csrf 
                  
                    <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px" style="max-height: 145px;">
                        <!--begin::Input group-->
                        <div id="error-messages-faq" style="color: red;"></div>
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Input-->
                            <div class="col-md-12 fv-row fv-plugins-icon-container" data-select2-id="select2-data-107-ervs">
                                <select required id="cache_select" name="category_id" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Choose Category" name="target_assign" data-select2-id="select2-data-52-0789" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                {{-- <option value="" data-select2-id="select2-data-54-42ya">Choose Category.</option> --}}
                                {{-- <option value="1" data-select2-id="select2-data-111-tod9">Getting Started with the EA</option>
                                <option value="2" data-select2-id="select2-data-112-qnke">Lot Size Settings</option>
                                <option value="3" data-select2-id="select2-data-113-z12l">Equity Protector Settings</option> --}}
                                </select>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>

  
             <!--begin::Label-->
                            <label class="required  fs-6 mb-2 mt-4">Question</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" required name="question" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Strategy Description" value="">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->
                        <!--begin::Label-->
                            <label class="required  fs-6 mb-2">Answer</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid" required rows="3" name="answer" placeholder="Type Answer Details"></textarea>
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->
                        <div class="col-md-10 m-auto">
                            <!--begin::Label-->
                            <label class="required  fs-6 mb-2">Video URL</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="link" name="video_link" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="(optional)" value="">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->
                        </div>
                    <div class="text-center ">
                        <button type="submit" class="btn add-btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">Add FAQ</span>
                            <span class="indicator-progress">Please wait... 
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>

    <div class="modal fade " id="kt_modal_update_faq" tabindex="-1" style="display: none;" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="my_model modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <div class="my-custom-header">
                        <h2 class="fw-bold">Update FAQ’s</h2>
                    <p>You can add or search for the category</p>
                    </div>
    
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <div id="error-messages-faq-edit" style="color: red;"></div>

                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body ">
                    <!--begin::Form-->
                    <form id="kt_modal_update_faq_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST" action="{{url('admin/update-faqs')}}">
                        <!--begin::Scroll-->
                      @csrf
                      <input type="hidden" id="faq_edit_id" name="faq_edit_id">   
                        <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px" style="max-height: 145px;">
                            <!--begin::Input group-->
                            
                            <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <!--begin::Input-->
                                <div class="col-md-12 fv-row fv-plugins-icon-container" data-select2-id="select2-data-107-ervs">
                                    <select required id="cache_select-edit" name="category_id" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Choose Category" name="target_assign" data-select2-id="select2-data-52-0789" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                    {{-- <option value="" data-select2-id="select2-data-54-42ya">Choose Category.</option> --}}
                                    {{-- <option value="1" data-select2-id="select2-data-111-tod9">Getting Started with the EA</option>
                                    <option value="2" data-select2-id="select2-data-112-qnke">Lot Size Settings</option>
                                    <option value="3" data-select2-id="select2-data-113-z12l">Equity Protector Settings</option> --}}
                                    </select>
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
    
      
                 <!--begin::Label-->
                                <label class="required  fs-6 mb-2 mt-4">Question</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" id="faq_question" required name="question" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Strategy Description" value="">
                                <!--end::Input-->
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                            <!--end::Input group-->
                            <!--begin::Label-->
                                <label class="required  fs-6 mb-2">Answer</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea id="faq_answer" class="form-control form-control-solid" required rows="3" name="answer" placeholder="Type Answer Details"></textarea>
                                <!--end::Input-->
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                            <!--end::Input group-->
                            <div class="col-md-10 m-auto">
                                <!--begin::Label-->
                                <label class="required  fs-6 mb-2">Video URL</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="link" id="faq_video_link" name="video_link" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="(optional)" value="">
                                <!--end::Input-->
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                            <!--end::Input group-->
                            </div>
                        <div class="text-center ">
                            <button type="submit" class="btn add-btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Update FAQ</span>
                                <span class="indicator-progress">Please wait... 
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>


        <div class="modal fade" id="delete-faq" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-550px">
                <!--begin::Modal content-->
                <div class="modal-content rounded">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <i class="ki-outline ki-cross fs-1"></i>
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div id="error-messages-delete-faq" style="color: red;"></div>
        
                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                        <!--begin:Form-->
                       <form id="delete-faq-form" method="POST" class="form" action="{{url('admin/delete-faq')}}">
                         @csrf
                         
                         <input type="hidden" name="faq_delete_id" value="" id="faq_delete_id">
                            <!--begin::Heading-->
                            <div class="mb-13 text-center">
                                <!--begin::Title-->
                                <h1 class="mb-3"></h1>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-5">
                                    
                                    <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;"><div class="swal2-icon-content">!</div></div>
                                    
                                    <p>Are you sure you want to delete selected FAQ?</p>
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Heading-->
                                  
                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="reset" data-bs-dismiss="modal"  class="btn btn-light me-3">Cancel</button>
                                <button type="submit"   class="btn btn-primary">
                                    <span class="indicator-label">Delete</span>
                                    <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end:Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>


        <div class="modal fade" id="delete-faq-bulk" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-550px">
                <!--begin::Modal content-->
                <div class="modal-content rounded">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <i class="ki-outline ki-cross fs-1"></i>
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div id="error-messages-delete-faq-bulk" style="color: red;"></div>
        
                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                        <!--begin:Form-->
                       <form id="faqs-bulk-form" method="POST" class="form" action="{{url('admin/delete-faq-bulk')}}">
                         @csrf
                         
                         <input type="hidden" id="faq_delete_bulk" name="faq_delete_bulk">
                        <!--begin::Heading-->
                            <div class="mb-13 text-center">
                                <!--begin::Title-->
                                <h1 class="mb-3"></h1>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-5">
                                    
                                    <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;"><div class="swal2-icon-content">!</div></div>
                                    
                                    <p>Are you sure you want to delete selected FAQs?</p>
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Heading-->
                                  
                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="reset" data-bs-dismiss="modal"  class="btn btn-light me-3">Cancel</button>
                                <button type="submit"   class="btn btn-primary">
                                    <span class="indicator-label">Delete</span>
                                    <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end:Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
    

        <div class="modal fade " id="update-input" tabindex="-1"  aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="my_model modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <div class="my-custom-header">
                            <h2 class="fw-bold">Update Input</h2>
                            <p>Choose the relavant category and add Q&A</p>
                        </div>
        
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                            <i class="ki-outline ki-cross fs-1"></i>
                        </div>
        
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body ">
                        <!--begin::Form-->
                        <form id="update_inputs_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST" action="{{url('admin/update-inputs')}}">
                          @csrf
                          <input type="hidden" name="input_edit_id" id="input_edit_id">  
                            <!--begin::Scroll-->
                            <div id="error-messages-inputs-edit" style="color: red;"></div>
                            <div class="d-flex flex-column scroll-y px-3">
                                <div class="fv-row fv-plugins-icon-container">
                                    <div class="row">
                                        <div class="col-md-12 mb-5">
                                            <!--begin::Password-->
                                            <div class="form-group choose-slot">
                                                <select class="form-control selectpicker" required name="category_id" id="input_select_edit" aria-label="Default select example" data-live-search="true">
                                                    {{-- <option value="">Choose Category</option> --}}
                                                    {{-- <option value="1">Category name</option>
                                                    <option value="2">Category name</option>
                                                    <option value="3">Category</option> --}}
                                                </select>
                                            </div>
                                            <!--end::Password-->
                                        </div>
        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" id="inputs_question" placeholder="Question" name="question" class="form-control form-control-solid">
                                            </div>
                                        </div>
        
        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="answer" id="inputs_answer" required class="form-control form-control-solid" rows="3"></textarea>
                                            </div>
                                        </div>
        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="link" id="inputs_video_url" placeholder="Video URL (optional)" name="video_url" class="form-control form-control-solid">
                                            </div>
                                        </div>
        
        
                                        <div class="col-md-12 mb-5">
                                            <button type="submit" class="btn mt-5 btn-block w-100 save-btn btn-primary" data-kt-users-modal-action="submit">
                                                <span class="indicator-label">Update</span>
                                                <span class="indicator-progress">Please wait... 
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
        
                                    </div>
                                </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>



    
    




    
