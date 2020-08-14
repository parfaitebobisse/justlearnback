@section('navigation')
<ul>
    <li><a href="{{ route('liste_utilisateurs') }}" class="anul_lien lien_navigation_dashbord active">Gestion des utilisateurs</a></li>
    <li><a href="{{ route('ajouter_plateforme') }}" class="anul_lien lien_navigation_dashbord">Gestion des plateformes</a></li>
    <li><a href="{{ route('consulter_bilan') }}" class="anul_lien lien_navigation_dashbord">Consultation du bilan</a></li>
    <li><a href="#" class="anul_lien lien_navigation_dashbord">Archivage</a></li>
</ul>
@endsection
@extends('html.ajouter_utilisateur')    