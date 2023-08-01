<template>
    <table class="table table-hover" >
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
                        </tr>
                    @endforeach
                @endif
            <tr class="table-secondary">
                <th scope="row">
                    Total Vendido: 
                </th>
                <th scope="row">
                    Q. 
                </th>
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