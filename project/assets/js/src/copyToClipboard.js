var clientTarget = new ZeroClipboard( $("#click-to-copy"), {
    moviePath: "../zeroClipboard.swf",
    debug: true
} );

$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

clientTarget.on("load", function(clientTarget) {
    $('#flash-loaded').fadeIn();

    clientTarget.on( "complete", function(clientTarget, args) {
    	clientTarget.setText( args.text );
        $('#share-url-field').fadeIn();
    });
});


clientTarget.on("copy", function(clientTarget) {
	$('#click-to-copy').tooltip('hide');
	new_tooltip();
});

$('#tooltip_span').on("focusout mouseleave", function() {
	$('#tooltip_span').tooltip('destroy');
});

function new_tooltip() {
	$('#tooltip_span').tooltip();
}