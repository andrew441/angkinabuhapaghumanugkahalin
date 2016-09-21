$(function () {

    // var uploadPhoto = document.getElementById('uploadPhoto').value; 
//drag and drop image  

    var $j = jQuery.noConflict();

    var dropzone = document.getElementById('dropzone');
    //var dropzone = document.getElementById('dropzone');
    var fileDragUpload = document.getElementById('fileDragUpload').value;

    var testDebugging = document.getElementById('testDebugging').value;
    // // console.log(fileDragUpload);
    // var displayUploads = function(data){

    // var uploads = document.getElementById('uploads'),
    // anchor,
    // x;  
    // for(x=0;x < data.length; x++){
    //     anchor = document.createElement('a');
    //     anchor.href = data[x].file;
    //     anchor.innerText = data[x].name;
    //     uploads.appendChild(anchor);    
    //     }

    // }

    //     var upload = function (files){
    //     var formData = new FormData(),
    //     xhr = new XMLHttpRequest(),

    //     x;
    // for(x = 0; x < files.length; x++){
    //     formData.append('file[]', files[x]);
    // }

    // xhr.onload = function(){
    //     var data = JSON.parse(this.responseText);
    //     displayUploads(data);        
    // }
    //     xhr.open('post', fileDragUpload);
    //     xhr.send(formData); 
    // };

    dropzone.ondrop = function(e){
        e.preventDefault();
        this.className ='dropzone';
        // upload(e.dataTransfer.files); 
    };
    dropzone.ondragover = function(){
        this.className = 'dropzone dragover';
        $j('#uploadPhoto').hide();
        return false;
    };
    dropzone.ondragleave = function(){
        this.className = 'dropzone';
        $j(".uploadPhoto").removeClass('uploadPhoto');
        $j('#uploadPhoto').show();
        console.log("He");
        return false;
    };

    $j('#uploadPhoto').on('dragenter', function(){
        $j(this).addClass('uploadPhoto');
        console.log('Hello');
    });
    $j('#uploadPhoto').on('dragleave', function(){
        $j('#uploadPhoto').show();
        console.log('hi');
    });


//upload multiple image in list an items page
        $j('#uploadForm').on('submit', function(e){
        e.preventDefault();
        $j.ajax({
            url : fileDragUpload,
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(data)
            {
                $('#gallery').html(data);
                // alert("Image uploaded");
            }
        });

    });

});

// function updateProfileButton(){



// }