<template>
    <table class="table table-hover" >
        <thead>
            <tr class="table-dark">
                <th scope="col">N&uacute;mero</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Tipo Producto</th>
                <th scope="col">Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <tr >
                <td class="capsula">
                    <img src="" alt="" width="190" height="220">
                    <div>Nombre Producto</div><div>Precio </div>
                    <input type="number" name="cantidad" id="1">
                    <button id="1" > Agregar al carrito </button>
                </td>
            </tr>
            <tr class="table-dark">
                <td>
                    Total a pagar: 
                </td>
                <td>
                    Q. 
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script >
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>