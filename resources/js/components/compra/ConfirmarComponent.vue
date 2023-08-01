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
            <tr class="table-secondary">
                <th scope="row">

                </th>
                <th scope="row">

                </th>
                <th scope="row">

                </th>
                <th scope="row">

                </th>
            </tr>
            <tr class="table-secondary">
                <th scope="row">

                </th>
                <th scope="row">

                </th>
                <th scope="row">

                </th>
                <th scope="row">

                </th>
            </tr>
            <tr class="table-secondary">
                <th scope="row">

                </th>
                <th scope="row">

                </th>
                <th scope="row">

                </th>
                <th scope="row">

                </th>
            </tr>
        </tbody>
    </table>
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