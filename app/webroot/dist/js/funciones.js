/* Para controlar los eventos*/
function carga(url) {
    $("#contenido").load(url, function (response, status, xhr) {
        if (status == "error") {
            var msg = "Lo sentimos pero ha ocurrido un error: ";
            alert(msg + xhr.status + " " + xhr.statusText);
        }
    });
}

$("li > a").click(function (event) {
    if ($(this).attr("href") != "#") {
        carga($(this).attr("href"));
        $('li > a').removeClass('active');
        $(this).addClass('active');        
    }
    event.preventDefault();
});