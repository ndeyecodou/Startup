@extends('layouts.app')


@section('content')
      <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Détail de la structure </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('accompagnements.index') }}"> Retour</a>
            </div>
        </div>
    </div>


         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Nom de la Structure:</strong>
		            {{ $accompagnement->nom_structure }}
		        </div>
		    </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                     {{ $accompagnement->description }}
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Partenariat avec Orange:</strong>
                     {{ $accompagnement->partenariat_orange }}
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom & Prénom du Directeur:</strong>
                     {{ $accompagnement->nom_prenom_directeur }}
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adresses</strong>
                     {{ $accompagnement->adresses }}
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tel/Fax:</strong>
                    {{ $accompagnement->coordonnee }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Site Web:</strong>
                    {{ $accompagnement->site_web }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                     {{ $accompagnement->email }}
                </div>
            </div>


		    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Commentaire:</strong>
                     {{ $accompagnement->commentaire }}
                </div>
            </div>

		</div>


    </form>


<p class="text-center text-primary"><small>Sonatel</small></p>
@endsection