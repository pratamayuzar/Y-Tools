jQuery( document ).ready(function() {
	tidioChatApi = window.tidioChatApi;
	tidioChatApi.on('ready', function(){
		jQuery('.y-tidio').removeClass("hide");
	});
});

jQuery(document).on('click', '.y-tidio', function() {
	message = jQuery(this).attr('message');
	tidioChatApi = window.tidioChatApi;
	tidioChatApi.open();
	if (message) {
		tidioChatApi.messageFromVisitor(message);
	}
});

