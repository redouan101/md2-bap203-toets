@extends('layouts.master')



@section('content')
<form>
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter the title">
    </div>

    <div class="form-group">
        <label for="">url</label>
        <input type="url" name="url" class="form-control" placeholder="Enter the url">
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <input type="text" name="description" class="form-control" placeholder="Enter the description">
    </div>

    <button type="submit" class="btn btn-primary">Voeg link toe</button>

    </form>


@endsection