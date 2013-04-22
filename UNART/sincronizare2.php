<!DOCTYPE html>
<html>
<head>
<title>Sincronizare</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>

$( document ).ready(function() {
	$(".automatic_syncronization_button_ok").click(function() {	
		if($(this).hasClass("disabled")){
			return false;
		} else {
			if($(this).parent().parent().hasClass("no")){
				$(this).parent().parent().removeClass("no");
				$(this).next().removeClass("disabled");
			}
			$(this).parent().parent().addClass("ok");
			$(this).addClass("disabled");
		}
	});
	$(".automatic_syncronization_button_no").click(function() {
		if($(this).hasClass("disabled")){
			return false;
		} else {
			if($(this).parent().parent().hasClass('ok')){
				$(this).parent().parent().removeClass('ok');
				$(this).prev().removeClass("disabled");
			}
			$(this).parent().parent().addClass('no');
			$(this).addClass("disabled");
			$(".popup_background").show();
			$(".manual_synchronization").show();
		}
	});
	$(".automatic_syncronization_button_undo").click(function() {
			$(this).parent().parent().removeClass('ok');
			$(this).parent().parent().removeClass('no');
			$(this).prev().removeClass("disabled");
			$(this).prev().prev().removeClass("disabled");
	});
	$(".manual_synchronization_close").click(function() {
			$(".popup_background").hide();
			$(".manual_synchronization").hide();
	});
	$(".save_synchronization").click(function(){
		alert("nimic :)");
	});
	$(".save_manual_synchronization").click(function(){
		if($(".automatic_syncronization_item").hasClass("no")){
				$(".automatic_syncronization_item").removeClass("no");
				$(".automatic_syncronization_item").addClass("ok");
				$(".automatic_syncronization_menu").children().eq(1).removeClass("disabled");
				$(".automatic_syncronization_menu").children().eq(0).addClass("disabled");
		}
		$(".popup_background").hide();
		$(".manual_synchronization").hide();
	});
	/*var first_selector = document.getElementById('unart');
	var second_selector = document.getElementById('extern');

	function first_scroll_selector(e) { second_selector.scrollTop = first_selector.scrollTop; }
	function second_scroll_selector(e) { first_selector.scrollTop = second_selector.scrollTop; }

	first_selector.addEventListener('scroll', first_scroll_selector, false);
	second_selector.addEventListener('scroll', second_scroll_selector, false);*/
});
</script>
<style>
.automatic_syncronization { width: 100%; float: left; }
.automatic_syncronization_wrapper { width: 960px; margin: 0 auto; height: 700px; overflow-y:scroll;}
.automatic_syncronization_item { width: 940px; float: left;}
.automatic_syncronization_item.ok { background-color: rgba(81,247,148,0.2)}
.automatic_syncronization_item.no { background-color: rgba(247,81,81,0.2)}
.automatic_syncronization_intern { width: 449px; height:90px; border: 1px solid silver; float:left;}
.automatic_syncronization_extern { width: 445px; height:90px; border: 1px solid silver; float:left;}
.automatic_syncronization_menu { width: 40px; height:90px; float:left; border: 1px solid silver;}
.automatic_syncronization_button_ok { background: url('assets/images/ok.png') no-repeat center center; width: 24px; height: 24px; margin: 4px 0 0 7px; cursor:pointer; background-size: 24px; 24px;}
.automatic_syncronization_button_ok.disabled { background: url('assets/images/ok_disabled.png') no-repeat center center; width: 24px; height: 24px; margin: 4px 0 0 7px; cursor:default; background-size: 24px; 24px;}
.automatic_syncronization_button_no { background: url('assets/images/no.png') no-repeat center center; width: 24px; height: 24px; margin: 4px 0 0 7px; cursor:pointer; background-size: 24px; 24px;}
.manual_synchronization_close { position: relative; margin: 5px 5px 0 0; float: right; background: url('assets/images/no.png') no-repeat center center; width: 24px; height: 24px; cursor:pointer; background-size: 24px; 24px;}
.automatic_syncronization_button_no.disabled { background: url('assets/images/no_disabled.png') no-repeat center center; width: 24px; height: 24px; margin: 4px 0 0 7px; cursor:default; background-size: 24px; 24px;}
.automatic_syncronization_button_undo { background: url('assets/images/undo.png') no-repeat center center; width: 24px; height: 24px; margin: 4px 0 0 7px; cursor:pointer; background-size: 24px; 24px;}
.save_manual_synchronization {	background: none repeat scroll 0 0 silver; cursor: pointer; float: left; font-size: 22px; height: 40px; line-height: 37px; margin: 145px 0 0 25px; text-align: center; width: 130px; }
.save_synchronization {	background: none repeat scroll 0 0 silver; cursor: pointer; float: right; font-size: 22px; height: 40px; line-height: 37px; margin: -40px 80px 0 0; text-align: center; width: 130px; }
.popup_background { background: url('assets/images/popup_bg.png') repeat scroll 0 0 transparent; display: none; height: 100%; left: 0; position: fixed; top: 0; width: 100%; z-index: 2; }
.manual_synchronization { display: none; height: 208px; left: 50%; margin: -180px 0 0 -240px; overflow: auto; position: absolute; top: 50%; width: 478px; z-index: 3; background-color: #fff; }
</style>
</head>
<body>
<div class="automatic_syncronization">
	<div class="automatic_syncronization_wrapper">
		<div class="automatic_syncronization_item">
			<div class="automatic_syncronization_intern"><aside></aside></div>
			<div class="automatic_syncronization_extern"><aside></aside></div>
			<div class="automatic_syncronization_menu">
					<div class="automatic_syncronization_button_ok"></div>
					<div class="automatic_syncronization_button_no"></div>
					<div class="automatic_syncronization_button_undo"></div>
			</div>
		</div>
		<div class="automatic_syncronization_item">
			<div class="automatic_syncronization_intern"><aside></aside></div>
			<div class="automatic_syncronization_extern"><aside></aside></div>
			<div class="automatic_syncronization_menu">
					<div class="automatic_syncronization_button_ok"></div>
					<div class="automatic_syncronization_button_no"></div>
					<div class="automatic_syncronization_button_undo"></div>
			</div>
		</div>
		<div class="automatic_syncronization_item">
			<div class="automatic_syncronization_intern"><aside></aside></div>
			<div class="automatic_syncronization_extern"><aside></aside></div>
			<div class="automatic_syncronization_menu">
					<div class="automatic_syncronization_button_ok"></div>
					<div class="automatic_syncronization_button_no"></div>
					<div class="automatic_syncronization_button_undo"></div>
			</div>
		</div>
		<div class="automatic_syncronization_item">
			<div class="automatic_syncronization_intern"><aside></aside></div>
			<div class="automatic_syncronization_extern"><aside></aside></div>
			<div class="automatic_syncronization_menu">
					<div class="automatic_syncronization_button_ok"></div>
					<div class="automatic_syncronization_button_no"></div>
					<div class="automatic_syncronization_button_undo"></div>
			</div>
		</div>
		<div class="automatic_syncronization_item">
			<div class="automatic_syncronization_intern"><aside></aside></div>
			<div class="automatic_syncronization_extern"><aside></aside></div>
			<div class="automatic_syncronization_menu">
					<div class="automatic_syncronization_button_ok"></div>
					<div class="automatic_syncronization_button_no"></div>
					<div class="automatic_syncronization_button_undo"></div>
			</div>
		</div>
		<div class="automatic_syncronization_item">
			<div class="automatic_syncronization_intern"><aside></aside></div>
			<div class="automatic_syncronization_extern"><aside></aside></div>
			<div class="automatic_syncronization_menu">
					<div class="automatic_syncronization_button_ok"></div>
					<div class="automatic_syncronization_button_no"></div>
					<div class="automatic_syncronization_button_undo"></div>
			</div>
		</div>
		<div class="automatic_syncronization_item">
			<div class="automatic_syncronization_intern"><aside></aside></div>
			<div class="automatic_syncronization_extern"><aside></aside></div>
			<div class="automatic_syncronization_menu">
					<div class="automatic_syncronization_button_ok"></div>
					<div class="automatic_syncronization_button_no"></div>
					<div class="automatic_syncronization_button_undo"></div>
			</div>
		</div>
		<div class="automatic_syncronization_item">
			<div class="automatic_syncronization_intern"><aside></aside></div>
			<div class="automatic_syncronization_extern"><aside></aside></div>
			<div class="automatic_syncronization_menu">
					<div class="automatic_syncronization_button_ok"></div>
					<div class="automatic_syncronization_button_no"></div>
					<div class="automatic_syncronization_button_undo"></div>
			</div>
		</div>
		<div class="automatic_syncronization_item">
			<div class="automatic_syncronization_intern"><aside></aside></div>
			<div class="automatic_syncronization_extern"><aside></aside></div>
			<div class="automatic_syncronization_menu">
					<div class="automatic_syncronization_button_ok"></div>
					<div class="automatic_syncronization_button_no"></div>
					<div class="automatic_syncronization_button_undo"></div>
			</div>
		</div>
		<div class="automatic_syncronization_item">
			<div class="automatic_syncronization_intern"><aside></aside></div>
			<div class="automatic_syncronization_extern"><aside></aside></div>
			<div class="automatic_syncronization_menu">
					<div class="automatic_syncronization_button_ok"></div>
					<div class="automatic_syncronization_button_no"></div>
					<div class="automatic_syncronization_button_undo"></div>
			</div>
		</div>
		<div class="automatic_syncronization_item">
			<div class="automatic_syncronization_intern"><aside></aside></div>
			<div class="automatic_syncronization_extern"><aside></aside></div>
			<div class="automatic_syncronization_menu">
					<div class="automatic_syncronization_button_ok"></div>
					<div class="automatic_syncronization_button_no"></div>
					<div class="automatic_syncronization_button_undo"></div>
			</div>
		</div>
		<div class="automatic_syncronization_item">
			<div class="automatic_syncronization_intern"><aside></aside></div>
			<div class="automatic_syncronization_extern"><aside></aside></div>
			<div class="automatic_syncronization_menu">
					<div class="automatic_syncronization_button_ok"></div>
					<div class="automatic_syncronization_button_no"></div>
					<div class="automatic_syncronization_button_undo"></div>
			</div>
		</div>
		<div class="automatic_syncronization_item">
			<div class="automatic_syncronization_intern"><aside></aside></div>
			<div class="automatic_syncronization_extern"><aside></aside></div>
			<div class="automatic_syncronization_menu">
					<div class="automatic_syncronization_button_ok"></div>
					<div class="automatic_syncronization_button_no"></div>
					<div class="automatic_syncronization_button_undo"></div>
			</div>
		</div>
		<div class="automatic_syncronization_item">
			<div class="automatic_syncronization_intern"><aside></aside></div>
			<div class="automatic_syncronization_extern"><aside></aside></div>
			<div class="automatic_syncronization_menu">
					<div class="automatic_syncronization_button_ok"></div>
					<div class="automatic_syncronization_button_no"></div>
					<div class="automatic_syncronization_button_undo"></div>
			</div>
		</div>
		<div class="automatic_syncronization_item">
			<div class="automatic_syncronization_intern"><aside></aside></div>
			<div class="automatic_syncronization_extern"><aside></aside></div>
			<div class="automatic_syncronization_menu">
					<div class="automatic_syncronization_button_ok"></div>
					<div class="automatic_syncronization_button_no"></div>
					<div class="automatic_syncronization_button_undo"></div>
			</div>
		</div>
		<div class="automatic_syncronization_item">
			<div class="automatic_syncronization_intern"><aside></aside></div>
			<div class="automatic_syncronization_extern"><aside></aside></div>
			<div class="automatic_syncronization_menu">
					<div class="automatic_syncronization_button_ok"></div>
					<div class="automatic_syncronization_button_no"></div>
					<div class="automatic_syncronization_button_undo"></div>
			</div>
		</div>		
	</div>
	<div class="save_synchronization">Salveaza</div>
	<div class="popup_background">
		<div class="manual_synchronization">
			<div class="manual_synchronization_close"></div>
			<aside></aside>
			<div class="save_manual_synchronization">Salveaza</div>
		</div>
	</div>
</div>
</body>
</html>