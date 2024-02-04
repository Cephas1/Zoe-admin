@extends('layouts.admin-layout.app')

@section('content')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route("dashboard") }}">Home</a></li>
        <li class="breadcrumb-item active">fournisseurs</li>
      </ol>
    </nav>
</div><!-- End Page Title -->


<div class="card">
    <div class="card-body" style="text-align:center; margin:10px">
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newFretModal"><i class="bi bi-plus-circle"> </i> Nouveau fournisseur</button>
    </div>
</div>

<div class="card recent-sales overflow-auto">

    <div class="card-body">
      <h5 class="card-title">Ventes récentes <span>| Aujourd'hui</span></h5>
      <table class="table table-borderless datatable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Passager</th>
            <th scope="col">Type de place</th>
            <th scope="col">Prix du billet</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><a href="#">#2457</a></th>
            <td>Brandon Jacob</td>
            <td><a href="#" class="text-primary">At praesentium minu</a></td>
            <td>$64</td>
            <td><span class="badge bg-success">Approved</span></td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2147</a></th>
            <td>Bridie Kessler</td>
            <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
            <td>$47</td>
            <td><span class="badge bg-warning">Pending</span></td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2049</a></th>
            <td>Ashleigh Langosh</td>
            <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
            <td>$147</td>
            <td><span class="badge bg-success">Approved</span></td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2644</a></th>
            <td>Angus Grady</td>
            <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
            <td>$67</td>
            <td><span class="badge bg-danger">Rejected</span></td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2644</a></th>
            <td>Raheem Lehner</td>
            <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
            <td>$165</td>
            <td><span class="badge bg-success">Approved</span></td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2049</a></th>
            <td>Ashleigh Langosh</td>
            <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
            <td>$147</td>
            <td><span class="badge bg-success">Approved</span></td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2644</a></th>
            <td>Angus Grady</td>
            <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
            <td>$67</td>
            <td><span class="badge bg-danger">Rejected</span></td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2644</a></th>
            <td>Raheem Lehner</td>
            <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
            <td>$165</td>
            <td><span class="badge bg-success">Approved</span></td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2049</a></th>
            <td>Ashleigh Langosh</td>
            <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
            <td>$147</td>
            <td><span class="badge bg-success">Approved</span></td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2644</a></th>
            <td>Angus Grady</td>
            <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
            <td>$67</td>
            <td><span class="badge bg-danger">Rejected</span></td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2644</a></th>
            <td>Raheem Lehner</td>
            <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
            <td>$165</td>
            <td><span class="badge bg-success">Approved</span></td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2049</a></th>
            <td>Ashleigh Langosh</td>
            <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
            <td>$147</td>
            <td><span class="badge bg-success">Approved</span></td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2644</a></th>
            <td>Angus Grady</td>
            <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
            <td>$67</td>
            <td><span class="badge bg-danger">Rejected</span></td>
          </tr>
          <tr>
            <th scope="row"><a href="#">#2644</a></th>
            <td>Raheem Lehner</td>
            <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
            <td>$165</td>
            <td><span class="badge bg-success">Approved</span></td>
          </tr>
        </tbody>
      </table>

    </div>

  </div>

@endsection
