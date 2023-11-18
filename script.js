$(document).ready(function () {
    const buttons = $(".footer-button");
    const content = $("#content");

    buttons.on("click", function () {
        buttons.removeClass("active");
        $(this).addClass("active");

        const buttonLabel = $(this).data("button");

        $.ajax({
            url: "viewcontrol.inc.php",
            type: "POST",
            data: { buttonLabel: buttonLabel },
            success: function (data) {
                content.html(data);
            }
        });
    });
});
