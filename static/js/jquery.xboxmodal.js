function show_xboxmodal(option){ 
	/* type: info/confirm
		 * title: 
		 * msg:
		 * confirm_text
		 * cancel_text
		 * confirm_callback;
		 * cancel_callback
		 * info_type: warn/fail/pass
		 */

	var opt_defult = { type: "remind",
			title:"提示",
//			msg:"啊哈哈哈哈哈哈哈哈哈哈哈哈哈哈啊哈哈哈哈哈哈啊",
			msg: "我很短",
			yes_text:"确定",
			no_text:"取消",
			yes_callback: null,
			no_callback: null
	};
	option = $.extend(opt_defult, option);
		var xboxmodal_template = '<div id="_xbox-modal" class="modal fade">\
	<div class="modal-dialog">\
		<div class="modal-content">\
			<div class="modal-header">\
				<h4></h4>\
			</div>\
			<div class="modal-body vertical-center">\
				<div class="xbox-modal-info row">\
					<span id="_xbox-modal-icon" class="col-sm-4" style="position: relative; top:-6px"></span>\
					<p id="_xbox-modal-msg"></p>\
				</div>\
			</div>\
			<div class="modal-footer">\
				<div class="row" style="width: 300px; margin:auto">\
					<div class="col-sm-6">\
						<a id="_xbox-modal-btn-no" class="xbox-btn xbox-btn-light"> 取消 </a>\
					</div>\
					<div class="col-sm-6">\
						<a id="_xbox-modal-btn-yes" class="xbox-btn xbox-btn-primary">确定</a>\
					</div>\
				</div>\
			</div>\
		</div>\
	</div>\
</div>';
	var modal_node= $(xboxmodal_template);
	if(option['type'] == 'remind'){
			build_xboxmodal_info(modal_node, option)
	}
	else if(option['type'] == 'confirm'){
			build_xboxmodal_confirm(modal_node, option);
	}
	$('#_xbox-modal').on('hidden.bs.modal', function () {
					$("#_xbox-modal").remove();
	})
	$("#_xbox-modal").modal("show");
}
function build_xboxmodal_info(modal_obj, option){
		var header = ".modal-header h4";
		var icon = "#_xbox-modal-icon";
		var msg = "#_xbox-modal-msg";
		var footer = ".modal-footer";
		var btns = ".modal-footer > div";
		modal_obj.find(header).html(option['title']);

		modal_obj.find(icon).addClass("xbox-modal-span-"+ option['info_type'])
		modal_obj.find(msg).html(option['msg']);
		modal_obj.find(footer).css({"border":"none"});
		modal_obj.find(btns).css({"display":"none"});
		$("body").append(modal_obj);
}

function build_xboxmodal_confirm(modal_obj, option){
		var header = ".modal-header h4";
		var icon = "#_xbox-modal-icon";
		var msg = "#_xbox-modal-msg";
		var footer = ".modal-footer";
		var btns = ".modal-footer > div";
		
		modal_obj.find(header).html(option['title']);
		modal_obj.find(icon).addClass("xbox-modal-span-warn")
		modal_obj.find(msg).html(option['msg']);
		modal_obj.find(footer).css({"height":"82px"});
		$("body").append(modal_obj);

		modal_obj.find("#_xbox-modal-btn-yes").click(function(e){
						if(option['yes_callback'] != null){		
						option['yes_callback'](e);
						}
						$("#_xbox-modal").modal("hide");
						});
		modal_obj.find("#_xbox-modal-btn-no").click(function(e){

						if(option['no_callback'] != null){		
							option['no_callback'](e);
							}
						$("#_xbox-modal").modal("hide");
						});
}



