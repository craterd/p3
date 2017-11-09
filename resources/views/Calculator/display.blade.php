@extends('layouts.master')


@section('title')
    DWA Fall 2017 Project 3, by Dave Crater
@endsection


@push('head')
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
    <link href="styles.css" type='text/css' rel='stylesheet'>
@endpush


@section('content')
    <form method='GET' action='/calculate'>

        <!-- display first input box, retaining any valid input value, sanitized of course -->
        <label>Input 1:
            <input type='text' name='input1' value='{{ isset($input1) && $input1 }}'>
        </label>

        <!-- display operation dropdown -->
        <select name='operation' id='operation'>
            <option value='+'>+</option>
            <option value='-'>-</option>
            <option value='*'>*</option>
            <option value='/'>/</option>
         </select>

        <!-- display second input box, retaining any valid input value, sanitized of course -->
        <label>Input 2:
            <input type='text' name='input2' value='{{ isset($input2) && $input2 }}'>
        </label>
        <br><br>

        <!-- display decimals checkbox -->
        <fieldset class='checkboxes'>
            <label><input type='checkbox' name='decimals' value='on' {{ isset($decimals) ? 'CHECKED' : '' }}> Show decimals in answer?</label>
        </fieldset>
        <br><br>

        <!-- display submit button with value of 'Calculate' -->
        <input type='submit' value='Calculate'>
        <br><br>

        <!-- display either alert/error or the result -->
        @if ( !isset($results) )
            @if (isset($errors) && count($errors) > 0)
                <div class='alert alert-danger'>
                    @foreach ($errors as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif
        @else
            <div class='alert alert-info'>
                Answer is {{ $results }}.
            </div>
        @endif
    </form>
@endsection


@push('body')

@endpush