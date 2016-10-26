function listItems(){

    var michael = document.getElementById('michael').value;
    alert(michael);
    var testDebugging = document.getElementById('testDebugging').value;
    var post_data = {
        brand: michael
    };

    $.post(testDebugging,post_data )
        .done(function( data ) {
            var data1 = document.getElementById("sigInDemo").innerHTML = data;
            console.log(data);

        });
}


























$(function () {

    var $j = jQuery.noConflict();
    var fileDragUpload = document.getElementById('fileDragUpload').value;
    //var fileDragDropUploadImg = document.getElementById('fileDragDropUploadImg').value;

        var dropzone = document.getElementById('dropzone');
        var listanitem = $("#listanitem").val();
        var formData = "";

        dropzone.ondrop = function(e){
            e.preventDefault();
            this.className ='dropzone';
            files_list = e.dataTransfer.files;
            formData = new FormData();
            for(x = 0; x < files_list.length; x++){
                formData.append('file[]', files_list[x]);
            }
        };

        $j('#uploadForm').on('submit', function(e){
            e.preventDefault();
        $j.ajax({
            url : fileDragUpload,
            type: "POST",
            data:formData,
            contentType: false,
            processData: false,
            success: function(data)
            {
                $j('#gallery').html(data);
                console.log(data);
            }
        });
    });

    dropzone.ondragover = function(){
        this.className = 'dropzone dragover';
        return false;
    };
    dropzone.ondragleave = function(){
        this.className = 'dropzone';
        return false;
    };

});