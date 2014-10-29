function showmsg(jqobj,option){
	var opt_dft = {
		icon: null,
		msg: "dddddddddddd <a href='d'>link</a>",
		timeout: 100000,
		result: 'pass',
	};
	option = $.extend(opt_dft, option);
	if($("#_xbox-status-msg").length != 0){
		return;
	}
	var msgobj = $('<p id="_xbox-status-msg"></p>');
	msgobj.html("<span></span>" + option["msg"]);
	msgobj.addClass(option['result']);
	$("body").append(msgobj);
	setTimeout(function (){
		msgobj.removeClass(option['result']);
		msgobj.remove();
	}, option['timeout']);
}
