<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Our Custom CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="../sources/images/4916petit_logo.ico" />
    <link rel="stylesheet" href="../css/header_respon.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/main_dashbord.css">
    <link rel="stylesheet" href="../css/ajouter_utilisateur.css">
    <title>Ebobisse epoune parfait</title>
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
                    <img data-src="../sources/images/2b7a5c3c051f471f1674da3f7d222a5b78390ea1.png" class="lazy dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="photo_profil_respo" alt="icone cadena">
                </a>
            </div>
    
            <ul class="list-unstyled components" id="liste_menu_respo_dash">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="lien_navigation_dashbord active">Gestion des utilisateurs</a>
                </li>
                <li>
                    <a href="#" class="lien_navigation_dashbord">Gestion des plateformes</a>
                </li>
                <li>
                    <a href="#" class="lien_navigation_dashbord">Consultation du bilan</a>
                </li>
                <li>
                    <a href="#" class="lien_navigation_dashbord">Archivage</a>
                </li>
            </ul>
            <div class="sous_bloc_haut">
                <a href="#"><i class="fas fa-sticky-note"></i> Requête</a>
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
                <img data-src="../Sources/Images/petit_logo.png" class="lazy" id="logo_header" alt="logo">
            </a>
            <div class="dropdown">
                <div id="bloc_espace_404">
                    <span class="anul_lien" id="lien_espace">Ebobisse Epoune Parfait</span>
                    <img data-src="../sources/images/2b7a5c3c051f471f1674da3f7d222a5b78390ea1.png" class="lazy dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="photo_profil" alt="icone cadena">
                    <div class="dropdown-menu animate slideIn" aria-labelledby="photo_profil" id="dropdown_header">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-sticky-note"></i>
                            Requête
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user"></i>
                            Mon profil
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-sign-out-alt"></i>
                            Deconnexion
                        </a>
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
                    <ul>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord active">Gestion des utilisateurs</a></li>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord">Gestion des plateformes</a></li>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord">Consultation du bilan</a></li>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord">Archivage</a></li>
                    </ul>
                </nav>
            </div>
            <div class="container_corps_dashbord">
                <div class="entete_corps_dashbord">
                    
                    <h1 class="titre_dashbord">
                        <a href="#" class="lien_retour anul_lien">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </a>
                        Ajouter un utilisateur
                    </h1>
                </div>
                <div class="bloc_contenu_dashbord">
                    <div class="bloc_sous_menu_dashbord">
                        <form method="" action="">
                            <div class="bloc_contenu_dashbord">
                                <div class="sous_bloc_form">
                                    <div class="container_champs_paiement champ_court">
                                        <label for="nom" class="label_paiement">Nom</label>
                                        <div class="sous_container_paiement">
                                            <input type="text" class="champs_text_paiement" name="nom" placeholder="Claude">
                                        </div>
                                    </div>
                                    <div class="container_champs_paiement champ_court">
                                        <label for="prenom" class="label_paiement">Prenom</label>
                                        <div class="sous_container_paiement">
                                            <input type="text" class="champs_text_paiement" name="prenom" placeholder="Pierre">
                                        </div>
                                    </div>
                                </div>
                                <div class="sous_bloc_form">
                                    <div class="container_champs_paiement champ_court">
                                        <label for="date_naissance" class="label_paiement">Date de naissance</label>
                                        <div class="sous_container_paiement">
                                            <input type="date" class="champs_text_paiement" name="date_naissance">
                                        </div>
                                    </div>
                                    <div class="container_champs_paiement champ_court">
                                        <label for="lieu_naissance" class="label_paiement">Lieu de naissance</label>
                                        <div class="sous_container_paiement">
                                            <input type="text" class="champs_text_paiement" name="lieu_naissance" placeholder="Saint-Germain en laye">
                                        </div>
                                    </div>
                                </div>
                                <div class="sous_bloc_form">
                                    <div class="container_champs_paiement champ_court">
                                        <label for="email" class="label_paiement">Email</label>
                                        <div class="sous_container_paiement">
                                            <input type="text" class="champs_text_paiement" name="email" placeholder="pierreclaudegmail.com">
                                        </div>
                                    </div>
                                    <div class="container_champs_paiement champ_court">
                                        <label for="tel" class="label_paiement">Téléphone</label>
                                        <div class="sous_container_paiement">
                                            <input type="text" class="champs_text_paiement" name="tel" placeholder="0684578962">
                                        </div>
                                    </div>
                                </div>
                                <div class="sous_bloc_form">
                                    <div class="container_champs_paiement" id="type_etudiant">
                                        <label for="tel" class="label_paiement">Type d'utilisateur</label>
                                        <div class="sous_container_paiement custom-select">
                                            <select name="doimaine_de_competence" class="champs_text_paiement">
                                                <option value="droit_immobilier" selected>Etudiant</option>
                                                <option value="droit_immobilier">Administrateur</option>
                                                <option value="droit_immobilier">Professeur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="container_radio_compte champ_court">
                                        <div class="container_champs_paiement container_radios container_radios_type_paiement">
                                            <div class="container_confirmation_check container_radio">
                                                <input type="radio" id="radio_homme" name="sexe" value="homme" checked>
                                                <label for="radio_homme">Homme</label>
                                            </div>
                                            <div class="container_confirmation_check container_radio">
                                                <input type="radio" id="radio_femme" name="sexe" value="femme">
                                                <label for="radio_femme">Femme</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sous_bloc_form">
                                    <div class="container_champs_paiement champ_court" id="champs_photo">
                                        <div class="bloc_depot">
                                            <img data-src="../sources/images/2b7a5c3c051f471f1674da3f7d222a5b78390ea1.png" alt="image_document" class="image_depot lazy">
                                            <p class="paragraphe_depot">Déposez une photo ou cliquez pour parcourir votre explorateur. Formats compatible Jpg</p>
                                            <input type="file" class="image_upload" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bloc_boutons bloc_validation">
                                <button type="submit" id="creer_compte" class="button_goldwin button_type_1 anul_lien">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: #FFFFFF;">
                <div class="modal-header">
                    <h5 class="modal-title">EBOBISSE EPOUNE Parfait</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body" id="modal_plus_user">
                    <div class="bloc_infos_user_modal">
                        <div class="bloc_information_user">
                            <span class="info_user">Matricule:</span>
                            <span class="Value_user">0001</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Nom:</span>
                            <span class="Value_user">Ebobisse Epoune</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Prenom:</span>
                            <span class="Value_user">Parfait</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Sex:</span>
                            <span class="Value_user">F</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Email:</span>
                            <span class="Value_user">parfaitebobisse@gmail.com</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Tel:</span>
                            <span class="Value_user">698530793</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Type:</span>
                            <span class="Value_user">Etudiant</span>
                        </div>
                    </div>
                    <div class="bloc_photos_user_modal">
                        <img data-src="../sources/images/2b7a5c3c051f471f1674da3f7d222a5b78390ea1.png" class="lazy">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="../js/jquery.js"></script>
<script src="../js/lazyload.min.js"></script>
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
<script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" data-auto-replace-svg="nest"></script>
</html>