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

            @if ($products->isEmpty())

                <tr class="table-secondary">
                    <th scope="row">

                    </th>
                    <th scope="row">

                    </th>
                    <th scope="row">

                    </th>
                    <th scope="row">

                    </th>
                    <th scope="row">

                    </th>
                </tr>

            @else
                @foreach ($products as $product)
                    <tr class="table-secondary">
                        <td>{{ $product->id_product }}</td>
                        <td>{{ $product->name_product }}</td>
                        <td>{{ $product->type_product }}</td>
                        <td>{{ $product->price_product }}</td>
                        <td>{{ $product->inventory_product }}</td>
                        <td> 
                            <form method="post" action="/eliminarp" > 
                                <input type="hidden" name="user" id="user" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="nproduct" id="nproduct" value="{{ $product->name_product }}">
                                <button type="submit" class="btn btn-danger"> Eliminar </button>
                                @csrf
                            </form> 
                            <form method="post" action="/editar"> 
                                <input type="hidden" name="nproduct" id="nproduct" value="{{ $product->name_product }}">
                                <input type="hidden" name="user" id="user" value="{{ Auth::user()->id }}">
                                <button type="submit" class="btn btn-primary"> Editar </button>
                                @csrf
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
            
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