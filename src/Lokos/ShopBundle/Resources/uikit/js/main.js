// Mootools and UIkit conflict fix
if (window.MooTools) {  
    Element.prototype.hide = function() {  
        return;  
    };  
}
if(Dropzone) {
	Dropzone.autoDiscover = false;
}
jQuery(document).ready(function ($){
	// Up drawer behaviour
	function showDropdownUp(element, drawerClass, direction) {
		var drawer = $('.'+drawerClass, element),
			offset = drawer.offset(),
			drawerOffset = offset.top,
			docHeight = $(document).height(),
			drawerHeight = drawer.height();
	    if ( (docHeight - drawerOffset) <  drawerHeight) {
	    	drawer.addClass(direction);
	    }
	}
	//$('.choosen-select-default').on('click', function(){
		//showDropdownUp($(this), 'chzn-drop', 'chzn-dropdown-top');
	//});
	$('[data-uk-dropdown]').on('show.uk.dropdown', function(){
		showDropdownUp($(this), 'uk-dropdown', 'uk-dropdown-up');
	});

	// Add active class for data-uk-form-select
	$('[data-uk-form-select] select').on('focus', function(){
		$(this).parent().addClass('uk-open');
	}).on('blur', function(){
		$(this).parent().removeClass('uk-open');
	});
});