@extends('layouts/main')

@section('title')
Tip Calculator
@endsection

@section('content')
<p>This will be the page where my tip calculator will begin. The welcome page.</p>

<div id='form'>
    <form id='tipCalc'>
        <div id='data'>
            <label for='bill'>How much is the bill? $</label>
            <input type='text' id='bill'>
        </div>

        <div id='data'>

            <label for='people'>How many people are splitting the bill?</label>
            <input type='text' id='people'>
        </div>

        <div id='data'>

            <label for='tip'>How much would you like to tip?</label>
            <select id='tip'>
                <option>Choose one...</option>
                <option>10% Bad Service</option>
                <option>15% Fair Service</option>
                <option>18% Good Service</option>
                <option>20% Great service</option>
                <option>25% Outstanding service</option>
            </select>
        </div>

        <div id='data'>

            <input type='checkbox' id='round_up'>
            <label for='round_up'>Would you like to round up?</label>
        </div>
        <div id='data' class='button'>

            <button type='submit'>Calculate</button>
        </div>
    </form>

</div>
@endsection
