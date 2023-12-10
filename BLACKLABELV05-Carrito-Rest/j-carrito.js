//Variables
const carrito = document.querySelector('#carrito');
const contenedorCarrito = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn = document.querySelector('#vaciar-carrito');
const listaProductos = document.querySelector('#lista-productos');
let articulosCarrito = [];

cargarEventListeners();

function cargarEventListeners() {
    // Agregar un producto al carrito al hacer clic
    listaProductos.addEventListener('click', agregarProducto);

    // Eliminar productos del carrito al hacer clic en "X"
    carrito.addEventListener('click', eliminarProducto);

    // Vaciar todo el carrito
    vaciarCarritoBtn.addEventListener('click', () => {
        articulosCarrito = [];
        limpiarHTML();
    });
}

// Función para agregar un producto al carrito
function agregarProducto(e) {
    e.preventDefault();
    const botonAgregarCarrito = e.target.closest('.agregar-carrito');

    if (botonAgregarCarrito) {
        const productoSeleccionado = botonAgregarCarrito.closest('.card-product');
        leerDatosProducto(productoSeleccionado);
    }
}

// Función para eliminar un producto del carrito
function eliminarProducto(e) {
    if (e.target.classList.contains('borrar-producto')) {
        const productoId = e.target.getAttribute('data-id');
        articulosCarrito = articulosCarrito.filter(producto => producto.id !== productoId);
        carritoHTML();
    }
}

// Función para leer los datos de un producto
function leerDatosProducto(producto) {
    const infoProducto = {
        imagen: producto.querySelector('img').src,
        titulo: producto.querySelector('h3').textContent,
        precio: parseFloat(producto.querySelector('.price').textContent.replace('$', '')),
        id: producto.querySelector('.agregar-carrito').getAttribute('data-id'),
        cantidad: 1,
    };

    const existe = articulosCarrito.some(producto => producto.id === infoProducto.id);

    if (existe) {
        const productos = articulosCarrito.map(producto => {
            if (producto.id === infoProducto.id) {
                producto.cantidad++;
            }
            return producto;
        });
        articulosCarrito = [...productos];
    } else {
        articulosCarrito = [...articulosCarrito, infoProducto];
    }

    carritoHTML();
}

// Función para mostrar el carrito en el HTML
function carritoHTML() {
    limpiarHTML();

    articulosCarrito.forEach(producto => {
        const { imagen, titulo, precio, cantidad, id } = producto;
        const row = document.createElement('tr');
        row.innerHTML = `
        <td> 
            <img src="${imagen}" width="100">
        </td>
         <td> ${titulo} </td>
         <td> $${precio.toFixed(2)}</td>
         <td> ${cantidad}</td>
         <td>
            <a href="#" class="borrar-producto" data-id="${id}">X</a>
         </td>
        `;

        contenedorCarrito.appendChild(row);
    });
}

// Función para limpiar el HTML del carrito
function limpiarHTML() {
    while (contenedorCarrito.firstChild) {
        contenedorCarrito.removeChild(contenedorCarrito.firstChild);
    }
}

