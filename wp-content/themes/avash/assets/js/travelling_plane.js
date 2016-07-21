jQuery(document).ready(function($) {

$("#avashContactForm").validate({
  submitHandler: function(form) {
    // some other code
    // maybe disabling submit button
    // then:

    

    var data = {
		'action': 'avash_contact',
		'first_name' : $("#first_name").val(),
		'last_name' : $("#last_name").val(),
		'email' : $("#email").val(),
		'phone' : $("#phone").val(),
		'purpose' : $("#purpose").val(),
		'message' : $("#message").val(),
		'website' : $("#website").val(),
	};

	console.log($("#avashContactForm").serializeArray());
    /*$(form).submit();*/
    jQuery.post(avash_ajobject.ajax_url, data, function(response) {
		alert('Got this from the server: ' + response);
	});
  }
 });


});