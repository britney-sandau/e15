@extends('layouts/main')

@section('title')
Burger Bytes
@endsection

@section('content')
<div>
    <h1>Burger Bytes</h1>

    {{-- <form method='GET' action='/order'> --}}

    <h2>Welcome to Burger Bytes</h2>
    {{-- <h3>Place order</h3> --}}

    {{-- <fieldset>
            <input type='radio' name='handoff' id='pickup' value='pickup'>
            <label for='pickup'>Pick Up</label>

            <input type='radio' name='handoff' id='delivery' value='delivery'>
            <label for='delivery'>Delivery</label>
        </fieldset> --}}

    {{-- <fieldset>
            <input type='radio' name='sandwich' id='burger' value='burger' checked>

            <label for='burger'>Cheeseburger</label>

            <input type='radio' name='sandwich' id='chicken' value='chicken'>


            <label for='chicken'>Grilled Chicken</label>

            <input type='radio' name='sandwich' id='veggie' value='veggie'>


            <label for='veggie'>Veggie Burger</label>
        </fieldset>

        <fieldset>
            <p>All sandwiches come with cheese, tomatoes, lettuce, pickles, onions and special sauce.</p>
        </fieldset>

        <fieldset>
            <input type='checkbox' name='cheese' id='cheese'>
            <label for='cheese'>No Cheese</label>

            <input type='checkbox' name='tomato' id='tomato'>
            <label for='tomato'>No Tomatoes</label>

            <input type='checkbox' name='lettuce' id='lettuce'>
            <label for='lettuce'>No Lettuce</label>

            <input type='checkbox' name='pickles' id='pickles'>
            <label for='pickles'>No Pickles</label>

            <input type='checkbox' name='onions' id='onions'>
            <label for='onions'>No Onions</label>

            <input type='checkbox' name='sauce' id='sauce'>
            <label for='sauce'>No Special Sauce</label>
        </fieldset>


        {{-- <fieldset>
            <input type='checkbox' name='ketchup' id='ketchup'>
            <label for='ketchup'>Add Ketchup</label>

            <input type='checkbox' name='mustard' id='mustard'>
            <label for='mustard'>Add Mustard</label>
        </fieldset> --}}

    {{-- <fieldset>
            <label for='name'>Name:</label>
            <input type='text' name='name' id='name'>
        </fieldset> --}}

    {{-- <fieldset>
            <label for='email'>E-mail:</label>
            <input type='email' name='email' id='email'>
        </fieldset>

        <fieldset>
            <label for='tel'>Phone Number:</label>
            <input type='tel' name='tel' id='tel'>
        </fieldset> --}}

    {{-- <input type='submit' class='btn btn-primary' value='Order'>

    </form> --}}

</div>
@endsection


{{-- <div id='data' class='button'>
            <button type='submit'>Place Order</button>
        </div> --}}




{{-- @if(count($errors) > 0)
        <ul class='alert alert-danger'>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
@endforeach
</ul>
@endif --}}

{{-- <fieldset>
            <label for='notes'>Additional Notes:</label>
            <br>
            <textarea name='notes' id='notes'></textarea>
        </fieldset> --}}
