@extends('layouts/main')

@section('title')
Burger Bytes
@endsection

@section('content')
<div>

    {{-- Will need to finish action and method --}}
    <form method='GET' action='/order'>
        <h1>Burger Bytes</h1>
        <h2>Place order</h2>
        <fieldset>
            <input type='radio' name='sandwich' id='burger' value='Cheeseburger'>
            <label for='burger'>Cheeseburger</label>

            <input type='radio' name='sandwich' id='chicken' value='Grilled Chicken'>
            <label for='chicken'>Grilled Chicken</label>

            <input type='radio' name='sandwich' id='veggie' value='Veggie Burger'>
            <label for='veggie'>Veggie Burger</label>
        </fieldset>

        <fieldset>
            <p>All sandwiches come with cheese, tomatoes, lettuce, pickles, onions and special sauce.</p>
        </fieldset>

        <fieldset>
            <input type='checkbox' name='topping1' id='cheese' value='No Cheese'>

            <label for='cheese'>No Cheese</label>

            <input type='checkbox' name='topping2' id='tomato' value='No Tomatoes'>

            <label for='tomato'>No Tomatoes</label>

            <input type='checkbox' name='topping3' id='lettuce' value='No Lettuce'>

            <label for='lettuce'>No Lettuce</label>

            <input type='checkbox' name='topping4' id='pickles' value='No Pickles'>

            <label for='pickles'>No Pickles</label>

            <input type='checkbox' name='topping5' id='onions' value='No Onions'>

            <label for='onions'>No Onions</label>

            <input type='checkbox' name='topping6' id='sauce' value='No Special Sauce'>

            <label for='sauce'>No Special Sauce</label>
        </fieldset>


        {{-- <fieldset>
            <input type='checkbox' name='ketchup' id='ketchup' value='Add Ketchup'>
            <label for='ketchup'>Add Ketchup</label>

            <input type='checkbox' name='mustard' id='mustard' value='Add mustard'>
            <label for='mustard'>Add Mustard</label>
        </fieldset> --}}

        <fieldset>
            <label for='name'>Name:</label>
            <input type='text' name='name' id='name'>
        </fieldset>

        {{-- <fieldset>
            <label for='email'>E-mail:</label>
            <input type='email' name='email' id='email'>
        </fieldset>

        <fieldset>
            <label for='tel'>Phone Number:</label>
            <input type='tel' name='tel' id='tel'>
        </fieldset> --}}

        <input type='submit' class='btn btn-primary' value='Order'>






        {{-- @if(count($errors) > 0)
        <ul class='alert alert-danger'>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
        @endif --}}


    </form>

    @if(isset($name))
    <div>
        <p>Hello {{$name}}</p>
        <p>Your {{$sandwich}} order </p>
        <p>{{$topping1 ?? ''}}</p>
        <p>{{$topping2 ?? ''}}</p>
        <p>{{$topping3 ?? ''}}</p>
        <p>{{$topping4 ?? ''}}</p>
        <p>{{$topping5 ?? ''}}</p>
        <p>{{$topping6 ?? ''}}</p>

        <p>will be ready in 15 mins.</p>

    </div>
    @endif


    <?php
dump($name, $sandwich, $topping1 ?? '')
?>

    {{-- @if(!is_null($orderResults))

  @if(count($orderResults) == 0)

  <div class='results alert alert-warning'>
      No results found.
  </div>
  @else
  <div class='results alert alert-primary'>

      {{ count($orderResults) }}

    {{ Str::plural('Result', count($orderResults)) }}:


    <ul>
        @foreach($searchResults as $slug => $book)
        <li><a href='/books/{{ $slug }}'> {{ $book['title']   }}</a></li>
        @endforeach
    </ul>
</div>
@endif
@endif --}}




</div>
@endsection


{{-- @extends('layouts/main')

@section('title')
Burger Bytes
@endsection

@section('content')
<div>

  
    <form method='GET' action='/order'>
        <h1>Burger Bytes</h1>
        <h2>Place order</h2>

        <div>
            <input type='radio' name='handoff' id='pickup' value='pickup'>
            <label for='pickup'>Pick Up</label>

            <input type='radio' name='handoff' id='delivery' value='delivery'>

            <label for='delivery'>Delivery</label>
        </div>

        <div>
            <input type='radio' name='sandwich' id='burger' checked>
            <label for='burger'>Cheeseburger</label>

            <input type='radio' name='sandwich' id='chicken'>
            <label for='chicken'>Grilled Chicken</label>

            <input type='radio' name='sandwich' id='veggie'>
            <label for='veggie'>Veggie Burger</label>
        </div>

        <p>All sandwiches come with cheese, tomatoes, lettuce, pickles, onions and special sauce.</p>

        <div id='check'>
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
        </div>

        <div>
            <input type='checkbox' name='ketchup' id='ketchup'>

            <label for='ketchup'>Add Ketchup</label>

            <input type='checkbox' name='mustard' id='mustard'>

            <label for='mustard'>Add Mustard</label>
        </div>


        <div id='data'>
            <label for='notes'>Additional Notes:</label>
            <br>
            <textarea name='notes' id='notes'></textarea>

        </div>

        <div id='data'>
            <label for='name'>Name:</label>
            <input type='text' name='name' id='name'>

        </div>

        <div id='data'>
            <label for='email'>E-mail:</label>
            <input type='email' name='email' id='email'>

        </div>

        <div id='data'>
            <label for='tel'>Phone Number:</label>
            <input type='tel' name='tel' id='tel'>

        </div>

       

        <input type='submit' class='btn btn-primary' value='Order'>


        @if(count($errors) > 0)
        <ul class='alert alert-danger'>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
@endforeach
</ul>
@endif


</form>



</div>
@endsection
--}}
