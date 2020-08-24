(function ($) {

    "use strict";

    $.fn.linkConfirm = function (msg) {

        $(this).on('click', function (e) {

            e.preventDefault();

            var url = $(this).attr('href');

            var dlg = layer.confirm(msg, function () {

                layer.close(dlg);


                window.location.href = url;

            })

        });

    };




    })(jQuery);