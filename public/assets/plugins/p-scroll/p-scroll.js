(function($) {
	"use strict";
	
	// ______________ PerfectScrollbar
	const ps = new PerfectScrollbar('.app-sidebar', {
		useBothWheelAxes:true,
		suppressScrollX:true,
	});
	
	// ______________ PerfectScrollbar
	const ps1 = new PerfectScrollbar('.sidebar-right', {
		useBothWheelAxes:true,
		suppressScrollX:true,
	});
	
})(jQuery);