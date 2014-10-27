
function bindUploadItem(ele, name, callback_complete){
	var item = $(ele);
	var ulobj = $(ele).find('[data-upload = "file"]').upload({
			name: name,
			action: '',
			enctype: 'multipart/form-data',
			params: {},
			autoSubmit: true,
			onSubmit: function() {
				callback_complete(item,"http://Iamtest.com/test.file",this);
			},
//			onComplete: callback_complete,
			onSelect: function() {}
	});
	return ulobj;
}	
function getFileName(url){
	return url.split("/").pop();
}

function filecomplete(pdiv, bcsurl, ocupload){
	fn = getFileName(bcsurl);
	alert(ocupload.filename());
	//add the target url
	if(pdiv.find(".xbox-upload-result").length == 0){
		$('<form class="xbox-upload-result"></form>').insertAfter(pdiv.find("[data-upload]"));
	}
	pdiv.find(".xbox-upload-result").append('<div class="row"><div style="display:inline-block"><a class="xbox-bcs-file">' + fn 
			+ '</a></div><div class="xbox-file-del" style="display:inline-block"><span></span></div><input type="text" style="display:none" value="' + bcsurl+ '"></div>');
	alert("我在假装上传:"+ fn);
}
function iconcomplete(res){
}
function piccomplete(res){
}
function bindXboxUpload(){
	$(".xbox-file-form").each(function(){
		bindUploadItem(this,"xboxfile", filecomplete);
	});
}
