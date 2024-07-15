$(document).ready(function() {
    $('#kt_modal_add_input_cat_form').on('submit', function(e) {
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
                        $('.inputs_cat_form').val('');
                        $('.input-categories-table tbody').html(response.url);

                    }, 2000);
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    var errorMsg = '';
                    for (var error in errors) {
                        errorMsg += errors[error][0] + '<br>';
                    }
                    $('#error-messages-inputs-category').html(errorMsg);
                }
            });
        });
            
    });


    function GetInputsCat() {
        $.ajax({
            type: "GET",
            url: '/get-inputs-category',
            data: {},
            success: function(response) {
            
                $('.input-categories-table tbody').html(response.url);
                $('#input_select').empty();
                $('#input_select').append('<option value="">Choose Category</option>');
                for (var i = 0; i < response.category.length; i++) {
                    $('#input_select').append('<option value ="'+response.category[i].id+'">'+ response.category[i].title+'</option>');
                }
                // Refresh the selectpicker to apply the changes
                $('#input_select').selectpicker('refresh');
            }
        });
    }

  
    $(document).ready(function() {
        GetInputsCat();
    });


    $(document).mouseup(function(e) 
    {
        var hidepopupall = $(".hidepopupall");
        if (!hidepopupall.is(e.target) && hidepopupall.has(e.target).length === 0) 
        {
            hidepopupall.hide();
        }
    });
    
    
    function deleteinputscat(id) {
        $('#deleteobjectiveinputs'+id).slideToggle();
    }
    
    function confirmdeleteinputscat(id)
    {
    
        $.ajax({
            type: "GET",
            url: "/delete-inputs-category",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id:id,
            },
            success: function(response) {
                toastr.success(response.success);
               
                $('#deleteinputscatdiv' + id).remove();
                setTimeout(function() {
                 $('#error-messages-inputs-category-delete').html('');
                }, 2000);
            },
            error: function(response) {
        
                $('#error-messages-inputs-category-delete').html(response.errors);
            }
        });
    }


        function editinputscat(id,cat) 
        {
        $('#inputs_cat_edit_id' + id).html('<input type="text"  placeholder="" id="title'+id+'" value="'+cat+'" class="form-control w-100 faq_cat" name="title">');   
        $('#inputs_cat_edit_button' + id).html('<button type="button" onclick="updateinputcat('+id+')" class="btn btn-icon btn-active-light-primary w-30px h-30px " id=""><i class="ki-outline ki-copy fs-3"></i></button>');   

        }


        
    function updateinputcat(id)
    {
        var title = $('#title'+id).val(); 
       
        $.ajax({
            type: "POST",
            url: "/update-inputs-category",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id:id,
                title:title,
            },
            success: function(response) {
                toastr.success(response.success);
                $('.input-categories-table tbody').html(response.url);
                setTimeout(function() {
                 $('#error-messages-inputs-category-edit').html('');
                }, 2000);
            },
            error: function(response) {
                var errors = response.responseJSON.errors;
                var errorMsg = '';
                for (var error in errors) {
                    errorMsg += errors[error][0] + '<br>';
                }
                $('#error-messages-inputs-category-edit').html(errorMsg);
            }
        });
    }


    $(document).ready(function() {
        $('#add_inputs_form').on('submit', function(e) {
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
                        $('#error-messages-inputs').html(errorMsg);
                    }
                });
            });
                
        });


        function updateinput(id) 
        {
            $.ajax({
                type: "GET",
                url: '/get-inputs-data',
                data: {id: id},
                success: function(response) {
                    $('#input_edit_id').val(response.Faq.id);
                    $('#inputs_question').val(response.Faq.question);
                    $('#inputs_answer').val(response.Faq.answer);
                    $('#inputs_video_url').val(response.Faq.video_link);
        
                    $('#input_select_edit').empty();
                    for (var i = 0; i < response.category.length; i++) {
                        var selected = response.Faq.category_id == response.category[i].id ? 'selected' : '';
                        $('#input_select_edit').append('<option value ="'+response.category[i].id+'" '+selected+'>'+ response.category[i].title+'</option>');
                    }

                    $('#input_select_edit').selectpicker('refresh');
                }
            });
        }


        $(document).ready(function() {
            $('#update_inputs_form').on('submit', function(e) {
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
                            $('#error-messages-inputs-edit').html(errorMsg);
                        }
                    });
                });
                    
            });


            function deleteinput(delete_id)
            {
            $('#input_delete_id').val(delete_id);
            }   


            $(document).ready(function() {
                $('#delete-input-form').on('submit', function(e) {
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
                              
                                $('#error-messages-delete-input').html(response.errors);
                            }
                        });
                    });
                        
                });

        $(document).ready(function(){
            $(".myInput").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $(".myTable-inputs tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
          });
    

          function deletebulkinput() {
            var selectedOptions = [];
            $('.checkbox:checked').each(function() {
                selectedOptions.push($(this).val());
    
            });
    
            $('#input_delete_bulk').val(selectedOptions.join(','));
    
    
        }


        $(document).ready(function() {
            $('#inputs-bulk-form').on('submit', function(e) {
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
                            $('#error-messages-delete-input-bulk').html(response.errors);
                        }
                    });
                });
                    
            });
    