jQuery(document).ready(function($) {
    $('#publish').on('click', function(event) {
        if( $('#set-post-thumbnail img').length == 0 ) {
            event.preventDefault();
          //  alert(featured_image_data.message);
        var error_notice = `
        <div id="message" class="error notice updated is-dismissible">
            <p>` + featured_image_data.message + `</p>
            <!-- <button type="button" class="notice-dismiss"><span class="screen-reader-text">Descartar este aviso.</span></button> -->
        </div>
        `
        $('.wrap .wp-header-end').after(error_notice);        
        }
    });
});