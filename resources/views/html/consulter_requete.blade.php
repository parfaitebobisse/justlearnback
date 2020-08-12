@extends('html.header')

@push('css')
    <link rel="stylesheet" href="{{asset('css/consulter_requetes.css')}}">
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
                        <li><a href="#" class="anul_lien lien_navigation_dashbord ">Consultation de notes</a></li>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord active">Consultation de requetes</a></li>
                        <li><a href="#" class="anul_lien lien_navigation_dashbord">Consultation du bilan</a></li>
                    </ul>
                </nav>
            </div>
            <div class="container_corps_dashbord">
                <div class="entete_corps_dashbord">
                    <h1 class="titre_dashbord">Consultation de requêtes</h1>
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
                    <div class="bloc_requetes">
                        <div class="requete_admin">
                            <h3>Revendication de notes</h3>
                            <span class="titre_type_5 etudiant_emetteur">Ebobisse epoune parfait - GL3</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum a quod dicta, perspiciatis nobis error!</p>
                            <div class="container_bouton_vu">
                                <span>envoyé le 15/08/2020</span>
                                <button type="button" id="suivant" class="button_goldwin button_type_1 anul_lien voir_bouton requete_vu" title="voir" data-toggle="modal" data-target="#staticBackdrop">
                                    Vu
                                </button>
                            </div>
                        </div>
                        <div class="requete_admin">
                            <h3>Revendication de notes</h3>
                            <span class="titre_type_5 etudiant_emetteur">Ebobisse epoune parfait - GL3</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum a quod dicta, perspiciatis nobis error!</p>
                            <div class="container_bouton_vu">
                                <span>envoyé le 14/08/2020</span>
                                <button type="button" id="suivant" class="button_goldwin button_type_1 anul_lien voir_bouton requete_non_vu" title="voir" data-toggle="modal" data-target="#staticBackdrop">
                                    vu
                                </button>
                            </div>
                        </div>
                        <div class="requete_admin">
                            <h3>Revendication de notes</h3>
                            <span class="titre_type_5 etudiant_emetteur">Ebobisse epoune parfait - GL3</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum a quod dicta, perspiciatis nobis error!</p>
                            <div class="container_bouton_vu">
                                <span>envoyé le 14/08/2020</span>
                                <button type="button" id="suivant" class="button_goldwin button_type_1 anul_lien voir_bouton requete_non_vu" title="voir" data-toggle="modal" data-target="#staticBackdrop">
                                    vu
                                </button>
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
                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>
@endsection