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
                <form id="user-guide-form" method="POST" class="form" action="<?php echo e(url('upload-user-guide')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
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
               <form id="delete-user-guide-form" method="POST" class="form" action="<?php echo e(url('admin/delete-user-guide')); ?>">
                 <?php echo csrf_field(); ?>
                 
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
                <form id="edit-user-guide-form" method="POST" class="form" action="<?php echo e(url('update-user-guide')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
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


<div class="modal fade " id="kt_modal_add_user" tabindex="-1" style="display: none;" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="my_model modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" id="kt_modal_add_user_header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Add User Guide</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body px-2">
                <!--begin::Form-->
                <form id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px" style="max-height: 145px;">
                        <!--begin::Input group-->
                        
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Tittle*</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="My Account" value="">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--begin::Label-->
                            <label class="required  fs-6 mb-2">Video Link*</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="Video
                            -link" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="https://www.vimoe.com" value="">
                            <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                        <!--end::Input group-->
                        <div class="col-md-12 col-lg-12 col-xl-11 m-auto">
<!--begin::Card-->
<label class="required  fs-6 mb-2">Instructions File</label>
<div class="fv-row mb-10">
                        <!--begin::Dropzone-->
                        <div class="dropzone" id="kt_modal_create_campaign_files_upload">
                            <!--begin::Message-->
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
                        </div>
                        <!--end::Dropzone-->
                    </div>
<!--end::Card-->
</div>
                    </div>
                    <!--end::Scroll-->
                    <!--begin::Actions-->
                    <div class="text-center ">
                        <button type="submit" class="btn save-btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">Save</span>
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

    <div class="modal fade " id="kt_modal_add_user" tabindex="-1" style="display: none;" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="my_model modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <div class="my-custom-header">
                        <h2 class="fw-bold">Create Input</h2>
                    <p>You can add or search for the category</p>
                    </div>

                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>

                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body ">
                    <!--begin::Form-->
                    <form id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px" style="max-height: 145px;">
                            <!--begin::Input group-->
                            
                            <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <!--begin::Input-->
                                <div class="col-md-12 fv-row fv-plugins-icon-container" data-select2-id="select2-data-107-ervs">
