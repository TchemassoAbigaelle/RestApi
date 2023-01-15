@extends('layout')
@section('title', $viewData["title"])
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>


<div class="card">
<div class="card-header">
Manage Students
<div>
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
</div>
<div class="card-body">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">Game Name</th>
<th scope="col">Game Price</th>
<th scope="col">Game Description</th>
<th scope="col" colspan=2>Action</th>

</tr>
</thead>
<tbody>
@foreach($viewData["games"] as $game)
<tr>
<td>{{ $game->getId() }}</td>
<td>{{ $game->getName() }}</td>
<td>{{ $game->getPrice() }}</td>
<td>{{ $game->getDescription() }}</td>
<td><a href="{{ route('edit', $game->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('destroy', $game->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection

