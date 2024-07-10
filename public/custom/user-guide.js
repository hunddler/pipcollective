document.addEventListener('DOMContentLoaded', function() {
    var dropzone = document.querySelector('.dropzone-new');
    var fileInput = document.querySelector('.fileInput-new');
    var imagePreview = document.querySelector('.imagePreview-new');
    var fileIconDisplay = document.querySelector('.fileIconDisplay-new');

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
$('#user-guide-form').on('submit', function(e) {
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
                $('#error-messages').html(errorMsg);
            }
        });
    });
        
});  


function deleteuserguide(id)
{
$('#user_delete_id').val(id);
}

   $(document).ready(function() {
    $('#delete-user-guide-form').on('submit', function(e) {
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
                    $('#error-messages-delete').html(response.errors);
                }
            });
        });
            
    });

function edituserguide(id,title,link,file_name,file_type)
{

$('#edit_id').val(id);
$('#title').val(title);
$('#video_link').val(link);
$('#file_type').html(file_name);
$('#fileInput-edit').val(file_type);
$('#fileInput-edit-name').val(file_name);

var dropzone = document.querySelector('.dropzone-update');
var fileInput = document.querySelector('.fileInput-update');
var imagePreview = document.querySelector('.imagePreview-update');
var fileIconDisplay = document.querySelector('.fileIconDisplay-update');

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
    $('#edit-user-guide-form').on('submit', function(e) {
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
                    $('#error-messages-edit').html(errorMsg);
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
    
