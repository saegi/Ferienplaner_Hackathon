// JavaScript Document

jQuery(document).ready(function ($) {


    // With JQuery
    $('#ex1').slider({
        formatter: function (value) {
            return 'Current value: ' + value;
        }
    });
});