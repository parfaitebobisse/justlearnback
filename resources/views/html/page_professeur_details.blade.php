@extends('html.header')

@push('css')
    <link rel="stylesheet" href="{{asset('css/page_professeur.css')}}">
@endpush

@section('title')
    {{ $cour->classe->denomination }} - {{ $cour->classe->niveau }}
@endsection

@section('content')
            <div class="container_corps_dashbord">
                <div class="entete_corps_dashbord">
                    <h1 class="titre_dashbord">{{ $cour->classe->denomination }} - {{ $cour->classe->niveau }}</h1>
                    <span class="status_corps">En cours...</span>
                    <div class="bloc_boutons">
                        <button type="submit" id="envoyer_document" class="button_goldwin button_type_1 anul_lien"><i class="fas fa-chalkboard-teacher"></i>Demarrer la sceance</button>
                        <button type="submit" id="envoyer_document" class="button_goldwin button_type_1 anul_lien supprimer_bouton" style="display: none;"><i class="fas fa-chalkboard-teacher"></i>Arrêter la sceance</button>
                    </div>
                </div>
                <div class="bloc_contenu_dashbord">
                    <div class="bloc_sous_menu_dashbord">
                        <div class="container_panes">
                            <ul class="liste_type_2 nav nav-tabs" role="tablist">
                                <li class="active">
                                    <a class="anul_lien nav-tabs active" id="nav-home-tab" data-toggle="tab" href="#toutes_procedures" role="tab" aria-controls="#toutes_procedures" aria-selected="true">Forum ({{ $forum->messages()->orderBy('created_at','ASC')->count()  }})</a>
                                </li>
                                <li>
                                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#procedure1" role="tab" aria-controls="#procedure1" aria-selected="false">Diffusion</a>
                                </li>
                                <li>
                                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#procedure2" aria-controls="#procedure2" aria-selected="false">Evaluations</a>
                                </li>
                                <li>
                                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#correction" aria-controls="#procedure2" aria-selected="false">Corrections</a>
                                </li>
                                <li>
                                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#procedure4" aria-controls="#procedure2" aria-selected="false">Playlist</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="nav-tabContent">


                                <div id="toutes_procedures" class="tab-pane fade show active">
                                    <div class="container_forum" id="container_forum">
                                        <div class="container_discussion" id="discussion_forum">

                                            @foreach ($forum->messages()->orderBy('created_at','ASC')->get() as $message)

                                                @if($message->emetteur->id != auth()->user()->id)
                                                <div class="bloc_message" style="justify-content: flex-start;">
                                                    <div class="message">
                                                        <h3 class="nom_emeteur">{{ $message->emetteur->nom }} {{ $message->emetteur->prenom }}</h3>
                                                        <p class="messsage">
                                                            {{ $message->contenu }} <br>
                                                            @if($message->fichier)
                                                                Fichier envoyé : <a href="{{ asset('uploads/'.$message->fichier) }}" target="_blank">{{ $message->fichier }}</a></p>
                                                            @endif
                                                        </p>
                                                        <span class="date_envoie">{{ $message->created_at->diffForHumans() }}</span>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="bloc_message" style="justify-content: flex-end;">
                                                    <div class="message message_envoye">
                                                        <h3 class="nom_emeteur">Moi</h3>
                                                        <p class="messsage">
                                                            {{ $message->contenu }} <br>
                                                            @if($message->fichier)
                                                                Fichier envoyé : <a href="{{ asset('uploads/'.$message->fichier) }}" target="_blank">{{ $message->fichier }}</a></p>
                                                            @endif
                                                        </p>
                                                        <span class="date_envoie">{{ $message->created_at->diffForHumans() }}</span>
                                                    </div>
                                                </div>

                                                @endif
                                            @endforeach

                                        </div>
                                        <div class="bloc_recherche">
                                            <form class="sous_bloc_recherche" id="formulaire_envoie_forum" method="post" action="{{ route('messages.store',$forum) }}" enctype="multipart/form-data">
                                                @csrf
                                                <input type="text" class="form-control" id="champs_message" name="content" placeholder="Ecrire un message" aria-label="Recherche" aria-describedby="basic-addon2">
                                                <button type="button" class="bouton_recherche_1 bouton_attach">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-paperclip"></i>
                                                        <input type="file" name="fichier" value="" id="attach_file">
                                                    </span>
                                                </button>
                                                <button type="submit" class="bouton_recherche_1 bouton_envoyer">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-paper-plane"></i>
                                                    </span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="procedure1" class="tab-pane fade">
                                    <div class="container_forum">
                                        <div class="container_discussion" id="discussion_diffusion">
                                            @foreach ($diffusion->messages()->orderBy('created_at','ASC')->get() as $message)

                                                @if($message->emetteur->id != auth()->user()->id)
                                                @else
                                                <div class="bloc_message" style="justify-content: flex-end;">
                                                    <div class="message message_envoye">
                                                        <h3 class="nom_emeteur">Moi</h3>
                                                        <p class="messsage">
                                                            {{ $message->contenu }} <br>
                                                            @if($message->fichier)
                                                                Fichier envoyé : <a href="{{ asset('uploads/'.$message->fichier) }}" target="_blank">{{ $message->fichier }}</a></p>
                                                            @endif
                                                        </p>
                                                        <span class="date_envoie">{{ $message->created_at->diffForHumans() }}</span>
                                                    </div>
                                                </div>

                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="bloc_recherche">
                                            <form class="sous_bloc_recherche" id="formulaire_envoie_diffusion" method="post" action="{{ route('messages.store',$diffusion) }}" enctype="multipart/form-data">
                                                @csrf
                                                <input type="text" class="form-control" name="content" id="champs_message" placeholder="Ecrire un message" aria-label="Recherche" aria-describedby="basic-addon2">
                                                <button type="button" class="bouton_recherche_1 bouton_attach">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-paperclip"></i>
                                                        <input type="file" name="fichier" value="" id="attach_file">
                                                    </span>
                                                </button>
                                                <button type="submit" class="bouton_recherche_1 bouton_envoyer">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-paper-plane"></i>
                                                    </span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div id="procedure2" class="tab-pane fade">
                                    <div class="container_evaluations">
                                        <div class="sujet_evaluation">
                                            <div class="partie_gauche">
                                                <div class="container_confirmation_check container_radio">
                                                    <input type="radio" id="radio_homme" name="sexe" value="homme">
                                                    <label for="radio_homme"></label>
                                                </div>
                                                <div class="clipboard">
                                                    <i class="fas fa-clipboard"></i>
                                                </div>
                                                <h3 class="nom_sujet">CC N° 2</h3>
                                            </div>
                                            <div class="partie_droite">
                                                <form method="" action="">
                                                    <div class="container_heure">
                                                        <input type="number" class="form-control" placeholder="1" name="heure">
                                                        <span>H</span>
                                                    </div>
                                                    <div class="container_minutes">
                                                        <input type="number" class="form-control" placeholder="00" name="minutes">
                                                        <span>Min</span>
                                                    </div>
                                                    <div class="container_actions_sujet">
                                                        <button type="button" id="soumettre" class="button_goldwin button_type_1 anul_lien voir_bouton soumettre_button">Soumettre</button>
                                                        <a href="#" class="telecharge"><i class="fas fa-download"></i></a>
                                                        <a href="#" class="telecharge"><i class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="sujet_evaluation">
                                            <div class="partie_gauche">
                                                <div class="container_confirmation_check container_radio">
                                                    <input type="radio" id="radio_homme" name="sexe" value="homme">
                                                    <label for="radio_homme"></label>
                                                </div>
                                                <div class="clipboard">
                                                    <i class="fas fa-clipboard"></i>
                                                </div>
                                                <h3 class="nom_sujet">CC N° 2</h3>
                                            </div>
                                            <div class="partie_droite">
                                                <form method="" action="">
                                                    <div class="container_heure">
                                                        <input type="number" class="form-control" placeholder="1" name="heure">
                                                        <span>H</span>
                                                    </div>
                                                    <div class="container_minutes">
                                                        <input type="number" class="form-control" placeholder="00" name="minutes">
                                                        <span>Min</span>
                                                    </div>
                                                    <div class="container_actions_sujet">
                                                        <button type="button" id="soumettre" class="button_goldwin button_type_1 anul_lien voir_bouton soumettre_button">Soumettre</button>
                                                        <a href="#" class="telecharge"><i class="fas fa-download"></i></a>
                                                        <a href="#" class="telecharge"><i class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="sujet_evaluation">
                                            <div class="partie_gauche">
                                                <div class="container_confirmation_check container_radio">
                                                    <input type="radio" id="radio_homme" name="sexe" value="homme">
                                                    <label for="radio_homme"></label>
                                                </div>
                                                <div class="clipboard">
                                                    <i class="fas fa-clipboard"></i>
                                                </div>
                                                <h3 class="nom_sujet">CC N° 2</h3>
                                            </div>
                                            <div class="partie_droite">
                                                <form method="" action="">
                                                    <div class="container_heure">
                                                        <input type="number" class="form-control" placeholder="1" name="heure">
                                                        <span>H</span>
                                                    </div>
                                                    <div class="container_minutes">
                                                        <input type="number" class="form-control" placeholder="00" name="minutes">
                                                        <span>Min</span>
                                                    </div>
                                                    <div class="container_actions_sujet">
                                                        <button type="button" id="soumettre" class="button_goldwin button_type_1 anul_lien voir_bouton soumettre_button">Soumettre</button>
                                                        <a href="#" class="telecharge"><i class="fas fa-download"></i></a>
                                                        <a href="#" class="telecharge"><i class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="sujet_evaluation">
                                            <div class="partie_gauche">
                                                <div class="container_confirmation_check container_radio">
                                                    <input type="radio" id="radio_homme" name="sexe" value="homme">
                                                    <label for="radio_homme"></label>
                                                </div>
                                                <div class="clipboard">
                                                    <i class="fas fa-clipboard"></i>
                                                </div>
                                                <h3 class="nom_sujet">CC N° 2</h3>
                                            </div>
                                            <div class="partie_droite">
                                                <form method="" action="">
                                                    <div class="container_heure">
                                                        <input type="number" class="form-control" placeholder="1" name="heure">
                                                        <span>H</span>
                                                    </div>
                                                    <div class="container_minutes">
                                                        <input type="number" class="form-control" placeholder="00" name="minutes">
                                                        <span>Min</span>
                                                    </div>
                                                    <div class="container_actions_sujet">
                                                        <button type="button" id="soumettre" class="button_goldwin button_type_1 anul_lien voir_bouton soumettre_button">Soumettre</button>
                                                        <a href="#" class="telecharge"><i class="fas fa-download"></i></a>
                                                        <a href="#" class="telecharge"><i class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="bloc_boutons_bottom">
                                            <button type="submit" id="envoyer_document" class="button_goldwin button_type_1 anul_lien" disabled>Ajouter une evaluation</button>
                                        </div>
                                    </div>
                                    <div class="ajout_evalutation">
                                        <div class="titre_sujet">
                                            <input type="text" class="form-control" id="champs_message" placeholder="Saisir l'intitulé de l'epreuve" aria-label="Recherche" aria-describedby="basic-addon2">
                                        </div>
                                        <div class="question">
                                            <div class="libelle_question">
                                                <span class="num_question">1 .</span>
                                                <input type="text" class="form-control" id="libelle_question" placeholder="Saisir une question" aria-label="Recherche" aria-describedby="basic-addon2">
                                            </div>
                                            <div class="contaier_tout_choix">
                                                <div class="container_choix">
                                                    <div class="choix" id="choix1">
                                                        <div class="container_confirmation_check container_radio">
                                                            <input type="radio" id="radio_homme" name="sexe" value="homme">
                                                            <label for="radio_homme"></label>
                                                        </div>
                                                        <input type="text" class="form-control" id="libelle_choix" placeholder="saisir une réponse" aria-label="Recherche" aria-describedby="basic-addon2">
                                                    </div>
                                                </div>
                                                <div class="container_new_choix">
                                                    <div class="bloc_boutons">
                                                        <button type="button" id="add_question" class="button_goldwin button_type_1 anul_lien"><i class="fas fa-plus"></i></button>
                                                        <button type="button" id="add_question" class="button_goldwin button_type_1 anul_lien"><i class="fas fa-times"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container_new">
                                            <div class="bloc_boutons">
                                                <button type="button" id="add_question" class="button_goldwin button_type_1 anul_lien">nouvelle question</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div id="correction" class="tab-pane fade">
                                    <div class="bloc_filtre">
                                        <div class="bloc_recherche">
                                            <form class="sous_bloc_recherche bloc_arrondi_blanc" id="form_search" method="" action="">
                                                <input type="text" class="form-control" placeholder="nom de l'etudiant" aria-label="Recherche" aria-describedby="basic-addon2">
                                                <button type="submit" class="bouton_recherche_1">
                                                    <span class="input-group-text">
                                                        <i class="goldwin-green" aria-hidden="true" data-fa-i2svg=""><svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg></i>
                                                    </span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="container_evaluations">
                                        <div class="sujet_evaluation">
                                            <div class="partie_gauche">
                                                <div class="container_confirmation_check container_radio">
                                                    <input type="radio" id="radio_homme" name="sexe" value="homme">
                                                    <label for="radio_homme"></label>
                                                </div>
                                                <div class="clipboard">
                                                    <i class="fas fa-clipboard"></i>
                                                </div>
                                                <h3 class="nom_sujet nom_etudiant">Ebobisse Epoune parfait</h3>
                                            </div>
                                            <div class="partie_droite">
                                                <form method="" action="">
                                                    <div class="container_heure">
                                                        16
                                                        <span class="separateur_note">/</span>
                                                    </div>
                                                    <div class="container_minutes">
                                                        20
                                                    </div>
                                                    <div class="container_actions_sujet">
                                                        <button type="button" id="soumettre" class="button_goldwin button_type_1 anul_lien voir_bouton soumettre_button">Modifier</button>
                                                        <a href="#" class="telecharge"><i class="fas fa-download"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="sujet_evaluation">
                                            <div class="partie_gauche">
                                                <div class="container_confirmation_check container_radio">
                                                    <input type="radio" id="radio_homme" name="sexe" value="homme">
                                                    <label for="radio_homme"></label>
                                                </div>
                                                <div class="clipboard">
                                                    <i class="fas fa-clipboard"></i>
                                                </div>
                                                <h3 class="nom_sujet nom_etudiant">Hannah Hannah Esther</h3>
                                            </div>
                                            <div class="partie_droite">
                                                <form method="" action="">
                                                    <div class="container_heure">
                                                        18
                                                        <span class="separateur_note">/</span>
                                                    </div>
                                                    <div class="container_minutes">
                                                        20
                                                    </div>
                                                    <div class="container_actions_sujet">
                                                        <button type="button" id="soumettre" class="button_goldwin button_type_1 anul_lien voir_bouton soumettre_button">Modifier</button>
                                                        <a href="#" class="telecharge"><i class="fas fa-download"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="sujet_evaluation">
                                            <div class="partie_gauche">
                                                <div class="container_confirmation_check container_radio">
                                                    <input type="radio" id="radio_homme" name="sexe" value="homme">
                                                    <label for="radio_homme"></label>
                                                </div>
                                                <div class="clipboard">
                                                    <i class="fas fa-clipboard"></i>
                                                </div>
                                                <h3 class="nom_sujet nom_etudiant">Ebobisse Epoune parfait</h3>
                                            </div>
                                            <div class="partie_droite">
                                                <form method="" action="">
                                                    <div class="container_heure" style="display: none;">
                                                        18
                                                        <span class="separateur_note">/</span>
                                                    </div>
                                                    <div class="container_minutes" style="display: none;">
                                                        20
                                                    </div>
                                                    <div class="container_actions_sujet">
                                                        <button type="button" id="corriger" class="button_goldwin button_type_1 anul_lien voir_bouton soumettre_button">Corriger</button>
                                                        <a href="#" class="telecharge"><i class="fas fa-download"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="sujet_evaluation">
                                            <div class="partie_gauche">
                                                <div class="container_confirmation_check container_radio">
                                                    <input type="radio" id="radio_homme" name="sexe" value="homme">
                                                    <label for="radio_homme"></label>
                                                </div>
                                                <div class="clipboard">
                                                    <i class="fas fa-clipboard"></i>
                                                </div>
                                                <h3 class="nom_sujet nom_etudiant">Ebobisse Epoune parfait</h3>
                                            </div>
                                            <div class="partie_droite">
                                                <form method="" action="">
                                                    <div class="container_heure" style="display: none;">
                                                        18
                                                        <span class="separateur_note">/</span>
                                                    </div>
                                                    <div class="container_minutes" style="display: none;">
                                                        20
                                                    </div>
                                                    <div class="container_actions_sujet">
                                                        <button type="button" id="corriger" class="button_goldwin button_type_1 anul_lien voir_bouton soumettre_button">Corriger</button>
                                                        <a href="#" class="telecharge"><i class="fas fa-download"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="container_navigation_1" id="navigation_pages_1">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">«</span>
                                                    </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                    <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">»</span>
                                                    </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="bloc_boutons_bottom">
                                        <button type="submit" id="envoyer_document" class="button_goldwin button_type_1 anul_lien">Correction par présence</button>
                                        <button type="submit" id="envoyer_document" class="button_goldwin button_type_1 anul_lien" >Telecharger toutes les copies</button>
                                    </div>
                                </div>
                                <div id="procedure4" class="tab-pane fade">
                                    <div class="entete_playlist">
                                        <form method="" action="">
                                            <div class="sous_bloc_form contain_filterplaylist">
                                                <div class="container_champs_paiement champ_court">
                                                    <div class="sous_container_paiement">
                                                        <input type="date" class="champs_text_paiement" name="date_naissance">
                                                    </div>
                                                </div>
                                                <span class="trait">-</span>
                                                <div class="container_champs_paiement champ_court">
                                                    <div class="sous_container_paiement">
                                                        <input type="date" class="champs_text_paiement" name="date_naissance">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <h3>Liste:</h3>
                                    </div>
                                    <div id="sous_bloc_courant_4">
                                        <div class="article_media petit_container_video">
                                            <div class="bloc_video_flou">
                                                <video class="video_media" poster="{{asset('sources/images/8fca33e29f109b5d97943cd46e444b851058ec34.png')}}">
                                                    <source src="{{asset('sources/Videos/Video2.mp4')}}" type="video/mp4">
                                                </video>
                                            </div>
                                            <h2 class="paragraphe_type_4">Machin learning</h2>
                                            <div class="description_video">
                                                <span>17/08/2020</span>
                                                <a href="#">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="article_media petit_container_video">
                                            <div class="bloc_video_flou">
                                                <video class="video_media" poster="{{asset('sources/images/8fca33e29f109b5d97943cd46e444b851058ec34.png')}}">
                                                    <source src="{{asset('sources/Videos/Video2.mp4')}}" type="video/mp4">
                                                </video>
                                            </div>
                                            <h2 class="paragraphe_type_4">Machin learning</h2>
                                            <div class="description_video">
                                                <span>17/08/2020</span>
                                                <a href="#">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="article_media petit_container_video">
                                            <div class="bloc_video_flou">
                                                <video class="video_media" poster="{{asset('sources/images/8fca33e29f109b5d97943cd46e444b851058ec34.png')}}">
                                                    <source src="{{asset('sources/Videos/Video2.mp4')}}" type="video/mp4">
                                                </video>
                                            </div>
                                            <h2 class="paragraphe_type_4">Machin learning</h2>
                                            <div class="description_video">
                                                <span>17/08/2020</span>
                                                <a href="#">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="article_media petit_container_video">
                                            <div class="bloc_video_flou">
                                                <video class="video_media" poster="{{asset('sources/images/8fca33e29f109b5d97943cd46e444b851058ec34.png')}}">
                                                    <source src="{{asset('sources/Videos/Video2.mp4')}}" type="video/mp4">
                                                </video>
                                            </div>
                                            <h2 class="paragraphe_type_4">Machin learning</h2>
                                            <div class="description_video">
                                                <span>17/08/2020</span>
                                                <a href="#">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="article_media petit_container_video">
                                            <div class="bloc_video_flou">
                                                <video class="video_media" poster="{{asset('sources/images/8fca33e29f109b5d97943cd46e444b851058ec34.png')}}">
                                                    <source src="{{asset('sources/Videos/Video2.mp4')}}" type="video/mp4">
                                                </video>
                                            </div>
                                            <h2 class="paragraphe_type_4">Machin learning</h2>
                                            <div class="description_video">
                                                <span>17/08/2020</span>
                                                <a href="#">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container_aside">
                            <h2><i class="fas fa-users"></i> {{ count($users_online) + 1 }} en ligne</h2>
                            <div class="container_users">
                                <div class="container_search_user">
                                    <input type="text" class="form-control" id="search_user" placeholder="Chercher un etudiant">
                                </div>
                                <div class="bloc_container_users">
                                    @foreach ($users_online as $user)
                                    <div class="sous_contain_user">
                                        <i class="fas fa-user"></i>
                                        <span class="nom_user">{{ $user->nom }} {{ $user->prenom }}</span>
                                        <div class="container_actions">
                                            <i class="fas fa-microphone" class="micro"></i>
                                            <i class="fas fa-hand-point-up"></i>
                                            <i class="fas fa-power-off"></i>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="container_streaming">
                                <div class="streaming" style="background-image: url('{{asset('sources/images/online-video-chat-by-black-man-in-office_rcshhlwug_thumbnail-full14.png')}}'); background-size: cover; background-position: center;">

                                </div>
                                <div class="boutons_streaming">
                                    <span>20min02s</span>
                                    <button type="button" id="envoyer_document" class="button_goldwin button_type_1 anul_lien"><i class="fas fa-video"></i>Demarrer la video</button>
                                    <button type="button" id="envoyer_document" class="button_goldwin button_type_1 anul_lien supprimer_bouton" style="display: none;"><i class="fas fa-video-slash"></i>Arrêter la video</button>
                                </div>
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
    <div class="modal fade" id="modal_video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <video id="player" controls  playsinline data-poster="{{asset('sources/images/test.png')}}">
                    <source src="{{asset('sources/Videos/Video.mp4')}}" type="video/mp4">
                </video >
            </div>
          </div>
        </div>
    </div>
    <div class="modal fade" id="creer_cours_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{ route('cours.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container_champs_paiement denomination_plateforme">
                            <label for="denomination" class="label_paiement">Nom du cours</label>
                            <div class="sous_container_paiement">
                                <input type="text" class="champs_text_paiement" name="denomination" value="{{ old('denomination') }}" placeholder="Machin learning" required>
                            </div>
                            @error('denomination')
                            <span class="invalid-feedback d-block">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="container_champs_paiement" id="type_etudiant">
                            <label for="classe" class="label_paiement">Classe</label>
                            <div class="sous_container_paiement custom-select">
                                <select name="classe" class="champs_text_paiement" required>
                                    <option disabled selected>Faites votre choix</option>
                                    @foreach ($classes as $classe)
                                    <option value="{{ $classe->id }}" @if(old('classe') == $classe->id) selected @endif>{{ $classe->denomination }} - {{ $classe->niveau }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('classe')
                            <span class="invalid-feedback d-block">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="sous_bloc_form">
                            <div class="container_champs_paiement" id="champs_photo">
                                <div class="bloc_depot">
                                    <img data-src="{{asset('sources/images/2b7a5c3c051f471f1674da3f7d222a5b78390ea1.png')}}" alt="image_document" class="image_depot lazy">
                                    <input type="file" class="image_upload" name="photo"/>
                                </div>
                            </div>
                            @error('photo')
                            <span class="invalid-feedback d-block">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="bloc_boutons">
                            <button type="submit" id="envoyer_document" class="button_goldwin button_type_1 anul_lien">Creer</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
            const player = new Plyr('#player');

            // Expose
    window.player = player;

    $("#modal_video .close").click(function(){
        player.stop();
    });
    });
    </script>
    <script>
        $(".video_media").click(
            function open_video()
            {

                $('#modal_video').modal('show');
            }
        );
        $(".voir_copie").click(
            function open_video()
            {

                $('#copie_etudiant').modal('show');
            }
        );
        $("#creer_un_cours").click(
            function open_video()
            {
                $('#creer_cours_modal').modal('show');
            }
        );
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

            $(document).on('submit',"#formulaire_envoie_forum, #formulaire_envoie_diffusion",function(e){
                e.preventDefault();
                data = new FormData($(this)[0]);
                $(this)[0].reset();
                $.ajax({
                    url:$(this).attr('action'),
                    method:$(this).attr('method'),
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(response){
                    },
                    error: function(xhr){
                    }
                });
            });

            setInterval(getForum, 4000);
            setInterval(getDiffusion, 4000);

            function getForum(){
                $.ajax({
                    url:'{{ route('messages.get.xhr',$forum) }}',
                    method:'get',
                    success: function(response){
                        $('#discussion_forum').html(response.messages);
                    }
                })
            }

            function getDiffusion(){
                $.ajax({
                    url:'{{ route('messages.get.xhr',$diffusion) }}',
                    method:'get',
                    success: function(response){
                        $('#discussion_diffusion').html(response.messages);
                    }
                })
            }
        });
    </script>
@endpush

@endsection
