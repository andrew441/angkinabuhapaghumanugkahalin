/**
 * Created by C on 9/28/2016.
 */

$(function () {
//Upload Profile Image for update Account

    var uc_upload_image = document.getElementById('uc_upload_image').value;
    var cp_upload_image = document.getElementById('cp_upload_image').value;
    $('#uploadProfile1Form').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url : uc_upload_image,
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(data)
            {
                var uc_uploads = document.getElementById('uc_uploads').value;
                var uc_ppdata = data.split("(operationsplitedtext)");
                document.getElementById('gallery_update_account').innerHTML = uc_ppdata[0];
                document.getElementById('oldImageProfileIcon1').src = uc_uploads + uc_ppdata[1];
                console.log(data);
            }
        });
    });

    $('.oldImageProfileIcon').hover(function(){
        $('.imageProfileIcon').slideDown().css({
            'box-shadow': '0 1px 1px rgba(0, 0, 0, 0.3)',
            'z-index': 1
        });
    });


    $('#uploadCoverPhoto').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url : cp_upload_image,
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(data)
            {


                var uc_cpdata_id = data.split("(operationsplitedtextcoverphoto)");
                document.getElementById('gallery_cp').innerHTML = uc_cpdata_id[0];
                var cp_uploads = document.getElementById('cp_uploads').value;

                //console.log(cp_uploads);
                //console.log(uc_cpdata_id[1]);
                document.getElementById('oldImageCoverIcon').src = cp_uploads + uc_cpdata_id[1];



            }
        });
    });

    $('.oldImageCoverIcon').hover(function(){
        $('.imageCoverIcon').slideDown().css({
            'box-shadow': '0 1px 1px rgba(0, 0, 0, 0.3)',
            'z-index': 1
        });
    });
});