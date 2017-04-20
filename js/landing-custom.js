jQuery(document).ready(function() { 

    jQuery('#wpcf7-f256-o1.wpcf7-response-output').attr('style', 'display: none !important');

	$("#firstname").attr('maxlength','20');
    $("#firstname").bind('keyup blur',function(){ 
        var node = $(this);
        node.val(node.val().replace(/[^a-zA-Z ]/g,'') ); }
    );

	$("#lastname").attr('maxlength','20');
    $("#lastname").bind('keyup blur',function(){ 
        var node = $(this);
        node.val(node.val().replace(/[^a-zA-Z ]/g,'') ); }
    );

	$("#cname").attr('maxlength','20');
    $("#cname").bind('keyup blur',function(){ 
        var node = $(this);
        node.val(node.val().replace(/[^a-zA-Z ]/g,'') ); }
    );

    $(".wpcf7-email").attr('maxlength','100');
    $(".wpcf7-email").bind('keyup blur',function(){ 
        var node = $(this);
        node.val(node.val().replace(/[^a-zA-Z0-9.@-]/g,'') ); }
    );


});