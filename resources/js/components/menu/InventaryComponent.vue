<template>
    <table class="table table-hover" >
        <thead>
            <tr class="table-dark">
                <th scope="col">N&uacute;mero</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Tipo Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="product in products" :key="product.id" class="table-secondary">
                <td>{{ product.id_product }}</td>
                <td>{{ product.name_product }}</td>
                <td>{{ product.type_product }}</td>
                <td>{{ product.price_product }}</td>
                <td>{{ product.inventory_product }}</td>
                <td> 
                    <form method="post" action="/eliminarp" > 
                        <input type="hidden" name="user" id="user" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="nproduct" id="nproduct" value="{{ product.name_product }}">
                        <button type="submit" class="btn btn-danger"> Eliminar </button>
                    </form> 
                    <form method="post" action="/editar"> 
                        <input type="hidden" name="nproduct" id="nproduct" value="{{ product.name_product }}">
                        <input type="hidden" name="user" id="user" value="{{ Auth::user()->id }}">
                        <button type="submit" class="btn btn-primary"> Editar </button>
                    </form>
                </td>
            </tr>         
        </tbody>
    </table>
</template>

<script>
    export default 
    {
        data() 
        {
            return {
            products: [],
            };
        },
        mounted() 
        {
            this.fetchProducts();
        },
        methods: 
        {
            fetchProducts() 
            {
                axios.get('/inventario')
                    .then(response => {
                        this.products = response.data;
                    })
                    .catch(error => {
                        console.error('Error al obtener los productos:', error);
                    });
            },
        }
    };
</script>