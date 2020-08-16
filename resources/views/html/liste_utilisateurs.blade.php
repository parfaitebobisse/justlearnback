@extends('html.header')

@push('css')
    <link rel="stylesheet" href="{{asset('css/liste_utilisateurs.css')}}">
@endpush

@section('title')
    ebobisse epoune parfait
@endsection

@section('content')
            <div class="container_corps_dashbord">
                <div class="entete_corps_dashbord">
                    <h1 class="titre_dashbord">Gestion des utilisateurs</h1>
                    <div class="bloc_boutons">
                        <a href="{{ route('ajouter_utilisateur') }}" type="submit" id="envoyer_document" class="button_goldwin button_type_1 anul_lien">Ajouter un utilisateur</a>
                    </div>
                </div>
                <div class="bloc_contenu_dashbord">
                    <div class="bloc_sous_menu_dashbord">
                        <ul class="liste_type_2 nav nav-tabs" role="tablist">
                            <li class="active">
                                <a class="anul_lien nav-tabs active" id="nav-home-tab" data-toggle="tab" href="#toutes_procedures" role="tab" aria-controls="#toutes_procedures" aria-selected="true">Tous ({{ count($users) }})</a>
                            </li>
                            <li>
                                <a class="anul_lien nav-tabs" data-toggle="tab" href="#procedure1" role="tab" aria-controls="#procedure1" aria-selected="false">Administrateurs ({{ count($users_administrateurs) }})</a>
                            </li>
                            <li>
                                <a class="anul_lien nav-tabs" data-toggle="tab" href="#procedure2" aria-controls="#procedure2" aria-selected="false">Professeurs({{ count($users_professeurs) }})</a>
                            </li>
                            <li>
                                <a class="anul_lien nav-tabs" data-toggle="tab" href="#procedure3" aria-controls="#procedure2" aria-selected="false">Etudiants({{ count($users_etudiants) }})</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="nav-tabContent">
                            <div id="toutes_procedures" class="tab-pane fade show active">
                                <!-- <div class="container_procedures">
                                    <div class="procedure">
                                        <div class="entete_procedure">
                                            <h2 class="titre_procedure">Procédure Taxi contre état</h2>
                                            <span> | Mise à jour le :
                                                <span class="date_mise_a_jour">07/05/2020</span>
                                            </span>
                                        </div>
                                        <div class="corps_procedure">
                                            <p>Votre procédure est fixé pour une plaidoirie qui sera fixée le 12 décembre 2021</p>
                                        </div>
                                    </div>
                                    <div class="procedure">
                                        <div class="entete_procedure">
                                            <h2 class="titre_procedure">Procédure Taxi contre état</h2>
                                            <span> | Mise à jour le :
                                                <span class="date_mise_a_jour">07/05/2020</span>
                                            </span>
                                        </div>
                                        <div class="corps_procedure">
                                            <p>Ideo urbs venerabilis post superbas efferatarum gentium cervices oppressas latasque leges fundamenta libertatis et retinacula sempiterna velut frugi parens et prudens et dives Caesaribus tamquam liberis suis regenda patrimonii iura permisit.</p>
                                        </div>
                                    </div>
                                    <div class="procedure">
                                        <div class="entete_procedure">
                                            <h2 class="titre_procedure">Procédure Taxi contre état</h2>
                                            <span> | Mise à jour le :
                                                <span class="date_mise_a_jour">07/05/2020</span>
                                            </span>
                                        </div>
                                        <div class="corps_procedure">
                                            <p>Oportunum est, ut arbitror, explanare nunc causam, quae ad exitium praecipitem Aginatium inpulit iam inde a priscis maioribus nobilem, ut locuta est pertinacior fama. nec enim super hoc ulla documentorum rata est fides.</p>
                                        </div>
                                    </div>
                                </div> -->
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
                                                                <th class="cell100 column3">Nom</th>
                                                                <th class="cell100 column4">Prenom</th>
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
                                                            @foreach ($users as $user)
                                                            <tr class="row100 body">
                                                                <td class="cell100 column1">{{ $loop->index+1 }} </td>
                                                                <td class="cell100 column2">{{ $user->id }}</td>
                                                                <td class="cell100 column3">{{ $user->nom }}</td>
                                                                <td class="cell100 column4">{{ $user->prenom }}</td>
                                                                <td class="cell100 column5">
                                                                    <div class="container_confirmation_check bloc_question_checkbox">
                                                                        <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                                                                        <label for="confirmation_check1" aria-describedby="label"><label>
                                                                    </div>
                                                                </td>
                                                                <td class="cell100 column6">
                                                                    <button data-matricule="{{ $user->id }}" data-nom="{{ $user->nom }}" data-prenom="{{ $user->prenom }}" data-sexe="{{ $user->sexe == 1 ? "M" : "F" }}" data-email="{{ $user->email }}" data-telephone="{{ $user->telephone }}" data-type="{{ $user->type }}" data-photo="{{ asset($user->photo) }}" type="button" id="suivant" class="button_goldwin button_type_1 anul_lien voir_bouton" title="voir" data-toggle="modal" data-target="#staticBackdrop">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    </button>
                                                                </td>
                                                                <td class="cell100 column7">
                                                                    <a href="{{ route('modifier_utilisateur',$user) }}" type="button" id="suivant" class="button_goldwin button_type_1 anul_lien modifier_bouton" title="modifier">
                                                                        <i class="fas fa-pencil-alt"></i>
                                                                    </a>
                                                                </td>
                                                                <td class="cell100 column8">
                                                                    <form action="{{ route('supprimer_utilisateur', $user) }}" method="post">
                                                                        <input type="hidden" name="_method" value="delete">
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <button type="submit" id="suivant" class="button_goldwin button_type_1 anul_lien supprimer_bouton" title="supprimer">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container_navigation_1" id="navigation_pages_1">
                                    {{ $users->links() }}
                                </div>
                            </div>
                            <div id="procedure1" class="tab-pane fade">
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
                                                                <th class="cell100 column3">Nom</th>
                                                                <th class="cell100 column4">Prenom</th>
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
                                                            @foreach ($users_administrateurs as $user)
                                                            <tr class="row100 body">
                                                                <td class="cell100 column1">{{ $loop->index+1 }} </td>
                                                                <td class="cell100 column2">{{ $user->id }}</td>
                                                                <td class="cell100 column3">{{ $user->nom }}</td>
                                                                <td class="cell100 column4">{{ $user->prenom }}</td>
                                                                <td class="cell100 column5">
                                                                    <div class="container_confirmation_check bloc_question_checkbox">
                                                                        <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                                                                        <label for="confirmation_check1" aria-describedby="label"><label>
                                                                    </div>
                                                                </td>
                                                                <td class="cell100 column6">
                                                                    <button data-matricule="{{ $user->id }}" data-nom="{{ $user->nom }}" data-prenom="{{ $user->prenom }}" data-sexe="{{ $user->sexe == 1 ? "M" : "F" }}" data-email="{{ $user->email }}" data-telephone="{{ $user->telephone }}" data-type="{{ $user->type }}" data-photo="{{ asset($user->photo) }}" type="button" id="suivant" class="button_goldwin button_type_1 anul_lien voir_bouton" title="voir" data-toggle="modal" data-target="#staticBackdrop">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    </button>
                                                                </td>
                                                                <td class="cell100 column7">
                                                                    <a href="{{ route('modifier_utilisateur',$user) }}" type="button" id="suivant" class="button_goldwin button_type_1 anul_lien modifier_bouton" title="modifier">
                                                                        <i class="fas fa-pencil-alt"></i>
                                                                    </a>
                                                                </td>
                                                                <td class="cell100 column8">
                                                                    <form action="{{ route('supprimer_utilisateur', $user) }}" method="post">
                                                                        <input type="hidden" name="_method" value="delete">
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <button type="submit" id="suivant" class="button_goldwin button_type_1 anul_lien supprimer_bouton" title="supprimer">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="procedure2" class="tab-pane fade">
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
                                                                <th class="cell100 column3">Nom</th>
                                                                <th class="cell100 column4">Prenom</th>
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
                                                            @foreach ($users_professeurs as $user)
                                                            <tr class="row100 body">
                                                                <td class="cell100 column1">{{ $loop->index+1 }} </td>
                                                                <td class="cell100 column2">{{ $user->id }}</td>
                                                                <td class="cell100 column3">{{ $user->nom }}</td>
                                                                <td class="cell100 column4">{{ $user->prenom }}</td>
                                                                <td class="cell100 column5">
                                                                    <div class="container_confirmation_check bloc_question_checkbox">
                                                                        <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                                                                        <label for="confirmation_check1" aria-describedby="label"><label>
                                                                    </div>
                                                                </td>
                                                                <td class="cell100 column6">
                                                                    <button data-matricule="{{ $user->id }}" data-nom="{{ $user->nom }}" data-prenom="{{ $user->prenom }}" data-sexe="{{ $user->sexe == 1 ? "M" : "F" }}" data-email="{{ $user->email }}" data-telephone="{{ $user->telephone }}" data-type="{{ $user->type }}" data-photo="{{ asset($user->photo) }}" type="button" id="suivant" class="button_goldwin button_type_1 anul_lien voir_bouton" title="voir" data-toggle="modal" data-target="#staticBackdrop">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    </button>
                                                                </td>
                                                                <td class="cell100 column7">
                                                                    <a href="{{ route('modifier_utilisateur',$user) }}" type="button" id="suivant" class="button_goldwin button_type_1 anul_lien modifier_bouton" title="modifier">
                                                                        <i class="fas fa-pencil-alt"></i>
                                                                    </a>
                                                                </td>
                                                                <td class="cell100 column8">
                                                                    <form action="{{ route('supprimer_utilisateur', $user) }}" method="post">
                                                                        <input type="hidden" name="_method" value="delete">
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <button type="submit" id="suivant" class="button_goldwin button_type_1 anul_lien supprimer_bouton" title="supprimer">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="procedure3" class="tab-pane fade">
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
                                                                <th class="cell100 column3">Nom</th>
                                                                <th class="cell100 column4">Prenom</th>
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
                                                            @foreach ($users_etudiants as $user)
                                                            <tr class="row100 body">
                                                                <td class="cell100 column1">{{ $loop->index+1 }} </td>
                                                                <td class="cell100 column2">{{ $user->id }}</td>
                                                                <td class="cell100 column3">{{ $user->nom }}</td>
                                                                <td class="cell100 column4">{{ $user->prenom }}</td>
                                                                <td class="cell100 column5">
                                                                    <div class="container_confirmation_check bloc_question_checkbox">
                                                                        <input type="checkbox" name="confirme" value="" id="confirmation_check1">
                                                                        <label for="confirmation_check1" aria-describedby="label"><label>
                                                                    </div>
                                                                </td>
                                                                <td class="cell100 column6">
                                                                    <button data-matricule="{{ $user->id }}" data-nom="{{ $user->nom }}" data-prenom="{{ $user->prenom }}" data-sexe="{{ $user->sexe == 1 ? "M" : "F" }}" data-email="{{ $user->email }}" data-telephone="{{ $user->telephone }}" data-type="{{ $user->type }}" data-photo="{{ asset($user->photo) }}" type="button" id="suivant" class="button_goldwin button_type_1 anul_lien voir_bouton" title="voir" data-toggle="modal" data-target="#staticBackdrop">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    </button>
                                                                </td>
                                                                <td class="cell100 column7">
                                                                    <a href="{{ route('modifier_utilisateur',$user) }}" type="button" id="suivant" class="button_goldwin button_type_1 anul_lien modifier_bouton" title="modifier">
                                                                        <i class="fas fa-pencil-alt"></i>
                                                                    </a>
                                                                </td>
                                                                <td class="cell100 column8">
                                                                    <form action="{{ route('supprimer_utilisateur', $user) }}" method="post">
                                                                        <input type="hidden" name="_method" value="delete">
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <button type="submit" id="suivant" class="button_goldwin button_type_1 anul_lien supprimer_bouton" title="supprimer">
                                                                            <i class="fas fa-trash-alt"></i>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @endforeach
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
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="modal fade" id="staticBackdrop" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: #FFFFFF;">
                <div class="modal-header">
                    <h5 class="modal-title" id="nom-complet">EBOBISSE EPOUNE Parfait</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body" id="modal_plus_user">
                    <div class="bloc_infos_user_modal">
                        <div class="bloc_information_user">
                            <span class="info_user">Matricule:</span>
                            <span class="Value_user" id="data-matricule">0001</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Nom:</span>
                            <span class="Value_user" id="data-nom">Ebobisse Epoune</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Prenom:</span>
                            <span class="Value_user" id="data-prenom">Parfait</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Sex:</span>
                            <span class="Value_user" id="data-sexe">F</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Email:</span>
                            <span class="Value_user" id="data-email">parfaitebobisse@gmail.com</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Tel:</span>
                            <span class="Value_user" id="data-telephone">698530793</span>
                        </div>
                        <div class="bloc_information_user">
                            <span class="info_user">Type:</span>
                            <span class="Value_user" id="data-type">Etudiant</span>
                        </div>
                    </div>
                    <div class="bloc_photos_user_modal">
                        <img id="data-photo" src="{{asset('sources/images/2b7a5c3c051f471f1674da3f7d222a5b78390ea1.png')}}">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </footer>
    @push('js')
    <script>
        $(document).ready(function(){
            $(document).on('click','.voir_bouton',function(e){
                e.preventDefault();
                console.log('test');
                $('#nom-complet').text($(this).data('nom')+" "+$(this).data('prenom'));
                $('#data-matricule').text($(this).data('matricule'));
                $('#data-nom').text($(this).data('nom'));
                $('#data-prenom').text($(this).data('prenom'));
                $('#data-sexe').text($(this).data('sexe'));
                $('#data-email').text($(this).data('email'));
                $('#data-telephone').text($(this).data('telephone'));
                $('#data-type').text($(this).data('type'));
                $('#data-photo').attr('src',$(this).data('photo'));
            })
        });
    </script>
    @endpush
</body>
@endsection
