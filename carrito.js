(function() {
    'use strict';

    // 1. Estado inicial del carrito (se recupera de localStorage si ya existen productos guardados)
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

    // 2. Función para agregar un producto al carrito
    window.agregarAlCarrito = function (id, nombre, precio) {
        // Buscamos si el producto ya está en el carrito
        const productoExistente = carrito.find(item => item.id === id);

        if (productoExistente) {
            productoExistente.cantidad += 1;
        } else {
            carrito.push({
                id: id,
                nombre: nombre,
                precio: Number(precio),
                cantidad: 1
            });
        }

        guardarYActualizar();
    };

    // 3. Función para eliminar un producto específico del carrito
    window.eliminarDelCarrito = function (id) {
        carrito = carrito.filter(item => item.id !== id);
        guardarYActualizar();
    };

    // 4. Función para cambiar la cantidad (sumar o restar)
    window.cambiarCantidad = function (id, operacion) {
        const producto = carrito.find(item => item.id === id);
        if (!producto) return;

        if (operacion === 'sumar') {
            producto.cantidad += 1;
        } else if (operacion === 'restar') {
            producto.cantidad -= 1;
            if (producto.cantidad <= 0) {
                eliminarDelCarrito(id);
                return;
            }
        }
        guardarYActualizar();
    };

    // 5. Función para guardar en el navegador y refrescar la interfaz
    function guardarYActualizar() {
        localStorage.setItem('carrito', JSON.stringify(carrito));
        renderizarCarrito();
    }

    // 6. Fórmula principal para calcular el total del carrito dinámicamente
    function calcularTotal() {
        return carrito.reduce(function (acumulador, producto) {
            return acumulador + (producto.precio * producto.cantidad);
        }, 0);
    }

    // 7. Renderizar (mostrar) los elementos en el HTML de la página
    function renderizarCarrito() {
        const contenedorItems = document.getElementById('carrito-items');
        const spanTotal = document.getElementById('carrito-total');
        const spanContador = document.getElementById('carrito-contador');

        if (!contenedorItems) return;

        if (carrito.length === 0) {
            contenedorItems.innerHTML = '<p class="carrito-vacio">El carrito está vacío.</p>';
            if (spanTotal) spanTotal.textContent = '$0.00';
            if (spanContador) spanContador.textContent = '0';
            return;
        }

        let html = '';
        let cantidadTotal = 0;

        carrito.forEach(item => {
            cantidadTotal += item.cantidad;
            let subtotal = item.precio * item.cantidad;

            html += `
                <div class="carrito-item" style="display: flex; justify-content: space-between; margin-bottom: 10px; align-items: center;">
                    <div>
                        <strong>${item.nombre}</strong><br>
                        <span>$${item.precio.toFixed(2)} x ${item.cantidad} = $${subtotal.toFixed(2)}</span>
                    </div>
                    <div>
                        <button type="button" onclick="cambiarCantidad(${item.id}, 'restar')">-</button>
                        <span style="margin: 0 5px;">${item.cantidad}</span>
                        <button type="button" onclick="cambiarCantidad(${item.id}, 'sumar')">+</button>
                        <button type="button" onclick="eliminarDelCarrito(${item.id})" style="margin-left: 5px; color: red;">🗑️</button>
                    </div>
                </div>
            `;
        });

        contenedorItems.innerHTML = html;
        if (spanTotal) spanTotal.textContent = `$${calcularTotal().toFixed(2)}`;
        if (spanContador) spanContador.textContent = cantidadTotal;
    }

    // Cargar la vista del carrito al iniciar la página
    document.addEventListener('DOMContentLoaded', renderizarCarrito);
})();