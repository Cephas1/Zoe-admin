@extends('layouts.admin-layout.app')

@section('content')

<div class="col-lg-12">
    <div class="row">

      <div class="card">
          <div class="card-body">
            <h5 class="card-title" style="text-align:center;">FINANCES</h5>

            <!-- Bordered Tabs Justified -->
            <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home" aria-selected="true">ENCAISSEMENTS</button>
              </li>
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">DEPENSES</button>
              </li>
              {{-- <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
              </li> --}}
            </ul>
            <div class="tab-content pt-2" id="borderedTabJustifiedContent">
              <div class="tab-pane fade show active" id="bordered-justified-home" role="tabpanel" aria-labelledby="home-tab">
                  <br/>
                  <div class="col-12">
                      <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                          <h5 class="card-title">Liste des encaissements <span>| Décroissant</span></h5>
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
                      <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                          <h5 class="card-title">Liste des depenses <span>| Décroissant</span></h5>
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

          </div>
      </div>
    </div>
  </div>

@endsection
