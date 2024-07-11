document.addEventListener('DOMContentLoaded', function() {
    var dropzone = document.querySelector('.dropzone-course');
    var fileInput = document.querySelector('.fileInput-course');
    var imagePreview = document.querySelector('.imagePreview-course');
    var fileIconDisplay = document.querySelector('.fileIconDisplay-course');

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
$('#course-form').on('submit', function(e) {
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
                $('#error-messages-course').html(errorMsg);
            }
        });
    });
        
});  


function deletecourse(id)
{
$('#course_delete_id').val(id);
}

   $(document).ready(function() {
    $('#delete-course-form').on('submit', function(e) {
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
                    $('#error-messages-delete-course').html(response.errors);
                }
            });
        });
            
    });

function editcourse(id,title,link,file_name,file_type)
{

$('#course_edit_id').val(id);
$('#course_title').val(title);
$('#course_video_link').val(link);
$('#course_file_type').html(file_name);
$('#course_fileInput-edit').val(file_type);
$('#course_fileInput-edit-name').val(file_name);

var dropzone = document.querySelector('.dropzone-update-course');
var fileInput = document.querySelector('.fileInput-update-course');
var imagePreview = document.querySelector('.imagePreview-update-course');
var fileIconDisplay = document.querySelector('.fileIconDisplay-update-course');

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
    $('#edit-course-form').on('submit', function(e) {
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
                    $('#error-messages-edit-course').html(errorMsg);
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


    function deletebulkcourse() {
        var selectedOptions = [];
        $('.checkbox:checked').each(function() {
            selectedOptions.push($(this).val());

        });

        $('#course_delete_bulk').val(selectedOptions.join(','));


    }



    $(document).ready(function() {
        $('#delete-bulk-course-form').on('submit', function(e) {
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
                        $('#error-messages-delete-course-bulk').html(response.errors);
                    }
                });
            });
                
        });
    
