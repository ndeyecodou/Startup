@extends('layouts.app')


@section('content')
   <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editer la structure  {{ $financiere->nom_structure }} </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('financieres.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('financieres.update',$financiere->id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Nom de la Structure:</strong>
		          <input type="text" name="nom_structure" value="{{ $financiere->nom_structure }}" class="form-control" placeholder="Nom de la Structure">

		        </div>
		    </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" name="description" value="{{ $financiere->description }}" class="form-control" placeholder="Description">
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Partenariat avec Orange:</strong>
                    <input type="text" name="partenariat_orange" value="{{ $financiere->partenariat_orange }}" class="form-control" placeholder="Partenariat avec Orange">
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom & Prénom du Directeur:</strong>
                    <input type="text" name="nom_prenom_directeur" value="{{ $financiere->nom_prenom_directeur }}" class="form-control" placeholder="Nom & Prénom du Directeur">
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adresses</strong>
                   <input type="text" name="adresses" value="{{ $financiere->adresses }}" class="form-control" placeholder="Adresses">
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tel/Fax:</strong>
                    <input type="text" name="coordonnee" value="{{ $financiere->coordonnee }}" class="form-control" placeholder="Tel/Fax">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Site Web:</strong>
                   <input type="text" name="site_web" value="{{ $financiere->site_web }}" class="form-control" placeholder="Site Web">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                   <input type="email" name="email" value="{{ $financiere->email }}" class="form-control" placeholder="Email">
                </div>
            </div>


		    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Commentaire:</strong>
                    <input type="text" name="commentaire" value="{{ $financiere->commentaire }}" class="form-control" placeholder="Commentaire">
                </div>
            </div>


		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Modifier</button>
		    </div>
		</div>


    </form>


<p class="text-center text-primary"><small>Sonatel</small></p>
@endsection