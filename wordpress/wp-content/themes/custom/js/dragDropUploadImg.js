

 // console.log(fileDragUpload);





$(function(){

    var fileDragDropUploadImg = document.getElementById('fileDragDropUploadImg').value;

    var fileDragUpload = document.getElementById('fileDragUpload').value;
    var dropzone = document.getElementById('dropzone');



    function listItems(files){
            var formData = new FormData(),
                xhr = new XMLHttpRequest(),
                x;
            for(x = 0; x < files.length; x++){
                formData.append('file[]', files[x]);
            }

            xhr.onload = function(){
                //var data = JSON.parse(this.responseText);
                var data = this.responseText;
                //displayUploads(data);
                console.log(data)
            }
            xhr.open('post', fileDragUpload);
            xhr.send(formData);
    };



    dropzone.ondrop = function(e){
        e.preventDefault();
        this.className ='dropzone';
        listItems(e.dataTransfer.files);
    };
    dropzone.ondragover = function(){
        this.className = 'dropzone dragover';
        return false;
    };
    dropzone.ondragleave = function(){
        this.className = 'dropzone';
        return false;
    };
});







