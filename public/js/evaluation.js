$( document ).ready(function() {
    $i = 1;
    $('.addEva').on('click', function(){
        $(this).attr("disabled","dissabled");
        $(".ajout_evalutation").slideDown(500);
    })

    $('#add_question').on('click', function(){
        $i++;
        $('.question').append(`<div class="libelle_question" style="margin-top:2rem;">
        <span class="num_question">${$i} .</span>
        <input type="text" class="form-control" id="libelle_question" placeholder="Saisir une question" aria-label="Recherche" name="question[]" aria-describedby="basic-addon2">
    </div>
    <div class="bloc_question">
        <div class="contaier_tout_choix">
            <div class="container_choix">
                <div class="choix" id="choix1">
                    <input type="text" class="form-control" id="libelle_choix" placeholder="Saisissez la bonne réponse" name="reponses[]" aria-label="Recherche" aria-describedby="basic-addon2">
                </div>
            </div>
        </div>
        <div class="contaier_tout_choix">
            <div class="container_choix">
                <div class="choix" id="choix1">
                    <input type="text" class="form-control" id="libelle_choix" placeholder="Saisissez une proposition" name="reponses[]" aria-label="Recherche" aria-describedby="basic-addon2">
                </div>
            </div>
        </div>
        <div class="contaier_tout_choix">
            <div class="container_choix">
                <div class="choix" id="choix1">
                    <input type="text" class="form-control" id="libelle_choix" placeholder="Saisissez une proposition" name="reponses[]" aria-label="Recherche" aria-describedby="basic-addon2">
                </div>
            </div>
        </div>
        <div class="contaier_tout_choix">
            <div class="container_choix">
                <div class="choix" id="choix1">
                    <input type="text" class="form-control" id="libelle_choix" placeholder="Saisissez une proposition" name="reponses[]" aria-label="Recherche" aria-describedby="basic-addon2">
                </div>
            </div>
        </div>`);
    })
    
    $('#evaluationCreate').on('submit', function(event){
        event.preventDefault();
        var $form = $(this);
        var formdata = (window.FormData) ? new FormData($form[0]) : null;
        var data = (formdata !== null) ? formdata : $form.serialize();
        $("#submitEva").html("En cours...");
        
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            processData: false,
            contentType: false,
            data: data,
            success: function(data) {
                console.log(data);
                $("#submitEva").html("Enregistrer");
                Swal.fire({
                    title: "Bravo 👍🏻",
                    html: "Evaluation enregistrée avec succès",
                    icon: 'success',
                    showCancelButton: false,
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    if (result.value) {
                        window.location = "";
                    }
                })
            },
            error: function(data) {
                Swal.fire(
                    "Erreur !",
                    "Désolé, une erreur est survenue.  Veuillez reessayer plutard !",
                    'error'
                );
            }
        });
    });
    
    $('#heure,#minute').on('keyup', function(event){
        event.preventDefault();
        var data = new FormData();
        var action = $(this).parent().parent().attr('action');
        var heure = $(this).parent().parent().find('input[name="heure"]').val();
        var min = $(this).parent().parent().find('input[name="minutes"]').val();
        var id = $(this).parent().parent().attr('id');
        id = id.split("_")[1];
        data.append("id",id);
        data.append("heure",heure);
        data.append("minutes",min);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });
        
        $.ajax({
            url: action,
            type: 'POST',
            processData: false,
            contentType: false,
            data: data,
            success: function(data) {
                console.log(data);
            },
            error: function(data) {
                Swal.fire(
                    "Erreur !",
                    "Désolé, une erreur est survenue.  Veuillez reessayer plutard !",
                    'error'
                );
            }
        });
    });
    
    $('.submitEva').on('click', function(event){
        event.preventDefault();
        $(this).html('En cours...');
        var data = new FormData();
        var id = $(this).attr('id');
        id = id.split("_")[1];
        data.append("id",id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });
        
        $.ajax({
            url: $(this).attr('attr-route'),
            type: 'POST',
            processData: false,
            contentType: false,
            data: data,
            success: function(data) {
                $(this).html('Soumettre');
                console.log(data);
                Swal.fire(
                    "Bravo !",
                    "Epreuve soumise avec succès",
                    'success'
                );
            },
            error: function(data) {
                $(this).html('Soumettre');
                Swal.fire(
                    "Erreur !",
                    "Désolé, une erreur est survenue.  Veuillez reessayer plutard !",
                    'error'
                );
            }
        });
    });
    
    $('.download').on('click', function(event){
        var doc = new jsPDF();
        var title = $(this).parent().parent().find(".modal-title").text();
        var divId = $(this).parent().parent().find(".modal-body").html();
        // doc.fromHTML(divId, 35, 15, {
        //     'width': 170
        // });
        doc.fromHTML(`<html><head><title>${title}</title></head><body><h4>${title}</h4><br>` + divId + `</body></html>`, 35, 15, {
            'width': 170
        });
        doc.save('Evaluation.pdf');
    });
});