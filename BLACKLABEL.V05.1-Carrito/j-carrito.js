//Variables
const carrito = document.querySelector('#carrito');
const contenedorCarrito = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn = document.querySelector('#vaciar-carrito');
const listaProductos = document.querySelector('#lista-productos');
let articulosCarrito = [];

cargarEventListeners();
function cargarEventListeners(){
    //cuando agregar un producto "presionas el agregar"
    listaProductos.addEventListener('click', agregarProducto);

    //elimina productos  del carrito
    carrito.addEventListener('click', eliminarProducto);

    //vaciar el carrito
    vaciarCarritoBtn.addEventListener('click', () => {
        articulosCarrito = [];

        limpiarHTML();
    });
}

//Funciones
function agregarProducto(e){
    e.preventDefault();

    if(e.target.classList.contains('agregar-carrito')){ //console.log('Agregando al carrito'); //console.log(e.target.parentElement.parentElement);
        const productoSeleccionado = e.target.parentElement.parentElement;
        leerDatosProducto(productoSeleccionado);
    }

}
//Eliminar un producto del carrito 
function eliminarProducto(e){
    if(e.target.classList.contains('borrar-producto')){
        const productoId = e.target.getAttribute('data-id');

        articulosCarrito = articulosCarrito.filter( producto => producto.id !== productoId);

        carritoHTML();
    }
}

//lee contenido del HTML, al que le dimos click
function leerDatosProducto(producto){ //console.log(producto);

//crear un objeto con el cotenido del producto actual
    const infoProducto = {
        imagen: producto.querySelector('img').src,
        titulo: producto.querySelector('h3').textContent,
        precio: producto.querySelector('.precio span').textContent,
        id: producto.querySelector('span').getAttribute('data-id'),
        cantidad: 1
    }

//revisa si un elemento ya existe en el carrito 
const existe = articulosCarrito.some(producto => producto.id === infoProducto.id);
if(existe){
    //Actualiza la cantidad
    const productos = articulosCarrito.map(producto => {
        if(producto.id === infoProducto.id){
            producto.cantidad++ ;
            return producto;
        }else{
            return producto;
        }
    });
    articulosCarrito = [...productos]
}else{
    //agregamos el producto al carrito
    //agrega elementos al arreglo de carrito, agregamos elementos al carrito
    articulosCarrito = [...articulosCarrito, infoProducto];
}

//console.log(articulosCarrito);

carritoHTML();

}

//muestra el carrito de compras en el html
function carritoHTML() {

    //limpiar html
    limpiarHTML();
    
    //Recorre el carrito y genera el HTML
    articulosCarrito.forEach(producto => {

        const {imagen, titulo, precio, cantidad, id} = producto;
        const row = document.createElement('tr');
        row.innerHTML = `
        <td> 
            <img src="${producto.imagen}" width="100">
        </td>
         <td> ${producto.titulo} </td>
         <td> ${producto.precio}</td>
         <td> ${producto.cantidad}</td>
         <td>
            <a href="#" class="borrar-producto" data-id="${id}">X</a>
         </td>
        `;

        //agrega el html del carrito en el tbody
        contenedorCarrito.appendChild(row);
    });
}

//elimina los productos del tbody
function limpiarHTML(){
    //forma lenta
    //contenedorCarrito.innerHTML = '';

    while(contenedorCarrito.firstChild){
        contenedorCarrito.removeChild(contenedorCarrito.firstChild)

    }
}


/*voy aquiiiiii */
// agragar funcionalidad carrito al proyecto
