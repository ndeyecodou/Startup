@extends('layouts.app')


@section('content')
   <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editer la structure  {{ $startup->nom_structure }} </h2>
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


    <form action="{{ route('startups.update',$startup->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom du Start-up:</strong>
                    <input type="text" name="nom_startup" class="form-control" value="{{ $startup->nom_startup }}" placeholder="Nom du Startup">
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" value="{{ $startup->description }}" name="description" placeholder="Description"></textarea>
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> Partenariat avec Orange:</strong>
                    <input type="text"value="{{ $startup->partenariat_orange }}" class="form-control" placeholder=" Partenariat avec Orange">
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date de création:</strong>
                    <input type="date"
                    value="{{ $startup->date_creation }}"  class="form-control" placeholder="Date de création">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Coe/Co-Fondateur</strong>
                    <input type="text"  value="{{ $startup->ceo_co_fondateur }}"class="form-control" placeholder="Coe/Co-Fondateur">
                </div>
            </div>


             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adresses</strong>
                    <input type="text"  value="{{ $startup->adresses }}"class="form-control" placeholder="Adresses">
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tel/Fax:</strong>
                    <input type="text"  value="{{ $startup->coordonnee }}" class="form-control" placeholder="Tel/Fax">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Site Web:</strong>
                    <input type="text"  value="{{ $startup->site_web }}" class="form-control" placeholder="Site Web">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" value="{{ $startup->email }}"class="form-control" placeholder="email@gmail.com">
                </div>
            </div>

             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Secteur d'Activité:</strong>
                    <input type="text" value="{{ $startup->secteur_activites }}" class="form-control" placeholder="Secteur d'Activité">
                </div>
            </div>


             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Statut:</strong>
                    <input type="text" value="{{ $startup->statut }}" class="form-control" placeholder="Statut">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Commentaire:</strong>
                    <textarea class="form-control" style="height:150px" value="{{ $startup->commentaire }}" placeholder="Commentaire"></textarea>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>


<p class="text-center text-primary"><small>Sonatel</small></p>
@endsection