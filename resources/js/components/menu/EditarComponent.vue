<template>
    @if ($products->isEmpty())

    <H1>No se puede editar</H1>

    @else
        @foreach ($products as $product)
            <form method="post" action="/agregar"  class="contenedor" >
                <table class="elemento">
                    <tr>
                    <th><label for="Name"> Nombre del Producto : {{ $product->name_product }} </label></th>
                        <th><input type="hidden" name="nproducto" id="nproducto"  value="{{ $product->name_product }}"></th>
                    </tr>
                    <tr>
                        <th><label for="Type"> Tipo de Producto : </label></th>
                        <th><input type="text" name="tproducto" id="tproducto" value="{{ $product->type_product }}"></th>
                    </tr>
                    <tr>
                        <th><label for="Inventory"> Cantidad : {{ $product->inventory_product }} + </label></th>
                        <th><input type="number" name="cproduct" id="cproduct" placeholder=" Por ejemplo: 100 "></th>
                    </tr>
                    <tr>
                        <th><label for="Price"> Precio : Q </label></th>
                        <th><input  type="number" name="pproduct" id="pproduct" value="{{ $product->price_product }}"></th>
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
                @csrf
            </form>
        @endforeach    
    @endif

</template>

<script >
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>