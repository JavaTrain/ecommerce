
// Add user dropdown

$.each( $('.tm-addusers-content'), function() {
var widget			= $('.tm-addusers-content'),
	widgetToggler	= $(this).find('.tm-addusers-toggler'),
	widgetDropdown	= $(this).find('.tm-addusers-dropdown'),
	widgetHeight	= $(this).find('.tm-addusers-dropdown-decorator').outerHeight();


	widgetDropdown.css('height', widgetHeight);
	widgetToggler.click(function () {
		if (widgetDropdown.hasClass('tm-opened')) {
			widgetDropdown.removeClass('tm-opened').css('height', widgetHeight);
		} else {
			widgetDropdown.addClass('tm-opened').css('height', '0');
		}
	});
});
