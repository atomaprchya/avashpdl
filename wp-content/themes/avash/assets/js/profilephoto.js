jQuery(document).ready(function($) {

  

    $('#upload_profileimage_button').click(function() {
        tb_show('Upload a logo', 'media-upload.php?referer=avash-theme-options&type=image&TB_iframe=true&post_id=0', false);
        return false;
    }); 

    


    $('#delete_logo_button').click(function() {
    	$('#profileimage_url').val('');
        $('#upload_logo_preview img').attr('src','');
    });
    window.send_to_editor = function(html) {
        var image_obj = $.parseHTML(html);

        var image_url = $(image_obj).attr('src');
        console.log(image_url);
        $('#profileimage_url').val(image_url);

        $('#upload_logo_preview img').attr('src',image_url);
        tb_remove();
    }
/*
    $('#upload_projectgallery_button').click(function() {
        tb_show('Upload project gallery', 'media-upload.php?type=image&TB_iframe=true&post_id=0', false);
        return false;
    });
    
    window.send_to_editor = function(html) {
       console.log(html);
    }*/



});




