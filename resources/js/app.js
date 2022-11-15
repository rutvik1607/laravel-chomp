require('./bootstrap');

import Alpine from 'alpinejs';
import $ from 'jquery';
window.$ = window.jQuery = $;

window.Alpine = Alpine;

Alpine.start();

jQuery(document).on("click", '.confirmdelete', function (event) {
    event.preventDefault();
    dlink = jQuery(this).attr('href');
    jQuery.confirm({
        title: 'Confirm!',
        buttons: {
            Confirm: {
                btnClass: 'btn-primary',
                action: function () {
                    location.href = dlink;
                },
            },
            Cancel: function () {

            },
        }
    });
});