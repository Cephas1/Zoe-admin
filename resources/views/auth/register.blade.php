{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href={{ asset("assets/img/favicon.png") }} rel="icon">
  <link href={{ asset("assets/img/apple-touch-icon.png") }} rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{ asset("assets/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
  <link href={{ asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
  <link href={{ asset("assets/vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
  <link href={{ asset("assets/vendor/quill/quill.snow.css")}} rel="stylesheet">
  <link href={{ asset("assets/vendor/quill/quill.bubble.css")}} rel="stylesheet">
  <link href={{ asset("assets/vendor/remixicon/remixicon.css")}} rel="stylesheet">
  <link href={{ asset("assets/vendor/simple-datatables/style.css")}} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href={{ asset("assets/css/style.css") }} rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <img src={{ asset("assets/img/logo.png") }} alt="">
                  <span class="d-none d-lg-block">{{ env('APP_NAME') }}</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">CREATION DE COMPTE</h5>
                    <p class="text-center small">Remplissez les champs ci-dessous pour créer votre compte</p>
                  </div>

                  @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                  @endif

                  <form method="POST" action="{{ route('register') }}" class="row g-3 needs-validation" novalidate>
                    @csrf

                    <div class="col-12">
                        <label for="yourName" class="form-label">Votre nom</label>
                        <input type="text" name="name" class="form-control" id="yourName" required autofocus autocomplete="family-name">
                        <div class="invalid-feedback">Prière d'entrer votre nom</div>
                    </div>

                    <div class="col-12">
                        <label for="yourName" class="form-label">Votre prénom</label>
                        <input type="text" name="firstname" class="form-control" id="yourName" required autofocus autocomplete="given-name">
                        <div class="invalid-feedback">Prière d'entrer votre prénom</div>
                    </div>

                    <div class="col-12">
                        <label for="yourUsername" class="form-label">Votre Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="email" class="form-control" id="yourUsername" required autofocus autocomplete="username">
                            <div class="invalid-feedback">Prière d'entrer une adresse Email valide!</div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Votre mot de passe</label>
                        <input type="password" name="password" class="form-control" id="yourPassword" required autocomplete="new-password">
                        <div class="invalid-feedback">Prière d'entrer votre password!</div>
                    </div>

                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Confirmation de votre mot de passe</label>
                        <input type="password" name="password_confirmation" class="form-control" id="yourPassword" required autocomplete="new-password">
                        <div class="invalid-feedback">Prière de retaper votre password!</div>
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        {{-- <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div> --}}
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                <label class="form-check-label" for="acceptTerms">Je suis d'accord et j'accepte les <a href="#">termes et conditions</a></label>
                                <div class="invalid-feedback">Vous devez accepter avant de soumettre.</div>
                            </div>
                        </div>
                    @endif


                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Créer un compte</button>
                    </div>

                    <div class="col-12">
                        <p class="small mb-0" style="text-align: center">Vous avez déjà un compte? <a href="{{ route('login') }}">Connectez-vous</a></p>
                    </div>

                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Tous droits réservés <a href="https://aquila-tech.cg/">Aquila Technologies</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src={{ asset("assets/vendor/apexcharts/apexcharts.min.js") }}></script>
  <script src={{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
  <script src={{ asset("assets/vendor/chart.js/chart.umd.js") }}></script>
  <script src={{ asset("assets/vendor/echarts/echarts.min.js") }}></script>
  <script src={{ asset("assets/vendor/quill/quill.min.js") }}></script>
  <script src={{ asset("assets/vendor/simple-datatables/simple-datatables.js") }}></script>
  <script src={{ asset("assets/vendor/tinymce/tinymce.min.js") }}></script>
  <script src={{ asset("assets/vendor/php-email-form/validate.js") }}></script>

  <!-- Template Main JS File -->
  <script src={{ asset("assets/js/main.js") }}></script>

</body>

</html>

