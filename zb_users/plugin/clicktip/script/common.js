$(function(){
	var keyindex = "0";
	$("body").click(function(e){
		var key = new Array("💐","🌸","💮","🌹","🌺","🌻","🌼","🌷","🌱","🌲","🌳","🌴","🌵","🌾","🌿","🍀","🍁","🍂","🍃");
		var $i = $("<span/>").text(key[keyindex]);
		keyindex = (keyindex + 1) % key.length;
		var x = e.pageX, y = e.pageY;
		$i.css({
			"z-index":9999999999,
			"top":y - 20,
			"left":x,
			"position":"absolute",
			"font-size":"20px",
			"color":"#004C98",
			"font-family":"microsoft yahei",
			"font-style":"normal"
		});
		$("body").append($i);
		$i.animate({"top":y-200,"opacity":0},1000,function(){$i.remove();});
	});
});