@extends('categories::layouts.app')

@section('content')

<div class="row">
    <div class="mx-auto col-lg-8">
        <form method="POST" action="{{route('store-category')}}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter name">
            <small id="nameHelp" class="form-text text-muted">We'll add some category name here.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>   
                        <th scope="row">{{$item->name}}</th>   
                        <th scope="row">{{$item->created_at->format('d/m/Y')}}</th>   
                        <th scope="row">{{$item->updated_at->format('d/m/Y')}}</th>   
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection