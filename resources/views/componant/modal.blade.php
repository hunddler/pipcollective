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
                        <div class="col-md-12 fv-row">
                            <div class="fv-row mb-10">
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
                        <div class="col-md-12 fv-row">
                            <div class="fv-row mb-10">
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
                        <div class="col-md-12 fv-row">
                            <div class="fv-row mb-10">
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
                        <div class="col-md-12 fv-row">
                            <div class="fv-row mb-10">
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
                        <div class="col-md-12 fv-row">
                            <div class="fv-row mb-10">
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
                        <div class="col-md-12 fv-row">
                            <div class="fv-row mb-10">
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




    
