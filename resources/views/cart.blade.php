@extends('layouts.app')

@section('content')
    <script
        src="https://www.paypal.com/sdk/js?client-id=AUM2blVVxmYclXp4p3dZwepkeyu2_uW83FdOpLLz86eMJW64I-ARXVZ93-GACQbt13M1hnkB5-4K912q&currency=USD">
    </script>
    <div class="container mt-5">
        <h1>Cart</h1>
        @if ($cartItems->isEmpty())
            <p>Your cart is empty.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset($item->attributes->imagen) }}" alt="Product Image" class="img-thumbnail"
                                        width="100">
                                    <div class="ml-3">
                                        <p style="font-size: 18px; color: orange; text-align: right;">{{ $item->name }}</p>
                                        <p style="font-size: 18px; color: orange;">{{ $item->price }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('cart.update', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <input type="number" name="quantity" value="{{ $item->quantity }}" min="1"
                                            onchange="this.form.submit()">
                                    </div>
                                </form>
                            </td>
                            <td>{{ $item->getPriceSum() }}</td>
                            <td>
                                <form action="{{ route('cart.remove', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td><strong>Total: {{ $totalPrice }}</strong></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <!-- Container element for the CHECKOUT button-->
            <div id="paypal-button-container"></div>
            <form action="{{ route('cart.vaciar') }}" method="GET">
                @csrf
                <button class="btn btn-danger" type="submit">Vaciar Carrito</button>
            </form>
        @endif
    </div>

    <!--Script para los botones de PayPal-->
    <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                // Set up the transaction
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '0.01'
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                // Capture the funds from the transaction
                return actions.order.capture().then(function(details) {
                    // Show a success message to your buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }
        }).render('#paypal-button-container');
    </script>
@endsection
