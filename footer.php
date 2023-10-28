<footer class="footer">
    <div class="footer-buttons">
        <button class="footer-button" id="button1" data-button="Botão 1">Botão 1</button>
        <button class="footer-button" id="button2" data-button="Botão 2">Botão 2</button>
        <button class="footer-button" id="button3" data-button="Botão 3">Botão 3</button>
        <button class="footer-button" id="button4" data-button="Botão 4">Botão 4</button>
        <button class="footer-button" id="button5" data-button="Botão 5">Botão 5</button>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
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
</script>


