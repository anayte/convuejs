<template>
    <form method="post" action="/agregar"  class="contenedor" >
        @csrf
        <table class="elemento">
            <tr>
                <th><label for="Name"> Nombre del Producto : </label></th>
                <th><input type="varchar" name="nproducto" id="nproducto" placeholder=" Por ejemplo: Seven Up "></th>
            </tr>
            <tr>
                <th><label for="Type"> Tipo de Producto : </label></th>
                <th><input type="text" name="tproducto" id="tproducto" placeholder=" Por ejemplo: Bebida "></th>
            </tr>
            <tr>
                <th><label for="Inventory"> Cantidad : </label></th>
                <th><input type="number" name="cproduct" id="cproduct" placeholder=" Por ejemplo: 100 "></th>
            </tr>
            <tr>
                <th><label for="Price"> Precio : Q</label></th>
                <th><input  type="integer" name="pproduct" id="pproduct" placeholder=" Por ejemplo: 5 "></th>
            </tr>
            <tr>
                <th><label for="image"> Imagen </label></th>
                <th>
                    <input type="file" name="iproduct" id="iproduct"  accept=".jpg">
                </th>
            </tr>
            <tr>
                <th>
                    <input type="hidden" name="user" id="user" value="{{ Auth::user()->id }}">
                </th>
            </tr>
            <tr>
                <th><button  type="submit"> Agregar producto </button></th>
            </tr>
        </table>

    </form>

</template>

<script>
    export default {
        data() {
            return {
            products: [],
            };
        },
        mounted() {
            this.fetchProducts();
        },
        methods: {
            fetchProducts() {

            },
        },
    };
</script>