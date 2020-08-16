@extends('html.header')

@push('css')
    <link rel="stylesheet" href="{{asset('css/consulter_bilan.css')}}">
@endpush

@section('title')
    ebobisse epoune parfait
@endsection

@section('content')
            <div class="container_corps_dashbord">
                <div class="entete_corps_dashbord">
                    <h1 class="titre_dashbord">Consultation du bilan</h1>
                    <div class="bloc_boutons">
                        <button type="submit" id="envoyer_document" class="button_goldwin button_type_1 anul_lien">Imprimer</button>
                    </div>
                </div>
                <div class="bloc_contenu_dashbord">
                    <div class="bloc_sous_menu_dashbord">
                        <div class="bloc_filtre">
                        <h2 class="titre_nombre_etudiants titre_filtre">Filtres</h2>
                        <div class="container_champs_paiement" id="type_etudiant">
                            <label for="tel" class="label_paiement">Année</label>
                            <div class="sous_container_paiement custom-select">
                                <select name="doimaine_de_competence" class="champs_text_paiement">
                                    <option value="droit_immobilier" selected> </option>
                                    <option value="droit_immobilier" >2019/2020</option>
                                    <option value="droit_immobilier">2018/2019</option>
                                    <option value="droit_immobilier">2017/2018</option>
                                </select>
                            </div>
                        </div>
                        <div class="container_champs_paiement" id="type_etudiant">
                            <label for="tel" class="label_paiement">Semestre</label>
                            <div class="sous_container_paiement custom-select">
                                <select name="doimaine_de_competence" class="champs_text_paiement">
                                    <option value="droit_immobilier" selected> </option>
                                    <option value="droit_immobilier" >1</option>
                                    <option value="droit_immobilier">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="container_champs_paiement" id="type_etudiant">
                            <label for="tel" class="label_paiement">Plateforme</label>
                            <div class="sous_container_paiement custom-select">
                                <select name="doimaine_de_competence" class="champs_text_paiement">
                                    <option value="droit_immobilier" selected> </option>
                                    <option value="droit_immobilier" >PTFI</option>
                                    <option value="droit_immobilier">OGA</option>
                                    <option value="droit_immobilier">PFTIN</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <h2 class="titre_nombre_etudiants">Nombre d'étudiants par plateformes</h2>
                    <div id="piechart" style="width: 100%; height: 500px;">&nbsp;</div>
                        <table class="graph">
                            <caption>Taux de réussite par plateformes</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Plateformes</th>
                                    <th scope="col">Pourcentage</th>
                                </tr>
                            </thead><tbody>
                                <tr style="height:85%">
                                    <th scope="row">PTFI</th>
                                    <td><span>85%</span></td>
                                </tr>
                                <tr style="height:23%">
                                    <th scope="row">OGA</th>
                                    <td><span>23%</span></td>
                                </tr>
                                <tr style="height:7%">
                                    <th scope="row">PFTIN</th>
                                    <td><span>7%</span></td>
                                </tr>
                                <tr style="height:38%">
                                    <th scope="row">NLT</th>
                                    <td><span>38%</span></td>
                                </tr>
                                <tr style="height:35%">
                                    <th scope="row">MPS</th>
                                    <td><span>35%</span></td>
                                </tr>
                                <tr style="height:30%">
                                    <th scope="row">ATG</th>
                                    <td><span>30%</span></td>
                                </tr>
                                <tr style="height:5%">
                                    <th scope="row">MPO</th>
                                    <td><span>5%</span></td>
                                </tr>
                                <tr style="height:20%">
                                    <th scope="row">CMO</th>
                                    <td><span>20%</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <div class="container_cercle">
                            <img data-src="../sources/images/Pie Chart (2).png" class="lazy dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="diagramme_circulaire" alt="icone cadena">
                        </div> -->
                    
                        <h2 class="titre_nombre_etudiants" id="taux_reussite_total">Taux de réussite total</h2>
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
                                                        <th class="cell100 column4">Nombre d'étudiants</th>
                                                        <th class="cell100 column5">Taux de réussite</th>
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
                                                        <td class="cell100 column4">350</td>
                                                        <td class="cell100 column5">85%</td>
                                                    </tr>
                                                    <tr class="row100 body">
                                                        <td class="cell100 column1">1</td>
                                                        <td class="cell100 column2">0001</td>
                                                        <td class="cell100 column3">PFTI</td>
                                                        <td class="cell100 column4">350</td>
                                                        <td class="cell100 column5">85%</td>
                                                    </tr>
                                                    <tr class="row100 body">
                                                        <td class="cell100 column1">1</td>
                                                        <td class="cell100 column2">0001</td>
                                                        <td class="cell100 column3">PFTI</td>
                                                        <td class="cell100 column4">350</td>
                                                        <td class="cell100 column5">85%</td>
                                                    </tr>
                                                    <tr class="row100 body">
                                                        <td class="cell100 column1">1</td>
                                                        <td class="cell100 column2">0001</td>
                                                        <td class="cell100 column3">PFTI</td>
                                                        <td class="cell100 column4">350</td>
                                                        <td class="cell100 column5">85%</td>
                                                    </tr>
                                                    <tr class="row100 body">
                                                        <td class="cell100 column1" colspan="3" style="background-color: #5f4811; color: #FFF; text-transform: uppercase;">total</td>
                                                        <td class="cell100 column4">350</td>
                                                        <td class="cell100 column5">85%</td>
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
        </div>
    </main>
    <footer>
    </footer>
</body>
@push('js')
    <script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" data-auto-replace-svg="nest"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
        // Chart 1
        var data = google.visualization.arrayToDataTable([['OS Mobile', 'Parts de marché'],["PFTI",71.40],["OGA",14.70],["PFTIN",10.60],["NLT",1.00],["MPS",2.30],["ATG",2.30],["MPO",2.30],["CMO",2.30]]);
        var options = {
        title: ''
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
    </script>
@endpush

@endsection
