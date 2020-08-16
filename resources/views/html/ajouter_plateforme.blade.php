
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
                                    <div class="container_champs_paiement" id="champs_photo">
                                        <div class="bloc_depot">
                                            <img data-src="../sources/images/2b7a5c3c051f471f1674da3f7d222a5b78390ea1.png" alt="image_document" class="image_depot lazy">
                                            <p class="paragraphe_depot">Déposez une photo ou cliquez pour parcourir votre explorateur. Formats compatible Jpg</p>
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
                        <img data-src="../sources/images/2b7a5c3c051f471f1674da3f7d222a5b78390ea1.png" class="lazy">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="../js/jquery.js"></script>
<script src="../js/lazyload.min.js"></script>
<script>
    (function ($) {
        $(document).ready(function() {
            // // Users can skip the loading process if they want.
            // $('.skip').click(function() {
            //     $('.overlay, body').addClass('loaded');
            // })
            
            // Will wait for everything on the page to load.
            $(window).bind('load', function() {
                $('.overlay, body').addClass('loaded');
                setTimeout(function() {
                    $('.overlay').css({'display':'none'})
                }, 2000)

                $('#rgpdModal').modal('show');
            });
            
            // Will remove overlay after 1min for users cannnot load properly.
            setTimeout(function() {
                $('.overlay, body').addClass('loaded');

                $('#rgpdModal').modal('show');
            }, 60000);
        })
    })(jQuery);

    (function (w, d) {
    function logElementEvent(eventName, element) {
        console.log(Date.now(), eventName, element.getAttribute("data-src"));
    }

    var callback_enter = function (element) {
        logElementEvent("🔑 ENTERED", element);
    };
    var callback_exit = function (element) {
        logElementEvent("🚪 EXITED", element);
    };
    var callback_loading = function (element) {
        logElementEvent("⌚ LOADING", element);
    };
    var callback_loaded = function (element) {
        logElementEvent("👍 LOADED", element);
    };
    var callback_error = function (element) {
        logElementEvent("💀 ERROR", element);
        element.src =
        "https://via.placeholder.com/440x560/?text=Error+Placeholder";
    };
    var callback_finish = function () {
        logElementEvent("✔️ FINISHED", document.documentElement);
    };
    var callback_cancel = function (element) {
        logElementEvent("🔥 CANCEL", element);
    };

    var options = {
        // Assign the callbacks defined above
        callback_enter: callback_enter,
        callback_exit: callback_exit,
        callback_cancel: callback_cancel,
        callback_loading: callback_loading,
        callback_loaded: callback_loaded,
        callback_error: callback_error,
        callback_finish: callback_finish
    };

    var page_ll = new LazyLoad(options);

    function mouseoverHandler(event) {
        var product = event.currentTarget;
        var lazyImg = product.querySelector(".lazy-hover");
        if (!!lazyImg.getAttribute("data-ll-status")) {
        return;
        }
        // page_ll.load(lazyImg); STILL WORKS, BUT DEPRECATED
        LazyLoad.load(lazyImg, options);
    }

    function nodeSetToArray(nodeSet) {
        return Array.prototype.slice.call(nodeSet);
    }

    function initializeMouseBehaviour() {
        const products = document.querySelectorAll(".product");
        nodeSetToArray(products).forEach(function (product) {
        product.addEventListener("mouseover", mouseoverHandler, true);
        });
    }

    initializeMouseBehaviour();
    })(window, document);
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
    });
</script>
<script src="https://use.fontawesome.com/releases/v5.14.0/js/all.js" data-auto-replace-svg="nest"></script>
</html>