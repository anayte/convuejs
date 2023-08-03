<template>
    <table class="table" >
        <thead>
            <tr class="table-dark">
                <th>
    
                </th>
                <th>
    
                </th>
                <th>
    
                </th>
                <th>
    
                </th>
                <th>
    
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="product in products" :key="product.id" class="table-secondary">
                <td class="capsula">
                    <form method="post" action="/carrito">
                        <img src="data:image/jpg;base64,{{ chunk_split(base64_encode( $product->image_product )) }}" width="200" height="180">                
                        <div> Nombre Producto: {{ product.name_product }} </div>
                        <div> Precio: Q. {{ product.price_product }} </div>
                        <input type="hidden" name="nproduct" id="nproduct" value="{{ product.name_product }}">
                        <input type="hidden" name="pproduct" id="pproduct" value="{{ product.price_product }}">
                        <input type="number" name="cantidad" id="cantidad">
                        <input type="hidden" name="user" id="user" value="{{ Auth::user()->id }}">
                        <button type="submit"> Agregar al Carrito </button>
                    </form>
                </td>
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
      console.log('Component mounted.');
    },
    methods: {
      fetchProducts() {

      },
    },
  };
</script>