<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Our Custom CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('sources/images/4916petit_logo.ico')}}" />
    <link rel="stylesheet" href="{{asset('css/header_respon.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/main_dashbord.css')}}">
    @stack('css')
    <title>@yield('title')</title>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <a href="#" class="anul_lien" id="bloc_logo">
                    <img data-src="{{asset('sources/images/2b7a5c3c051f471f1674da3f7d222a5b78390ea1.png')}}" class="lazy dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="photo_profil_respo" alt="icone cadena">
                </a>
            </div>

            <ul class="list-unstyled components" id="liste_menu_respo_dash">
                <li class="active">
                    <a href="{{ route('liste_utilisateurs') }}" data-toggle="collapse" aria-expanded="false" class="lien_navigation_dashbord active">Gestion des utilisateurs</a>
                </li>
                <li>
                    <a href="{{ route('ajouter_plateforme') }}" class="lien_navigation_dashbord">Gestion des plateformes</a>
                </li>
                <li>
                    <a href="{{ route('consulter_bilan') }}" class="lien_navigation_dashbord">Consultation du bilan</a>
                </li>
                <li>
                    <a href="#" class="lien_navigation_dashbord">Archivage</a>
                </li>
            </ul>
            <div class="sous_bloc_haut">
                {{-- <a href="#"><i class="fas fa-sticky-note"></i> Requête</a> --}}
                <a href="#"><i class="fas fa-user"></i> Mon profil</a>
                <a href="#"><i class="fas fa-sign-out-alt"></i>Deconnexion</a>
            </div>
        </nav>

        <!-- Page Content -->

        <!-- Dark Overlay element -->
        <div class="overlay_header"></div>
    </div>
    <header>
        <div id="bloc_principal_header">
            <a href="#" class="anul_lien" id="bloc_logo">
                <img data-src="{{asset('sources/Images/petit_logo.png')}}" class="lazy" id="logo_header" alt="logo">
            </a>
            <div class="dropdown">
                <div id="bloc_espace_404">
                    <span class="anul_lien" id="lien_espace">{{ auth()->user()->nom }} {{ auth()->user()->prenom }}</span>
                    @if($user_role == "super_administrateur")
                        <img data-src="{{asset('sources/images/superadmin.jpg')}}" class="lazy dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="photo_profil" alt="icone cadena">
                    @else
                        <img data-src="{{asset('sources/images/2b7a5c3c051f471f1674da3f7d222a5b78390ea1.png')}}" class="lazy dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="photo_profil" alt="icone cadena">
                    @endif
                    <div class="dropdown-menu animate slideIn" aria-labelledby="photo_profil" id="dropdown_header">
                        @if ($user_role == "etudiant")
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-sticky-note"></i>
                                Requête
                            </a>
                        @endif
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user"></i>
                            Mon profil
                        </a>
                        <a class="dropdown-item" href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            Deconnexion
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
              </div>
            <button class="navbar-toggler" id="bouton_derouleur" type="button" data-toggle="collapse" data-target="#bloc_menu_header" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </header>
    <main>
        <div class="container_principal_dashbord">
            <div class="container_navigation">
                <nav class="navigation_dashbord">
                    @if ($user_role == "etudiant")
                    <ul>
                        @php
                            $cours_etudiants = \App\Cours::where('classe_id',auth()->user()->classe_id)->get();
                        @endphp
                        @foreach ($cours_etudiants as $cours_etudiant)
                        <li>
                            <a href="{{ route('cours.details',$cours_etudiant) }}" class="anul_lien lien_navigation_dashbord {{ isset($cour) && $cour->id == $cours_etudiant->id ? "active" : ""}}">
                                <div class="container_cours">
                                    <div class="container_photo_cours">
                                        <img data-src="{{asset('uploads/images/cours/'.$cours_etudiant->photo)}}" class="lazy dropdown-toggle photo_cours" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" alt="icone cadena">
                                    </div>
                                    <div class="container_texte">
                                        <span class="titre_cours">{{ $cours_etudiant->denomination }} - {{ $cours_etudiant->niveau }}</span>
                                        <span>séance dans
                                            <span class="statu_cours"> 02h30min</span>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    @elseif($user_role == "super_administrateur")
                        <ul>
                            <li><a href="{{ route('liste_utilisateurs') }}" class="anul_lien lien_navigation_dashbord {{ $page == "gestion_utilisateur" ? 'active':'' }}">Gestion des utilisateurs</a></li>
                            <li><a href="{{ route('liste_plateformes') }}" class="anul_lien lien_navigation_dashbord lien_navigation_dashbord {{ $page == "gestion_plateforme" ? 'active':'' }}">Gestion des plateformes</a></li>
                            <li><a href="{{ route('consulter_bilan') }}" class="anul_lien lien_navigation_dashbord {{ $page == "consulter_bilan" ? 'active':'' }}">Consultation du bilan</a></li>
                            <li><a href="#" class="anul_lien lien_navigation_dashbord">Archivage</a></li>
                        </ul>
                    @elseif($user_role == "administrateur")
                        <ul>
                            <li><a href="{{ route('emploie_temps_admin') }}" class="anul_lien lien_navigation_dashbord {{ $page == "emploi_temps" ? 'active':'' }}">Gestion des emplois de temps</a></li>
                            <li><a href="#" class="anul_lien lien_navigation_dashbord">Gestion de notifications</a></li>
                            <li><a href="{{ route('consulter_note_admin') }}" class="anul_lien lien_navigation_dashbord {{ $page == "consulter_note" ? 'active':'' }}">Consultation de notes</a></li>
                            <li><a href="{{ route('consulter_requete') }}" class="anul_lien lien_navigation_dashbord {{ $page == "consultation_requete" ? 'active':'' }}">Consultation de requetes</a></li>
                            <li><a href="{{ route('consulter_bilan') }}" class="anul_lien lien_navigation_dashbord {{ $page == "consulter_bilan" ? 'active':'' }}">Consultation du bilan</a></li>
                        </ul>
                    @elseif($user_role == "professeur")
                        <ul>
                            @php
                                $cours_enseignants = \App\Cours::where('user_id',auth()->user()->id)->get();
                            @endphp
                            @foreach ($cours_enseignants as $cours_enseignant)
                            <li>
                                <a href="{{ route('cours.details',$cours_enseignant) }}" class="anul_lien lien_navigation_dashbord {{ isset($cour) && $cour->id == $cours_enseignant->id ? "active" : ""}}">
                                    <div class="container_cours">
                                        <div class="container_photo_cours">
                                            <img data-src="{{asset('uploads/images/cours/'.$cours_enseignant->photo)}}" class="lazy dropdown-toggle photo_cours" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" alt="icone cadena">
                                        </div>
                                        <div class="container_texte">
                                            <span class="titre_cours">{{ $cours_enseignant->denomination }} - {{ $cours_enseignant->niveau }}</span>
                                            <span>séance dans
                                                <span class="statu_cours">en cours...</span>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="bloc_boutons">
                            <button type="submit" id="creer_un_cours" class="button_goldwin button_type_1 anul_lien"><i class="fas fa-chalkboard"></i>Créer un cours</button>
                        </div>
                    @else
                        <ul>
                            @php
                                $cours_enseignants = \App\Cours::where('classe_id',auth()->user()->classe_id)->get();
                            @endphp
                            @foreach ($cours_enseignants as $cours_enseignant)
                            <li>
                                <a href="{{ route('cours.details',$cours_enseignant) }}" class="anul_lien lien_navigation_dashbord {{ isset($cour) && $cour->id == $cours_enseignant->id ? "active" : ""}}">
                                    <div class="container_cours">
                                        <div class="container_photo_cours">
                                            <img data-src="{{asset('uploads/images/cours/'.$cours_enseignant->photo)}}" class="lazy dropdown-toggle photo_cours" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" alt="icone cadena">
                                        </div>
                                        <div class="container_texte">
                                            <span class="titre_cours">{{ $cours_enseignant->denomination }} - {{ $cours_enseignant->niveau }}</span>
                                            <span>séance dans
                                                <span class="statu_cours">en cours...</span>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="bloc_boutons">
                            <button type="submit" id="creer_un_cours" class="button_goldwin button_type_1 anul_lien"><i class="fas fa-chalkboard"></i>Créer un cours</button>
                        </div>
                    @endif
                </nav>
            </div>
    @yield('content')

    @stack('modals')

