$(document).ready(function() {
    $('#faq_category_form').on('submit', function(e) {
            e.preventDefault();
    
            var formData = new FormData(this);
    
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    toastr.success(response.success);
                    setTimeout(function() {
                        // location.reload();
                        $('.faq_cat').val('');
                        $('.categories-table tbody').html(response.url);

                    }, 2000);
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    var errorMsg = '';
                    for (var error in errors) {
                        errorMsg += errors[error][0] + '<br>';
                    }
                    $('#error-messages-faq-category').html(errorMsg);
                }
            });
        });
            
    });
    
    function GetFaqCat() 
    {
        $.ajax({
            type: "GET",
            url: '/get-faq-category',
            data: {},
            success: function(response) {
                $('.categories-table tbody').html(response.url);
                $('#cache_select').empty();
                $('#cache_select').append('<option value="" data-select2-id="select2-data-54-42ya">Choose Category.</option>');
                for (var i = 0; i < response.category.length; i++) {
                    $('#cache_select').append('<option data-select2-id="select2-data-111-tod9" value ="'+response.category[i].id+'">'+ response.category[i].title+'</option>');
                }    
            }
        });
    }

    function editfaqcat(id,cat) 
    {
    $('#faq_cat_edit_id' + id).html('<input type="text"  placeholder="" id="title'+id+'" value="'+cat+'" class="form-control w-100 faq_cat" name="title">');   
    $('#faq_cat_edit_button' + id).html('<button type="button" onclick="updatefaqcat('+id+')" class="btn btn-icon btn-active-light-primary w-30px h-30px " id=""><i class="ki-outline ki-copy fs-3"></i></button>');   

    }

    function updatefaqcat(id)
    {
        var title = $('#title'+id).val(); 
       
        $.ajax({
            type: "POST",
            url: "/update-faq-category",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id:id,
                title:title,
            },
            success: function(response) {
                toastr.success(response.success);
                $('.categories-table tbody').html(response.url);
                setTimeout(function() {
                 $('#error-messages-faq-category-edit').html('');
                }, 2000);
            },
            error: function(response) {
                var errors = response.responseJSON.errors;
                var errorMsg = '';
                for (var error in errors) {
                    errorMsg += errors[error][0] + '<br>';
                }
                $('#error-messages-faq-category-edit').html(errorMsg);
            }
        });
    }


   $(document).ready(function(){
    $(".myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $(".myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });

  $(document).ready(function(){
    $(".myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $(".myTable-faq tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });


  $(document).mouseup(function(e) 
{
    var hidepopupall = $(".hidepopupall");
    if (!hidepopupall.is(e.target) && hidepopupall.has(e.target).length === 0) 
    {
        hidepopupall.hide();
    }
});


function deletefaqcat(id) {
    $('#deleteobjective'+id).slideToggle();
}

function confirmdeletefaqcat(id)
{

    $.ajax({
        type: "GET",
        url: "/delete-faq-category",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            id:id,
        },
        success: function(response) {
            toastr.success(response.success);
           
            $('#deletefaqcatdiv' + id).remove();
            setTimeout(function() {
             $('#error-messages-faq-category-delete').html('');
            }, 2000);
        },
        error: function(response) {
    
            $('#error-messages-faq-category-delete').html(response.errors);
        }
    });
}


$(document).ready(function() {
    $('#kt_modal_add_faq_form').on('submit', function(e) {
            e.preventDefault();
    
            var formData = new FormData(this);
    
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    toastr.success(response.success);
                    setTimeout(function() {
                    location.reload();
                    }, 2000);
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    var errorMsg = '';
                    for (var error in errors) {
                        errorMsg += errors[error][0] + '<br>';
                    }
                    $('#error-messages-faq').html(errorMsg);
                }
            });
        });
            
    });


    function updatefaq(id) 
    {
        $.ajax({
            type: "GET",
            url: '/get-faq-data',
            data: {id: id},
            success: function(response) {
                $('#faq_edit_id').val(response.Faq.id);
                $('#faq_question').val(response.Faq.question);
                $('#faq_answer').val(response.Faq.answer);
                $('#faq_video_link').val(response.Faq.video_link);
    
                $('#cache_select-edit').empty();
                for (var i = 0; i < response.category.length; i++) {
                    var selected = response.Faq.category_id == response.category[i].id ? 'selected' : '';
                    $('#cache_select-edit').append('<option data-select2-id="select2-data-111-tod9" value ="'+response.category[i].id+'" '+selected+'>'+ response.category[i].title+'</option>');
                }
            }
        });
    }


    $(document).ready(function() {
        $('#kt_modal_update_faq_form').on('submit', function(e) {
                e.preventDefault();
        
                var formData = new FormData(this);
        
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        toastr.success(response.success);
                        setTimeout(function() {
                        location.reload();
                        }, 2000);
                    },
                    error: function(response) {
                        var errors = response.responseJSON.errors;
                        var errorMsg = '';
                        for (var error in errors) {
                            errorMsg += errors[error][0] + '<br>';
                        }
                        $('#error-messages-faq-edit').html(errorMsg);
                    }
                });
            });
                
        });

   function deletefaq(delete_id)
   {
   $('#faq_delete_id').val(delete_id);
   }   
   
   
   $(document).ready(function() {
    $('#delete-faq-form').on('submit', function(e) {
            e.preventDefault();
    
            var formData = new FormData(this);
    
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    toastr.success(response.success);
                    setTimeout(function() {
                    location.reload();

                    }, 2000);
                },
                error: function(response) {
                  
                    $('#error-messages-delete-faq').html(response.errors);
                }
            });
        });
            
    });


    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('#kt_customers_table .form-check-input.checkbox');
        const deleteToolbar = document.getElementById('delete-selected-toolbar');
    
        function toggleDeleteButton() {
            const anyChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
            if (anyChecked) {
                deleteToolbar.classList.remove('d-none');
            } else {
                deleteToolbar.classList.add('d-none');
            }
        }
    
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', toggleDeleteButton);
        });
    
        // Handle the master checkbox
        const masterCheckbox = document.querySelector('#kt_customers_table .form-check-input[data-kt-check]');
        if (masterCheckbox) {
            masterCheckbox.addEventListener('change', function () {
                const targetCheckboxes = document.querySelectorAll(masterCheckbox.getAttribute('data-kt-check-target'));
                targetCheckboxes.forEach(targetCheckbox => {
                    targetCheckbox.checked = masterCheckbox.checked;
                });
                toggleDeleteButton();
            });
        }
    });


    function deletebulkfaq() {
        var selectedOptions = [];
        $('.checkbox:checked').each(function() {
            selectedOptions.push($(this).val());

        });

        $('#faq_delete_bulk').val(selectedOptions.join(','));


    }



    $(document).ready(function() {
        $('#faqs-bulk-form').on('submit', function(e) {
                e.preventDefault();

               
        
                var formData = new FormData(this);
        
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        toastr.success(response.success);
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                    },
                    error: function(response) {
                        $('#error-messages-delete-faq-bulk').html(response.errors);
                    }
                });
            });
                
        });

    


