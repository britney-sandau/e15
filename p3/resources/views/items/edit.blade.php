@extends('layouts/main')

@section('title')

Curby

@endsection

@section('content')

<h1>Curby</h1>

<p>
    Update an item.
</p>

<form method='POST' action='/items'>
    {{ csrf_field() }}
    {{method_field('put')}}


    <label for='username'>Username (required)</label>
    <br>
    <input type='text' name='username' id='username' value='{{ old('username', $item->username) }}'>
    <br>
    <label for='slug'>Username URL (required)</label>
    <br>
    <input type='text' name='slug' id='slug' value='{{ old('slug', $item->slug) }}'>
    <br>
    <label for='category'>Category (required)</label>
    <br>
    <select name="category">

        <option value=''>Please select...</option>
        <option value='val1' {{(old('category', $categoryType ?? '') == 'val1') ? 'selected' : ''}}>furniture</option>
        <option value='val2' {{(old('category', $categoryType ?? '') == 'val2') ? 'selected' : ''}}>toys</option>
        <option value='val3' {{(old('category', $categoryType ?? '') == 'val3') ? 'selected' : ''}}>clothing</option>
        <option value='val4' {{(old('category', $categoryType ?? '') == 'val4') ? 'selected' : ''}}>exercise equipment</option>
        <option value='val5' {{(old('category', $categoryType ?? '') == 'val5') ? 'selected' : ''}}>miscellaneous</option>

    </select>

    <br>
    <label for='description'>Description (required)</label>


    <br>
    <textarea name='description' id='description'>{{ old('description', $item->description) }}</textarea>

    <br>
    <label for='image'>Image (required)</label>

    <br>
    <input type='text' name='image' id='image' value='{{ old('image', $item->image) }}'>
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



@endsection
