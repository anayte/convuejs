<template>
    <div v-for="product in products" :key="product.id" class="table-secondary">
        <form method="post" action="/agregar"  class="contenedor" >
            <table class="elemento">
                <tr>
                <th><label for="Name"> Nombre del Producto : {{ product.name_product }} </label></th>
                    <th><input type="hidden" name="nproducto" id="nproducto"  value="{{ product.name_product }}"></th>
                </tr>
                <tr>
                    <th><label for="Type"> Tipo de Producto : </label></th>
                    <th><input type="text" name="tproducto" id="tproducto" value="{{ product.type_product }}"></th>
                </tr>
                <tr>
                    <th><label for="Inventory"> Cantidad : {{ product.inventory_product }} + </label></th>
                    <th><input type="number" name="cproduct" id="cproduct" placeholder=" Por ejemplo: 100 "></th>
                </tr>
                <tr>
                    <th><label for="Price"> Precio : Q </label></th>
                    <th><input  type="number" name="pproduct" id="pproduct" value="{{ product.price_product }}"></th>
                </tr>
                <th><label for="image"> Imagen </label></th>
                <th><input type="file" name="iproduct" id="iproduct"  accept=".jpg"></th>
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
    </div>

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
                axios.get('/inventario')
                    .then(response => {
                    this.products = response.data;
                    })
                    .catch(error => {
                    console.error('Error al obtener los productos:', error);
                    }
                );
            },
        },
    };
</script>