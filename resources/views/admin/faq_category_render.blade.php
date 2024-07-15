<div id="error-messages-faq-category-edit" style="color: red;"></div>
@foreach($AllFaqCategory as $cat)
<tr class="card-body" id="deletefaqcatdiv{{$cat->id}}">

    <td data-label="Name" class="mb-none pl-4" id="faq_cat_edit_id{{$cat->id}}">{{$cat->title}}</td>
    <td data-label="Status" class="text-success">
        <div class="action-icon">
            <div class="d-flex  align-items-end">
                <!--begin::Button-->
                <button type="button" id="faq_cat_edit_button{{$cat->id}}" class="btn btn-icon btn-active-light-primary w-30px h-30px  me-5" onclick="editfaqcat({{$cat->id}},'{{$cat->title}}')" data-bs-toggle="" data-bs-target="#kt_modal_add_one_time_password">
                    <i class="ki-outline ki-pencil fs-3"></i>
                </button>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="button" onclick="deletefaqcat({{$cat->id}})" data-bs-toggle="" data-bs-target="#" class="btn btn-icon btn-active-light-primary w-30px h-30px " id="kt_users_delete_two_step">
                    <i class="ki-outline ki-trash fs-3"></i>
                </button>

                <ul class="positionrelative mt-2">
                    <div class="deleteflag deleteepiccard hidepopupall" id="deleteobjective{{ $cat->id }}">
                        <div class="row">
                            <div class="col-md-10">
                                <h4>Delete FAQs Category</h4>
                            </div>
                            <div class="col-md-2">
                                <div id="error-messages-faq-category-delete" style="color: red;"></div>
                            </div>
                        </div>
                        <button type="button" onclick="confirmdeletefaqcat({{$cat->id}})" class="btn btn-danger w-100">Delete</button>
                    </div>
                </ul>

                
                <!--end::Button-->
            </div>
        </div>
    </td>
</tr>


@endforeach