<select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Choose Category" name="target_assign" data-select2-id="select2-data-52-0789" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
<option value="" data-select2-id="select2-data-54-42ya">Choose Category.</option>
<option value="1" data-select2-id="select2-data-111-tod9">Getting Started with the EA</option>
<option value="2" data-select2-id="select2-data-112-qnke">Lot Size Settings</option>
<option value="3" data-select2-id="select2-data-113-z12l">Equity Protector Settings</option>
</select>
</select><span class="select2 select2-container select2-container--bootstrap5 select2-container--below select2-container--focus" dir="ltr" data-select2-id="select2-data-53-qx0e" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-target_assign-o9-container" aria-controls="select2-target_assign-o9-container"><span class="select2-selection__rendered" id="select2-target_assign-o9-container" role="textbox" aria-readonly="true" title="Select a Team Member"><span class="select2-selection__placeholder">Select a Team Member</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></select>
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>

      
                 <!--begin::Label-->
                                <label class="required  fs-6 mb-2 mt-4">Question</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="question" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Strategy Description" value="">
                                <!--end::Input-->
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                            <!--end::Input group-->
                            <!--begin::Label-->
                                <label class="required  fs-6 mb-2">Answer</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Answer Details"></textarea>
                                <!--end::Input-->
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                            <!--end::Input group-->
                            <div class="col-md-10 m-auto">
                                <!--begin::Label-->
                                <label class="required  fs-6 mb-2">Video URL</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="Video
                                -link" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="(optional)" value="">
                                <!--end::Input-->
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                            <!--end::Input group-->
                            </div>
                        <div class="text-center ">
                            <button type="submit" class="btn add-btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Add More</span>
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
        <!--end::Modal dialog-->
    </div>

    <!-- categories model start-->
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
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>

                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body ">
                    <!--begin::Form-->
                    <form id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px" style="max-height: 145px;">
                            <!--begin::Input group-->
                            <div class="row custom-input">
                                <div class="col-md-12 d-flex flex-row align-items-center gap-3">
                            <div>
                                <input type="text" placeholder="Add New Category" class="form-control w-100" name="">
                            </div>
                            <div>
                                
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
        Save</button>
                            </div>
                        </div>
                            </div>
                        
                            <div class="col-md-12 mt-4 m-auto">
                                <!--begin::Label-->
                                <label class="required  fs-6 mb-2">All Categories</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="search" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Search Categories" value="">
                                <!--end::Input-->
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                            <!--end::Input group-->
                            </div>
                            <div class="col-md-10 m-auto">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 custom-table admin-table categories-table" id="kt_customers_table">
    <tbody class="fw-semibold text-gray-600">
        <tr class="card-body">

            <td data-label="Name" class="mb-none pl-4">EA License API Key</td>
            <td data-label="Status" class="text-success">
                <div class="action-icon">
                    <div class="d-flex  align-items-end">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                            <i class="ki-outline ki-pencil fs-3"></i>
                        </button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px " id="kt_users_delete_two_step">
                            <i class="ki-outline ki-trash fs-3"></i>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
            </td>
        </tr>
        <tr class="card-body">

            <td data-label="Name" class="mb-none pl-4">EA License API Key</td>
            <td data-label="Status" class="text-success">
                <div class="action-icon">
                    <div class="d-flex  align-items-end">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                            <i class="ki-outline ki-pencil fs-3"></i>
                        </button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px " id="kt_users_delete_two_step">
                            <i class="ki-outline ki-trash fs-3"></i>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
            </td>
        </tr>
        <tr class="card-body">

            <td data-label="Name" class="mb-none pl-4">EA License API Key</td>
            <td data-label="Status" class="text-success">
                <div class="action-icon">
                    <div class="d-flex  align-items-end">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                            <i class="ki-outline ki-pencil fs-3"></i>
                        </button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px " id="kt_users_delete_two_step">
                            <i class="ki-outline ki-trash fs-3"></i>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
            </td>
        </tr>
        <tr class="card-body">

            <td data-label="Name" class="mb-none pl-4">EA License API Key</td>
            <td data-label="Status" class="text-success">
                <div class="action-icon">
                    <div class="d-flex  align-items-end">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                            <i class="ki-outline ki-pencil fs-3"></i>
                        </button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px " id="kt_users_delete_two_step">
                            <i class="ki-outline ki-trash fs-3"></i>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
            </td>
        </tr>
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


    <div class="modal fade" id="kt_modal_add_user" tabindex="-1" style="display: none;" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="my_model modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Add Setfile</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body px-2">
                    <!--begin::Form-->
                    <form id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px" style="max-height: 473px;">
                            <!--begin::Input group-->
                            
                            <!--begin::Input group-->
                            <div class="fv-row mb-7 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Tittle*</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="getting Started with EA" value="">
                                <!--end::Input-->
                            
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                            <!--end::Input group-->
                            <div class="col-md-12 col-lg-12 col-xl-11 m-auto">
<!--begin::Card-->
<label class="required  fs-6 mb-2">Instructions File</label>
<div class="fv-row mb-10">
                            <!--begin::Dropzone-->
                            <div class="dropzone" id="kt_modal_create_campaign_files_upload">
                                <!--begin::Message-->
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
                            </div>
                            <!--end::Dropzone-->
                        </div>
