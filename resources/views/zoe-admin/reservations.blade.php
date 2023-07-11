@extends('layouts.admin-layout.app')

    @section('content')

		<div class="pagetitle">
		  <h1>Réservations</h1>
		  <nav>
			<ol class="breadcrumb">
			  <li class="breadcrumb-item"><a href={{ route('dashboard') }}>Home</a></li>
			  <li class="breadcrumb-item active">Réservations</li>
			</ol>
		  </nav>
		</div><!-- End Page Title -->

		<section class="section dashboard">
		  <div class="row">

			<div class="col-lg-12">
			  <div class="row">

                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title" style="text-align:center;">RESERVATIONS</h5>

                      <!-- Bordered Tabs Justified -->
                      <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                        <li class="nav-item flex-fill" role="presentation">
                          <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home" aria-selected="true">Réservations de voyage</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                          <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Réservations de fret</button>
                        </li>
                        {{-- <li class="nav-item flex-fill" role="presentation">
                          <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                        </li> --}}
                      </ul>
                      <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                        <div class="tab-pane fade show active" id="bordered-justified-home" role="tabpanel" aria-labelledby="home-tab">
                            <br/>
                            <div class="col-12">
                                <div class="card">
                                  <div class="card-body" style="text-align:center; margin:10px">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newBookingModal"><i class="bi bi-plus-circle"> </i> Nouvelle réservation</button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingsPerAgencies"><i class="bi bi-list-ul"> </i> Réservations par agences</button>
                                    <button type="button" class="btn btn-primary"><i class="bi bi-list"> </i> Toutes les réservations</button>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#findBooking"><i class="bi bi-search"> </i> Trouver une réservation</button>
                                  </div>
                                </div>
                                <div class="card recent-sales overflow-auto">

                                  <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                      <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                      </li>

                                      <li><a class="dropdown-item" href="#">Today</a></li>
                                      <li><a class="dropdown-item" href="#">This Month</a></li>
                                      <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                  </div>

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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="bordered-justified-profile" role="tabpanel" aria-labelledby="profile-tab">
                            <br/>
                            <div class="col-12">
                                <div class="card">
                                  <div class="card-body" style="text-align:center; margin:10px">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newFretModal"><i class="bi bi-plus-circle"> </i> Nouvelle réservation</button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingsPerAgencies"><i class="bi bi-list-ul"> </i> Réservations par agences</button>
                                    <button type="button" class="btn btn-primary"><i class="bi bi-list"> </i> Toutes les réservations</button>
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#findBooking"><i class="bi bi-search"> </i> Trouver une réservation</button>
                                  </div>
                                </div>
                                <div class="card recent-sales overflow-auto">

                                  {{-- <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                      <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                      </li>

                                      <li><a class="dropdown-item" href="#">Today</a></li>
                                      <li><a class="dropdown-item" href="#">This Month</a></li>
                                      <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                  </div> --}}

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
                            </div>
                        </div>
                        {{-- <div class="tab-pane fade" id="bordered-justified-contact" role="tabpanel" aria-labelledby="contact-tab">
                          Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                        </div> --}}
                      </div><!-- End Bordered Tabs Justified -->

                    </div>
                </div>

				{{-- <div class="col-12">
				  <div class="card">
					<div class="card-body" style="text-align:center; margin:10px">
					  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newBookingModal"><i class="bi bi-plus-circle"> </i> Nouvelle réservation</button>
					  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingsPerAgencies"><i class="bi bi-list-ul"> </i> Réservations par agences</button>
					  <button type="button" class="btn btn-primary"><i class="bi bi-list"> </i> Toutes les réservations</button>
					  <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#findBooking"><i class="bi bi-search"> </i> Trouver une réservation</button>
					</div>
				  </div>
				  <div class="card recent-sales overflow-auto">

					<div class="filter">
					  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
					  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
						<li class="dropdown-header text-start">
						  <h6>Filter</h6>
						</li>

						<li><a class="dropdown-item" href="#">Today</a></li>
						<li><a class="dropdown-item" href="#">This Month</a></li>
						<li><a class="dropdown-item" href="#">This Year</a></li>
					  </ul>
					</div>

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
				</div><!-- End Recent Sales --> --}}
			  </div>
			</div><!-- End Left side columns -->


		  </div>
		</section>
    @endsection<!-- End #main -->


  <!-- ======= Modals Begining ======= -->

	<div class="modal fade" id="newBookingModal" tabindex="-1" data-bs-backdrop="false">
		<div class="modal-dialog modal-dialog-scrollable">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" style="text-align:center">Enregistrement de réservation</h5>
			  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			  <h5 class="card-title" style="text-align:center">Informations du passager</h5>

              <!-- Vertical Form -->
              <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputNanme4" class="form-label">Nom(s)</label>
                  <input type="text" class="form-control" id="inputNanme4">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Prénom(s)</label>
                  <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Ville de départ</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choix du départ</option>
                    <option>Brazzaville</option>
					<option>Pointe-Noire</option>
					<option>Dolisie</option>
					<option>Nkayi</option>
					<option>Loudima</option>
					<option>Ouesso</option>
                  </select>
                </div>
				<div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Ville de destination</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choix de la destination</option>
                    <option>Brazzaville</option>
					<option>Pointe-Noire</option>
					<option>Dolisie</option>
					<option>Nkayi</option>
					<option>Loudima</option>
					<option>Ouesso</option>
                  </select>
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Agence de départ</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choix de l'agence</option>
                      <option>La base</option>
                      <option>Aéroport</option>
                      <option>Mahinga</option>
                      <option>Fond Tié-tié</option>
                      <option>Nkouinkou</option>
                      <option>Ngoyo</option>
                      <option>Mont-Kamba</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="inputState2" class="form-label">Agence de destination</label>
                    <select id="inputState2" class="form-select">
                      <option selected>Choix de l'agence</option>
                      <option>La base</option>
                      <option>Aéroport</option>
                      <option>Mahinga</option>
                      <option>Fond Tié-tié</option>
                      <option>Nkouinkou</option>
                      <option>Ngoyo</option>
                      <option>Mont-Kamba</option>
                    </select>
                  </div>
				<div class="col-md-6">
                  <label for="inputDate" class="form-label">Date du voyage</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Prix TTC</label>
                  <input type="number" min="0" class="form-control" id="inputEmail4">
                </div>
                <!--<div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>-->
              </form><!-- Vertical Form -->
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
			  <button type="button" class="btn btn-primary">Enregistrer</button>
			</div>
		  </div>
		</div>
	</div><!-- End Disabled Backdrop Modal-->

    <div class="modal fade" id="newFretModal" tabindex="-1" data-bs-backdrop="false">
		<div class="modal-dialog modal-dialog-scrollable">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" style="text-align:center">Enregistrement de réservation de fret</h5>
			  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			  <h5 class="card-title" style="text-align:center">Informations du colis</h5>

              <!-- Vertical Form -->
              <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputNanme4" class="form-label">Nom(s)</label>
                  <input type="text" class="form-control" id="inputNanme4">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Prénom(s)</label>
                  <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Téléphone</label>
                    <input type="phone" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Sexe</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Age</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Ville de départ</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choix du départ</option>
                    <option>Brazzaville</option>
					<option>Pointe-Noire</option>
					<option>Dolisie</option>
					<option>Nkayi</option>
					<option>Loudima</option>
					<option>Ouesso</option>
                  </select>
                </div>
				<div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Ville de destination</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choix de la destination</option>
                    <option>Brazzaville</option>
					<option>Pointe-Noire</option>
					<option>Dolisie</option>
					<option>Nkayi</option>
					<option>Loudima</option>
					<option>Ouesso</option>
                  </select>
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Agence de départ</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choix de l'agence</option>
                      <option>La base</option>
                      <option>Aéroport</option>
                      <option>Mahinga</option>
                      <option>Fond Tié-tié</option>
                      <option>Nkouinkou</option>
                      <option>Ngoyo</option>
                      <option>Mont-Kamba</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="inputState2" class="form-label">Agence de destination</label>
                    <select id="inputState2" class="form-select">
                      <option selected>Choix de l'agence</option>
                      <option>La base</option>
                      <option>Aéroport</option>
                      <option>Mahinga</option>
                      <option>Fond Tié-tié</option>
                      <option>Nkouinkou</option>
                      <option>Ngoyo</option>
                      <option>Mont-Kamba</option>
                    </select>
                  </div>
				<div class="col-md-6">
                  <label for="inputDate" class="form-label">Date du voyage</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Prix TTC</label>
                  <input type="number" min="0" class="form-control" id="inputEmail4">
                </div>
                <!--<div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>-->
              </form><!-- Vertical Form -->
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
			  <button type="button" class="btn btn-primary">Enregistrer</button>
			</div>
		  </div>
		</div>
	</div>

  <!-- ======= Modals End ======= -->
