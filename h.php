<?php    
    $html = '<!DOCTYPE html>
                    <html>
                        <head>
                            <title>Formulaire</title>
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            
                            <style>
                            
                                table {
                                    border-collapse: collapse;
                                    width: 100%;
                                    
                                    
                                }
                                thead, tbody{
                                    margin: 0;
                                }
                                th, td {
                                    border: 1px solid black;
                                    
                                    text-align: center;
                                }
                                .td-image{
                                    height: 600px;
                                    
                                }
                                .td-image img, .td-image1 img{
                                    max-width: 90%;
                                    max-height: 200px;
                                    margin-top: 10px;
                                    margin-bottom: 10px;
                                }
                                .td-image1{
                                    height: 580px;
                                }
                                
                                .col-4{
                                    width: 25%;
                                    
                                    
                                }
                                .col-3{
                                    width: 33%;
                                    
                                    
                                }
                                .img{
                                    height: 100px;
                                    
                                }
                                h2, li span{
                                    text-decoration: underline;
                                }
                                h2{
                                    color: #804341;
                                    margin: 0;
                                    /*font-size: 25px;*/
                                }
                                .ul{
                                    list-style: none;
                                    margin-top: 0;
                                }
                                li{
                                    
                                    margin: 3px;
                                }
                                h1{
                                    font-weight: bold;
                                    color: rgb(202, 20, 14);
                                    margin: 0;
                                }
                                .left{
                                    width: 45%;
                                    float: left;
                                    
                                }
                                .right{
                                    width: 55%;
                                    float: left;
                                    
                                }
                                .face-img{
                                    max-width: 90%;
                                    
                                    margin-top: 20px;
                                }
                                .face{
                                    width: 100%;
                                    height: 600px;
                                    margin-bottom: 200px;
                                }
                                
                    
                            </style>
                            
                        </head>
                        <body>
                            <div class="row">
                                <h1>Fiche Navette – Audit Energétique</h1>
                                <h2>Date de Pré-visite :</h2>
                                <h2>Données Client :</h2>
                                <ul>
                                    <li><strong>Nom Client :</strong> '.$name.'</li>
                                    <li><strong>Prénom Client :</strong> '.$firstname.'</li>
                                    <li><strong>Code postal :</strong> '.$code_postal.'</li>
                                    <li><strong>Ville :</strong> '.$ville.'</li>
                                    <li><strong>Adresse du logement :</strong> '.$adresse.'</li>
                                </ul>
                                <h2>Généralité :</h2>
                                <ul>
                                    <li><strong>Année de construction:</strong> '.$annee_construc.'</li>
                                    <li><strong>Altitude:</strong> '.$altitude.'</li>
                                    <li><strong>Orientation de la facade principale:</strong> '.$facade_princ.'</li>
                                    <li><strong>Surface habitable (m²):</strong> '.$surface.'</li>
                                    <li><strong>Prénom Client:</strong> '.$firstname.'</li>
                                    <li><strong>Nombre de niveaux total:</strong> '.$nbr_niveau_tot.'</li>
                                    <li><strong>Nombre de niveaux chauffés:</strong> '.$nbr_niveau_chauf.'</li>
                                    <li><strong>Nombre de personnes dans le foyer:</strong> '.$nbr_prsn_foyer.'</li>
                                </ul>
                            </div><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <table >
                                <thead>
                                    <tr>
                                        <th colspan="2">Photos de la maison</th>
                                        <th colspan="2">Photos de l’environnement</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>';
                                    
                                        
                                    
                                    $html .= insertimages2td("photos-maison") . insertimages2td("photos-environnement") .'</tr>
                                </tbody>
                                
                            </table><br><br>
                            <div style="margin-bottom: 10px;">
                                <h2>Caractéristiques des combles et plancher :</h2>
                                <ul class="ul">' . insertimage("img-carac-comble") .'
                                    <li>Caractéristiques des plafonds : '.$carac_plafonds.'</li>
                                    ' . insertimage("img-carac-plafonds") .'
                                    <li>Caractéristique des planchers : '.$carac_placher.'</li>
                                    <li>Enfouissement du sous-sol : '.$enfouis_sous_sol.'</li>
                                    <li>Enfouissement du bâtiment : '.$enfouis_batiment.'</li>
                                    <li>Forme du bâtiment : '.$form_batiment.'</li>
                                    
                                </ul>
                                <h2>Déperdition surfacique :</h2>
                                <h3>Murs extérieurs :</h3>
                                <ul class="ul">    
                                        <li>Composition des murs extérieurs : '.$compos_murs_exter.'</li>
                                        <li>Epaisseur des murs (cm) : '.$epaisseur_mur.'</li>
                                        <li>Présence isolation sur les murs intérieur et extérieur : '.$presence_isol.'</li>
                                        <li>Si OUI, préciser :</li>
                                        <ul>
                                            <li>L\'épaisseur de l\'isolant (mm) : '.$epaisseur_isolant_mur_exter.'</li>
                                            <li>La résistance : '.$resistance_mur_exter.'</li>
                                            <li>L\'année de la pose de l\'isolation : '.$annee_pose_isol_mur_exter.'</li>
                                        </ul>
                                        <li>Commentaires : '.$commentaires_mur_extr.'</li>
                                    
                                    <li>Présence de mitoyenneté : '.$presence_mitoy.'</li>
                                </ul>
                            </div><br><br>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <h3>Plancher haut des combles :</h3> 
                            <div style="margin-bottom: 250px;">
                                <ul class="ul">
                                    
                                    <li>Composition de Plancher Haut des combles : '.$compos_plancher_haut.'</li>
                                    <li>Epaisseur du plancher haut des combles (cm) : '.$epaisseur_plancher_haut.'</li>
                                    <li>Présence d\'isolation sur les Plancher haut des combles : '.$presence_isol_plancher_haut.'</li>
                                    <li>Si OUI, préciser :</li>
                                    <ul>
                                        <li>L\'épaisseur de l\'isolant (mm) : '.$epaisseur_isolant_plancher_haut.'</li>
                                        <li>La résistance : '.$resistance_plancher_haut.'</li>
                                        <li>L\'année de la pose d\'isolation : '.$annee_pose_isol_plancher_haut.'</li>
                                    </ul>
                                    <li>Combles perdus - surface à isoler (m2) : '.$plancher_haut_surf_isol.'</li>
                                    <li>Type d\'isolant : '.$plancher_haut_type_isol.'</li>
                                    <li>Si plusieurs types d\'isolant, commentaire : '.$commentaires_plancher_pls_type.'</li>
                                    <li>Accès comble : '.$acces_comble.'</li>
                                    <li>Dimensions de la trappe (cm) : '.$dimensions_trap.'</li>
                                    <li>Longueur tuyau (m) : '.$longueur_tuyau.'</li>
                                    <li>Tour de trappe à réaliser, nombre : '.$tour_trap.'</li>
                                    <li>Tour de cheminée, nombre : '.$tour_chemine.'</li>
                                    <li>Spots, boîtiers de dérivation à protéger, nombre : '.$sport_boitier_etc.'</li>
                                    <li>Commentaires plancher haut des combles : '.$commentaires_plancher_haut_comble.'</li>
                                </ul>
                            </div><br><br><br>
                                
                                
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Photo(s) plancher haut des
                                                combles
                                                </th>
                                            <th>Photo
                                                (
                                                s
                                                ) spots ou boîtiers</th>
                                            <th>Photo(s) trappe</th>
                                            <th>Photo(s) accès camion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>';
                                    $html .= insertimages1td("photos-plancher-haut") . insertimages1td("photos-spots") . insertimages1td("photos-trap") . insertimages1td("photos-acces-camion");                                            
                                    $html .= '</tr>
                                    </tbody>
                                    
                                </table>
                                <br><br><br>
                                <h3>Plancher bas partie chauffée :</h3>
                                <div style="margin-bottom: 350px;">
                                    <ul class="ul">
                                        <li>Composition de Plancher bas partie chauffée : '.$compos_placher_bas_chauf.'</li>
                                        <li>Epaisseur plancher bas partie chauffée (cm) : '.$epaisseur_plancher_bas.'</li>
                                        <li>Présence d\'isolation sur les planchers bas partie chauffée : '.$presence_isol_plancher_bas.'</li>
                                        <li>Si OUI, préciser :</li>
                                        <ul>
                                            <li>L\'épaisseur de l\'isolant (mm) : '.$epaisseur_isolant_plancher_bas.'</li>
                                            <li>La résistance : '.$resistance_plancher_bas.'</li>
                                            <li>L\'année de la pose d\'isolation : '.$annee_pose_isol_plancher_bas.'</li>
                                        </ul>
                                        <li>Planchers - surface à isoler (m2) : '.$plancher_bas_surf_isol.'</li>
                                        <li>Type de surface à isoler : '.$type_surf_isol.'</li>
                                        <li>Hauteur du ou des plancher bas (cm) : '.$hauteur_plancher_bas.'</li>
                                        <li>Commentaires plancher bas partie chauffée : '.$commentaires_plancher_bas_chauf.'</li>
                                    </ul>
                                </div> 
                                <br><br><br>
                                <table>
                                    <thead>
                                        <tr>                   
                                            <th colspan="3">Photo(s) plancher bas partie chauffée</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>'. insertimages3td("photos-plancher-bas") .' </tr>
                                    </tbody>
                                    
                                </table><br><br><br><br>
                                <h2 style="margin-bottom: 5px;">Plan de la maison :</h2>
                                <table>
                                    <thead style="margin-bottom: 0;">
                                        <tr>                   
                                            <th>Si plan existant, photos</th>
                                            <th>Niveau 1 chauffé</th>
                                            <th>Niveau 2 chauffé</th>
                                            <th>Niveau 3 chauffé</th>
                                        </tr>
                                    </thead>
                                    <tbody style="margin-top: 0;">
                                        <tr> <td class="td-image col-4"></td>'. insertimages1td("photos-plan-niveau1") . insertimages1td("photos-plan-niveau2") . insertimages1td("photos-plan-niveau3") .'</tr>
                                    </tbody>
                                    
                                </table><br><br>
                                <div class="face">
                                    <h2>Isolation des murs par l’extérieur :</h2>
                                    <div class="left">
                                        <h3>Face Avant :</h3>
                                        <ul class="ul">
                                            <li>Repère schéma 1 : '.$face_avant_rep1.'</li>
                                            <li>Repère schéma 2 : '.$face_avant_rep2.'</li>
                                            <li>Repère schéma 3 : '.$face_avant_rep3.'</li>
                                            <li>Repère schéma 4 : '.$face_avant_rep4.'</li>
                                        </ul>
                                        ' . insertimageface("photos-face-avant") .'
                                    </div>
                                    <div class="right">
                                        <ul class="ul">
                                            <li>Rail départ (cm) : '.$face_avant_rail_dep.'</li>
                                            <li>Couronnement toits (ml) : '.$face_avant_couronnement.'</li>
                                            <li>Descente EP : '.$face_avant_descente_ep.'</li>
                                            <li>Total nombre de gonds : '.$face_avant_nbr_gonds.'</li>
                                            <li>Ml couvertines : '.$face_avant_ml.'</li>
                                            <li>Surface chaude (iso + enduit) : '.$face_avant_surf_chaud.'</li>
                                            <li>Surface froide Enduit seul ou Isolant + Enduit (pour éviter décroché) : '.$face_avant_surf_froide_enduit.'</li>
                                            <li>Surface froide enduit seul : '.$face_avant_surf_froide_enduit_seul.'</li>
                                            <li>Surface froide Isolant + enduit : '.$face_avant_surf_froide_isol_enduit.'</li>
                                            <li>Hauteur de démarrage de l\'isolation à faire (cm) : '.$face_avant_hauteur_isol.'</li>
                                            <li>Nombre de gonds à réinstaller : '.$face_avant_nbr_gonds_reinst.'</li>
                                            <li>Mur sur rue : '.$face_avant_mur_rue.'</li>
                                            <li>Orientation de la face : '.$face_avant_orient.'</li>
                                            <li>Commentaire : '.$commentaires_face_avant.'</li>
                                        </ul>
                                    </div><br>
                                </div>
                                <br><br><br><br><br><br><br>
                                <div class="face">
                                    <h2>Isolation des murs par l’extérieur :</h2>
                                    <div class="left">
                                        <h3>Face Gauche :</h3>
                                        <ul class="ul">
                                            <li>Repère schéma 1 : '.$face_gauche_rep1.'</li>
                                            <li>Repère schéma 2 : '.$face_gauche_rep2.'</li>
                                            <li>Repère schéma 3 : '.$face_gauche_rep3.'</li>
                                            <li>Repère schéma 4 : '.$face_gauche_rep4.'</li>
                                        </ul>
                                        ' . insertimageface("photos-face-gauche") .'
                                    </div>
                                    <div class="right">
                                        <ul class="ul">
                                            <li>Rail départ (cm) : '.$face_gauche_rail_dep.'</li>
                                            <li>Couronnement toits (ml) : '.$face_gauche_couronnement.'</li>
                                            <li>Descente EP : '.$face_gauche_descente_ep.'</li>
                                            <li>Total nombre de gonds : '.$face_gauche_nbr_gonds.'</li>
                                            <li>Ml couvertines : '.$face_gauche_ml.'</li>
                                            <li>Surface chaude (iso + enduit) : '.$face_gauche_surf_chaud.'</li>
                                            <li>Surface froide Enduit seul ou Isolant + Enduit (pour éviter décroché) : '.$face_gauche_surf_froide_enduit.'</li>
                                            <li>Surface froide enduit seul : '.$face_gauche_surf_froide_enduit_seul.'</li>
                                            <li>Surface froide Isolant + enduit : '.$face_gauche_surf_froide_isol_enduit.'</li>
                                            <li>Hauteur de démarrage de l\'isolation à faire (cm) : '.$face_gauche_hauteur_isol.'</li>
                                            <li>Nombre de gonds à réinstaller : '.$face_gauche_nbr_gonds_reinst.'</li>
                                            <li>Mur sur rue : '.$face_gauche_mur_rue.'</li>
                                            <li>Orientation de la face : '.$face_gauche_orient.'</li>
                                            <li>Commentaire : '.$commentaires_face_gauche.'</li>
                                        </ul>
                                    </div><br>
                                </div>
                                <br><br><br><br><br><br><br>
                                <div class="face">
                                    <h2>Isolation des murs par l’extérieur :</h2>
                                    <div class="left">
                                        <h3>Face Droite :</h3>
                                        <ul class="ul">
                                            <li>Repère schéma 1 : '.$face_droite_rep1.'</li>
                                            <li>Repère schéma 2 : '.$face_droite_rep2.'</li>
                                            <li>Repère schéma 3 : '.$face_droite_rep3.'</li>
                                            <li>Repère schéma 4 : '.$face_droite_rep4.'</li>
                                        </ul>
                                        ' . insertimageface("photos-face-droite") .'
                                    </div>
                                    <div class="right">
                                        <ul class="ul">
                                            <li>Rail départ (cm) : '.$face_droite_rail_dep.'</li>
                                            <li>Couronnement toits (ml) : '.$face_droite_couronnement.'</li>
                                            <li>Descente EP : '.$face_droite_descente_ep.'</li>
                                            <li>Total nombre de gonds : '.$face_droite_nbr_gonds.'</li>
                                            <li>Ml couvertines : '.$face_droite_ml.'</li>
                                            <li>Surface chaude (iso + enduit) : '.$face_droite_surf_chaud.'</li>
                                            <li>Surface froide Enduit seul ou Isolant + Enduit (pour éviter décroché) : '.$face_droite_surf_froide_enduit.'</li>
                                            <li>Surface froide enduit seul : '.$face_droite_surf_froide_enduit_seul.'</li>
                                            <li>Surface froide Isolant + enduit : '.$face_droite_surf_froide_isol_enduit.'</li>
                                            <li>Hauteur de démarrage de l\'isolation à faire (cm) : '.$face_droite_hauteur_isol.'</li>
                                            <li>Nombre de gonds à réinstaller : '.$face_droite_nbr_gonds_reinst.'</li>
                                            <li>Mur sur rue : '.$face_droite_mur_rue.'</li>
                                            <li>Orientation de la face : '.$face_droite_orient.'</li>
                                            <li>Commentaire : '.$commentaires_face_droite.'</li>
                                        </ul>
                                    </div><br>
                                </div>
                                <br><br><br><br><br><br><br>
                                <div class="face">
                                    <h2>Isolation des murs par l’extérieur :</h2>
                                    <div class="left">
                                        <h3>Face Arrière :</h3>
                                        <ul class="ul">
                                            <li>Repère schéma 1 : '.$face_arriere_rep1.'</li>
                                            <li>Repère schéma 2 : '.$face_arriere_rep2.'</li>
                                            <li>Repère schéma 3 : '.$face_arriere_rep3.'</li>
                                            <li>Repère schéma 4 : '.$face_arriere_rep4.'</li>
                                        </ul>
                                        ' . insertimageface("photos-face-arriere") .'
                                    </div>
                                    <div class="right">
                                        <ul class="ul">
                                            <li>Rail départ (cm) : '.$face_arriere_rail_dep.'</li>
                                            <li>Couronnement toits (ml) : '.$face_arriere_couronnement.'</li>
                                            <li>Descente EP : '.$face_arriere_descente_ep.'</li>
                                            <li>Total nombre de gonds : '.$face_arriere_nbr_gonds.'</li>
                                            <li>Ml couvertines : '.$face_arriere_ml.'</li>
                                            <li>Surface chaude (iso + enduit) : '.$face_arriere_surf_chaud.'</li>
                                            <li>Surface froide Enduit seul ou Isolant + Enduit (pour éviter décroché) : '.$face_arriere_surf_froide_enduit.'</li>
                                            <li>Surface froide enduit seul : '.$face_arriere_surf_froide_enduit_seul.'</li>
                                            <li>Surface froide Isolant + enduit : '.$face_arriere_surf_froide_isol_enduit.'</li>
                                            <li>Hauteur de démarrage de l\'isolation à faire (cm) : '.$face_arriere_hauteur_isol.'</li>
                                            <li>Nombre de gonds à réinstaller : '.$face_arriere_nbr_gonds_reinst.'</li>
                                            <li>Mur sur rue : '.$face_arriere_mur_rue.'</li>
                                            <li>Orientation de la face : '.$face_arriere_orient.'</li>
                                            <li>Commentaire : '.$commentaires_face_arriere.'</li>
                                        </ul>
                                    </div><br>
                                </div>
                                <br><br><br><br><br><br><br>
                                <div class="face">
                                    <h2>Isolation des murs par l’extérieur :</h2>
                                    <div class="left">
                                        <h3>Face supplémentaire 1 :</h3>
                                        <ul class="ul">
                                            <li>Repère schéma 1 : '.$face_supp1_rep1.'</li>
                                            <li>Repère schéma 2 : '.$face_supp1_rep2.'</li>
                                            <li>Repère schéma 3 : '.$face_supp1_rep3.'</li>
                                            <li>Repère schéma 4 : '.$face_supp1_rep4.'</li>
                                        </ul>
                                        ' . insertimageface("photos-face-supp1") .'
                                    </div>
                                    <div class="right">
                                        <ul class="ul">
                                            <li>Rail départ (cm) : '.$face_supp1_rail_dep.'</li>
                                            <li>Couronnement toits (ml) : '.$face_supp1_couronnement.'</li>
                                            <li>Descente EP : '.$face_supp1_descente_ep.'</li>
                                            <li>Total nombre de gonds : '.$face_supp1_nbr_gonds.'</li>
                                            <li>Ml couvertines : '.$face_supp1_ml.'</li>
                                            <li>Surface chaude (iso + enduit) : '.$face_supp1_surf_chaud.'</li>
                                            <li>Surface froide Enduit seul ou Isolant + Enduit (pour éviter décroché) : '.$face_supp1_surf_froide_enduit.'</li>
                                            <li>Surface froide enduit seul : '.$face_supp1_surf_froide_enduit_seul.'</li>
                                            <li>Surface froide Isolant + enduit : '.$face_supp1_surf_froide_isol_enduit.'</li>
                                            <li>Hauteur de démarrage de l\'isolation à faire (cm) : '.$face_supp1_hauteur_isol.'</li>
                                            <li>Nombre de gonds à réinstaller : '.$face_supp1_nbr_gonds_reinst.'</li>
                                            <li>Mur sur rue : '.$face_supp1_mur_rue.'</li>
                                            <li>Orientation de la face : '.$face_supp1_orient.'</li>
                                            <li>Commentaire : '.$commentaires_face_supp1.'</li>
                                        </ul>
                                    </div><br>
                                </div>
                                <br><br><br><br><br><br><br>
                                <div class="face">
                                    <h2>Isolation des murs par l’extérieur :</h2>
                                    <div class="left">
                                        <h3>Face supplémentaire 2 :</h3>
                                        <ul class="ul">
                                            <li>Repère schéma 1 : '.$face_supp2_rep1.'</li>
                                            <li>Repère schéma 2 : '.$face_supp2_rep2.'</li>
                                            <li>Repère schéma 3 : '.$face_supp2_rep3.'</li>
                                            <li>Repère schéma 4 : '.$face_supp2_rep4.'</li>
                                        </ul>
                                        ' . insertimageface("photos-face-supp2") .'
                                    </div>
                                    <div class="right">
                                        <ul class="ul">
                                            <li>Rail départ (cm) : '.$face_supp2_rail_dep.'</li>
                                            <li>Couronnement toits (ml) : '.$face_supp2_couronnement.'</li>
                                            <li>Descente EP : '.$face_supp2_descente_ep.'</li>
                                            <li>Total nombre de gonds : '.$face_supp2_nbr_gonds.'</li>
                                            <li>Ml couvertines : '.$face_supp2_ml.'</li>
                                            <li>Surface chaude (iso + enduit) : '.$face_supp2_surf_chaud.'</li>
                                            <li>Surface froide Enduit seul ou Isolant + Enduit (pour éviter décroché) : '.$face_supp2_surf_froide_enduit.'</li>
                                            <li>Surface froide enduit seul : '.$face_supp2_surf_froide_enduit_seul.'</li>
                                            <li>Surface froide Isolant + enduit : '.$face_supp2_surf_froide_isol_enduit.'</li>
                                            <li>Hauteur de démarrage de l\'isolation à faire (cm) : '.$face_supp2_hauteur_isol.'</li>
                                            <li>Nombre de gonds à réinstaller : '.$face_supp2_nbr_gonds_reinst.'</li>
                                            <li>Mur sur rue : '.$face_supp2_mur_rue.'</li>
                                            <li>Orientation de la face : '.$face_supp2_orient.'</li>
                                            <li>Commentaire : '.$commentaires_face_supp2.'</li>
                                        </ul>
                                    </div><br>
                                </div>
                                <br><br><br><br><br><br><br>
                                <div class="face">
                                    <h2>Isolation des murs par l’extérieur :</h2>
                                    <div class="left">
                                        <h3>Face supplémentaire 3 :</h3>
                                        <ul class="ul">
                                            <li>Repère schéma 1 : '.$face_supp3_rep1.'</li>
                                            <li>Repère schéma 2 : '.$face_supp3_rep2.'</li>
                                            <li>Repère schéma 3 : '.$face_supp3_rep3.'</li>
                                            <li>Repère schéma 4 : '.$face_supp3_rep4.'</li>
                                        </ul>
                                        ' . insertimageface("photos-face-supp3") .'
                                    </div>
                                    <div class="right">
                                        <ul class="ul">
                                            <li>Rail départ (cm) : '.$face_supp3_rail_dep.'</li>
                                            <li>Couronnement toits (ml) : '.$face_supp3_couronnement.'</li>
                                            <li>Descente EP : '.$face_supp3_descente_ep.'</li>
                                            <li>Total nombre de gonds : '.$face_supp3_nbr_gonds.'</li>
                                            <li>Ml couvertines : '.$face_supp3_ml.'</li>
                                            <li>Surface chaude (iso + enduit) : '.$face_supp3_surf_chaud.'</li>
                                            <li>Surface froide Enduit seul ou Isolant + Enduit (pour éviter décroché) : '.$face_supp3_surf_froide_enduit.'</li>
                                            <li>Surface froide enduit seul : '.$face_supp3_surf_froide_enduit_seul.'</li>
                                            <li>Surface froide Isolant + enduit : '.$face_supp3_surf_froide_isol_enduit.'</li>
                                            <li>Hauteur de démarrage de l\'isolation à faire (cm) : '.$face_supp3_hauteur_isol.'</li>
                                            <li>Nombre de gonds à réinstaller : '.$face_supp3_nbr_gonds_reinst.'</li>
                                            <li>Mur sur rue : '.$face_supp3_mur_rue.'</li>
                                            <li>Orientation de la face : '.$face_supp3_orient.'</li>
                                            <li>Commentaire : '.$commentaires_face_supp3.'</li>
                                        </ul>
                                    </div><br><br>
                                </div>
                                <br><br><br><br><br><br><br>
                                <ul class="ul">
                                    <li><h2>Isolation des murs par l’extérieur :</h2></li>
                                    <ul class="ul">
                                        <li>Commentaires ITE : '.$commentaires_ite.'</li>
                                        <li><strong>Totaux ITE :</strong></li>
                                        <li>Total surfaces surfaces chaudes (iso + enduit) : '.$totat_surf_chaud.'</li>
                                        <li>Total surfaces froides avec enduit seul : '.$totat_surf_froid_enduit.'</li>
                                        <li>Total surfaces froides isolant + enduit (pour éviter décroché) : '.$totat_surf_froid_isol_enduit.'</li>
                                        <li>Total Ml couronnement de toit : '.$totat_ml_cournement_toit.'</li>
                                        <li>Total nombre de gonds à réinstaller : '.$totat_nbr_gonds_reinst.'</li>
                                        <li>Total Ml convertines : '.$totat_ml_convert.'</li>
                                        <li><strong>Descriptif travaux ITE :</strong></li>
                                        <li>Choix du coloris (RAL) : '.$choix_coloris.'</li>
                                        <li>Changement de la couleur existante : '.$change_color.'</li>
                                        <li>Pompe A Chaleur (groupe extérieur) : '.$pompe_chaleur.'</li>
                                        <ul>
                                            <li>Si oui, nombre :</li>
                                            <li>Espace disponible derrière le groupe extérieur (cm) : '.$espace_dispo_deriere.'</li>
                                            
                                        </ul>
                                        <li>Ventouse évacuation à prolonger : '.$ventouse_evacuat.'</li>
                                        <li>Demande intervention ENEDIS / France Télécom : '.$demande_intervent_enedis.'</li>
                                        <li>Nécessité de prévenir le voisin : '.$necessite_prevenir_voisin.'</li>
                                        <li>Mur en limite de voirie nécessitant accord de la mairie : '.$mur_limite_accord_mairie.'</li>
                                        <li>Accès chantier : '.$acces_chantier.'</li>
                                        <li>Commentaires : '.$commentaires_travaux_ite.'</li>
                                    </ul>
                                </ul><br><br><br><br><br>
                                <table >
                                <thead>
                                    <tr>
                                        <th colspan="2">Photo groupe extérieur (écart mur)</th>
                                        <th colspan="2">Photo(s) cable(s)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>';
                                    
                                        
                                    
                                    $html .= insertimages2td("photos-maison") . insertimages2td("photos-environnement") .'</tr>
                                </tbody>
                                
                            </table><br><br>

                            
                        </body>
                    </html>';
            
            // $dompdf->loadHtml($html);
            // $dompdf->render();
            // $dompdf->stream("formulaire.pdf");
?>