@extends('html.header')

@push('css')
    <link rel="stylesheet" href="{{asset('css/liste_plateformes.css')}}">
@endpush

@section('title')
    ebobisse epoune parfait
@endsection

@section('content')
 
            <div class="container_corps_dashbord">
                <div class="entete_corps_dashbord">
                    <h1 class="titre_dashbord">Gestion des plateformes</h1>
                    <div class="bloc_boutons">
                        <a href="{{ route('ajouter_plateforme') }}" id="envoyer_document" class="button_goldwin button_type_1 anul_lien">Ajouter une plateforme</a>
                    </div>
                </div>
                <div class="bloc_contenu_dashbord">
                    <div class="bloc_sous_menu_dashbord">
                        <div class="tab-content" id="nav-tabContent">
                            <div id="toutes_procedures" class="tab-pane fade show active">
                                <form method="" action="">
                                    <div class="limiter">
                                        <div class="container-table100">
                                            <div class="wrap-table100">
                                                <div class="table100 ver1 m-b-110">
                                                    <div class="table100-head">
                                                        <table>
                                                            <thead>
                                                                <tr class="row100 head">
                                                                    <th class="cell100 column1">-</th>
                                                                    <th class="cell100 column2">Id</th>
                                                                    <th class="cell100 column3">Denomination</th>
                                                                    <th class="cell100 column4">Classes</th>
                                                                    <th class="cell100 column5">-</th>
                                                                    <th class="cell100 column6">-</th>
                                                                    <th class="cell100 column7">-</th>
                                                                    <th class="cell100 column8">-</th>
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
                                                                    <td class="cell100 column3">PFTI</td>
                                                                    <td class="cell100 column4">8</td>
                                                                    <td class="cell100 column5">
                                                                        <div class="container_confirmation_check bloc_question_checkbox">
                                                                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                                                                            <label for="confirmation_check1" aria-describedby="label"><label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="cell100 column6">
                                                                        <button type="button" id="suivant" class="button_goldwin button_type_1 anul_lien voir_bouton" title="voir" data-toggle="modal" data-target="#staticBackdrop">
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td class="cell100 column7">
                                                                        <a href="#" type="button" id="suivant" class="button_goldwin button_type_1 anul_lien modifier_bouton" title="modifier">
                                                                            <i class="fas fa-pencil-alt"></i>
                                                                        </a>
                                                                    </td>
                                                                    <td class="cell100 column8">
                                                                        <button type="button" id="suivant" class="button_goldwin button_type_1 anul_lien supprimer_bouton" title="supprimer">
                                                                            <i class="fas fa-trash-alt"></i>
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
                                </form>
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
                </div>
                <div class="container_classes">
                    <h2 class="titre_dashbord" id="titre_classe">Classes :</h2>
                    <div class="container_pc">
                        <span>PFTI: </span>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">GL<label>
                        </div>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">ART<label>
                        </div>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">GI<label>
                        </div>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">GI<label>
                        </div>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">GI<label>
                        </div>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">GI<label>
                        </div>
                        <div class="container_boutons_classes">
                            <button type="button" id="suivant" class="button_goldwin button_type_1 anul_lien voir_bouton" title="voir" data-toggle="modal" data-target="#staticBackdrop">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                            <a href="#" type="button" id="suivant" class="button_goldwin button_type_1 anul_lien modifier_bouton" title="modifier">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <button type="button" id="suivant" class="button_goldwin button_type_1 anul_lien supprimer_bouton" title="supprimer">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <div class="bloc_new_class">
                                <div class="container_champs_paiement">
                                    <input type="text" class="champs_text_paiement" name="nom" placeholder="GL">
                                </div>
                                <button type="submit" id="creer_compte" class="button_goldwin button_type_1 anul_lien">Nouvelle classe</button>
                            </div>
                        </div>
                    </div>
                    <div class="container_pc">
                        <span>PFTI: </span>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">GL<label>
                        </div>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">ART<label>
                        </div>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">GI<label>
                        </div>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">GI<label>
                        </div>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">GI<label>
                        </div>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">GI<label>
                        </div>
                        <div class="container_boutons_classes">
                            <button type="button" id="suivant" class="button_goldwin button_type_1 anul_lien voir_bouton" title="voir" data-toggle="modal" data-target="#staticBackdrop">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                            <a href="#" type="button" id="suivant" class="button_goldwin button_type_1 anul_lien modifier_bouton" title="modifier">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <button type="button" id="suivant" class="button_goldwin button_type_1 anul_lien supprimer_bouton" title="supprimer">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <div class="bloc_new_class">
                                <div class="container_champs_paiement">
                                    <input type="text" class="champs_text_paiement" name="nom" placeholder="GL">
                                </div>
                                <button type="submit" id="creer_compte" class="button_goldwin button_type_1 anul_lien">Nouvelle classe</button>
                            </div>
                        </div>
                    </div>
                    <div class="container_pc">
                        <span>PFTI: </span>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">GL<label>
                        </div>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">ART<label>
                        </div>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">GI<label>
                        </div>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">GI<label>
                        </div>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">GI<label>
                        </div>
                        <div class="container_confirmation_check bloc_question_checkbox">
                            <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                            <label for="confirmation_check1" aria-describedby="label">GI<label>
                        </div>
                        <div class="container_boutons_classes">
                            <button type="button" id="suivant" class="button_goldwin button_type_1 anul_lien voir_bouton" title="voir" data-toggle="modal" data-target="#staticBackdrop">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                            <a href="#" type="button" id="suivant" class="button_goldwin button_type_1 anul_lien modifier_bouton" title="modifier">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <button type="button" id="suivant" class="button_goldwin button_type_1 anul_lien supprimer_bouton" title="supprimer">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <div class="bloc_new_class">
                                <div class="container_champs_paiement">
                                    <input type="text" class="champs_text_paiement" name="nom" placeholder="GL">
                                </div>
                                <button type="submit" id="creer_compte" class="button_goldwin button_type_1 anul_lien">Nouvelle classe</button>
                            </div>
                        </div>
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
                    <h5 class="modal-title">Plateforme des Technologies avancées</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body" id="modal_plus_user">
                    <div class="bloc_infos_user_modal">
                        <div class="bloc_information_user">
                            <span class="info_user">Id:</span>
                            <span class="Value_user">0001</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Denomination:</span>
                            <span class="Value_user">PTA</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Nombre de classes:</span>
                            <span class="Value_user">8</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Nombre d'étudiants:</span>
                            <span class="Value_user">366</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Administrateur principal:</span>
                            <span class="Value_user">parfait ebobisse</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Créer le:</span>
                            <span class="Value_user">22/08/2020</span>
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
@endsection