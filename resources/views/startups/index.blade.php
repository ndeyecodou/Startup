@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Start-ups</h2>
            </div>
            <div class="pull-right">
                @can('startup-create')
                <a class="btn btn-success" href="{{ route('startups.create') }}"> Nouveau start-up</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nom du Start-up</th>
             <th>Description</th>
            <th>Site Web</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($startups as $start)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $start->nom_startup}}</td>
            <td>{{ $start->description }}</td>
            <td>{{ $start->site_web}}</td>
	        <td>
                <form action="{{ route('startups.destroy',$start->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('startups.show',$start->id) }}">Voir</a>
                    @can('startup-edit')
                    <a class="btn btn-primary" href="{{ route('startups.edit',$start->id) }}">Editer</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('startup-delete')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $startups->links() !!}


<p class="text-center text-primary"><small>Sonatel</small></p>
@endsection