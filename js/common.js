function mostrar() {
    //$('#btnEstabelecimento').toggle();
    $('#Estabelecimento').toggle();
    $('#Favorito').hide();
    $('#Gosto').hide();
}

function mostrarGostos() {
    //$('#btnGosto').toggle();
    $('#Gosto').toggle();
    $('#Estabelecimento').hide();
    $('#Favorito').hide();
}

function mostrarFavoritos() {
    //$('#btnFavorito').toggle();
    $('#Favorito').toggle();
    $('#Estabelecimento').hide();
    $('#Gosto').hide();

}