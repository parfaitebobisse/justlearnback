@extends('html.header')

@push('css')
    <link rel="stylesheet" href="{{asset('css/page_etudiant.css')}}">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.4.6/plyr.css"/>
@endpush

@section('title')
    Liste des cours reçues
@endsection

@section('content')
            <div class="container_corps_dashbord">
                <div class="entete_corps_dashbord">
                    <h1 class="titre_dashbord">{{ $cour->classe->denomination }} - {{ $cour->classe->niveau }}</h1>
                </div>
                <div class="bloc_contenu_dashbord">
                    <div class="bloc_sous_menu_dashbord">
                        <div class="container_panes">
                            <ul class="liste_type_2 nav nav-tabs" role="tablist">
                                <li class="active">
                                    <a class="anul_lien nav-tabs active" id="nav-home-tab" data-toggle="tab" href="#toutes_procedures" role="tab" aria-controls="#toutes_procedures" aria-selected="true">Forum (20)</a>
                                </li>
                                <li>
                                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#procedure1" role="tab" aria-controls="#procedure1" aria-selected="false">Diffusion</a>
                                </li>
                                <li>
                                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#procedure2" aria-controls="#procedure2" aria-selected="false">Evaluations</a>
                                </li>
                                <li>
                                    <a class="anul_lien nav-tabs" data-toggle="tab" href="#correction" aria-controls="#procedure2" aria-selected="false">Notes</a>
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
                                            <form class="sous_bloc_recherche" id="formulaire_envoie_diffusion" method="post" action="{{ route('messages.store',$diffusion) }}" enctype="multipart/form-data">
                                                @csrf
                                                <input type="text" @if(auth()->user()->type == "etudiant") disabled @endif  class="form-control" name="content" id="champs_message" placeholder="{{ auth()->user()->type != "etudiant" ? "Ecrire un message" : "Seul le professeur peut émettre" }}" aria-label="Recherche" aria-describedby="basic-addon2">
                                                @if (auth()->user()->type != "etudiant")
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
                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div id="procedure2" class="tab-pane fade">
                                    <div class="sujet_etudiant">
                                        @foreach ($evaluations as $evaluation)
                                            @if ($evaluation->id == $cour->id)
                                                <form method="" action="" id="formulaire_evaluation">
                                                    <div class="corps_sujet_etudiant">
                                                        <div class="titre_sujet_etudiant">
                                                            <span class="time_epreuve">-{{ $evaluation->heure }} h {{ $evaluation->minutes }}min</span>
                                                            <h2>{{ $evaluation->intitule }} - {{ $cour->classe->denomination }} {{ $cour->classe->niveau }}</h2>
                                                        </div>
                                                        <div class="corps_questions">
                                                            @foreach ($eva_metas as $key => $eva_meta)
                                                                @if ($eva_meta->evaluation == $evaluation->id)
                                                                    <div class="question_etudiant">
                                                                        <span>{{ $key+1 }}. </span><span class="libelle_question_etudiant">{{ $eva_meta->questions }}</span>
                                                                        <div class="bloc_reponse_etudiant">
                                                                            <div class="reponse_etudiant">
                                                                                <div class="container_champs_paiement container_radios container_radios_type_paiement">
                                                                                    <div class="container_confirmation_check container_radio">
                                                                                        <input type="radio" name="rep{{ $key+1 }}[]" id="radio_homme{{ $key+1 }}0" value="{{ json_decode($eva_meta->reponses)[0] }}">
                                                                                        <label for="radio_homme{{ $key+1 }}0">{{ json_decode($eva_meta->reponses)[0] }}</label>
                                                                                    </div>
                                                                                    <div class="container_confirmation_check container_radio">
                                                                                        <input type="radio" name="rep{{ $key+1 }}[]" value="{{ json_decode($eva_meta->reponses)[1] }}"id="radio_homme{{ $key+1 }}1">
                                                                                        <label for="radio_homme{{ $key+1 }}1">{{ json_decode($eva_meta->reponses)[1] }}</label>
                                                                                    </div>
                                                                                    <div class="container_confirmation_check container_radio">
                                                                                        <input type="radio" name="rep{{ $key+1 }}[]" value="{{ json_decode($eva_meta->reponses)[2] }}"id="radio_homme{{ $key+1 }}2">
                                                                                        <label for="radio_homme{{ $key+1 }}2">{{ json_decode($eva_meta->reponses)[2] }}</label>
                                                                                    </div>
                                                                                    <div class="container_confirmation_check container_radio">
                                                                                        <input type="radio" name="rep{{ $key+1 }}[]" value="{{ json_decode($eva_meta->reponses)[3] }}"id="radio_homme{{ $key+1 }}3">
                                                                                        <label for="radio_homme{{ $key+1 }}3">{{ json_decode($eva_meta->reponses)[3] }}</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="bottom_evaluation">
                                                        <div class="bloc_boutons">
                                                            <button type="reset" id="envoyer_document" class="button_goldwin button_type_1 anul_lien supprimer_bouton">Tout effacer</button>
                                                            <button type="submit" id="envoyer_document" class="button_goldwin button_type_1 anul_lien">Rendre la copie</button>
                                                            <button type="submit" id="envoyer_document" class="button_goldwin button_type_1 anul_lien supprimer_bouton" disabled>Annuler</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>


                                <div id="correction" class="tab-pane fade">
                                    <div class="bloc_filtre">
                                        <div class="bloc_recherche">
                                            <div class="container_champs_paiement" id="type_etudiant">
                                                <div class="sous_container_paiement custom-select">
                                                    <select name="doimaine_de_competence" class="champs_text_paiement">
                                                        <option value="droit_immobilier" selected>CC N° 1</option>
                                                        <option value="droit_immobilier" >CC N° 2</option>
                                                        <option value="droit_immobilier">CC N° 3</option>
                                                        <option value="droit_immobilier">Semestre 1 </option>
                                                    </select>
                                                </div>
                                            </div>
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
                                                <h3 class="nom_sujet nom_etudiant">CC N° 1</h3>
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
                                                        <button type="button" class="button_goldwin button_type_1 anul_lien voir_bouton soumettre_button voir_copie">Voir</button>
                                                        <a href="#" class="telecharge"><i class="fas fa-download"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bloc_boutons_bottom">
                                        <button type="submit" id="envoyer_document" class="button_goldwin button_type_1 anul_lien" >Telecharger toutes ses copies</button>
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
                            <h2><i class="fas fa-users"></i> {{ count($users_online) }} en ligne</h2>
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
    <div class="modal fade" id="copie_etudiant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="sujet_etudiant">
                        <form method="" action="" id="formulaire_evaluation">
                            <div class="corps_sujet_etudiant">
                                <div class="titre_sujet_etudiant">
                                    <h2>Contrôle Continu N° 1 RSE</h2>
                                </div>
                                <div class="corps_questions">
                                    <div class="question_etudiant">
                                        <span>1. </span><span class="libelle_question_etudiant">Comment trouvez vous ces maquettes ?</span>
                                        <div class="bloc_reponse_etudiant">
                                            <div class="reponse_etudiant">
                                                <div class="container_champs_paiement container_radios container_radios_type_paiement">
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_homme" name="sexe" value="homme" checked>
                                                        <label for="radio_homme">Correctes</label>
                                                    </div>
                                                    <div class="container_confirmation_check container_radio fausse_reponse">
                                                        <input type="radio" id="radio_femme" name="sexe" value="femme">
                                                        <label for="radio_femme">Magnifiques</label>
                                                    </div>
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_femmes" name="sexe" value="femme">
                                                        <label for="radio_femmes">Interessantes</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question_etudiant">
                                        <span>1. </span><span class="libelle_question_etudiant">Comment trouvez vous ces maquettes ?</span>
                                        <div class="bloc_reponse_etudiant">
                                            <div class="reponse_etudiant">
                                                <div class="container_champs_paiement container_radios container_radios_type_paiement">
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_homme" name="sexe" value="homme" checked>
                                                        <label for="radio_homme">Correctes</label>
                                                    </div>
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_femme" name="sexe" value="femme">
                                                        <label for="radio_femme">Magnifiques</label>
                                                    </div>
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_femmes" name="sexe" value="femme">
                                                        <label for="radio_femmes">Interessantes</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question_etudiant">
                                        <span>1. </span><span class="libelle_question_etudiant">Comment trouvez vous ces maquettes ?</span>
                                        <div class="bloc_reponse_etudiant">
                                            <div class="reponse_etudiant">
                                                <div class="container_champs_paiement container_radios container_radios_type_paiement">
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_homme" name="sexe" value="homme" checked>
                                                        <label for="radio_homme">Correctes</label>
                                                    </div>
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_femme" name="sexe" value="femme">
                                                        <label for="radio_femme">Magnifiques</label>
                                                    </div>
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_femmes" name="sexe" value="femme">
                                                        <label for="radio_femmes">Interessantes</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question_etudiant">
                                        <span>1. </span><span class="libelle_question_etudiant">Comment trouvez vous ces maquettes ?</span>
                                        <div class="bloc_reponse_etudiant">
                                            <div class="reponse_etudiant">
                                                <div class="container_champs_paiement container_radios container_radios_type_paiement">
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_homme" name="sexe" value="homme" checked>
                                                        <label for="radio_homme">Correctes</label>
                                                    </div>
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_femme" name="sexe" value="femme">
                                                        <label for="radio_femme">Magnifiques</label>
                                                    </div>
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_femmes" name="sexe" value="femme">
                                                        <label for="radio_femmes">Interessantes</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question_etudiant">
                                        <span>1. </span><span class="libelle_question_etudiant">Comment trouvez vous ces maquettes ?</span>
                                        <div class="bloc_reponse_etudiant">
                                            <div class="reponse_etudiant">
                                                <div class="container_champs_paiement container_radios container_radios_type_paiement">
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_homme" name="sexe" value="homme" checked>
                                                        <label for="radio_homme">Correctes</label>
                                                    </div>
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_femme" name="sexe" value="femme">
                                                        <label for="radio_femme">Magnifiques</label>
                                                    </div>
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_femmes" name="sexe" value="femme">
                                                        <label for="radio_femmes">Interessantes</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question_etudiant">
                                        <span>1. </span><span class="libelle_question_etudiant">Comment trouvez vous ces maquettes ?</span>
                                        <div class="bloc_reponse_etudiant">
                                            <div class="reponse_etudiant">
                                                <div class="container_champs_paiement container_radios container_radios_type_paiement">
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_homme" name="sexe" value="homme" checked>
                                                        <label for="radio_homme">Correctes</label>
                                                    </div>
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_femme" name="sexe" value="femme">
                                                        <label for="radio_femme">Magnifiques</label>
                                                    </div>
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_femmes" name="sexe" value="femme">
                                                        <label for="radio_femmes">Interessantes</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="question_etudiant">
                                        <span>1. </span><span class="libelle_question_etudiant">Comment trouvez vous ces maquettes ?</span>
                                        <div class="bloc_reponse_etudiant">
                                            <div class="reponse_etudiant">
                                                <div class="container_champs_paiement container_radios container_radios_type_paiement">
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_homme" name="sexe" value="homme" checked>
                                                        <label for="radio_homme">Correctes</label>
                                                    </div>
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_femme" name="sexe" value="femme">
                                                        <label for="radio_femme">Magnifiques</label>
                                                    </div>
                                                    <div class="container_confirmation_check container_radio">
                                                        <input type="radio" id="radio_femmes" name="sexe" value="femme">
                                                        <label for="radio_femmes">Interessantes</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="requete_etudiant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container_champs_paiement denomination_plateforme">
                        <label for="nom" class="label_paiement">Objet</label>
                        <div class="sous_container_paiement">
                            <input type="text" class="champs_text_paiement" name="nom" placeholder="Revendication de note">
                        </div>
                    </div>
                    <div class="container_champs_paiement">
                        <label for="message" class="label_paiement" id="label_contexte">Libellé</label>
                        <textarea rows="5" class="champs_text_paiement textarea_paiement" name="message"></textarea>
                    </div>
                    <div class="bloc_boutons">
                        <button type="submit" id="envoyer_document" class="button_goldwin button_type_1 anul_lien">Envoyer</button>
                    </div>
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
    $(".bouton_requete").click(
        function open_video()
        {
            $('#requete_etudiant').modal('show');
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
