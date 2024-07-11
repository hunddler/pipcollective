document.addEventListener('DOMContentLoaded', function() {
    var dropzone = document.querySelector('.dropzone-setfile');
    var fileInput = document.querySelector('.fileInput-setfile');
    var imagePreview = document.querySelector('.imagePreview-setfile');
    var fileIconDisplay = document.querySelector('.fileIconDisplay-setfile');

    dropzone.addEventListener('click', function() {
        fileInput.click();
    });

    fileInput.addEventListener('change', function() {
        var files = fileInput.files;
        if (files.length > 0) {
            var file = files[0];
            var reader = new FileReader();
            var fileType = file.type;

            if (fileType.startsWith('image/')) {
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                    fileIconDisplay.style.display = 'none';
                }
                reader.readAsDataURL(file);
            } else if (fileType === 'application/pdf') {
                imagePreview.style.display = 'none';
                fileIconDisplay.innerHTML = '<i class="fas fa-file-pdf fa-3x text-danger"></i><br>Selected file: ' + file.name;
                fileIconDisplay.style.display = 'block';
            } else if (fileType === 'application/vnd.ms-excel' || fileType === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
                imagePreview.style.display = 'none';
                fileIconDisplay.innerHTML = '<i class="fas fa-file-excel fa-3x text-success"></i><br>Selected file: ' + file.name;
                fileIconDisplay.style.display = 'block';
            } else {
                imagePreview.style.display = 'none';
                fileIconDisplay.textContent = 'Unsupported file type.';
                fileIconDisplay.style.display = 'block';
            }
        }
    });
});

$(document).ready(function() {
$('#setfile-form').on('submit', function(e) {
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
                $('#error-messages-setfile').html(errorMsg);
            }
        });
    });
        
});  


function deletesetfile(id)
{
$('#setfile_delete_id').val(id);
}

   $(document).ready(function() {
    $('#delete-setfile-form').on('submit', function(e) {
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
                    $('#error-messages-delete-setfile').html(response.errors);
                }
            });
        });
            
    });

function editsetfile(id,title,file_name,file_type)
{

$('#setfile_edit_id').val(id);
$('#setfile_title').val(title);
$('#file_type_setfile').html(file_name);
$('#fileInput-edit-setfile').val(file_type);
$('#fileInput-edit-name-setfile').val(file_name);

var dropzone = document.querySelector('.dropzone-update-setfile');
var fileInput = document.querySelector('.fileInput-update-setfile');
var imagePreview = document.querySelector('.imagePreview-update-setfile');
var fileIconDisplay = document.querySelector('.fileIconDisplay-update-setfile');

dropzone.addEventListener('click', function() {
    fileInput.click();
});

fileInput.addEventListener('change', function() {
    var files = fileInput.files;
    if (files.length > 0) {
        var file = files[0];
        var reader = new FileReader();
        var fileType = file.type;

        if (fileType.startsWith('image/')) {
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
                fileIconDisplay.style.display = 'none';
            }
            reader.readAsDataURL(file);
        } else if (fileType === 'application/pdf') {
            imagePreview.style.display = 'none';
            fileIconDisplay.innerHTML = '<i class="fas fa-file-pdf fa-3x text-danger"></i><br>Selected file: ' + file.name;
            fileIconDisplay.style.display = 'block';
        } else if (fileType === 'application/vnd.ms-excel' || fileType === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
            imagePreview.style.display = 'none';
            fileIconDisplay.innerHTML = '<i class="fas fa-file-excel fa-3x text-success"></i><br>Selected file: ' + file.name;
            fileIconDisplay.style.display = 'block';
        } else {
            imagePreview.style.display = 'none';
            fileIconDisplay.textContent = 'Unsupported file type.';
            fileIconDisplay.style.display = 'block';
        }
    }
});

}

$(document).ready(function() {
    $('#edit-setfile-form').on('submit', function(e) {
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
                    $('#error-messages-edit-setfile').html(errorMsg);
                }
            });
        });
            
    }); 
    
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });


      function deletebulksetfile() {
        var selectedOptions = [];
        $('.checkbox:checked').each(function() {
            selectedOptions.push($(this).val());

        });

        $('#setfile_delete_bulk').val(selectedOptions.join(','));


    }



    $(document).ready(function() {
        $('#setfile-bulk-form').on('submit', function(e) {
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
                        $('#error-messages-delete-setfile-bulk').html(response.errors);
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
    
