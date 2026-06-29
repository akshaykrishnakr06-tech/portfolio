(function ($) {
    "use strict";

    // Install + Activate button
    $("#install-activate-button").on("click", function (e) {
        e.preventDefault();

        var button = $(this);
        button.prop("disabled", true)
              .text("Installing & Activating recommended plugins…")
              .addClass("processing-spinner");

        $.post(fse_portfolio_localize.ajax_url, {
            action: "fse_portfolio_install_and_activate_plugins",
            nonce: fse_portfolio_localize.nonce
        }, function (response) {
            if (response.success) {
                window.location.href = fse_portfolio_localize.redirect_url;
            } else {
                button.text(response.data?.message || "Installation failed");
            }
        });
    });

})(jQuery);
