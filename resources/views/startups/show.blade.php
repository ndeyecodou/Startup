@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Détail du Start-up </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('startups.index') }}"> Back</a>
            </div>
        </div>
    </div>


    

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom du Start-up:</strong>
                    {{ $startup->nom_startup }}
                   
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                     {{ $startup->description }}
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Partenariat avec Orange:</strong>
                     {{ $startup->partenariat_orange }}
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date de création:</strong>
                     {{ $startup->date_creation }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Coe/Co-Fondateur</strong>
                     {{ $startup->coe_co_fondateur }}
                </div>
            </div>


             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adresses</strong>
                    {{ $startup->adresses }}
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tel/Fax:</strong>
                    {{ $startup->coordonnee }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Site Web:</strong>
                     {{ $startup->site_web }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $startup->email }}
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Secteur d'Activité:</strong>
                     {{ $startup->secteur_activites }}
                </div>
            </div>


             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Statut:</strong>
                     {{ $startup->statut }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Commentaire:</strong>
                     {{ $startup->commentaire }}
                </div>
            </div>


           
        </div>


    </form>


<p class="text-center text-primary"><small>Sonatel</small></p>
@endsection