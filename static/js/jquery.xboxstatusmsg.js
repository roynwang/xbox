jQuery.fn.extend(
				{
	showmsg: function(option){
	var opt_dft = {
		msg: "dddddddddddd",
		link: '<a href="d">link</a>',
		timeout: 3000,
		result: 'pass',
		offset: 30
	};
	option = $.extend(opt_dft, option);
	if($("#_xbox-status-msg").length != 0){
		return;
	}
	//append msg to body
	var msgobj = $('<p id="_xbox-status-msg"></p>');
	msgobj.html("<span></span>" + option["msg"] + option["link"]);
	msgobj.addClass(option['result']);
	$("body").append(msgobj);
	//get the top position of the trigger
	topoffset = this.offset().top + this.height() + option['offset'];
	msgobj.css({top: topoffset});
	msgobj.fadeIn();
	
	setTimeout(function (){
		msgobj.fadeOut( function(){
			msgobj.removeClass(option['result']);
			msgobj.remove();
		});
	}, option['timeout']);
}});
