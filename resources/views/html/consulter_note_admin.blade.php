@extends('html.header')

@push('css')
    <link rel="stylesheet" href="{{asset('css/emploie_temps_admin.css')}}">
@endpush

@section('title')
    ebobisse epoune parfait
@endsection

@section('content')
    <main>
        <div class="container_principal_dashbord">
            <div class="container_navigation">
                <nav class="navigation_dashbord">
                    <ul>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord">Gestion des emplois de temps</a></li>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord">Gestion des plateformes</a></li>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord ">Gestion de notifications</a></li>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord active">Consultation de notes</a></li>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord">Consultation de requetes</a></li>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord">Consultation du bilan</a></li>
                    </ul>
                </nav>
            </div>
            <div class="container_corps_dashbord">
                <div class="entete_corps_dashbord">
                    <h1 class="titre_dashbord">Consultation de notes</h1>
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
                        <div class="bloc_recherche">
                            <form class="sous_bloc_recherche bloc_arrondi_blanc" id="form_search" method="" action="">
                                <input type="text" class="form-control" placeholder="nom de l'etudiant" aria-label="Recherche" aria-describedby="basic-addon2">
                                <button type="submit" class="bouton_recherche_1">
                                    <span class="input-group-text">
                                        <i class="fas fa-search goldwin-green" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="limiter" id="liste_etudiant_note">
                        <div class="container-table100">
                            <div class="wrap-table100">
                                <div class="table100 ver1 m-b-110">
                                    <div class="table100-head">
                                        <table>
                                            <thead>
                                                <tr class="row100 head">
                                                    <th class="cell100 column1">-</th>
                                                    <th class="cell100 column2">Id</th>
                                                    <th class="cell100 column3">Nom</th>
                                                    <th class="cell100 column4">Prenom</th>
                                                    <th class="cell100 column5">-</th>
                                                    <th class="cell100 column6">-</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                
                                    <div class="table100-body js-pscroll">
                                        <table>
                                            <tbody>
                                                <tr class="row100 body">
                                                    <td class="cell100 column1">1</td>
                                                    <td class="cell100 column2">0001</td>
                                                    <td class="cell100 column3">Ebobisse</td>
                                                    <td class="cell100 column4">Parfait</td>
                                                    <td class="cell100 column5">
                                                        <div class="container_confirmation_check container_radio">
                                                            <input type="radio" id="radio_homme" name="sexe" value="homme">
                                                            <label for="radio_homme"></label>
                                                        </div>
                                                    </td>
                                                    <td class="cell100 column6">
                                                        <button type="button" id="suivant" class="button_goldwin button_type_1 anul_lien voir_bouton" title="voir">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr class="row100 body">
                                                    <td class="cell100 column1">1</td>
                                                    <td class="cell100 column2">0001</td>
                                                    <td class="cell100 column3">Ebobisse</td>
                                                    <td class="cell100 column4">Parfait</td>
                                                    <td class="cell100 column5">
                                                        <div class="container_confirmation_check container_radio">
                                                            <input type="radio" id="radio_homme" name="sexe" value="homme">
                                                            <label for="radio_homme"></label>
                                                        </div>
                                                    </td>
                                                    <td class="cell100 column6">
                                                        <button type="button" id="suivant" class="button_goldwin button_type_1 anul_lien voir_bouton" title="voir">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr class="row100 body">
                                                    <td class="cell100 column1">1</td>
                                                    <td class="cell100 column2">0001</td>
                                                    <td class="cell100 column3">Ebobisse</td>
                                                    <td class="cell100 column4">Parfait</td>
                                                    <td class="cell100 column5">
                                                        <div class="container_confirmation_check container_radio">
                                                            <input type="radio" id="radio_homme" name="sexe" value="homme" checked>
                                                            <label for="radio_homme"></label>
                                                        </div>
                                                    </td>
                                                    <td class="cell100 column6">
                                                        <button type="button" id="suivant" class="button_goldwin button_type_1 anul_lien voir_bouton" title="voir">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr class="row100 body">
                                                    <td class="cell100 column1">1</td>
                                                    <td class="cell100 column2">0001</td>
                                                    <td class="cell100 column3">Ebobisse</td>
                                                    <td class="cell100 column4">Parfait</td>
                                                    <td class="cell100 column5">
                                                        <div class="container_confirmation_check container_radio">
                                                            <input type="radio" id="radio_homme" name="sexe" value="homme">
                                                            <label for="radio_homme"></label>
                                                        </div>
                                                    </td>
                                                    <td class="cell100 column6">
                                                        <button type="button" id="suivant" class="button_goldwin button_type_1 anul_lien voir_bouton" title="voir">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container_navigation_1" id="navigation_pages_1">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="entete_apercu">
                        <span class="paragraphe_type_4" id="apercu">Aperçu : </span>
                        <h2 class="titre_nombre_etudiants" id="nom_classe">Génie Logiciel - Ebobisse Epoune parfait</h2>
                    </div>
                    <div class="limiter">
                        <div class="container-table100">
                            <div class="wrap-table100">
                                <div class="table100 ver1 m-b-110">
                                    <div class="table100-head">
                                        <table>
                                            <thead>
                                                <tr class="row100 head">
                                                    <th class="cell100 column1">UE</th>
                                                    <th class="cell100 column2">Notes</th>
                                                    <th class="cell100 column3">Credits</th>
                                                    <th class="cell100 column4">Notes Coef</th>
                                                    <th class="cell100 column5">Validé</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                
                                    <div class="table100-body js-pscroll">
                                        <table>
                                            <tbody>
                                                <tr class="row100 body">
                                                    <td class="cell100 column1">RT</td>
                                                    <td class="cell100 column2">10</td>
                                                    <td class="cell100 column3">3</td>
                                                    <td class="cell100 column4">30</td>
                                                    <td class="cell100 column5">V</td>
                                                </tr>
                                                <tr class="row100 body">
                                                    <td class="cell100 column1">EO</td>
                                                    <td class="cell100 column2">08</td>
                                                    <td class="cell100 column3">4</td>
                                                    <td class="cell100 column4">32</td>
                                                    <td class="cell100 column5">NV</td>
                                                </tr>
                                                <tr class="row100 body">
                                                    <td class="cell100 column1">GET</td>
                                                    <td class="cell100 column2">18</td>
                                                    <td class="cell100 column3">4</td>
                                                    <td class="cell100 column4">72</td>
                                                    <td class="cell100 column5">V</td>
                                                </tr>
                                                <tr class="row100 body" id="total_row" style="font-weight: 600;">
                                                    <td class="cell100 column1" style="background-color: #5f4811; color: #FFF; text-transform: uppercase;">total</td>
                                                    <td class="cell100 column2">11</td>
                                                    <td class="cell100 column3">134</td>
                                                    <td class="cell100 column4">12.18</td>
                                                    <td class="cell100 column5" style="color: #0F0;">V</td>
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
    </main>
    <footer>
    </footer>
</body>
@endsection