<script src="{{asset('js/jquery.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdn.plyr.io/3.4.6/plyr.js"></script>
<script src="{{asset('js/lazyload.min.js')}}"></script>
<script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" data-auto-replace-svg="nest"></script>
<script>
    (function ($) {
        $(document).ready(function() {
            // // Users can skip the loading process if they want.
            // $('.skip').click(function() {
            //     $('.overlay, body').addClass('loaded');
            // })

            // Will wait for everything on the page to load.
            $(window).bind('load', function() {
                $('.overlay, body').addClass('loaded');
                setTimeout(function() {
                    $('.overlay').css({'display':'none'})
                }, 2000)

                $('#rgpdModal').modal('show');
            });

            // Will remove overlay after 1min for users cannnot load properly.
            setTimeout(function() {
                $('.overlay, body').addClass('loaded');

                $('#rgpdModal').modal('show');
            }, 60000);
        })
    })(jQuery);

    (function (w, d) {
    function logElementEvent(eventName, element) {
        console.log(Date.now(), eventName, element.getAttribute("data-src"));
    }

    var callback_enter = function (element) {
        logElementEvent("🔑 ENTERED", element);
    };
    var callback_exit = function (element) {
        logElementEvent("🚪 EXITED", element);
    };
    var callback_loading = function (element) {
        logElementEvent("⌚ LOADING", element);
    };
    var callback_loaded = function (element) {
        logElementEvent("👍 LOADED", element);
    };
    var callback_error = function (element) {
        logElementEvent("💀 ERROR", element);
        element.src =
        "https://via.placeholder.com/440x560/?text=Error+Placeholder";
    };
    var callback_finish = function () {
        logElementEvent("✔️ FINISHED", document.documentElement);
    };
    var callback_cancel = function (element) {
        logElementEvent("🔥 CANCEL", element);
    };

    var options = {
        // Assign the callbacks defined above
        callback_enter: callback_enter,
        callback_exit: callback_exit,
        callback_cancel: callback_cancel,
        callback_loading: callback_loading,
        callback_loaded: callback_loaded,
        callback_error: callback_error,
        callback_finish: callback_finish
    };

    var page_ll = new LazyLoad(options);

    function mouseoverHandler(event) {
        var product = event.currentTarget;
        var lazyImg = product.querySelector(".lazy-hover");
        if (!!lazyImg.getAttribute("data-ll-status")) {
        return;
        }
        // page_ll.load(lazyImg); STILL WORKS, BUT DEPRECATED
        LazyLoad.load(lazyImg, options);
    }

    function nodeSetToArray(nodeSet) {
        return Array.prototype.slice.call(nodeSet);
    }

    function initializeMouseBehaviour() {
        const products = document.querySelectorAll(".product");
        nodeSetToArray(products).forEach(function (product) {
        product.addEventListener("mouseover", mouseoverHandler, true);
        });
    }

    initializeMouseBehaviour();
    })(window, document);
</script>
<script type="text/javascript">
    $(document).ready(function () {
        // $("#sidebar").mCustomScrollbar({
        //     theme: "minimal"
        // });

        $('#dismiss, .overlay_header').on('click', function () {
            // hide sidebar
            $('#sidebar').removeClass('active');
            // hide overlay_header
            $('.overlay_header').removeClass('active');
        });

        $('#bouton_derouleur').on('click', function () {
            // open sidebar
            console.log("oui");
            $('#sidebar').addClass('active');
            // fade in the overlay_header
            $('.overlay_header').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>
@stack('js')
<script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" data-auto-replace-svg="nest"></script>
</html>
