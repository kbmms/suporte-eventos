simpleCart({
//Setting the Cart Columns for the sidebar cart display.
cartColumns: [
{ attr: "quantity", label: "", view: "input"},
{view:'image' , attr:'thumb', label: ''},
//{ attr: "image", label: false, view: "image"},
//Name of the item
{ attr: "name" , label: "" },
//Quantity displayed as an input


    //Built in view for a remove link
    { view:'remove', text: "X", label: ""}

    //Price of item
    //{ attr: "price", label: "Price", view: "currency"},
    //Subtotal of that row (quantity of that item * the price)
    // { attr: "total" , label: "SubTot", view: "currency"  }
],
cartStyle: "table" ,
checkout: {
type: "SendForm" ,
url: "http://suporteventos.com.br/enviar" ,
method: "POST" ,
success: "http://www.marcelsantos.com.br/blog/lounges" ,

},

});

simpleCart.bind( 'beforeCheckout' , function( data ){
data.nome = document.getElementById("nome").value;
data.empresa = document.getElementById("empresa").value;
data.email = document.getElementById("email").value;
data.telefone = document.getElementById("telefone").value;
data.comments = document.getElementById("comments").value;
data.celular = document.getElementById("celular").value;
data.cidade = document.getElementById("cidade").value;
data.estado = document.getElementById("estado").value;
data.data = document.getElementById("data").value;
});