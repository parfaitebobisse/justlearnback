<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('sources/images/4916petit_logo.ico')}}" />

    <link rel="stylesheet" href="{{asset('Sources/bootstrap-4.4.1/dist/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Sources/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/connexion.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/main_dashbord.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    
</head>
<body>
    <main>
        <div>
            <div class="wrapper fadeInDown">
                <div id="formContent">
                  <!-- Tabs Titles -->
              
                  <!-- Icon -->
                  <div class="fadeIn first">
                      <div class="contain-logo">
                         <a href="#"><img src="{{asset('Sources/Images/logo.png')}}" id="icon" alt="logo" /></a>
                      </div>
                  </div>
              
                  <!-- Login Form -->
                  <h1>Connectez-vous!</h1>
                    <form method="POST" action="{{ route('login') }}">
                        <div>                        
                            @csrf
                                <input id="email" type="email" class="fadeIn second @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Nom d'utilisateur">

                                <input id="password" type="password" class="fadeIn third @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de passe">

                                @if (session('status'))
                                    <span class="message_rouge" role="alert">
                                        <strong>{{ session('status') }}</strong>
                                    </span>
                                @endif
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="bloc_boutons">
                            <button type="submit" id="envoyer_document" class="button_goldwin button_type_1 anul_lien">
                            Connexion
                            </button>
                        </div>

                        @if (Route::has('password.request'))
                                <!-- Remind Passowrd -->
                            <div id="formFooter">
                                {{-- <a class="" href="#">Mot de passe oublié ?</a> --}}
                                <a class="" href="{{ route('password.request') }}">
                                    Mot de passe oublié ?
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="Sources/bootstrap-4.4.1/js/dist/util.js"></script>
<script type="text/javascript" src="Sources/bootstrap-4.4.1/dist/js/bootstrap.min.js"></script>
</html> 