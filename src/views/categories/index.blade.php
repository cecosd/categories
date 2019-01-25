@extends('categories::layouts.app')

@section('content')

<div class="row">
    <div class="mx-auto col-lg-8">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('store-category')}}">
                            @csrf
                        <div class="form-group">
                            <label for="card-title">Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter name">
                            <small id="nameHelp" class="form-text text-muted">We'll add some category name here.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Users</th>
                            <th scope="col">Created</th>
                            <th scope="col">Updated</th>
                            <th scope="col">Move to trash</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>   
                                <th scope="row">{{$item->name}}</th>
                                <th scope="row">
                                    @forelse ($item->users as $user)
                                        {{$user->name}}
                                    @empty
                                        NO USERS
                                    @endforelse
                                </th>   
                                <th scope="row">{{$item->created_at->format('d/m/Y')}}</th>   
                                <th scope="row">{{$item->updated_at->format('d/m/Y')}}</th>   
                                <th scope="row">
                                    <form method="POST" action="{{route('destroy-category', ['category' => $item->id])}}">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Trash</button>
                                    </form>
                                </th>   

                            </tr>
                        @empty 
                            <tr>
                                <td>NO RECORDS</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection