<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	var orig_width = $("#map").width();
	var orig_height = $("#map").height();
	
	$(".fullscreenmap_click").click(function () { $.colorbox({
		width:"100%", 
		height:"100%", 
		inline:true, 
		href:"#map",
		// Resize Map DIV and Refresh
		onComplete:function(){
			$("#map").width("99%");
			$("#map").height("99%");
			
			// Dimensions of the viewport have changed
			// Trigger a resize
			map.trigger("resize");
		},
		// Return DIV to original state
		onClosed:function(){
			$("#map").width(orig_width);
			$("#map").height(orig_height);
			$("#map").show();
			map.trigger("resize");
		}
	}); });
});
</script>