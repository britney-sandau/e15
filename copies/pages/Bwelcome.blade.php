@extends('layouts/main')

@section('title')
Burger Bytes
@endsection

@section('content')
<div>

    <form method='GET' action='/order'>
        <h2>Welcome to Burger Bytes</h2>

        <h2>Place order</h2>

        <fieldset>
            <label for='name'>Name:</label>
            <input type='text' name='name' id='name'>
        </fieldset>

        <fieldset>
            <label for='email'>E-mail:</label>
            <input type='email' name='email' id='email'>
            {{-- value="{{old('email', $email)}}" --}}


        </fieldset>

        <fieldset>
            <label for='tel'>Phone Number:</label>
            <input type='tel' name='tel' id='tel'>
            {{-- value="{{old('tel', $tel)}}" --}}


        </fieldset>

        <fieldset>
            <input type='radio' name='sandwich' id='burger' value='Cheeseburger' {{ ($sandwich == 'Cheeseburger' OR is_null($sandwich)) ? 'checked' : ''}}>
            <label for='burger'>Cheeseburger</label>

            <input type='radio' name='sandwich' id='chicken' value='Grilled Chicken' {{ ($sandwich == 'Grilled Chicken') ? 'checked' : ''}}>


            <label for='chicken'>Grilled Chicken</label>

            <input type='radio' name='sandwich' id='veggie' value='Veggie Burger' {{ ($sandwich == 'Veggie Burger') ? 'checked' : ''}}>


            <label for='veggie'>Veggie Burger</label>
        </fieldset>

        <fieldset>
            <p>All sandwiches come with cheese, tomatoes, lettuce, pickles, onions and special sauce.</p>
        </fieldset>

        <fieldset>
            <input type='checkbox' name='topping1' id='cheese' value='No Cheese' {{ ($topping1 == 'No Cheese') ? 'checked' : ''}}>
            <label for='cheese'>No Cheese</label>

            <input type='checkbox' name='topping2' id='tomato' value='No Tomatoes' {{ ($topping2 == 'No Tomatoes') ? 'checked' : ''}}>
            <label for='tomato'>No Tomatoes</label>

            <input type='checkbox' name='topping3' id='lettuce' value='No Lettuce' {{ ($topping3 == 'No Lettuce') ? 'checked' : ''}}>
            <label for='lettuce'>No Lettuce</label>

            <input type='checkbox' name='topping4' id='pickles' value='No Pickles' {{ ($topping4 == 'No Pickles') ? 'checked' : ''}}>
            <label for='pickles'>No Pickles</label>

            <input type='checkbox' name='topping5' id='onions' value='No Onions' {{ ($topping5 == 'No Onions') ? 'checked' : ''}}>
            <label for='onions'>No Onions</label>

            <input type='checkbox' name='topping6' id='sauce' value='No Special Sauce' {{ ($topping6 == 'No Special Sauce') ? 'checked' : ''}}>
            <label for='sauce'>No Special Sauce</label>
        </fieldset>

        <fieldset>
            <input type='checkbox' name='topping7' id='ketchup' value='Add Ketchup' {{ ($topping7 == 'Add Ketchup') ? 'checked' : ''}}>
            <label for='ketchup'>Add Ketchup</label>

            <input type='checkbox' name='topping8' id='mustard' value='Add Mustard' {{ ($topping8 == 'Add Mustard') ? 'checked' : ''}}>
            <label for='mustard'>Add Mustard</label>

            <input type='checkbox' name='topping9' id='mayo' value='Add Mayo' {{ ($topping9 == 'Add Mayo') ? 'checked' : ''}}>
            <label for='mustard'>Add Mayo</label>

        </fieldset>

        <fieldset>
            <label for='notes'>Additional Notes:</label>
            <br>
            <textarea type='text' name='notes' id='notes'>{{old('notes', $notes)}}</textarea>
        </fieldset>






        <input type='submit' class='btn btn-primary' value='Order'>

        @if(count($errors) > 0)
        <ul class='alert alert-danger'>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif


    </form>

    @if(is_null($name))
    <div class='results alert alert-success'>
        <p>Place your order here.</p>
    </div>
    @endif

    @if(!is_string($name))
    <div class='results alert alert-warning'>
        <p>Please add your name.</p>
    </div>
    @else
    <div class='results alert alert-primary'>
        <p>Hello {{$name}}</p>
        <p>Your {{$sandwich}} order </p>
        <p>{{$topping1 ?? ''}}</p>
        <p>{{$topping2 ?? ''}}</p>
        <p>{{$topping3 ?? ''}}</p>
        <p>{{$topping4 ?? ''}}</p>
        <p>{{$topping5 ?? ''}}</p>
        <p>{{$topping6 ?? ''}}</p>
        <p>{{$topping7 ?? ''}}</p>
        <p>{{$topping8 ?? ''}}</p>
        <p>{{$topping9 ?? ''}}</p>
        <p>{{$notes}}</p>


        <p>will be ready in 15 mins.</p>
    </div>
    @endif



    @endsection
