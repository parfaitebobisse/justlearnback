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
    <link rel="stylesheet" href="../css/emploie_temps_admin.css">
    <title>Emploie de temps</title>
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
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="lien_navigation_dashbord active">Gestion des emplois de temps</a>
                </li>
                <li>
                    <a href="#" class="lien_navigation_dashbord">Gestion des plateformes</a>
                </li>
                <li class="active">
                    <a href="#" class="lien_navigation_dashbord">Consultation du bilan</a>
                </li>
                <li>
                    <a href="#" class="lien_navigation_dashbord">Gestion de notifications</a>
                </li>
                <li>
                    <a href="#" class="lien_navigation_dashbord">Consultation de notes</a>
                </li>
                <li>
                    <a href="#" class="lien_navigation_dashbord">Consultation de requetes</a>
                </li>
                <li>
                    <a href="#" class="lien_navigation_dashbord">Consultation du bilan</a>
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
                        <li><a href="#" class="anul_lien lien_navigation_dashbord active">Gestion des emplois de temps</a></li>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord">Gestion des plateformes</a></li>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord ">Gestion de notifications</a></li>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord">Consultation de notes</a></li>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord">Consultation de requetes</a></li>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord">Consultation du bilan</a></li>
                    </ul>
                </nav>
            </div>
            <div class="container_corps_dashbord">
                <div class="entete_corps_dashbord">
                    <h1 class="titre_dashbord">Gestion des emplois de temps</h1>
                    <div class="bloc_boutons">
                        <button type="submit" id="envoyer_document" class="button_goldwin button_type_1 anul_lien">Imprimer</button>
                    </div>
                </div>
                <div class="bloc_contenu_dashbord">
                    <div class="bloc_sous_menu_dashbord">
                        <div class="bloc_filtre">
                        <h2 class="titre_nombre_etudiants titre_filtre">Filtres</h2>
                        <div class="container_champs_paiement" id="type_etudiant">
                            <label for="tel" class="label_paiement">Plateforme</label>
                            <div class="sous_container_paiement custom-select">
                                <select name="doimaine_de_competence" class="champs_text_paiement">
                                    <option value="droit_immobilier" > </option>
                                    <option value="droit_immobilier" selected>PFTI</option>
                                    <option value="droit_immobilier">PFTI</option>
                                    <option value="droit_immobilier">PFTI</option>
                                </select>
                            </div>
                        </div>
                        <div class="container_champs_paiement" id="type_etudiant">
                            <label for="tel" class="label_paiement">Semestre</label>
                            <div class="sous_container_paiement custom-select">
                                <select name="doimaine_de_competence" class="champs_text_paiement">
                                    <option value="droit_immobilier"> </option>
                                    <option value="droit_immobilier" selected>1</option>
                                    <option value="droit_immobilier">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="container_champs_paiement" id="type_etudiant">
                            <label for="tel" class="label_paiement">Classe</label>
                            <div class="sous_container_paiement custom-select">
                                <select name="doimaine_de_competence" class="champs_text_paiement">
                                    <option value="droit_immobilier" > </option>
                                    <option value="droit_immobilier" selected>GL</option>
                                    <option value="droit_immobilier">ART</option>
                                    <option value="droit_immobilier">GRT</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="entete_apercu">
                        <span class="paragraphe_type_4" id="apercu">Aperçu : </span>
                        <h2 class="titre_nombre_etudiants" id="nom_classe">Génie Logiciel</h2>
                    </div>
                    <div class="limiter">
                        <div class="container-table100">
                            <div class="wrap-table100">
                                <div class="table100 ver1 m-b-110">
                                    <div class="table100-head">
                                        <table>
                                            <thead>
                                                <tr class="row100 head">
                                                    <th class="cell100 column1">Heures</th>
                                                    <th class="cell100 column2">Lundi</th>
                                                    <th class="cell100 column3">Mardi</th>
                                                    <th class="cell100 column4">Mercredi</th>
                                                    <th class="cell100 column5">Jeudi</th>
                                                    <th class="cell100 column6">Vendredi</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                
                                    <div class="table100-body js-pscroll">
                                        <table>
                                            <tbody>
                                                <tr class="row100 body">
                                                    <td class="cell100 column1">18h - 20h</td>
                                                    <td class="cell100 column2">RT</td>
                                                    <td class="cell100 column3">--</td>
                                                    <td class="cell100 column4">EO</td>
                                                    <td class="cell100 column5">RT</td>
                                                    <td class="cell100 column6">EO</td>
                                                </tr>
                                                <tr class="row100 body">
                                                    <td class="cell100 column1">20h - 22h</td>
                                                    <td class="cell100 column2">RT</td>
                                                    <td class="cell100 column3">GET</td>
                                                    <td class="cell100 column4">EO</td>
                                                    <td class="cell100 column5">EO</td>
                                                    <td class="cell100 column6">--</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="entete_apercu">
                        <span class="paragraphe_type_4" id="apercu">Modifier : </span>
                        <h2 class="titre_nombre_etudiants" id="nom_classe"></h2>
                    </div>
                    <div class="limiter" id="table_modif_emploie">
                        <div class="container-table100">
                            <div class="wrap-table100">
                                <div class="table100 ver1 m-b-110">
                                    <div class="table100-head">
                                        <table>
                                            <thead>
                                                <tr class="row100 head">
                                                    <th class="cell100 column1">Heures</th>
                                                    <th class="cell100 column2">Lundi</th>
                                                    <th class="cell100 column3">Mardi</th>
                                                    <th class="cell100 column4">Mercredi</th>
                                                    <th class="cell100 column5">Jeudi</th>
                                                    <th class="cell100 column6">Vendredi</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                
                                    <div class="table100-body js-pscroll">
                                        <table>
                                            <tbody>
                                                <tr class="row100 body">
                                                    <td class="cell100 column1">18h - 20h</td>
                                                    <td class="cell100 column2">
                                                        <div class="sous_container_paiement custom-select">
                                                            <select name="doimaine_de_competence" class="champs_text_paiement">
                                                                <option value="droit_immobilier">--</option>
                                                                <option value="droit_immobilier" selected>RT</option>
                                                                <option value="droit_immobilier">EO</option>
                                                                <option value="droit_immobilier">GET</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td class="cell100 column3">
                                                        <div class="sous_container_paiement custom-select">
                                                            <select name="doimaine_de_competence" class="champs_text_paiement">
                                                                <option value="droit_immobilier" selected>--</option>
                                                                <option value="droit_immobilier" >RT</option>
                                                                <option value="droit_immobilier">EO</option>
                                                                <option value="droit_immobilier">GET</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td class="cell100 column4">
                                                        <div class="sous_container_paiement custom-select">
                                                            <select name="doimaine_de_competence" class="champs_text_paiement">
                                                                <option value="droit_immobilier" >--</option>
                                                                <option value="droit_immobilier" >RT</option>
                                                                <option value="droit_immobilier" selected>EO</option>
                                                                <option value="droit_immobilier">GET</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td class="cell100 column5">
                                                        <div class="sous_container_paiement custom-select">
                                                            <select name="doimaine_de_competence" class="champs_text_paiement">
                                                                <option value="droit_immobilier" >--</option>
                                                                <option value="droit_immobilier" selected>RT</option>
                                                                <option value="droit_immobilier">EO</option>
                                                                <option value="droit_immobilier">GET</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td class="cell100 column6">
                                                        <div class="sous_container_paiement custom-select">
                                                            <select name="doimaine_de_competence" class="champs_text_paiement">
                                                                <option value="droit_immobilier" >--</option>
                                                                <option value="droit_immobilier" >RT</option>
                                                                <option value="droit_immobilier" selected>EO</option>
                                                                <option value="droit_immobilier">GET</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="row100 body">
                                                    <td class="cell100 column1">20h - 22h</td>
                                                    <td class="cell100 column2">
                                                        <div class="sous_container_paiement custom-select">
                                                            <select name="doimaine_de_competence" class="champs_text_paiement">
                                                                <option value="droit_immobilier" >--</option>
                                                                <option value="droit_immobilier" selected>RT</option>
                                                                <option value="droit_immobilier">EO</option>
                                                                <option value="droit_immobilier">GET</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td class="cell100 column3">
                                                        <div class="sous_container_paiement custom-select">
                                                            <select name="doimaine_de_competence" class="champs_text_paiement">
                                                                <option value="droit_immobilier" >--</option>
                                                                <option value="droit_immobilier" >RT</option>
                                                                <option value="droit_immobilier">EO</option>
                                                                <option value="droit_immobilier" selected>GET</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td class="cell100 column4">
                                                        <div class="sous_container_paiement custom-select">
                                                            <select name="doimaine_de_competence" class="champs_text_paiement">
                                                                <option value="droit_immobilier" >--</option>
                                                                <option value="droit_immobilier" >RT</option>
                                                                <option value="droit_immobilier" selected>EO</option>
                                                                <option value="droit_immobilier">GET</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td class="cell100 column5">
                                                        <div class="sous_container_paiement custom-select">
                                                            <select name="doimaine_de_competence" class="champs_text_paiement">
                                                                <option value="droit_immobilier" >--</option>
                                                                <option value="droit_immobilier" >RT</option>
                                                                <option value="droit_immobilier" selected>EO</option>
                                                                <option value="droit_immobilier">GET</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td class="cell100 column6">
                                                        <div class="sous_container_paiement custom-select">
                                                            <select name="doimaine_de_competence" class="champs_text_paiement">
                                                                <option value="droit_immobilier" selected>--</option>
                                                                <option value="droit_immobilier" >RT</option>
                                                                <option value="droit_immobilier">EO</option>
                                                                <option value="droit_immobilier">GET</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bloc_boutons modifier_emploi">
                    <button type="submit" id="envoyer_document" class="button_goldwin button_type_1 anul_lien">Modifier</button>
                </div>
            </div>
        </div>
    </main>
    <footer>
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
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
    // Chart 1
    var data = google.visualization.arrayToDataTable([['OS Mobile', 'Parts de marché'],["PFTI",71.40],["OGA",14.70],["PFTIN",10.60],["NLT",1.00],["MPS",2.30],["ATG",2.30],["MPO",2.30],["CMO",2.30]]);
    var options = {
    title: ''
    };
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}
</script>
</html>