@extends('html.header')

@push('css')
    <link rel="stylesheet" href="{{asset('css/ajouter_utilisateur.css')}}">
@endpush

@section('title')
    ebobisse epoune parfait
@endsection

@section('content')
            <div class="container_corps_dashbord">
                <div class="entete_corps_dashbord">
                    
                    <h1 class="titre_dashbord">
                        <a href="{{ route('liste_utilisateurs') }}" class="lien_retour anul_lien">
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
                                            <select name="type_utilisateur" class="champs_text_paiement type_utilisateur">
                                                <option value="etudiant" selected>Etudiant</option>
                                                <option value="administrateur">Administrateur</option>
                                                <option value="professeur">Professeur</option>
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
                                <div class="sous_bloc_form" id="bloc_etudiant_uniquement">
                                    <div class="container_champs_paiement" id="type_etudiant">
                                        <label for="tel" class="label_paiement">Plateforme</label>
                                        <div class="sous_container_paiement custom-select">
                                            <select name="doimaine_de_competence" class="champs_text_paiement">
                                                <option value="droit_immobilier" selected>PFTI</option>
                                                <option value="droit_immobilier">PNT</option>
                                                <option value="droit_immobilier">OGA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="container_champs_paiement" id="type_etudiant">
                                        <label for="tel" class="label_paiement">Classe</label>
                                        <div class="sous_container_paiement custom-select">
                                            <select name="doimaine_de_competence" class="champs_text_paiement">
                                                <option value="droit_immobilier" selected>GL</option>
                                                <option value="droit_immobilier">ARS</option>
                                                <option value="droit_immobilier">TIG</option>
                                            </select>
                                        </div>
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
                        <img data-src="{{asset('sources/images/2b7a5c3c051f471f1674da3f7d222a5b78390ea1.png')}}" class="lazy">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </footer>
</body>
@push('js')
{{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script>
        $(".type_utilisateur").on("change", function(){
            if($(this).children("option:selected").val() == "etudiant") {
                $("#bloc_etudiant_uniquement").fadeIn();
            }else{
                $("#bloc_etudiant_uniquement").fadeOut();
            }
        })
    </script>
@endpush
@endsection