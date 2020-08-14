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
@endsection