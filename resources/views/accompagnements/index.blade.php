@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Structure Accompagnement</h2>
            </div>
            <div class="pull-right">
                @can('accompagnement-create')
                <a class="btn btn-success" href="{{ route('accompagnements.create') }}"> Nouvelle Structure Accompagnement</a>
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
            <th>Nom Structure</th>
             <th>Description</th>
            <th>Site Web</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($accompagnements as $accompagnement)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $accompagnement->nom_structure}}</td>
            <td>{{ $accompagnement->description }}</td>
            <td>{{ $accompagnement->site_web}}</td>
	        <td>
                <form action="{{ route('accompagnements.destroy',$accompagnement->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('accompagnements.show',$accompagnement->id) }}">Voir</a>
                    @can('accompagnement-edit')
                    <a class="btn btn-primary" href="{{ route('accompagnements.edit',$accompagnement->id) }}">Editer</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('accompagnement-delete')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $accompagnements->links() !!}


<p class="text-center text-primary"><small>Sonatel</small></p>
@endsection