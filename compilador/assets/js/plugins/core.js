// modal
function modal() {
    if(arguments[0] == "#modal-login") {
        /* disable the backdrop (don't close modal when click outside) */
        if($('#modal').data('bs.modal')) {
            $('#modal').data('bs.modal').options = {backdrop: 'static', keyboard: false};
        } else {
            $('#modal').modal({backdrop: 'static', keyboard: false});
        }
    }
    /* check if the modal not visible, show it */
    if(!$('#modal').is(":visible")) $('#modal').modal('show');
    /* prepare modal size */
    $('.modal-dialog').removeClass('modal-sm');
    $('.modal-dialog').removeClass('modal-lg');
    $('.modal-dialog').removeClass('modal-xlg');
    switch(arguments[2]) {
        case 'small':
            $('.modal-dialog').addClass('modal-sm');
            break;
        case 'large':
            $('.modal-dialog').addClass('modal-lg');
            break;
        case 'extra-large':
            $('.modal-dialog').addClass('modal-xl');
            break;
    }
    /* update the modal-content with the rendered template */
    $('.modal-content:last').html( render_template(arguments[0], arguments[1]) );
    /* initialize modal if the function defined (user logged in) */
    if(typeof initialize_modal === "function") {
        initialize_modal();
    }
}


// render template
function render_template(selector, options) {
    var template = $(selector).html();
    Mustache.parse(template);
    var rendered_template = Mustache.render(template, options);
    return rendered_template;
}


// button status
function button_status(element, handle) {
    if(handle == "loading") {
        /* loading */
        element.data('text', element.html());
        element.prop('disabled', true);
        element.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
    } else {
        /* reset */
        element.prop('disabled', false);
        element.html(element.data('text'));
    }
}


function initialize_modal() {
    
}


$(function() {
    
    // run bootstrap modal
    $('body').on('click', '[data-toggle="modal"]', function(e) {
        e.preventDefault();
        if($(e.target).hasClass('link') && $(e.target).hasClass('disabled')) {
            return false;
        }
        var url = $(this).data('url');
        var options = $(this).data('options');
        var size = $(this).data('size') || "default";
        if (url.indexOf('#') == 0) {
            /* open already loaded modal with #id */
            modal(url, options, size);
        } else {
            /* init loading modal */
            modal('#modal-loading');
            /* get & load modal from url */
            $.getJSON(ajax_path+url, function(response) {
                /* check the response */
                if(!response) return;
                /* check if there is a callback */
                if(response.callback) {
                    eval(response.callback);
                }
            })
            .fail(function() {
                modal('#modal-message', {title: __['Error'], message: __['¡Hay algo que salió mal!']});
            });
        }
    });


});