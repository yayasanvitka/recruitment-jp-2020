/*
*
* Backpack Crud
*
*/

jQuery(function ($) {

    'use strict';

    function appendOptions(data, target) {
        $("[name='" + target + "']").append($('<option>', {
            value: '',
            text: '-'
        }));
        $.each(data, function (key, val) {
            $("[name='" + target + "']").append($('<option>', {
                value: key,
                text: val
            }));
        });
    }

    function getAndAppend(source, target, key, url) {
        $("[name='" + target + "'] option").each(function () {
            $(this).remove();
        });

        $.get('/' + url + '/ajaxFind?' + key + '=' + $("[name='" + source + "']").val())
            .done(function (result) {
                appendOptions(result, target);
            });
    }

    $(document).ready(function () {
        if (window.location.href.indexOf('customer') > -1) {
            $("[name='type[segment_id]']").change(function () {
                getAndAppend('type[segment_id]', 'type_id', 'segment_id', 'settings/segment-type');
            });
        }
    });
});
