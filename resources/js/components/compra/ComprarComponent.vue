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
            @php $columna = 1; @endphp
            @foreach ($products as $product)
                @if ($columna === 1)
                    <tr class="table-secondary">
                @endif
                <td class="capsula">
                    <form method="post" action="/carrito">
                        <img src="data:image/jpg;base64,{{ chunk_split(base64_encode( $product->image_product )) }}" width="200" height="180">                
                        <div> Nombre Producto: {{ $product->name_product }} </div>
                        <div> Precio: Q. {{ $product->price_product }} </div>
                        <input type="hidden" name="nproduct" id="nproduct" value="{{ $product->name_product }}"">
                        <input type="hidden" name="pproduct" id="pproduct" value="{{ $product->price_product }}">
                        <input type="number" name="cantidad" id="cantidad">
                        <input type="hidden" name="user" id="user" value="{{ Auth::user()->id }}">
                        <button type="submit"> Agregar al Carrito </button>
                    </form>
                </td>
                @if ($columna === 5)
                    </tr>
                    @php $columna = 1; @endphp
                @else
                    @php $columna++; @endphp
                @endif
            @endforeach
            @if ($columna !== 1)
                </tr>
            @endif
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