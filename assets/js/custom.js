/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */



$(document).ready(function () {
    "use strict";
    $('#copy-refcode').click(function () {
        var copyText = document.getElementById("link");
        copyText.type = 'text';
        copyText.select();
        document.execCommand("copy");
        copyText.type = 'hidden';

        // if ($('#tooltip_copy-4').is(':hidden') == true) {
        //     $('#tooltip_copy').delay(5000).removeAttr('hidden');
        //     // $('#tooltip_copy').delay(5000).attr('hidden', true);

        // } else {

        //     $('#tooltip_copy').removeAttr('hidden');
        // }

        // $('#tooltip_copy').show(0).delay(1000).hide(0);

        // $('#tooltip_copy').css("display", "block");


        // $('h2').addClass('referral-code-tooltip');

        $('h2').addClass('referral-code-tooltip').delay(800).queue(function (next) {
            $('h2').removeClass('referral-code-tooltip')
            next();
        });
    });

    // $('#tooltip_copy').hide();

    $('#package-1').click(function () {
        if ($('#plan-1').is(':hidden') == true) {

            $('#plan-1').removeAttr('hidden');
            $('#plan-2').attr('hidden', true);
            $('#plan-3').attr('hidden', true);
            $('#plan-4').attr('hidden', true);
            $('#default').attr('hidden', true);

            $('#dropdown_plan').val("plan1")
            $('#deposit-amount').val("90");
            $('#deposit-amount').focus();
        } else {
            $('#dropdown_plan').val("plan1")
            $('#deposit-amount').val("90");
            $('#deposit-amount').focus();
        }
    });

    $('#package-2').click(function () {
        if ($('#plan-2').is(':hidden') == true) {

            $('#plan-1').attr('hidden', true);
            $('#plan-2').removeAttr('hidden');
            $('#plan-3').attr('hidden', true);
            $('#plan-4').attr('hidden', true);
            $('#default').attr('hidden', true);

            $('#dropdown_plan').val("plan2")
            $('#deposit-amount').val("900");
            $('#deposit-amount').focus();
        } else {
            $('#dropdown_plan').val("plan2")
            $('#deposit-amount').val("900");
            $('#deposit-amount').focus();
        }
    });

    $('#package-3').click(function () {
        if ($('#plan-3').is(':hidden') == true) {

            $('#plan-1').attr('hidden', true);
            $('#plan-2').attr('hidden', true);
            $('#plan-3').removeAttr('hidden');
            $('#plan-4').attr('hidden', true);
            $('#default').attr('hidden', true);

            $('#dropdown_plan').val("plan3")
            $('#deposit-amount').val("9000");
            $('#deposit-amount').focus();
        } else {
            $('#dropdown_plan').val("plan3")
            $('#deposit-amount').val("9000");
            $('#deposit-amount').focus();
        }
    });

});