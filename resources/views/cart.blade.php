<x-app-layout>
@extends('layout')
   
@section('content')
<table id="cart" class="table table-hover table-condensed letraCart fondoGris">
    <thead>
        <tr class="fondoCart">
            <th style="width:50%">Producto</th>
            <th style="width:10%">Precio</th>
            <th style="width:8%">Cantidad</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['precio'] * $details['cantidad'] @endphp
            
                <tr data-id="{{ $id }}" class="fondoCart">
                    <td data-th="producto">
                        <div class="row ">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['img'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['nombre'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="precio">{{ $details['precio'] }}€</td>
                    <td data-th="cantidad">
                        <input type="number" value="{{ $details['cantidad'] }}" class="form-rol cantidad update-cart" />
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $details['precio'] * $details['cantidad'] }}€</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>

            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right "><h3><strong id="letraTotal">Total {{ $total }}€</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right fondoCart">
                <a href="{{ url('/') }}" class="btn btntabern"><i class="fa "></i> Añadir más</a>
                <button class="btn" id="botonFinalizar"><a href="/tramitar">Tramitar pedido</a></button>
            </td>
        </tr>
    </tfoot>
</table>
@endsection
   
@section('scripts')
<script type="text/javascript">
   
    $(".update-cart").change(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                cantidad: ele.parents("tr").find(".cantidad").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
   
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        if(confirm("¿Eliminar?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
   
</script>
@endsection
</x-app-layout>