@extends('layouts.admin-layout.app')

@section('content')

<div class="pagetitle">
    <h1>MAGASINS</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route("dashboard") }}">Home</a></li>
        <li class="breadcrumb-item active">Magazins</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

@if(Session::has('success'))
    <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
        {{ Session::get('success', 'default'); }}
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@elseif(Session::has('error'))

    <div class="alert alert-warning bg-warning border-0 alert-dismissible fade show" role="alert">
        {{ Session::get('error', 'default'); }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="card">
    <div class="card-body" style="text-align:center; margin:10px">
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newMagazinModal"><i class="bi bi-plus-circle"> </i> Nouveau magazin</button>
    </div>
</div>

<div class="card recent-sales overflow-auto">

    <div class="card-body">
      <h5 class="card-title">Ventes récentes <span>| Aujourd'hui</span></h5>
      <table class="table table-borderless datatable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">Date de création</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($magazins as $key => $magazin)
                <tr>
                    <th scope="row"><a href="#">#{{ $key+1 }}</a></th>
                    <td>{{ $magazin->name }}</td>
                    <td><!--<a href="#" class="text-primary">At praesentium minu</a>--> {{ $magazin->description }}</td>
                    <td>{{ $magazin->created_at }}</td>
                    <td><!--<span class="badge bg-success">Actif</span>--> <a title="Détails du magazin" href="#" data-bs-toggle="modal" data-bs-target="#ViewMagazinModal"><i class="bi bi-eye"></i></a>  <a title="Modifier les informations du magazin" href="" data-bs-toggle="modal" data-bs-target="#EditMagazinModal"><i class="bi bi-pencil-square"></i></a> </td>

                    <!-- Basic Modal -->
                    <div class="modal fade" id="EditMagazinModal" tabindex="-1">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modifier le Magazin</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ route('magazin.edit', $magazin->id) }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Nom du magazin :</label>
                                            <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" value=" {{ $magazin->name }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Description du magazin :</label>
                                            <div class="col-sm-10">
                                            <input type="text" name="description" class="form-control" value=" {{ $magazin->description }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                    </div>
                                </form>
                            </div>
                        </div>;
                    </div><!-- End Basic Modal-->

                </tr>
            @endforeach
        </tbody>
      </table>

    </div>

  </div>



@endsection