<!--end::Card-->
</div>
                        </form></div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center ">
                            <button type="submit" class="btn save-btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Save</span>
                                <span class="indicator-progress">Please wait... 
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
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
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                            <i class="ki-outline ki-cross fs-1"></i>
                        </div>

                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body ">
                        <!--begin::Form-->
                        <form id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                            <!--begin::Scroll-->
                            <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px" style="max-height: 145px;">
                                <!--begin::Input group-->
                                <div class="row custom-input">
                                    <div class="col-md-12 d-flex flex-row align-items-center gap-3">
                                <div>
                                    <input type="text" placeholder="Add New Category" class="form-control w-100" name="">
                                </div>
                                <div>
                                    
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
            Save</button>
                                </div>
                            </div>
                                </div>
                            
                                <div class="col-md-12 mt-4 m-auto">
                                    <!--begin::Label-->
                                    <label class="required  fs-6 mb-2">All Categories</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="search" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Search Categories" value="">
                                    <!--end::Input-->
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Input group-->
                                </div>
                                <div class="col-md-10 m-auto">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5 custom-table admin-table categories-table" id="kt_customers_table">
        <tbody class="fw-semibold text-gray-600">
            <tr class="card-body">

                <td data-label="Name" class="mb-none pl-4">EA License API Key</td>
                <td data-label="Status" class="text-success">
                    <div class="action-icon">
                        <div class="d-flex  align-items-end">
                            <!--begin::Button-->
                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                                <i class="ki-outline ki-pencil fs-3"></i>
                            </button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px " id="kt_users_delete_two_step">
                                <i class="ki-outline ki-trash fs-3"></i>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="card-body">

                <td data-label="Name" class="mb-none pl-4">EA License API Key</td>
                <td data-label="Status" class="text-success">
                    <div class="action-icon">
                        <div class="d-flex  align-items-end">
                            <!--begin::Button-->
                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                                <i class="ki-outline ki-pencil fs-3"></i>
                            </button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px " id="kt_users_delete_two_step">
                                <i class="ki-outline ki-trash fs-3"></i>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="card-body">

                <td data-label="Name" class="mb-none pl-4">EA License API Key</td>
                <td data-label="Status" class="text-success">
                    <div class="action-icon">
                        <div class="d-flex  align-items-end">
                            <!--begin::Button-->
                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                                <i class="ki-outline ki-pencil fs-3"></i>
                            </button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px " id="kt_users_delete_two_step">
                                <i class="ki-outline ki-trash fs-3"></i>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="card-body">

                <td data-label="Name" class="mb-none pl-4">EA License API Key</td>
                <td data-label="Status" class="text-success">
                    <div class="action-icon">
                        <div class="d-flex  align-items-end">
                            <!--begin::Button-->
                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
                                <i class="ki-outline ki-pencil fs-3"></i>
                            </button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px " id="kt_users_delete_two_step">
                                <i class="ki-outline ki-trash fs-3"></i>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                </td>
            </tr>
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


        <div class="modal fade " id="kt_modal_add_user" tabindex="-1" style="display: none;" aria-hidden="true">
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
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                            <i class="ki-outline ki-cross fs-1"></i>
                        </div>

                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body ">
                        <!--begin::Form-->
                        <form id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                            <!--begin::Scroll-->
                            <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px" style="max-height: 145px;">
                                <!--begin::Input group-->
                                
                                <!--begin::Input group-->
                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                    <!--begin::Input-->
                                    <div class="col-md-12 fv-row fv-plugins-icon-container" data-select2-id="select2-data-107-ervs">
<select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Choose Category" name="target_assign" data-select2-id="select2-data-52-0789" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
<option value="" data-select2-id="select2-data-54-42ya">Choose Category.</option>
<option value="1" data-select2-id="select2-data-111-tod9">Getting Started with the EA</option>
<option value="2" data-select2-id="select2-data-112-qnke">Lot Size Settings</option>
<option value="3" data-select2-id="select2-data-113-z12l">Equity Protector Settings</option>
</select>
</select><span class="select2 select2-container select2-container--bootstrap5 select2-container--below select2-container--focus" dir="ltr" data-select2-id="select2-data-53-qx0e" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-target_assign-o9-container" aria-controls="select2-target_assign-o9-container"><span class="select2-selection__rendered" id="select2-target_assign-o9-container" role="textbox" aria-readonly="true" title="Select a Team Member"><span class="select2-selection__placeholder">Choose Category</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></select>
<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>

          
                     <!--begin::Label-->
                                    <label class="required  fs-6 mb-2 mt-4">Question</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="question" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Strategy Description" value="">
                                    <!--end::Input-->
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Input group-->
                                <!--begin::Label-->
                                    <label class="required  fs-6 mb-2">Answer</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Answer Details"></textarea>
                                    <!--end::Input-->
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Input group-->
                                <div class="col-md-10 m-auto">
                                    <!--begin::Label-->
                                    <label class="required  fs-6 mb-2">Video URL</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="Video
                                    -link" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="(optional)" value="">
                                    <!--end::Input-->
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                <!--end::Input group-->
                                </div>
                            <div class="text-center ">
                                <button type="submit" class="btn add-btn btn-primary" data-kt-users-modal-action="submit">
                                    <span class="indicator-label">Add More</span>
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
            </div><?php /**PATH C:\xampp\htdocs\pipcollective\resources\views/componant/modal.blade.php ENDPATH**/ ?>