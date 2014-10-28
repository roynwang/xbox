
function bindUploadItem(ele,callback_complete){
	var pdiv = $(ele);
	//var name = pdiv.attr("data-upload-name");

	var ulobj = pdiv.find('[data-upload]').upload({
			name: "xboxfile",
			action: '',
			enctype: 'multipart/form-data',
			params: {},
			autoSubmit: true,
			onSubmit: function() {
				callback_complete(pdiv,"http://Iamtest.com/test.file",this);
			},
//			onComplete: callback_complete,
			onSelect: function() {}
	});

	//fix ocupload bug. add padding and margin to parent
	var btn = $(pdiv.find('[data-upload]')[0]);
	btn.parent().css({margin: btn.css("margin")});
	return ulobj;
}	
function getFileName(url){
	return url.split("/").pop();
}

function filecomplete(pdiv, bcsurl, ocupload){
	var fn = getFileName(bcsurl);
	//add the target url
	var ubtn = $(pdiv.find("[data-upload]")[0]);
	var newfile = $('<div class="xbox-bcs-file"><a>' + fn + '</a><div class="xbox-upload-del" style="display:inline-block"></div>');
	//insert a empty dev
	var ph = pdiv.find("#_placeholder");
	if( ph.length == 0){
		ph = $('<div id="_placeholder" style="height:16px"></div>');
		ph.insertBefore(pdiv.find(".xbox-upload-result"));
	}
	newfile.insertAfter(ph);

	$(".xbox-upload-result").append($('<input type="text" style="display:none" value="' + bcsurl+ '"></div>'));
	alert("我在假装上传:"+ fn);
	//redraw to apply the css
	//pdiv.hide();
	//pdiv.show();

	var del = newfile.find(".xbox-upload-del");
	del.click(function(e){
			var i = pdiv.find(".xbox-upload-del").index($(this));
			$(pdiv.find(".xbox-upload-result input")[i]).remove();
			$(this).parent().remove();
			if(pdiv.find(".xbox-upload-result input").length  < pdiv.attr("data-upload-max")){
				ubtn.removeAttr("disable");
			}
	});

	//hide add action if reach the max count
	if(pdiv.find(".xbox-upload-result input").length  >= pdiv.attr("data-upload-max")){
		ubtn.attr("disable", true);
	}

}
function singleiconcomplete(pdiv,bcsurl,ocupload){
	var pic = $(pdiv.find('[data-upload]')[0]);
	var width = parseInt(pic.css("width")) + parseInt(pic.css("padding-left")) +  parseInt(pic.css("padding-right")) + 2;

	var height = parseInt(pic.css("height")) + parseInt(pic.css("padding-top")) +  parseInt(pic.css("padding-left")) + 2;
	alert(width);
	var dup = $(pic).clone();
	dup.css({width: width, height: height});
	dup.removeAttr("data-upload");
	//TODO replace to real image
	dup.css({"background": 'url("http://www.w3schools.com/images/colorpicker.gif") center center no-repeat'});
	dup.insertAfter(pdiv.find(".xbox-upload-result"));
	//add input node
	pdiv.find(".xbox-upload-result").prepend('<input type="text" value="' + bcsurl +'" style="display:none">');
	//fix del span
	del = $('<div class="col-sm-1 xbox-upload-del"></div>');
	del.insertAfter(dup);
	del.click(function(e){
			var i = pdiv.find(".xbox-upload-del").index($(this));
			$(pdiv.find(".xbox-upload-result input")[i]).remove();
			$(this).prev().remove();
			$(this).remove();

			if(pdiv.find(".xbox-upload-result input").length  < pdiv.attr("data-upload-max")){
				pic.show();
			}
	});
	
	//hide add action if reach the max count
	if(pdiv.find(".xbox-upload-result input").length  == pdiv.attr("data-upload-max")){
		pic.hide();
	}
	
}
function bindXboxUpload(){

	$(".xbox-file-form").each(function(){
		$('<form class="xbox-upload-result"></form>').insertAfter($(this).find('[data-upload]'));
		bindUploadItem(this,filecomplete);
	});
	$(".xbox-pic-form").each(function(){
		$('<form class="xbox-upload-result"></form>').insertBefore($(this).find('[data-upload]'));
		bindUploadItem(this, singleiconcomplete);
	});
}
function xboxGetFormValue(){
		var ret = {};
		$("[data-upload-name]").each(function(i,obj){
				var key = $(this).attr("data-upload-name");
				var item = [];
				console.log(key);
				$(this).find(".xbox-upload-result input").each(function(){
						item.push(this.value);
						console.log("-----" + this.value + "---------");
				})
				if(item.length != 0 ){
					ret[key] = JSON.stringify(item);
				}
		})

		console.log(JSON.stringify(ret));
		return ret;
}
