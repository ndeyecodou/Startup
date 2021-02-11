@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Structure Accompagnement</h2>
            </div>
            <div class="pull-right">
                @can('financiere-create')
                <a class="btn btn-success" href="{{ route('financieres.create') }}"> Nouvelle Structure Accompagnement</a>
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
	    @foreach ($financieres as $financiere)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $financiere->nom_structure}}</td>
            <td>{{ $financiere->description }}</td>
            <td>{{ $financiere->site_web}}</td>
	        <td>
                <form action="{{ route('financieres.destroy',$financiere->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('financieres.show',$financiere->id) }}">Voir</a>
                    @can('financiere-edit')
                    <a class="btn btn-primary" href="{{ route('financieres.edit',$financiere->id) }}">Editer</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('financiere-delete')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $financieres->links() !!}


<p class="text-center text-primary"><small>Sonatel</small></p>
@endsection