@extends('layouts.admin-layout.app')

@section('content')

		<div class="pagetitle">
		  <h1>Dashboard</h1>
		  <nav>
			<ol class="breadcrumb">
			  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
			  <li class="breadcrumb-item active">Dashboard</li>
			</ol>
		  </nav>
		</div><!-- End Page Title -->

		<section class="section dashboard">
		  <div class="row">

			<!-- Left side columns -->
			<div class="col-lg-12">
			  <div class="row">

				<!-- Sales Card -->
				<div class="col-xxl-4 col-md-6">
				  <div class="card info-card sales-card">

					<!-- <div class="filter">
					  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
					  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
						<li class="dropdown-header text-start">
						  <h6>Filter</h6>
						</li>

						<li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
						<li><a class="dropdown-item" href="#">Ce mois-ci</a></li>
						<li><a class="dropdown-item" href="#">Cette année</a></li>
					  </ul>
					</div> -->

					<div class="card-body">
					  <h5 class="card-title">Recettes <span> </span></h5>

					  <div class="d-flex align-items-center">
						<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
						  <i class="bi bi-cart"></i>
						</div>
						<div class="ps-3">
						  <h6>145 billets vendus</h6>
						  <span class="text-success small pt-1 fw-bold">1.450.000 FCFA</span> <span class="text-muted small pt-2 ps-1">encaissés aujourd'hui</span>

						</div>
					  </div>
					</div>

				  </div>
				</div><!-- End Sales Card -->

				<!-- Revenue Card -->
				<div class="col-xxl-4 col-md-6">
				  <div class="card info-card revenue-card">

					<!--<div class="filter">
					  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
					  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
						<li class="dropdown-header text-start">
						  <h6>Filter</h6>
						</li>

						<li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
						<li><a class="dropdown-item" href="#">Ce mois-ci</a></li>
						<li><a class="dropdown-item" href="#">Cette année</a></li>
					  </ul>
					</div>-->

					<div class="card-body">
					  <h5 class="card-title">Dépenses <span> </span></h5>

					  <div class="d-flex align-items-center">
						<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
						  <i class="bi bi-currency-dollar"></i>
						</div>
						<div class="ps-3">
						  <h6>5 dépenses éffectuées</h6>
						  <span class="text-success small pt-1 fw-bold">425.000 FCFA</span> <span class="text-muted small pt-2 ps-1">dépensés à ce jour</span>

						</div>
					  </div>
					</div>

				  </div>
				</div><!-- End Revenue Card -->

				<!-- Revenue Card -->
				<div class="col-xxl-4 col-md-6">
					<div class="card info-card revenue-card">

					  <!-- <div class="filter">
						<a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
						<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
						  <li class="dropdown-header text-start">
							<h6>Filter</h6>
						  </li>

						  <li><a class="dropdown-item" href="#">Today</a></li>
						  <li><a class="dropdown-item" href="#">This Month</a></li>
						  <li><a class="dropdown-item" href="#">This Year</a></li>
						</ul>
					  </div> -->

					  <div class="card-body">
						<h5 class="card-title">Solde de caisse Journalier <span> </span></h5>

						<div class="d-flex align-items-center">
						  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
							<i class="bi bi-currency-dollar"></i>
						  </div>
						  <div class="ps-3">
							<h6>1.025.000 FCFA disponibles</h6>
							<span class="text-muted small pt-2 ps-1">soit</span> <span class="text-success small pt-1 fw-bold">71%</span> <span class="text-muted small pt-2 ps-1">de recette et</span>
							<span class="text-success small pt-1 fw-bold">29%</span> <span class="text-muted small pt-2 ps-1">de dépenses</span>

						  </div>
						</div>
					  </div>

					</div>
				</div><!-- End Revenue Card -->

				<!-- Customers Card -->
				<!--<div class="col-xxl-4 col-xl-12">

				  <div class="card info-card customers-card">

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
					  <h5 class="card-title">Customers <span>| This Year</span></h5>

					  <div class="d-flex align-items-center">
						<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
						  <i class="bi bi-people"></i>
						</div>
						<div class="ps-3">
						  <h6>1244</h6>
						  <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

						</div>
					  </div>

					</div>
				  </div>

				</div><!-- End Customers Card -->

				<section class="section">
					<div class="row">

						<div class="col-lg-6">
							<div class="card">
							  <div class="card-body">
								<h5 class="card-title">Graphe de suivi des entrées d'argent</h5>

								<!-- Area Chart -->
								<div id="areaChart"></div>

								<script>
								  document.addEventListener("DOMContentLoaded", () => {
									const series = {
									  "monthDataSeries1": {
										"prices": [
										  8107.85,
										  8128.0,
										  8122.9,
										  8165.5,
										  8340.7,
										  8423.7,
										  8423.5,
										  8514.3,
										  8481.85,
										  8487.7,
										  8506.9,
										  8626.2,
										  8668.95,
										  8602.3,
										  8607.55,
										  8512.9,
										  8496.25,
										  8600.65,
										  8881.1,
										  9340.85
										],
										"dates": [
										  "13 Nov 2017",
										  "14 Nov 2017",
										  "15 Nov 2017",
										  "16 Nov 2017",
										  "17 Nov 2017",
										  "20 Nov 2017",
										  "21 Nov 2017",
										  "22 Nov 2017",
										  "23 Nov 2017",
										  "24 Nov 2017",
										  "27 Nov 2017",
										  "28 Nov 2017",
										  "29 Nov 2017",
										  "30 Nov 2017",
										  "01 Dec 2017",
										  "04 Dec 2017",
										  "05 Dec 2017",
										  "06 Dec 2017",
										  "07 Dec 2017",
										  "08 Dec 2017"
										]

									  }
									}
									new ApexCharts(document.querySelector("#areaChart"), {
									  series: [{
										name: "STOCK ABC",
										data: series.monthDataSeries1.prices
									  }],
									  chart: {
										type: 'area',
										height: 350,
										zoom: {
										  enabled: false
										}
									  },
									  dataLabels: {
										enabled: false
									  },
									  stroke: {
										curve: 'straight'
									  },
									  subtitle: {
										text: 'Price Movements',
										align: 'left'
									  },
									  labels: series.monthDataSeries1.dates,
									  xaxis: {
										type: 'datetime',
									  },
									  yaxis: {
										opposite: true
									  },
									  legend: {
										horizontalAlign: 'left'
									  }
									}).render();
								  });
								</script>
								<!-- End Area Chart -->

							  </div>
							</div>
						</div>


						<div class="col-lg-6">
							<div class="card">
							  <div class="card-body">
								<h5 class="card-title">Graphe de suivi des dépenses</h5>

								<!-- Area Chart -->
								<div id="areaChart2"></div>

								<script>
								  document.addEventListener("DOMContentLoaded", () => {
									const series = {
									  "monthDataSeries1": {
										"prices": [
										  8107.85,
										  8128.0,
										  8122.9,
										  8165.5,
										  8340.7,
										  8423.7,
										  8423.5,
										  8514.3,
										  8481.85,
										  8487.7,
										  8506.9,
										  8626.2,
										  8668.95,
										  8602.3,
										  8607.55,
										  8512.9,
										  8496.25,
										  8600.65,
										  8881.1,
										  9340.85
										],
										"dates": [
										  "13 Nov 2017",
										  "14 Nov 2017",
										  "15 Nov 2017",
										  "16 Nov 2017",
										  "17 Nov 2017",
										  "20 Nov 2017",
										  "21 Nov 2017",
										  "22 Nov 2017",
										  "23 Nov 2017",
										  "24 Nov 2017",
										  "27 Nov 2017",
										  "28 Nov 2017",
										  "29 Nov 2017",
										  "30 Nov 2017",
										  "01 Dec 2017",
										  "04 Dec 2017",
										  "05 Dec 2017",
										  "06 Dec 2017",
										  "07 Dec 2017",
										  "08 Dec 2017"
										]
									  },
									  "monthDataSeries2": {
										"prices": [
										  8423.7,
										  8423.5,
										  8514.3,
										  8481.85,
										  8487.7,
										  8506.9,
										  8626.2,
										  8668.95,
										  8602.3,
										  8607.55,
										  8512.9,
										  8496.25,
										  8600.65,
										  8881.1,
										  9040.85,
										  8340.7,
										  8165.5,
										  8122.9,
										  8107.85,
										  8128.0
										],
										"dates": [
										  "13 Juin 2017",
										  "14 Juin 2017",
										  "15 Juin 2017",
										  "16 Juin 2017",
										  "17 Juin 2017",
										  "20 Juin 2017",
										  "21 Juin 2017",
										  "22 Juin 2017",
										  "23 Juin 2017",
										  "24 Juin 2017",
										  "27 Juin 2017",
										  "28 Juin 2017",
										  "29 Juin 2017",
										  "30 Juin 2017",
										  "01 Juil 2017",
										  "04 Juil 2017",
										  "05 Juil 2017",
										  "06 Juil 2017",
										  "07 Juil 2017",
										  "08 Juil 2017"
										]
									  },
									  "monthDataSeries3": {
										"prices": [
										  7114.25,
										  7126.6,
										  7116.95,
										  7203.7,
										  7233.75,
										  7451.0,
										  7381.15,
										  7348.95,
										  7347.75,
										  7311.25,
										  7266.4,
										  7253.25,
										  7215.45,
										  7266.35,
										  7315.25,
										  7237.2,
										  7191.4,
										  7238.95,
										  7222.6,
										  7217.9,
										  7359.3,
										  7371.55,
										  7371.15,
										  7469.2,
										  7429.25,
										  7434.65,
										  7451.1,
										  7475.25,
										  7566.25,
										  7556.8,
										  7525.55,
										  7555.45,
										  7560.9,
										  7490.7,
										  7527.6,
										  7551.9,
										  7514.85,
										  7577.95,
										  7592.3,
										  7621.95,
										  7707.95,
										  7859.1,
										  7815.7,
										  7739.0,
										  7778.7,
										  7839.45,
										  7756.45,
										  7669.2,
										  7580.45,
										  7452.85,
										  7617.25,
										  7701.6,
										  7606.8,
										  7620.05,
										  7513.85,
										  7498.45,
										  7575.45,
										  7601.95,
										  7589.1,
										  7525.85,
										  7569.5,
										  7702.5,
										  7812.7,
										  7803.75,
										  7816.3,
										  7851.15,
										  7912.2,
										  7972.8,
										  8145.0,
										  8161.1,
										  8121.05,
										  8071.25,
										  8088.2,
										  8154.45,
										  8148.3,
										  8122.05,
										  8132.65,
										  8074.55,
										  7952.8,
										  7885.55,
										  7733.9,
										  7897.15,
										  7973.15,
										  7888.5,
										  7842.8,
										  7838.4,
										  7909.85,
										  7892.75,
										  7897.75,
										  7820.05,
										  7904.4,
										  7872.2,
										  7847.5,
										  7849.55,
										  7789.6,
										  7736.35,
										  7819.4,
										  7875.35,
										  7871.8,
										  8076.5,
										  8114.8,
										  8193.55,
										  8217.1,
										  8235.05,
										  8215.3,
										  8216.4,
										  8301.55,
										  8235.25,
										  8229.75,
										  8201.95,
										  8164.95,
										  8107.85,
										  8128.0,
										  8122.9,
										  8165.5,
										  8340.7,
										  8423.7,
										  8423.5,
										  8514.3,
										  8481.85,
										  8487.7,
										  8506.9,
										  8626.2
										],
										"dates": [
										  "02 Jun 2017",
										  "05 Jun 2017",
										  "06 Jun 2017",
										  "07 Jun 2017",
										  "08 Jun 2017",
										  "09 Jun 2017",
										  "12 Jun 2017",
										  "13 Jun 2017",
										  "14 Jun 2017",
										  "15 Jun 2017",
										  "16 Jun 2017",
										  "19 Jun 2017",
										  "20 Jun 2017",
										  "21 Jun 2017",
										  "22 Jun 2017",
										  "23 Jun 2017",
										  "27 Jun 2017",
										  "28 Jun 2017",
										  "29 Jun 2017",
										  "30 Jun 2017",
										  "03 Jul 2017",
										  "04 Jul 2017",
										  "05 Jul 2017",
										  "06 Jul 2017",
										  "07 Jul 2017",
										  "10 Jul 2017",
										  "11 Jul 2017",
										  "12 Jul 2017",
										  "13 Jul 2017",
										  "14 Jul 2017",
										  "17 Jul 2017",
										  "18 Jul 2017",
										  "19 Jul 2017",
										  "20 Jul 2017",
										  "21 Jul 2017",
										  "24 Jul 2017",
										  "25 Jul 2017",
										  "26 Jul 2017",
										  "27 Jul 2017",
										  "28 Jul 2017",
										  "31 Jul 2017",
										  "01 Aug 2017",
										  "02 Aug 2017",
										  "03 Aug 2017",
										  "04 Aug 2017",
										  "07 Aug 2017",
										  "08 Aug 2017",
										  "09 Aug 2017",
										  "10 Aug 2017",
										  "11 Aug 2017",
										  "14 Aug 2017",
										  "16 Aug 2017",
										  "17 Aug 2017",
										  "18 Aug 2017",
										  "21 Aug 2017",
										  "22 Aug 2017",
										  "23 Aug 2017",
										  "24 Aug 2017",
										  "28 Aug 2017",
										  "29 Aug 2017",
										  "30 Aug 2017",
										  "31 Aug 2017",
										  "01 Sep 2017",
										  "04 Sep 2017",
										  "05 Sep 2017",
										  "06 Sep 2017",
										  "07 Sep 2017",
										  "08 Sep 2017",
										  "11 Sep 2017",
										  "12 Sep 2017",
										  "13 Sep 2017",
										  "14 Sep 2017",
										  "15 Sep 2017",
										  "18 Sep 2017",
										  "19 Sep 2017",
										  "20 Sep 2017",
										  "21 Sep 2017",
										  "22 Sep 2017",
										  "25 Sep 2017",
										  "26 Sep 2017",
										  "27 Sep 2017",
										  "28 Sep 2017",
										  "29 Sep 2017",
										  "03 Oct 2017",
										  "04 Oct 2017",
										  "05 Oct 2017",
										  "06 Oct 2017",
										  "09 Oct 2017",
										  "10 Oct 2017",
										  "11 Oct 2017",
										  "12 Oct 2017",
										  "13 Oct 2017",
										  "16 Oct 2017",
										  "17 Oct 2017",
										  "18 Oct 2017",
										  "19 Oct 2017",
										  "23 Oct 2017",
										  "24 Oct 2017",
										  "25 Oct 2017",
										  "26 Oct 2017",
										  "27 Oct 2017",
										  "30 Oct 2017",
										  "31 Oct 2017",
										  "01 Nov 2017",
										  "02 Nov 2017",
										  "03 Nov 2017",
										  "06 Nov 2017",
										  "07 Nov 2017",
										  "08 Nov 2017",
										  "09 Nov 2017",
										  "10 Nov 2017",
										  "13 Nov 2017",
										  "14 Nov 2017",
										  "15 Nov 2017",
										  "16 Nov 2017",
										  "17 Nov 2017",
										  "20 Nov 2017",
										  "21 Nov 2017",
										  "22 Nov 2017",
										  "23 Nov 2017",
										  "24 Nov 2017",
										  "27 Nov 2017",
										  "28 Nov 2017"
										]
									  }
									}
									new ApexCharts(document.querySelector("#areaChart2"), {
									  series: [{
										name: "Total billets",
										data: series.monthDataSeries3.prices
									  }],
									  chart: {
										type: 'area',
										height: 350,
										zoom: {
										  enabled: false
										}
									  },
									  dataLabels: {
										enabled: false
									  },
									  stroke: {
										curve: 'straight'
									  },
									  subtitle: {
										text: 'Evolution financière',
										align: 'left'
									  },
									  labels: series.monthDataSeries3.dates,
									  xaxis: {
										type: 'datetime',
									  },
									  yaxis: {
										opposite: true
									  },
									  legend: {
										horizontalAlign: 'left'
									  }
									}).render();
								  });
								</script>
								<!-- End Area Chart -->

							  </div>
							</div>
						</div>
					</div>
				</section>


			  </div>
			</div><!-- End Left side columns -->

			<!-- Right side columns -->
			<!--<div class="col-lg-4">

			  <!-- Recent Activity -->
			  <!--<div class="card">
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
				  <h5 class="card-title">Recent Activity <span>| Today</span></h5>

				  <div class="activity">

					<div class="activity-item d-flex">
					  <div class="activite-label">32 min</div>
					  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
					  <div class="activity-content">
						Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
					  </div>
					</div><!-- End activity item-->

					<!--<div class="activity-item d-flex">
					  <div class="activite-label">56 min</div>
					  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
					  <div class="activity-content">
						Voluptatem blanditiis blanditiis eveniet
					  </div>
					</div><!-- End activity item-->

					<!--<div class="activity-item d-flex">
					  <div class="activite-label">2 hrs</div>
					  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
					  <div class="activity-content">
						Voluptates corrupti molestias voluptatem
					  </div>
					</div><!-- End activity item-->

					<!--<div class="activity-item d-flex">
					  <div class="activite-label">1 day</div>
					  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
					  <div class="activity-content">
						Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
					  </div>
					</div><!-- End activity item-->

					<!--<div class="activity-item d-flex">
					  <div class="activite-label">2 days</div>
					  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
					  <div class="activity-content">
						Est sit eum reiciendis exercitationem
					  </div>
					</div><!-- End activity item-->

					<!--<div class="activity-item d-flex">
					  <div class="activite-label">4 weeks</div>
					  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
					  <div class="activity-content">
						Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
					  </div>
					</div><!-- End activity item-->

				<!--  </div>

				</div>
			  </div><!-- End Recent Activity -->

			  <!-- Budget Report -->
			  <!--<div class="card">
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

				<div class="card-body pb-0">
				  <h5 class="card-title">Budget Report <span>| This Month</span></h5>

				  <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

				  <script>
					document.addEventListener("DOMContentLoaded", () => {
					  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
						legend: {
						  data: ['Allocated Budget', 'Actual Spending']
						},
						radar: {
						  // shape: 'circle',
						  indicator: [{
							  name: 'Sales',
							  max: 6500
							},
							{
							  name: 'Administration',
							  max: 16000
							},
							{
							  name: 'Information Technology',
							  max: 30000
							},
							{
							  name: 'Customer Support',
							  max: 38000
							},
							{
							  name: 'Development',
							  max: 52000
							},
							{
							  name: 'Marketing',
							  max: 25000
							}
						  ]
						},
						series: [{
						  name: 'Budget vs spending',
						  type: 'radar',
						  data: [{
							  value: [4200, 3000, 20000, 35000, 50000, 18000],
							  name: 'Allocated Budget'
							},
							{
							  value: [5000, 14000, 28000, 26000, 42000, 21000],
							  name: 'Actual Spending'
							}
						  ]
						}]
					  });
					});
				  </script>

				</div>
			  </div><!-- End Budget Report -->

			  <!-- Website Traffic -->
			  <!--<div class="card">
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

				<div class="card-body pb-0">
				  <h5 class="card-title">Website Traffic <span>| Today</span></h5>

				  <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

				  <!--<script>
					document.addEventListener("DOMContentLoaded", () => {
					  echarts.init(document.querySelector("#trafficChart")).setOption({
						tooltip: {
						  trigger: 'item'
						},
						legend: {
						  top: '5%',
						  left: 'center'
						},
						series: [{
						  name: 'Access From',
						  type: 'pie',
						  radius: ['40%', '70%'],
						  avoidLabelOverlap: false,
						  label: {
							show: false,
							position: 'center'
						  },
						  emphasis: {
							label: {
							  show: true,
							  fontSize: '18',
							  fontWeight: 'bold'
							}
						  },
						  labelLine: {
							show: false
						  },
						  data: [{
							  value: 1048,
							  name: 'Search Engine'
							},
							{
							  value: 735,
							  name: 'Direct'
							},
							{
							  value: 580,
							  name: 'Email'
							},
							{
							  value: 484,
							  name: 'Union Ads'
							},
							{
							  value: 300,
							  name: 'Video Ads'
							}
						  ]
						}]
					  });
					});
				  </script>

				</div>
			  </div><!-- End Website Traffic -->

			  <!-- News & Updates Traffic -->
			  <!--<div class="card">
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

				<!--<div class="card-body pb-0">
				  <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

				  <div class="news">
					<div class="post-item clearfix">
					  <img src="assets/img/news-1.jpg" alt="">
					  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
					  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
					</div>

					<div class="post-item clearfix">
					  <img src="assets/img/news-2.jpg" alt="">
					  <h4><a href="#">Quidem autem et impedit</a></h4>
					  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
					</div>

					<!--<div class="post-item clearfix">
					  <img src="assets/img/news-3.jpg" alt="">
					  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
					  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
					</div>

					<div class="post-item clearfix">
					  <img src="assets/img/news-4.jpg" alt="">
					  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
					  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
					</div>

					<!--<div class="post-item clearfix">
					  <img src="assets/img/news-5.jpg" alt="">
					  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
					  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
					</div>

				  <!--</div><!-- End sidebar recent posts-->

				<!--</div>
			  <!--</div><!-- End News & Updates -->

			<!--</div><!-- End Right side columns -->

		  </div>
		</section>

@endsection<!-- End #main -->
