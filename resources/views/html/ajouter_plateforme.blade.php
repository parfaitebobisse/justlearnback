@extends('html.header')

@push('css')
    <link rel="stylesheet" href="{{asset('css/ajouter_plateforme.css')}}">
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
                        Ajouter une plateforme
                    </h1>
                </div>
                <div class="bloc_contenu_dashbord">
                    <div class="bloc_sous_menu_dashbord">
                        <form method="" action="">
                            <div class="bloc_contenu_dashbord">
                                <div class="sous_bloc_form">
                                    <div class="container_champs_paiement denomination_plateforme">
                                        <label for="nom" class="label_paiement">Denomination</label>
                                        <div class="sous_container_paiement">
                                            <input type="text" class="champs_text_paiement" name="nom" placeholder="PFTI">
                                        </div>
                                    </div>
                                </div>
                                <div class="bloc_classes">
                                    <h2>Classes disponibles</h2>
                                    <div class="container_classes">
                                        <div class="container_confirmation_check bloc_question_checkbox">
                                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                                            <label for="confirmation_check1" aria-describedby="label">GL<label>
                                        </div>
                                        <div class="container_confirmation_check bloc_question_checkbox">
                                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                                            <label for="confirmation_check1" aria-describedby="label">ARS<label>
                                        </div>
                                        <div class="container_confirmation_check bloc_question_checkbox">
                                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                                            <label for="confirmation_check1" aria-describedby="label">BMP<label>
                                        </div>
                                        <div class="container_confirmation_check bloc_question_checkbox">
                                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                                            <label for="confirmation_check1" aria-describedby="label">BMP<label>
                                        </div>
                                        <div class="container_confirmation_check bloc_question_checkbox">
                                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                                            <label for="confirmation_check1" aria-describedby="label">BMP<label>
                                        </div>
                                    </div>
                                    <div class="bloc_boutons bloc_validation">
                                        <div class="container_champs_paiement">
                                            <input type="text" class="champs_text_paiement" name="nom" placeholder="PFTI">
                                        </div>
                                        <button type="submit" id="creer_compte" class="button_goldwin button_type_1 anul_lien">Nouvelle classe</button>
                                    </div>
                                </div>
                                <div class="sous_bloc_form">
                                    <div class="container_champs_paiement champ_court" id="champs_photo">
                                        <div class="bloc_depot">
                                            <img data-src="{{asset('sources/images/2b7a5c3c051f471f1674da3f7d222a5b78390ea1.png')}}" alt="image_document" class="image_depot lazy">
                                            <input type="file" class="image_upload" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bloc_boutons bloc_validation">
                                <button type="submit" id="creer_compte" class="button_goldwin button_type_1 anul_lien">Ajouter la plateforme</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
@endsection