@extends('layouts/main')

@section('title')

Curby

@endsection

@section('content')

<h1>Curby</h1>

<p>
    Do you have something that needs to be Curbed? Please add it here.
</p>

<form method='POST' action='/items'>
    {{ csrf_field() }}

    <label for='username'>Username (required)</label>
    <br>
    <input type='text' name='username' id='username' value='{{ old('username') }}'>
    <br>
    <label for='slug'>Add your own custom URL name. (required lowercase letters only)</label>
    <br>
    <input type='text' name='slug' id='slug' value='{{ old('slug') }}'>
    <br>
    <label for='category'>Category (required)</label>
    <br>
    <select name="category">
        <option value=''>Please select...</option>
        <option value='furniture' {{(old('category', $category ?? '') == 'furniture') ? 'selected' : ''}}>furniture</option>
        <option value='toys' {{(old('category', $category ?? '') == 'toys') ? 'selected' : ''}}>toys</option>
        <option value='clothing' {{(old('category', $category ?? '') == 'clothing') ? 'selected' : ''}}>clothing</option>
        <option value='exercise equipment' {{(old('category', $category ?? '') == 'exercise equipment') ? 'selected' : ''}}>exercise equipment</option>
        <option value='miscellaneous' {{(old('category', $category ?? '') == 'miscellaneous') ? 'selected' : ''}}>miscellaneous</option>
    </select>
    <br>
    <label for='description'>Description (required)</label>
    <br>
    <textarea name='description' id='description'>{{ old('description') }}</textarea>
    <br>
    <label for='city'>City (required)</label>
    <br>
    <textarea name='city' id='city'>{{ old('city') }}</textarea>
    <br>
    <label for='image'>Image (required)</label>
    <br>
    <input type='text' name='image' id='image' value='{{ old('image') }}'>
    <br>
    <br>
    <button type='submit'>Curb It!</button>
    <br>

    @if(count($errors) > 0)
    <ul class='alert-danger'>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

</form>

@endsection
