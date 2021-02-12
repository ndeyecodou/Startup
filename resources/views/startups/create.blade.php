@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Nouvelle Structure </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('startups.index') }}"> Back</a>
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


    <form action="{{ route('startups.store') }}" method="POST">
    	@csrf


         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Nom du Start-up:</strong>
		            <input type="text" name="nom_startup" class="form-control" placeholder="Nom du Startup">
		        </div>
		    </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Partenariat avec Orange:</strong>
                    <input type="text" name="partenariat_orange" class="form-control" placeholder=" Partenariat avec Orange">
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date de création:</strong>
                    <input type="date" name="date_creation" class="form-control" placeholder="Date de création">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Coe/Co-Fondateur</strong>
                    <input type="text" name="ceo_co_fondateur" class="form-control" placeholder="Coe/Co-Fondateur">
                </div>
            </div>


             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adresses</strong>
                    <input type="text" name="adresses" class="form-control" placeholder="Adresses">
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tel/Fax:</strong>
                    <input type="text" name="coordonnee" class="form-control" placeholder="Tel/Fax">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Site Web:</strong>
                    <input type="text" name="site_web" class="form-control" placeholder="Site Web">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="email@gmail.com">
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Secteur d'Activité:</strong>
                    <input type="text" name="secteur_activites" class="form-control" placeholder="Secteur d'Activité">
                </div>
            </div>


             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Statut:</strong>
                    <input type="text" name="statut" class="form-control" placeholder="Statut">
                </div>
            </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Commentaire:</strong>
                    <textarea class="form-control" style="height:150px" name="commentaire" placeholder="Commentaire"></textarea>
                </div>
            </div>


		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>


<p class="text-center text-primary"><small>Sonatel</small></p>
@endsection
