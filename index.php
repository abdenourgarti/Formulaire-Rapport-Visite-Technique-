<?php

use Dompdf\Dompdf;
use Dompdf\Options;

    require_once 'dompdf/autoload.inc.php';
    $dompdf = new Dompdf(["chroot" => __DIR__]);
    $dompdf ->setPaper("A4", "landscape");
    
    $firstname = $name = $ville = $code_postal = $adresse = $annee_construc = $altitude = $surface = $facade_princ = $nbr_niveau_tot = $nbr_niveau_chauf = $nbr_prsn_foyer = $photos_maison = $photos_environnement = $img_carac_comble = $carac_plafonds = $img_carac_plafonds = $carac_placher = $enfouis_sous_sol = $enfouis_batiment = $form_batiment = $compos_murs_exter = $epaisseur_mur = $presence_isol = $epaisseur_isolant_mur_exter = $resistance_mur_exter = $annee_pose_isol_mur_exter = $commentaires_mur_extr = $presence_mitoy = $compos_plancher_haut = $epaisseur_plancher_haut = $presence_isol_plancher_haut = $epaisseur_isolant_plancher_haut = $resistance_plancher_haut = $annee_pose_isol_plancher_haut = $plancher_haut_surf_isol = $plancher_haut_type_isol = $commentaires_plancher_pls_type = $acces_comble = $dimensions_trap = $longueur_tuyau = $tour_trap = $tour_chemine = $sport_boitier_etc = $commentaires_plancher_haut_comble = $photos_plancher_haut = $photos_trap = $photos_spots = $photos_acces_camion = "";
    $compos_placher_bas_chauf = $epaisseur_plancher_bas = $presence_isol_plancher_bas = $epaisseur_isolant_plancher_bas = $resistance_plancher_bas = $annee_pose_isol_plancher_bas = $plancher_bas_surf_isol = $type_surf_isol = $hauteur_plancher_bas = $commentaires_plancher_bas_chauf = $photos_plancher_bas = $photos_plan_niveau1 = $photos_plan_niveau2 = $photos_plan_niveau3 = "";
    $face_avant_rep1 = $face_avant_rep2 = $face_avant_rep3 = $face_avant_rep4 = $photos_face_avant = $face_avant_rail_dep = $face_avant_couronnement = $face_avant_descente_ep = $face_avant_nbr_gonds = $face_avant_ml = $face_avant_surf_chaud = $face_avant_surf_froide_enduit = $face_avant_surf_froide_enduit_seul = $face_avant_surf_froide_isol_enduit = $face_avant_hauteur_isol = $face_avant_nbr_gonds_reinst = $face_avant_mur_rue = $face_avant_orient = $commentaires_face_avant = "";
    $face_droite_rep1 = $face_droite_rep2 = $face_droite_rep3 = $face_droite_rep4 = $photos_face_droite = $face_droite_rail_dep = $face_droite_couronnement = $face_droite_descente_ep = $face_droite_nbr_gonds = $face_droite_ml = $face_droite_surf_chaud = $face_droite_surf_froide_enduit = $face_droite_surf_froide_enduit_seul = $face_droite_surf_froide_isol_enduit = $face_droite_hauteur_isol = $face_droite_nbr_gonds_reinst = $face_droite_mur_rue = $face_droite_orient = $commentaires_face_droite = "";
    $face_gauche_rep1 = $face_gauche_rep2 = $face_gauche_rep3 = $face_gauche_rep4 = $photos_face_gauche = $face_gauche_rail_dep = $face_gauche_couronnement = $face_gauche_descente_ep = $face_gauche_nbr_gonds = $face_gauche_ml = $face_gauche_surf_chaud = $face_gauche_surf_froide_enduit = $face_gauche_surf_froide_enduit_seul = $face_gauche_surf_froide_isol_enduit = $face_gauche_hauteur_isol = $face_gauche_nbr_gonds_reinst = $face_gauche_mur_rue = $face_gauche_orient = $commentaires_face_gauche = "";
    $face_arriere_rep1 = $face_arriere_rep2 = $face_arriere_rep3 = $face_arriere_rep4 = $photos_face_arriere = $face_arriere_rail_dep = $face_arriere_couronnement = $face_arriere_descente_ep = $face_arriere_nbr_gonds = $face_arriere_ml = $face_arriere_surf_chaud = $face_arriere_surf_froide_enduit = $face_arriere_surf_froide_enduit_seul = $face_arriere_surf_froide_isol_enduit = $face_arriere_hauteur_isol = $face_arriere_nbr_gonds_reinst = $face_arriere_mur_rue = $face_arriere_orient = $commentaires_face_arriere = "";
    $commentaires_ite = $totat_surf_chaud = $totat_surf_froid_enduit = $totat_surf_froid_isol_enduit = $totat_ml_cournement_toit = $totat_nbr_gonds_reinst = $totat_ml_convert = $choix_coloris = $change_color = $pompe_chaleur = $espace_dispo_deriere = $espace_dispo_deriereError = $ventouse_evacuat = $demande_intervent_enedis = $necessite_prevenir_voisin = $mur_limite_accord_mairie = $acces_chantier = $commentaires_travaux_ite = "";
    $img_carac_combleError = $img_carac_plafondsError = $photos_plancher_hautError = $photos_trapError = $photos_spotsError = $photos_acces_camionError = $photos_plancher_basError = $photos_plan_niveau1Error = $photos_plan_niveau2Error = $photos_plan_niveau3Error = $photos_face_avantError = $photos_face_gaucheError = $photos_face_droiteError = $photos_face_arriereError = $photos_face_supp1Error = $photos_face_supp2Error = $photos_face_supp3Error = "";
    $face_supp1_rep1 = $face_supp1_rep2 = $face_supp1_rep3 = $face_supp1_rep4 = $photos_face_supp1 = $face_supp1_rail_dep = $face_supp1_couronnement = $face_supp1_descente_ep = $face_supp1_nbr_gonds = $face_supp1_ml = $face_supp1_surf_chaud = $face_supp1_surf_froide_enduit = $face_supp1_surf_froide_enduit_seul = $face_supp1_surf_froide_isol_enduit = $face_supp1_hauteur_isol = $face_supp1_nbr_gonds_reinst = $face_supp1_mur_rue = $face_supp1_orient = $commentaires_face_supp1 = "";
    $face_supp2_rep1 = $face_supp2_rep2 = $face_supp2_rep3 = $face_supp2_rep4 = $photos_face_supp2 = $face_supp2_rail_dep = $face_supp2_couronnement = $face_supp2_descente_ep = $face_supp2_nbr_gonds = $face_supp2_ml = $face_supp2_surf_chaud = $face_supp2_surf_froide_enduit = $face_supp2_surf_froide_enduit_seul = $face_supp2_surf_froide_isol_enduit = $face_supp2_hauteur_isol = $face_supp2_nbr_gonds_reinst = $face_supp2_mur_rue = $face_supp2_orient = $commentaires_face_supp2 = "";
    $face_supp3_rep1 = $face_supp3_rep2 = $face_supp3_rep3 = $face_supp3_rep4 = $photos_face_supp3 = $face_supp3_rail_dep = $face_supp3_couronnement = $face_supp3_descente_ep = $face_supp3_nbr_gonds = $face_supp3_ml = $face_supp3_surf_chaud = $face_supp3_surf_froide_enduit = $face_supp3_surf_froide_enduit_seul = $face_supp3_surf_froide_isol_enduit = $face_supp3_hauteur_isol = $face_supp3_nbr_gonds_reinst = $face_supp3_mur_rue = $face_supp3_orient = $commentaires_face_supp3 = "";
    $firstnameError = $nameError = $villeError = $code_postalError = $adresseError = $annee_construcError = $altitudeError = $surfaceError = $facade_princError = $nbr_niveau_totError = $nbr_niveau_chaufError = $nbr_prsn_foyerError = $photos_maisonError = $photos_environnementError = $epaisseur_isolant_plancher_hautError = $resistance_plancher_hautError = $annee_pose_isol_plancher_hautError = $epaisseur_isolant_mur_exterError = $resistance_mur_exterError = $annee_pose_isol_mur_exterError = $presence_isolError = $epaisseur_isolant_plancher_basError = $resistance_plancher_basError = $annee_pose_isol_plancher_basError = "";
    $emailTo = "abdenourgarti22@gmail.com";

    if (isset($_POST['contact'])) { 
        $firstname = test_input($_POST["firstname"]);
        $name = test_input($_POST["name"]);
        $ville = test_input($_POST["ville"]);
        $code_postal = test_input($_POST["code-postal"]);
        $adresse = test_input($_POST["adresse"]);
        $annee_construc = test_input($_POST["annee-construc"]);
        $altitude = test_input($_POST["altitude"]);
        $surface = test_input($_POST["surface"]);
        $facade_princ = test_input($_POST["facade-princ"]);
        $nbr_niveau_tot = test_input($_POST["nbr-niveau-tot"]);
        $nbr_niveau_chauf = test_input($_POST["nbr-niveau-chauf"]);
        $nbr_prsn_foyer = test_input($_POST["nbr-prsn-foyer"]);
        
        
        $carac_plafonds = test_input($_POST["carac-plafonds"]);
        
        $carac_placher = test_input($_POST["carac-placher"]);
        $enfouis_sous_sol = test_input($_POST["enfouis-sous-sol"]);
        $enfouis_batiment = test_input($_POST["enfouis-batiment"]);
        $form_batiment = test_input($_POST["form-batiment"]);
        $compos_murs_exter = test_input($_POST["compos-murs-exter"]);
        $epaisseur_mur = test_input($_POST["epaisseur-mur"]);
        $presence_isol = test_input($_POST["presence-isol"]);
        $epaisseur_isolant_mur_exter = test_input($_POST["epaisseur-isolant-mur-exter"]);
        $resistance_mur_exter = test_input($_POST["resistance-mur-exter"]);
        $annee_pose_isol_mur_exter = test_input($_POST["annee-pose-isol-mur-exter"]);
        $commentaires_mur_extr = test_input($_POST["commentaires-mur-extr"]);
        $presence_mitoy = test_input($_POST["presence-mitoy"]);
        $compos_plancher_haut = test_input($_POST["compos-plancher-haut"]);
        $epaisseur_plancher_haut = test_input($_POST["epaisseur-plancher-haut"]);
        $presence_isol_plancher_haut = test_input($_POST["presence-isol-plancher-haut"]);
        $epaisseur_isolant_plancher_haut = test_input($_POST["epaisseur-isolant-plancher-haut"]);
        $resistance_plancher_haut = test_input($_POST["resistance-plancher-haut"]);
        $annee_pose_isol_plancher_haut = test_input($_POST["annee-pose-isol-plancher-haut"]);
        $plancher_haut_surf_isol = test_input($_POST["plancher-haut-surf-isol"]);
        $plancher_haut_type_isol = test_input($_POST["plancher-haut-type-isol"]);
        $commentaires_plancher_pls_type = test_input($_POST["commentaires-plancher-pls-type"]);
        $acces_comble = test_input($_POST["acces-comble"]);
        $dimensions_trap = test_input($_POST["dimensions-trap"]);
        $longueur_tuyau = test_input($_POST["longueur-tuyau"]);
        $tour_trap = test_input($_POST["tour-trap"]);
        $tour_chemine = test_input($_POST["tour-chemine"]);
        $sport_boitier_etc = test_input($_POST["sport-boitier-etc"]);
        $commentaires_plancher_haut_comble = test_input($_POST["commentaires-plancher-haut-comble"]);
        $compos_placher_bas_chauf = test_input($_POST["compos-placher-bas-chauf"]);
        $epaisseur_plancher_bas = test_input($_POST["epaisseur-plancher-bas"]);
        $presence_isol_plancher_bas = test_input($_POST["presence-isol-plancher-bas"]);
        $epaisseur_isolant_plancher_bas = test_input($_POST["epaisseur-isolant-plancher-bas"]);
        $resistance_plancher_bas = test_input($_POST["resistance-plancher-bas"]);
        $annee_pose_isol_plancher_bas = test_input($_POST["annee-pose-isol-plancher-bas"]);
        $plancher_bas_surf_isol = test_input($_POST["plancher-bas-surf-isol"]);
        $type_surf_isol = test_input($_POST["type-surf-isol"]);
        $hauteur_plancher_bas = test_input($_POST["hauteur-plancher-bas"]);
        $commentaires_plancher_bas_chauf = test_input($_POST["commentaires-plancher-bas-chauf"]);

        $face_avant_rep1  = test_input($_POST["face-avant-rep1"]);
        $face_avant_rep2  = test_input($_POST["face-avant-rep2"]);
        $face_avant_rep3  = test_input($_POST["face-avant-rep3"]);
        $face_avant_rep4  = test_input($_POST["face-avant-rep4"]);
        
        $face_avant_rail_dep  = test_input($_POST["face-avant-rail-dep"]);
        $face_avant_couronnement  = test_input($_POST["face-avant-couronnement"]);
        $face_avant_descente_ep  = test_input($_POST["face-avant-descente-ep"]);
        $face_avant_nbr_gonds  = test_input($_POST["face-avant-nbr-gonds"]);
        $face_avant_ml  = test_input($_POST["face-avant-ml"]);
        $face_avant_surf_chaud  = test_input($_POST["face-avant-surf-chaud"]);
        $face_avant_surf_froide_enduit  = test_input($_POST["face-avant-surf-froide-enduit"]);
        $face_avant_surf_froide_enduit_seul  = test_input($_POST["face-avant-surf-froide-enduit-seul"]);
        $face_avant_surf_froide_isol_enduit  = test_input($_POST["face-avant-surf-froide-isol-enduit"]);
        $face_avant_hauteur_isol  = test_input($_POST["face-avant-hauteur-isol"]);
        $face_avant_nbr_gonds_reinst  = test_input($_POST["face-avant-nbr-gonds-reinst"]);
        $face_avant_mur_rue  = test_input($_POST["face-avant-mur-rue"]);
        $face_avant_orient  = test_input($_POST["face-avant-orient"]);
        $commentaires_face_avant  = test_input($_POST["commentaires-face-avant"]);

        $face_gauche_rep1  = test_input($_POST["face-gauche-rep1"]);
        $face_gauche_rep2  = test_input($_POST["face-gauche-rep2"]);
        $face_gauche_rep3  = test_input($_POST["face-gauche-rep3"]);
        $face_gauche_rep4  = test_input($_POST["face-gauche-rep4"]);
        
        $face_gauche_rail_dep  = test_input($_POST["face-gauche-rail-dep"]);
        $face_gauche_couronnement  = test_input($_POST["face-gauche-couronnement"]);
        $face_gauche_descente_ep  = test_input($_POST["face-gauche-descente-ep"]);
        $face_gauche_nbr_gonds  = test_input($_POST["face-gauche-nbr-gonds"]);
        $face_gauche_ml  = test_input($_POST["face-gauche-ml"]);
        $face_gauche_surf_chaud  = test_input($_POST["face-gauche-surf-chaud"]);
        $face_gauche_surf_froide_enduit  = test_input($_POST["face-gauche-surf-froide-enduit"]);
        $face_gauche_surf_froide_enduit_seul  = test_input($_POST["face-gauche-surf-froide-enduit-seul"]);
        $face_gauche_surf_froide_isol_enduit  = test_input($_POST["face-gauche-surf-froide-isol-enduit"]);
        $face_gauche_hauteur_isol  = test_input($_POST["face-gauche-hauteur-isol"]);
        $face_gauche_nbr_gonds_reinst  = test_input($_POST["face-gauche-nbr-gonds-reinst"]);
        $face_gauche_mur_rue  = test_input($_POST["face-gauche-mur-rue"]);
        $face_gauche_orient  = test_input($_POST["face-gauche-orient"]);
        $commentaires_face_gauche  = test_input($_POST["commentaires-face-gauche"]);

        $face_droite_rep1  = test_input($_POST["face-droite-rep1"]);
        $face_droite_rep2  = test_input($_POST["face-droite-rep2"]);
        $face_droite_rep3  = test_input($_POST["face-droite-rep3"]);
        $face_droite_rep4  = test_input($_POST["face-droite-rep4"]);
        
        $face_droite_rail_dep  = test_input($_POST["face-droite-rail-dep"]);
        $face_droite_couronnement  = test_input($_POST["face-droite-couronnement"]);
        $face_droite_descente_ep  = test_input($_POST["face-droite-descente-ep"]);
        $face_droite_nbr_gonds  = test_input($_POST["face-droite-nbr-gonds"]);
        $face_droite_ml  = test_input($_POST["face-droite-ml"]);
        $face_droite_surf_chaud  = test_input($_POST["face-droite-surf-chaud"]);
        $face_droite_surf_froide_enduit  = test_input($_POST["face-droite-surf-froide-enduit"]);
        $face_droite_surf_froide_enduit_seul  = test_input($_POST["face-droite-surf-froide-enduit-seul"]);
        $face_droite_surf_froide_isol_enduit  = test_input($_POST["face-droite-surf-froide-isol-enduit"]);
        $face_droite_hauteur_isol  = test_input($_POST["face-droite-hauteur-isol"]);
        $face_droite_nbr_gonds_reinst  = test_input($_POST["face-droite-nbr-gonds-reinst"]);
        $face_droite_mur_rue  = test_input($_POST["face-droite-mur-rue"]);
        $face_droite_orient  = test_input($_POST["face-droite-orient"]);
        $commentaires_face_droite  = test_input($_POST["commentaires-face-droite"]);

        $face_arriere_rep1  = test_input($_POST["face-arriere-rep1"]);
        $face_arriere_rep2  = test_input($_POST["face-arriere-rep2"]);
        $face_arriere_rep3  = test_input($_POST["face-arriere-rep3"]);
        $face_arriere_rep4  = test_input($_POST["face-arriere-rep4"]);
        
        $face_arriere_rail_dep  = test_input($_POST["face-arriere-rail-dep"]);
        $face_arriere_couronnement  = test_input($_POST["face-arriere-couronnement"]);
        $face_arriere_descente_ep  = test_input($_POST["face-arriere-descente-ep"]);
        $face_arriere_nbr_gonds  = test_input($_POST["face-arriere-nbr-gonds"]);
        $face_arriere_ml  = test_input($_POST["face-arriere-ml"]);
        $face_arriere_surf_chaud  = test_input($_POST["face-arriere-surf-chaud"]);
        $face_arriere_surf_froide_enduit  = test_input($_POST["face-arriere-surf-froide-enduit"]);
        $face_arriere_surf_froide_enduit_seul  = test_input($_POST["face-arriere-surf-froide-enduit-seul"]);
        $face_arriere_surf_froide_isol_enduit  = test_input($_POST["face-arriere-surf-froide-isol-enduit"]);
        $face_arriere_hauteur_isol  = test_input($_POST["face-arriere-hauteur-isol"]);
        $face_arriere_nbr_gonds_reinst  = test_input($_POST["face-arriere-nbr-gonds-reinst"]);
        $face_arriere_mur_rue  = test_input($_POST["face-arriere-mur-rue"]);
        $face_arriere_orient  = test_input($_POST["face-arriere-orient"]);
        $commentaires_face_arriere  = test_input($_POST["commentaires-face-arriere"]);

        $face_supp1_rep1  = test_input($_POST["face-supp1-rep1"]);
        $face_supp1_rep2  = test_input($_POST["face-supp1-rep2"]);
        $face_supp1_rep3  = test_input($_POST["face-supp1-rep3"]);
        $face_supp1_rep4  = test_input($_POST["face-supp1-rep4"]);
        
        $face_supp1_rail_dep  = test_input($_POST["face-supp1-rail-dep"]);
        $face_supp1_couronnement  = test_input($_POST["face-supp1-couronnement"]);
        $face_supp1_descente_ep  = test_input($_POST["face-supp1-descente-ep"]);
        $face_supp1_nbr_gonds  = test_input($_POST["face-supp1-nbr-gonds"]);
        $face_supp1_ml  = test_input($_POST["face-supp1-ml"]);
        $face_supp1_surf_chaud  = test_input($_POST["face-supp1-surf-chaud"]);
        $face_supp1_surf_froide_enduit  = test_input($_POST["face-supp1-surf-froide-enduit"]);
        $face_supp1_surf_froide_enduit_seul  = test_input($_POST["face-supp1-surf-froide-enduit-seul"]);
        $face_supp1_surf_froide_isol_enduit  = test_input($_POST["face-supp1-surf-froide-isol-enduit"]);
        $face_supp1_hauteur_isol  = test_input($_POST["face-supp1-hauteur-isol"]);
        $face_supp1_nbr_gonds_reinst  = test_input($_POST["face-supp1-nbr-gonds-reinst"]);
        $face_supp1_mur_rue  = test_input($_POST["face-supp1-mur-rue"]);
        $face_supp1_orient  = test_input($_POST["face-supp1-orient"]);
        $commentaires_face_supp1  = test_input($_POST["commentaires-face-supp1"]);

        $face_supp2_rep1  = test_input($_POST["face-supp2-rep1"]);
        $face_supp2_rep2  = test_input($_POST["face-supp2-rep2"]);
        $face_supp2_rep3  = test_input($_POST["face-supp2-rep3"]);
        $face_supp2_rep4  = test_input($_POST["face-supp2-rep4"]);
        
        $face_supp2_rail_dep  = test_input($_POST["face-supp2-rail-dep"]);
        $face_supp2_couronnement  = test_input($_POST["face-supp2-couronnement"]);
        $face_supp2_descente_ep  = test_input($_POST["face-supp2-descente-ep"]);
        $face_supp2_nbr_gonds  = test_input($_POST["face-supp2-nbr-gonds"]);
        $face_supp2_ml  = test_input($_POST["face-supp2-ml"]);
        $face_supp2_surf_chaud  = test_input($_POST["face-supp2-surf-chaud"]);
        $face_supp2_surf_froide_enduit  = test_input($_POST["face-supp2-surf-froide-enduit"]);
        $face_supp2_surf_froide_enduit_seul  = test_input($_POST["face-supp2-surf-froide-enduit-seul"]);
        $face_supp2_surf_froide_isol_enduit  = test_input($_POST["face-supp2-surf-froide-isol-enduit"]);
        $face_supp2_hauteur_isol  = test_input($_POST["face-supp2-hauteur-isol"]);
        $face_supp2_nbr_gonds_reinst  = test_input($_POST["face-supp2-nbr-gonds-reinst"]);
        $face_supp2_mur_rue  = test_input($_POST["face-supp2-mur-rue"]);
        $face_supp2_orient  = test_input($_POST["face-supp2-orient"]);
        $commentaires_face_supp2  = test_input($_POST["commentaires-face-supp2"]);

        $face_supp3_rep1  = test_input($_POST["face-supp3-rep1"]);
        $face_supp3_rep2  = test_input($_POST["face-supp3-rep2"]);
        $face_supp3_rep3  = test_input($_POST["face-supp3-rep3"]);
        $face_supp3_rep4  = test_input($_POST["face-supp3-rep4"]);
        
        $face_supp3_rail_dep  = test_input($_POST["face-supp3-rail-dep"]);
        $face_supp3_couronnement  = test_input($_POST["face-supp3-couronnement"]);
        $face_supp3_descente_ep  = test_input($_POST["face-supp3-descente-ep"]);
        $face_supp3_nbr_gonds  = test_input($_POST["face-supp3-nbr-gonds"]);
        $face_supp3_ml  = test_input($_POST["face-supp3-ml"]);
        $face_supp3_surf_chaud  = test_input($_POST["face-supp3-surf-chaud"]);
        $face_supp3_surf_froide_enduit  = test_input($_POST["face-supp3-surf-froide-enduit"]);
        $face_supp3_surf_froide_enduit_seul  = test_input($_POST["face-supp3-surf-froide-enduit-seul"]);
        $face_supp3_surf_froide_isol_enduit  = test_input($_POST["face-supp3-surf-froide-isol-enduit"]);
        $face_supp3_hauteur_isol  = test_input($_POST["face-supp3-hauteur-isol"]);
        $face_supp3_nbr_gonds_reinst  = test_input($_POST["face-supp3-nbr-gonds-reinst"]);
        $face_supp3_mur_rue  = test_input($_POST["face-supp3-mur-rue"]);
        $face_supp3_orient  = test_input($_POST["face-supp3-orient"]);
        $commentaires_face_supp3  = test_input($_POST["commentaires-face-supp3"]);

        $commentaires_ite = test_input($_POST["commentaires_ite"]);
        $totat_surf_chaud = test_input($_POST["totat_surf_chaud"]);
        $totat_surf_froid_enduit = test_input($_POST["totat_surf_froid_enduit"]);
        $totat_surf_froid_isol_enduit = test_input($_POST["totat_surf_froid_isol_enduit"]);
        $totat_ml_cournement_toit = test_input($_POST["totat_ml_cournement_toit"]);
        $totat_nbr_gonds_reinst = test_input($_POST["totat_nbr_gonds_reinst"]);
        $totat_ml_convert = test_input($_POST["totat_ml_convert"]);
        $choix_coloris = test_input($_POST["choix_coloris"]);
        $change_color = test_input($_POST["change_color"]);
        $pompe_chaleur = test_input($_POST["pompe_chaleur"]);
        $espace_dispo_deriere = test_input($_POST["espace_dispo_deriere"]);
        $ventouse_evacuat = test_input($_POST["ventouse_evacuat"]);
        $demande_intervent_enedis = test_input($_POST["demande_intervent_enedis"]);
        $necessite_prevenir_voisin = test_input($_POST["necessite_prevenir_voisin"]);
        $mur_limite_accord_mairie = test_input($_POST["mur_limite_accord_mairie"]);
        $acces_chantier = test_input($_POST["acces_chantier"]);
        $commentaires_travaux_ite = test_input($_POST["commentaires_travaux_ite"]);
        
        $messageError = "Ne doit pas etre vide !";
        $isSuccess = true; 
        $emailText = "";

        /*------------------------ les images ----------------------------------*/
        
        $messageErrorExtension = "Extentions autorisées 'png' ou 'jpeg'";
        $extensions_files_autorisees = array('.png', '.PNG', '.jpg', '.JPG');
        if (isset($_FILES['photos-maison'])) {
            if(!empty($_FILES['photos-maison'])){
                $files = $_FILES['photos-maison'];
                $total_files = count($files['name']);
                
                for ($i = 0; $i < $total_files; $i++) {
                    $photos_maison_name = $files['name'][$i];
                    $photos_maison_extension = strtolower(strrchr($photos_maison_name, '.'));
                    $photos_maison_tmp_name = $files['tmp_name'][$i];
                    $photos_maison_dest = 'files/photos-maison/' . $photos_maison_name;

                    if (in_array($photos_maison_extension, $extensions_files_autorisees)) {
                        if (move_uploaded_file($photos_maison_tmp_name, $photos_maison_dest)) {
                            echo 'Fichier ' . $photos_maison_name . ' envoyé avec succès<br>';
                        } else {
                            echo "Le fichier " . $photos_maison_name . " n'a pas pu être envoyé<br>";
                        }
                    } else {
                        $photos_maisonError = $messageErrorExtension;
                        $isSuccess = false;
                    }
                }
            
            }
            // $photos_maison_name = $_FILES['photos-maison']['name'];
            // $photos_maison_extension = strrchr($photos_maison_name, '.');
            // $photos_maison_tmp_name = $_FILES['photos-maison']['tmp_name'];
            // $photos_maison_dest = 'files/'. $photos_maison_name;
            // if(in_array($photos_maison_extension, $extensions_files_autorisees)){
            //     if(move_uploaded_file($photos_maison_tmp_name, $photos_maison_dest)){
            //         echo 'fichier envoyer';
            //     }else {echo "n'est pas envoye";}
            // }else{
            //     $photos_maisonError = $messageErrorExtension;
            //     $isSuccess = false;
            // }
        }
        if (isset($_FILES['photos-environnement'])) {
            
                $files = $_FILES['photos-environnement'];
                $total_files = count($files['name']);
                if($total_files > 0){    
                    for ($i = 0; $i < $total_files; $i++) {
                        $photos_environnement_name = $files['name'][$i];
                        $photos_environnement_extension = strtolower(strrchr($photos_environnement_name, '.'));
                        $photos_environnement_tmp_name = $files['tmp_name'][$i];
                        $photos_environnement_dest = 'files/photos-environnement/' . $photos_environnement_name;

                        if (in_array($photos_environnement_extension, $extensions_files_autorisees)) {
                            if (move_uploaded_file($photos_environnement_tmp_name, $photos_environnement_dest)) {
                                echo 'Fichier ' . $photos_environnement_name . ' envoyé avec succès<br>';
                            } else {
                                echo "Le fichier " . $photos_environnement_name . " n'a pas pu être envoyé<br>";
                            }
                        } else {
                            $photos_environnementError = $messageErrorExtension;
                            $isSuccess = false;
                        }
                    }
            }
            
        }
        if (isset($_FILES['img-carac-comble'])) {
            if(!empty($_FILES['img-carac-comble'])){
                $img_carac_comble_name = $_FILES['img-carac-comble']['name'];
                $img_carac_comble_extension = strrchr($img_carac_comble_name, '.');
                $img_carac_comble_tmp_name = $_FILES['img-carac-comble']['tmp_name'];
                $img_carac_comble_dest = 'files/img-carac-comble/'. $img_carac_comble_name;
                if(in_array($img_carac_comble_extension, $extensions_files_autorisees)){
                    if(move_uploaded_file($img_carac_comble_tmp_name, $img_carac_comble_dest)){
                        echo 'fichier envoyer';
                    }else {echo "n'est pas envoye";}
                }else{
                    $img_carac_combleError = $messageErrorExtension;
                    $isSuccess = false;
                }
            }
        }
        if (isset($_FILES['img-carac-plafonds'])) {
            if(!empty($_FILES['img-carac-plafonds'])){
                $img_carac_plafonds_name = $_FILES['img-carac-plafonds']['name'];
                $img_carac_plafonds_extension = strrchr($img_carac_plafonds_name, '.');
                $img_carac_plafonds_tmp_name = $_FILES['img-carac-plafonds']['tmp_name'];
                $img_carac_plafonds_dest = 'files/img-carac-plafonds/'. $img_carac_plafonds_name;
                if(in_array($img_carac_plafonds_extension, $extensions_files_autorisees)){
                    if(move_uploaded_file($img_carac_plafonds_tmp_name, $img_carac_plafonds_dest)){
                        echo 'fichier envoyer';
                    }else {echo "n'est pas envoye";}
                }else{
                    $img_carac_plafondsError = $messageErrorExtension;
                    $isSuccess = false;
                }
            }
            
        }
        
        if (isset($_FILES['photos-plancher-haut'])) {
            if(!empty($_FILES['photos-plancher-haut'])){
                $files = $_FILES['photos-plancher-haut'];
                $total_files = count($files['name']);
                
                for ($i = 0; $i < $total_files; $i++) {
                    $photos_plancher_haut_name = $files['name'][$i];
                    $photos_plancher_haut_extension = strtolower(strrchr($photos_plancher_haut_name, '.'));
                    $photos_plancher_haut_tmp_name = $files['tmp_name'][$i];
                    $photos_plancher_haut_dest = 'files/photos-plancher-haut/' . $photos_plancher_haut_name;

                    if (in_array($photos_plancher_haut_extension, $extensions_files_autorisees)) {
                        if (move_uploaded_file($photos_plancher_haut_tmp_name, $photos_plancher_haut_dest)) {
                            echo 'Fichier ' . $photos_plancher_haut_name . ' envoyé avec succès<br>';
                        } else {
                            echo "Le fichier " . $photos_plancher_haut_name . " n'a pas pu être envoyé<br>";
                        }
                    } else {
                        $photos_plancher_hautError = $messageErrorExtension;
                        $isSuccess = false;
                    }
                }
            }
        }
        if (isset($_FILES['photos-trap'])) {
            if(!empty($_FILES['photos-trap'])){
                $files = $_FILES['photos-trap'];
                $total_files = count($files['name']);
                
                for ($i = 0; $i < $total_files; $i++) {
                    $photos_trap_name = $files['name'][$i];
                    $photos_trap_extension = strtolower(strrchr($photos_trap_name, '.'));
                    $photos_trap_tmp_name = $files['tmp_name'][$i];
                    $photos_trap_dest = 'files/photos-trap/' . $photos_trap_name;

                    if (in_array($photos_trap_extension, $extensions_files_autorisees)) {
                        if (move_uploaded_file($photos_trap_tmp_name, $photos_trap_dest)) {
                            echo 'Fichier ' . $photos_trap_name . ' envoyé avec succès<br>';
                        } else {
                            echo "Le fichier " . $photos_trap_name . " n'a pas pu être envoyé<br>";
                        }
                    } else {
                        $photos_trapError = $messageErrorExtension;
                        $isSuccess = false;
                    }
                }
            }
        }
        if (isset($_FILES['photos-spots'])) {
            if(!empty($_FILES['photos-spots'])){
                $files = $_FILES['photos-spots'];
                $total_files = count($files['name']);
                
                for ($i = 0; $i < $total_files; $i++) {
                    $photos_spots_name = $files['name'][$i];
                    $photos_spots_extension = strtolower(strrchr($photos_spots_name, '.'));
                    $photos_spots_tmp_name = $files['tmp_name'][$i];
                    $photos_spots_dest = 'files/photos-spots/' . $photos_spots_name;

                    if (in_array($photos_spots_extension, $extensions_files_autorisees)) {
                        if (move_uploaded_file($photos_spots_tmp_name, $photos_spots_dest)) {
                            echo 'Fichier ' . $photos_spots_name . ' envoyé avec succès<br>';
                        } else {
                            echo "Le fichier " . $photos_spots_name . " n'a pas pu être envoyé<br>";
                        }
                    } else {
                        $photos_spotsError = $messageErrorExtension;
                        $isSuccess = false;
                    }
                }
            }
        }
        if (isset($_FILES['photos-acces-camion'])) {
            if(!empty($_FILES['photos-acces-camion'])){
                $files = $_FILES['photos-acces-camion'];
                $total_files = count($files['name']);
                
                for ($i = 0; $i < $total_files; $i++) {
                    $photos_acces_camion_name = $files['name'][$i];
                    $photos_acces_camion_extension = strtolower(strrchr($photos_acces_camion_name, '.'));
                    $photos_acces_camion_tmp_name = $files['tmp_name'][$i];
                    $photos_acces_camion_dest = 'files/photos-acces-camion/' . $photos_acces_camion_name;

                    if (in_array($photos_acces_camion_extension, $extensions_files_autorisees)) {
                        if (move_uploaded_file($photos_acces_camion_tmp_name, $photos_acces_camion_dest)) {
                            echo 'Fichier ' . $photos_acces_camion_name . ' envoyé avec succès<br>';
                        } else {
                            echo "Le fichier " . $photos_acces_camion_name . " n'a pas pu être envoyé<br>";
                        }
                    } else {
                        $photos_acces_camionError = $messageErrorExtension;
                        $isSuccess = false;
                    }
                }
            }
        }
        if (isset($_FILES['photos-plancher-bas'])) {
            if(!empty($_FILES['photos-plancher-bas'])){
                $files = $_FILES['photos-plancher-bas'];
                $total_files = count($files['name']);
                
                for ($i = 0; $i < $total_files; $i++) {
                    $photos_plancher_bas_name = $files['name'][$i];
                    $photos_plancher_bas_extension = strtolower(strrchr($photos_plancher_bas_name, '.'));
                    $photos_plancher_bas_tmp_name = $files['tmp_name'][$i];
                    $photos_plancher_bas_dest = 'files/photos-plancher-bas/' . $photos_plancher_bas_name;

                    if (in_array($photos_plancher_bas_extension, $extensions_files_autorisees)) {
                        if (move_uploaded_file($photos_plancher_bas_tmp_name, $photos_plancher_bas_dest)) {
                            echo 'Fichier ' . $photos_plancher_bas_name . ' envoyé avec succès<br>';
                        } else {
                            echo "Le fichier " . $photos_plancher_bas_name . " n'a pas pu être envoyé<br>";
                        }
                    } else {
                        $photos_plancher_basError = $messageErrorExtension;
                        $isSuccess = false;
                    }
                }
            }
        }
        if (isset($_FILES['photos-plan-niveau1'])) {
            if(!empty($_FILES['photos-plan-niveau1'])){
                $files = $_FILES['photos-plan-niveau1'];
                $total_files = count($files['name']);
                
                for ($i = 0; $i < $total_files; $i++) {
                    $photos_plan_niveau1_name = $files['name'][$i];
                    $photos_plan_niveau1_extension = strtolower(strrchr($photos_plan_niveau1_name, '.'));
                    $photos_plan_niveau1_tmp_name = $files['tmp_name'][$i];
                    $photos_plan_niveau1_dest = 'files/photos-plan-niveau1/' . $photos_plan_niveau1_name;

                    if (in_array($photos_plan_niveau1_extension, $extensions_files_autorisees)) {
                        if (move_uploaded_file($photos_plan_niveau1_tmp_name, $photos_plan_niveau1_dest)) {
                            echo 'Fichier ' . $photos_plan_niveau1_name . ' envoyé avec succès<br>';
                        } else {
                            echo "Le fichier " . $photos_plan_niveau1_name . " n'a pas pu être envoyé<br>";
                        }
                    } else {
                        $photos_plan_niveau1Error = $messageErrorExtension;
                        $isSuccess = false;
                    }
                }
            }
        }
        if (isset($_FILES['photos-plan-niveau2'])) {
            if(!empty($_FILES['photos-plan-niveau2'])){
                $files = $_FILES['photos-plan-niveau2'];
                $total_files = count($files['name']);
                
                for ($i = 0; $i < $total_files; $i++) {
                    $photos_plan_niveau2_name = $files['name'][$i];
                    $photos_plan_niveau2_extension = strtolower(strrchr($photos_plan_niveau2_name, '.'));
                    $photos_plan_niveau2_tmp_name = $files['tmp_name'][$i];
                    $photos_plan_niveau2_dest = 'files/photos-plan-niveau2/' . $photos_plan_niveau2_name;

                    if (in_array($photos_plan_niveau2_extension, $extensions_files_autorisees)) {
                        if (move_uploaded_file($photos_plan_niveau2_tmp_name, $photos_plan_niveau2_dest)) {
                            echo 'Fichier ' . $photos_plan_niveau2_name . ' envoyé avec succès<br>';
                        } else {
                            echo "Le fichier " . $photos_plan_niveau2_name . " n'a pas pu être envoyé<br>";
                        }
                    } else {
                        $photos_plan_niveau2Error = $messageErrorExtension;
                        $isSuccess = false;
                    }
                }
            }
        }
        if (isset($_FILES['photos-plan-niveau3'])) {
            if(!empty($_FILES['photos-plan-niveau3'])){
                $files = $_FILES['photos-plan-niveau3'];
                $total_files = count($files['name']);
                
                for ($i = 0; $i < $total_files; $i++) {
                    $photos_plan_niveau3_name = $files['name'][$i];
                    $photos_plan_niveau3_extension = strtolower(strrchr($photos_plan_niveau3_name, '.'));
                    $photos_plan_niveau3_tmp_name = $files['tmp_name'][$i];
                    $photos_plan_niveau3_dest = 'files/photos-plan-niveau3/' . $photos_plan_niveau3_name;

                    if (in_array($photos_plan_niveau3_extension, $extensions_files_autorisees)) {
                        if (move_uploaded_file($photos_plan_niveau3_tmp_name, $photos_plan_niveau3_dest)) {
                            echo 'Fichier ' . $photos_plan_niveau3_name . ' envoyé avec succès<br>';
                        } else {
                            echo "Le fichier " . $photos_plan_niveau3_name . " n'a pas pu être envoyé<br>";
                        }
                    } else {
                        $photos_plan_niveau3Error = $messageErrorExtension;
                        $isSuccess = false;
                    }
                }
            }
        }
        if (isset($_FILES['photos-face-avant'])) {
            if(!empty($_FILES['photos-face-avant'])){
                $photos_face_avant_name = $_FILES['photos-face-avant']['name'];
                $photos_face_avant_extension = strrchr($photos_face_avant_name, '.');
                $photos_face_avant_tmp_name = $_FILES['photos-face-avant']['tmp_name'];
                $photos_face_avant_dest = 'files/photos-face-avant/'. $photos_face_avant_name;
                if(in_array($photos_face_avant_extension, $extensions_files_autorisees)){
                    if(move_uploaded_file($photos_face_avant_tmp_name, $photos_face_avant_dest)){
                        echo 'fichier envoyer';
                    }else {echo "n'est pas envoye";}
                }else{
                    $photos_face_avantError = $messageErrorExtension;
                    $isSuccess = false;
                }
            }
        }
        if (isset($_FILES['photos-face-gauche'])) {
            if(!empty($_FILES['photos-face-gauche'])){
                $photos_face_gauche_name = $_FILES['photos-face-gauche']['name'];
                $photos_face_gauche_extension = strrchr($photos_face_gauche_name, '.');
                $photos_face_gauche_tmp_name = $_FILES['photos-face-gauche']['tmp_name'];
                $photos_face_gauche_dest = 'files/photos-face-gauche/'. $photos_face_gauche_name;
                if(in_array($photos_face_gauche_extension, $extensions_files_autorisees)){
                    if(move_uploaded_file($photos_face_gauche_tmp_name, $photos_face_gauche_dest)){
                        echo 'fichier envoyer';
                    }else {echo "n'est pas envoye";}
                }else{
                    $photos_face_gaucheError = $messageErrorExtension;
                    $isSuccess = false;
                }
            }
        }
        if (isset($_FILES['photos-face-droite'])) {
            if(!empty($_FILES['photos-face-droite'])){
                $photos_face_droite_name = $_FILES['photos-face-droite']['name'];
                $photos_face_droite_extension = strrchr($photos_face_droite_name, '.');
                $photos_face_droite_tmp_name = $_FILES['photos-face-droite']['tmp_name'];
                $photos_face_droite_dest = 'files/photos-face-droite/'. $photos_face_droite_name;
                if(in_array($photos_face_droite_extension, $extensions_files_autorisees)){
                    if(move_uploaded_file($photos_face_droite_tmp_name, $photos_face_droite_dest)){
                        echo 'fichier envoyer';
                    }else {echo "n'est pas envoye";}
                }else{
                    $photos_face_droiteError = $messageErrorExtension;
                    $isSuccess = false;
                }
            }
        }
        if (isset($_FILES['photos-face-arriere'])) {
            if(!empty($_FILES['photos-face-arriere'])){
                $photos_face_arriere_name = $_FILES['photos-face-arriere']['name'];
                $photos_face_arriere_extension = strrchr($photos_face_arriere_name, '.');
                $photos_face_arriere_tmp_name = $_FILES['photos-face-arriere']['tmp_name'];
                $photos_face_arriere_dest = 'files/photos-face-arriere/'. $photos_face_arriere_name;
                if(in_array($photos_face_arriere_extension, $extensions_files_autorisees)){
                    if(move_uploaded_file($photos_face_arriere_tmp_name, $photos_face_arriere_dest)){
                        echo 'fichier envoyer';
                    }else {echo "n'est pas envoye";}
                }else{
                    $photos_face_arriereError = $messageErrorExtension;
                    $isSuccess = false;
                }
            }
        }
        if (isset($_FILES['photos-face-supp1'])) {
            if(!empty($_FILES['photos-face-supp1'])){
                $photos_face_supp1_name = $_FILES['photos-face-supp1']['name'];
                $photos_face_supp1_extension = strrchr($photos_face_supp1_name, '.');
                $photos_face_supp1_tmp_name = $_FILES['photos-face-supp1']['tmp_name'];
                $photos_face_supp1_dest = 'files/photos-face-supp1/'. $photos_face_supp1_name;
                if(in_array($photos_face_supp1_extension, $extensions_files_autorisees)){
                    if(move_uploaded_file($photos_face_supp1_tmp_name, $photos_face_supp1_dest)){
                        echo 'fichier envoyer';
                    }else {echo "n'est pas envoye";}
                }else{
                    $photos_face_supp1Error = $messageErrorExtension;
                    $isSuccess = false;
                }
            }
        }
        if (isset($_FILES['photos-face-supp2'])) {
            if(!empty($_FILES['photos-face-supp2'])){
                $photos_face_supp2_name = $_FILES['photos-face-supp2']['name'];
                $photos_face_supp2_extension = strrchr($photos_face_supp2_name, '.');
                $photos_face_supp2_tmp_name = $_FILES['photos-face-supp2']['tmp_name'];
                $photos_face_supp2_dest = 'files/photos-face-supp2/'. $photos_face_supp2_name;
                if(in_array($photos_face_supp2_extension, $extensions_files_autorisees)){
                    if(move_uploaded_file($photos_face_supp2_tmp_name, $photos_face_supp2_dest)){
                        echo 'fichier envoyer';
                    }else {echo "n'est pas envoye";}
                }else{
                    $photos_face_supp2Error = $messageErrorExtension;
                    $isSuccess = false;
                }
            }
        }
        if (isset($_FILES['photos-face-supp3'])) {
            if(!empty($_FILES['photos-face-supp3'])){
                $photos_face_supp3_name = $_FILES['photos-face-supp3']['name'];
                $photos_face_supp3_extension = strrchr($photos_face_supp3_name, '.');
                $photos_face_supp3_tmp_name = $_FILES['photos-face-supp3']['tmp_name'];
                $photos_face_supp3_dest = 'files/photos-face-supp3/'. $photos_face_supp3_name;
                if(in_array($photos_face_supp3_extension, $extensions_files_autorisees)){
                    if(move_uploaded_file($photos_face_supp3_tmp_name, $photos_face_supp3_dest)){
                        echo 'fichier envoyer';
                    }else {echo "n'est pas envoye";}
                }else{
                    $photos_face_supp3Error = $messageErrorExtension;
                    $isSuccess = false;
                }
            }
        }
        
        /*$photos_environnement = test_input($_FILES["photos-environnement"]["name"]);
        $img_carac_comble = test_input($_FILES["img-carac-comble"]["name"]);
        $img_carac_plafonds = test_input($_FILES["img-carac-plafonds"]["name"]);
        $photos_plancher_haut = test_input($_POST["photos-plancher-haut"]);
        $photos_trap = test_input($_POST["photos-trap"]);
        $photos_spots = test_input($_POST["photos-spots"]);
        $photos_acces_camion = test_input($_POST["photos-acces-camion"]);
        $photos_plancher_bas = test_input($_POST["photos-plancher-bas"]);
        $photos_plan_niveau1 = test_input($_POST["photos-plan-niveau1"]);
        $photos_plan_niveau2 = test_input($_POST["photos-plan-niveau2"]);
        $photos_plan_niveau3 = test_input($_POST["photos-plan-niveau3"]);
        $photos_face_avant  = test_input($_POST["photos-face-avant"]);
        $photos_face_gauche  = test_input($_POST["photos-face-gauche"]);
        $photos_face_droite  = test_input($_POST["photos-face-droite"]);
        $photos_face_deriere  = test_input($_POST["photos-face-deriere"]);
        $photos_face_supp1  = test_input($_POST["photos-face-supp1"]);
        $photos_face_supp2  = test_input($_POST["photos-face-supp2"]);
        $photos_face_supp3  = test_input($_POST["photos-face-supp3"]);
        if (empty($photos_maison)) {
            $photos_maisonError = $messageError;
            $isSuccess = false; 
        } else {
            $emailText .= "photos_maison: {$photos_maison}\n";
        }
        if (empty($photos_environnement)) {
            $photos_environnementError = $messageError;
            $isSuccess = false; 
        } else {
            $emailText .= "photos_environnement: {$photos_environnement}\n";
        }
        if (!empty($img_carac_comble)) {
            $emailText .= $img_carac_comble . "\n";
        } 
        if (!empty($img_carac_plafonds)) {
            $emailText .= $img_carac_plafonds . "\n";
        } 
        if (!empty($photos_plancher_haut)) {
            $emailText .= $photos_plancher_haut . "\n";
        } 
        if (!empty($photos_trap)) {
                    $emailText .= $photos_trap . "\n";
                } 
        if (!empty($photos_spots)) {
                    $emailText .= $photos_spots . "\n";
                } 
        if (!empty($photos_acces_camion)) {
            $emailText .= $photos_acces_camion . "\n";
        } 
        if (!empty($photos_face_supp2)) {
            $emailText .= $photos_face_supp2 . "\n";
        }
        if (!empty($photos_face_supp3)) {
            $emailText .= $photos_face_supp3 . "\n";
        }
        if (!empty($photos_face_supp1)) {
            $emailText .= $photos_face_supp1 . "\n";
        }
        if (!empty($photos_face_arriere)) {
            $emailText .= $photos_face_arriere . "\n";
        }
        if (!empty($photos_face_droite)) {
            $emailText .= $photos_face_droite . "\n";
        }
        if (!empty($photos_face_gauche)) {
            $emailText .= $photos_face_gauche . "\n";
        }
        if (!empty($photos_face_avant)) {
            $emailText .= $photos_face_avant . "\n";
        }
        if (!empty($photos_plancher_bas)) {
            $emailText .= $photos_plancher_bas . "\n";
        }
        if (!empty($photos_plan_niveau1)) {
            $emailText .= $photos_plan_niveau1 . "\n";
        }
        if (!empty($photos_plan_niveau2)) {
            $emailText .= $photos_plan_niveau2 . "\n";
        }
        if (!empty($photos_plan_niveau3)) {
            $emailText .= $photos_plan_niveau3 . "\n";
        }
        
        */







        if (empty($firstname)) {
            $firstnameError = $messageError;
            $isSuccess = false; 
        } else {
            $emailText .= "Firstname: {$firstname}\n";
        }

        if (empty($name)) {
            $nameError = $messageError;
            $isSuccess = false; 
        } else {
            $emailText .= "Name: {$name}\n";
        }

        if (empty($ville)) {
            $villeError = $messageError;
            $isSuccess = false; 
        } else {
            $emailText .= "ville: {$ville}\n";
        }
        if (empty($code_postal)) {
            $code_postalError = $messageError;
            $isSuccess = false; 
        } else {
            $emailText .= "code_postal: {$code_postal}\n";
        }
        if (empty($adresse)) {
            $adresseError = $messageError;
            $isSuccess = false; 
        } else {
            $emailText .= "adresse: {$adresse}\n";
        }
        if (empty($annee_construc)) {
            $annee_construcError = $messageError;
            $isSuccess = false; 
        } else {
            $emailText .= "annee_construc: {$annee_construc}\n";
        }
        if (empty($altitude)) {
            $altitudeError = $messageError;
            $isSuccess = false; 
        } else {
            $emailText .= "altitude: {$altitude}\n";
        }
        if (empty($surface)) {
            $surfaceError = $messageError;
            $isSuccess = false; 
        } else {
            $emailText .= "surface: {$surface}\n";
        }
        if (empty($facade_princ)) {
            $facade_princError = $messageError;
            $isSuccess = false; 
        } else {
            $emailText .= "facade_princ: {$facade_princ}\n";
        }
        if (empty($nbr_niveau_tot)) {
            $nbr_niveau_totError = $messageError;
            $isSuccess = false; 
        } else {
            $emailText .= "nbr_niveau_tot: {$nbr_niveau_tot}\n";
        }
        if (empty($nbr_niveau_chauf)) {
            $nbr_niveau_chaufError = $messageError;
            $isSuccess = false; 
        } else {
            $emailText .= "nbr_niveau_chauf: {$nbr_niveau_chauf}\n";
        }
        if (empty($nbr_prsn_foyer)) {
            $nbr_prsn_foyerError = $messageError;
            $isSuccess = false; 
        } else {
            $emailText .= "nbr_prsn_foyer: {$nbr_prsn_foyer}\n";
        }
       
        if (!empty($carac_plafonds)) {
            $emailText .= $carac_plafonds . "\n";
        } 
        
        if (!empty($carac_placher)) {
            $emailText .= $carac_placher . "\n";
        } 
        if (!empty($enfouis_sous_sol)) {
            $emailText .= $enfouis_sous_sol . "\n";
        } 
        if (!empty($enfouis_batiment)) {
            $emailText .= $enfouis_batiment . "\n";
        } 
        if (!empty($form_batiment)) {
            $emailText .= $form_batiment . "\n";
        } 
        if (!empty($compos_murs_exter)) {
            $emailText .= $compos_murs_exter . "\n";
        } 
        if (!empty($epaisseur_mur)) {
            $emailText .= $epaisseur_mur . "\n";
        } 
        if (!empty($presence_isol)) {
            $emailText .= $presence_isol . "\n";
            if($presence_isol_plancher_haut == "Oui"){
                if (!empty($epaisseur_isolant_mur_exter)) {
                    $emailText .= $epaisseur_isolant_mur_exter . "\n";
                }else{
                    $epaisseur_isolant_mur_exterError = "Si oui, " . $messageError; 
                    $isSuccess = false;
                }
                if (!empty($resistance_mur_exter)) {
                    $emailText .= $resistance_mur_exter . "\n";
                }else{
                    $resistance_mur_exterError ="Si oui, " . $messageError;
                    $isSuccess = false;
                }
                if (!empty($annee_pose_isol_mur_exter)) {
                    $emailText .= $annee_pose_isol_mur_exter . "\n";
                }else{
                    $annee_pose_isol_mur_exterError ="Si oui, " . $messageError;
                    $isSuccess = false;
                }
            }
        }else{
            $presence_isolError = $messageError;
            $isSuccess = false;
        }
          
        if (!empty($commentaires_mur_extr)) {
            $emailText .= $commentaires_mur_extr . "\n";
        } 
        if (!empty($presence_mitoy)) {
            $emailText .= $presence_mitoy . "\n";
        } 
        if (!empty($compos_plancher_haut)) {
            $emailText .= $compos_plancher_haut . "\n";
        }
        if (!empty($epaisseur_plancher_haut)) {
            $emailText .= $epaisseur_plancher_haut . "\n";
        }
        if (!empty($presence_isol_plancher_haut)) {
            $emailText .= $presence_isol_plancher_haut . "\n";
            if($presence_isol_plancher_haut == "Oui"){
                if (!empty($epaisseur_isolant_plancher_haut)) {
                    $emailText .= $epaisseur_isolant_plancher_haut . "\n";
                }else{
                    $epaisseur_isolant_plancher_hautError = "Si oui, " . $messageError;
                    $isSuccess = false;
                }
                if (!empty($resistance_plancher_haut)) {
                    $emailText .= $resistance_plancher_haut . "\n";
                }else{
                    $resistance_plancher_hautError = "Si oui, " . $messageError;
                    $isSuccess = false;
                }
                if (!empty($annee_pose_isol_plancher_haut)) {
                    $emailText .= $annee_pose_isol_plancher_haut . "\n";
                }else{
                    $annee_pose_isol_plancher_hautError = "Si oui, " . $messageError;
                    $isSuccess = false;
                }
            }
        }else{
            $presence_isol_plancher_hautError = $messageError;
            $isSuccess = false;
        }
        
        if (!empty($plancher_haut_surf_isol)) {
            $emailText .= $plancher_haut_surf_isol . "\n";
        }
        if (!empty($plancher_haut_type_isol)) {
            $emailText .= $plancher_haut_type_isol . "\n";
        }
        if (!empty($commentaires_plancher_pls_type)) {
            $emailText .= $commentaires_plancher_pls_type . "\n";
        }
        if (!empty($acces_comble)) {
            $emailText .= $acces_comble . "\n";
        }
        if (!empty($dimensions_trap)) {
            $emailText .= $dimensions_trap . "\n";
        }
        if (!empty($longueur_tuyau)) {
            $emailText .= $longueur_tuyau . "\n";
        }
        if (!empty($tour_trap)) {
            $emailText .= $tour_trap . "\n";
        }
        if (!empty($tour_chemine)) {
            $emailText .= $tour_chemine . "\n";
        }
        if (!empty($sport_boitier_etc)) {
            $emailText .= $sport_boitier_etc . "\n";
        }
        if (!empty($commentaires_plancher_haut_comble)) {
            $emailText .= $commentaires_plancher_haut_comble . "\n";
        }
        if (!empty($compos_placher_bas_chauf)) {
            $emailText .= $compos_placher_bas_chauf . "\n";
        }
        if (!empty($epaisseur_plancher_bas)) {
            $emailText .= $epaisseur_plancher_bas . "\n";
        }
        if (!empty($presence_isol_plancher_bas)) {
            $emailText .= $presence_isol_plancher_bas . "\n";
            if($presence_isol_plancher_bas == "Oui"){
                
                if (!empty($epaisseur_isolant_plancher_bas)) {
                    $emailText .= $epaisseur_isolant_plancher_bas . "\n";
                }else{
                    $epaisseur_isolant_plancher_basError = "Si oui, " . $messageError; 
                    $isSuccess = false;
                }
                if (!empty($resistance_plancher_bas)) {
                    $emailText .= $resistance_plancher_bas . "\n";
                }else{
                    $resistance_plancher_basError = "Si oui, " . $messageError; 
                    $isSuccess = false;
                }
                if (!empty($annee_pose_isol_plancher_bas)) {
                    $emailText .= $annee_pose_isol_plancher_bas . "\n";
                }else{
                    $annee_pose_isol_plancher_basError = "Si oui, " . $messageError; 
                    $isSuccess = false;
                }
            }
        }else{
            $presence_isol_plancher_basError = $messageError;
            $isSuccess = false;
        }
        
        if (!empty($plancher_bas_surf_isol)) {
            $emailText .= $plancher_bas_surf_isol . "\n";
        }
        if (!empty($type_surf_isol)) {
            $emailText .= $type_surf_isol . "\n";
        }
        if (!empty($hauteur_plancher_bas)) {
            $emailText .= $hauteur_plancher_bas . "\n";
        }
        if (!empty($commentaires_plancher_bas_chauf)) {
            $emailText .= $commentaires_plancher_bas_chauf . "\n";
        }
        
        if (!empty($face_avant_rep1)) {
            $emailText .= $face_avant_rep1 . "\n";
        }
        if (!empty($face_avant_rep2)) {
            $emailText .= $face_avant_rep2 . "\n";
        }
        if (!empty($face_avant_rep3)) {
            $emailText .= $face_avant_rep3 . "\n";
        }
        if (!empty($face_avant_rep4)) {
            $emailText .= $face_avant_rep4 . "\n";
        }
        
        if (!empty($face_avant_rail_dep)) {
            $emailText .= $face_avant_rail_dep . "\n";
        }
        if (!empty($face_avant_couronnement)) {
            $emailText .= $face_avant_couronnement . "\n";
        }
        if (!empty($face_avant_descente_ep)) {
            $emailText .= $face_avant_descente_ep . "\n";
        }
        if (!empty($face_avant_nbr_gonds)) {
            $emailText .= $face_avant_nbr_gonds . "\n";
        }
        if (!empty($face_avant_ml)) {
            $emailText .= $face_avant_ml . "\n";
        }
        if (!empty($face_avant_surf_chaud)) {
            $emailText .= $face_avant_surf_chaud . "\n";
        }
        if (!empty($face_avant_surf_froide_enduit)) {
            $emailText .= $face_avant_surf_froide_enduit . "\n";
        }
        if (!empty($face_avant_surf_froide_enduit_seul)) {
            $emailText .= $face_avant_surf_froide_enduit_seul . "\n";
        }
        if (!empty($face_avant_surf_froide_isol_enduit)) {
            $emailText .= $face_avant_surf_froide_isol_enduit . "\n";
        }
        if (!empty($face_avant_hauteur_isol)) {
            $emailText .= $face_avant_hauteur_isol . "\n";
        }
        if (!empty($face_avant_nbr_gonds_reinst)) {
            $emailText .= $face_avant_nbr_gonds_reinst . "\n";
        }
        if (!empty($face_avant_mur_rue)) {
            $emailText .= $face_avant_mur_rue . "\n";
        }
        if (!empty($face_avant_orient)) {
            $emailText .= $face_avant_orient . "\n";
        }
        if (!empty($commentaires_face_avant)) {
            $emailText .= $commentaires_face_avant . "\n";
        }

        if (!empty($face_gauche_rep1)) {
            $emailText .= $face_gauche_rep1 . "\n";
        }
        if (!empty($face_gauche_rep2)) {
            $emailText .= $face_gauche_rep2 . "\n";
        }
        if (!empty($face_gauche_rep3)) {
            $emailText .= $face_gauche_rep3 . "\n";
        }
        if (!empty($face_gauche_rep4)) {
            $emailText .= $face_gauche_rep4 . "\n";
        }
        
        if (!empty($face_gauche_rail_dep)) {
            $emailText .= $face_gauche_rail_dep . "\n";
        }
        if (!empty($face_gauche_couronnement)) {
            $emailText .= $face_gauche_couronnement . "\n";
        }
        if (!empty($face_gauche_descente_ep)) {
            $emailText .= $face_gauche_descente_ep . "\n";
        }
        if (!empty($face_gauche_nbr_gonds)) {
            $emailText .= $face_gauche_nbr_gonds . "\n";
        }
        if (!empty($face_gauche_ml)) {
            $emailText .= $face_gauche_ml . "\n";
        }
        if (!empty($face_gauche_surf_chaud)) {
            $emailText .= $face_gauche_surf_chaud . "\n";
        }
        if (!empty($face_gauche_surf_froide_enduit)) {
            $emailText .= $face_gauche_surf_froide_enduit . "\n";
        }
        if (!empty($face_gauche_surf_froide_enduit_seul)) {
            $emailText .= $face_gauche_surf_froide_enduit_seul . "\n";
        }
        if (!empty($face_gauche_surf_froide_isol_enduit)) {
            $emailText .= $face_gauche_surf_froide_isol_enduit . "\n";
        }
        if (!empty($face_gauche_hauteur_isol)) {
            $emailText .= $face_gauche_hauteur_isol . "\n";
        }
        if (!empty($face_gauche_nbr_gonds_reinst)) {
            $emailText .= $face_gauche_nbr_gonds_reinst . "\n";
        }
        if (!empty($face_gauche_mur_rue)) {
            $emailText .= $face_gauche_mur_rue . "\n";
        }
        if (!empty($face_gauche_orient)) {
            $emailText .= $face_gauche_orient . "\n";
        }
        if (!empty($commentaires_face_gauche)) {
            $emailText .= $commentaires_face_gauche . "\n";
        }

        if (!empty($face_droite_rep1)) {
            $emailText .= $face_droite_rep1 . "\n";
        }
        if (!empty($face_droite_rep2)) {
            $emailText .= $face_droite_rep2 . "\n";
        }
        if (!empty($face_droite_rep3)) {
            $emailText .= $face_droite_rep3 . "\n";
        }
        if (!empty($face_droite_rep4)) {
            $emailText .= $face_droite_rep4 . "\n";
        }
        
        if (!empty($face_droite_rail_dep)) {
            $emailText .= $face_droite_rail_dep . "\n";
        }
        if (!empty($face_droite_couronnement)) {
            $emailText .= $face_droite_couronnement . "\n";
        }
        if (!empty($face_droite_descente_ep)) {
            $emailText .= $face_droite_descente_ep . "\n";
        }
        if (!empty($face_droite_nbr_gonds)) {
            $emailText .= $face_droite_nbr_gonds . "\n";
        }
        if (!empty($face_droite_ml)) {
            $emailText .= $face_droite_ml . "\n";
        }
        if (!empty($face_droite_surf_chaud)) {
            $emailText .= $face_droite_surf_chaud . "\n";
        }
        if (!empty($face_droite_surf_froide_enduit)) {
            $emailText .= $face_droite_surf_froide_enduit . "\n";
        }
        if (!empty($face_droite_surf_froide_enduit_seul)) {
            $emailText .= $face_droite_surf_froide_enduit_seul . "\n";
        }
        if (!empty($face_droite_surf_froide_isol_enduit)) {
            $emailText .= $face_droite_surf_froide_isol_enduit . "\n";
        }
        if (!empty($face_droite_hauteur_isol)) {
            $emailText .= $face_droite_hauteur_isol . "\n";
        }
        if (!empty($face_droite_nbr_gonds_reinst)) {
            $emailText .= $face_droite_nbr_gonds_reinst . "\n";
        }
        if (!empty($face_droite_mur_rue)) {
            $emailText .= $face_droite_mur_rue . "\n";
        }
        if (!empty($face_droite_orient)) {
            $emailText .= $face_droite_orient . "\n";
        }
        if (!empty($commentaires_face_droite)) {
            $emailText .= $commentaires_face_droite . "\n";
        }

        if (!empty($face_arriere_rep1)) {
            $emailText .= $face_arriere_rep1 . "\n";
        }
        if (!empty($face_arriere_rep2)) {
            $emailText .= $face_arriere_rep2 . "\n";
        }
        if (!empty($face_arriere_rep3)) {
            $emailText .= $face_arriere_rep3 . "\n";
        }
        if (!empty($face_arriere_rep4)) {
            $emailText .= $face_arriere_rep4 . "\n";
        }
        
        if (!empty($face_arriere_rail_dep)) {
            $emailText .= $face_arriere_rail_dep . "\n";
        }
        if (!empty($face_arriere_couronnement)) {
            $emailText .= $face_arriere_couronnement . "\n";
        }
        if (!empty($face_arriere_descente_ep)) {
            $emailText .= $face_arriere_descente_ep . "\n";
        }
        if (!empty($face_arriere_nbr_gonds)) {
            $emailText .= $face_arriere_nbr_gonds . "\n";
        }
        if (!empty($face_arriere_ml)) {
            $emailText .= $face_arriere_ml . "\n";
        }
        if (!empty($face_arriere_surf_chaud)) {
            $emailText .= $face_arriere_surf_chaud . "\n";
        }
        if (!empty($face_arriere_surf_froide_enduit)) {
            $emailText .= $face_arriere_surf_froide_enduit . "\n";
        }
        if (!empty($face_arriere_surf_froide_enduit_seul)) {
            $emailText .= $face_arriere_surf_froide_enduit_seul . "\n";
        }
        if (!empty($face_arriere_surf_froide_isol_enduit)) {
            $emailText .= $face_arriere_surf_froide_isol_enduit . "\n";
        }
        if (!empty($face_arriere_hauteur_isol)) {
            $emailText .= $face_arriere_hauteur_isol . "\n";
        }
        if (!empty($face_arriere_nbr_gonds_reinst)) {
            $emailText .= $face_arriere_nbr_gonds_reinst . "\n";
        }
        if (!empty($face_arriere_mur_rue)) {
            $emailText .= $face_arriere_mur_rue . "\n";
        }
        if (!empty($face_arriere_orient)) {
            $emailText .= $face_arriere_orient . "\n";
        }
        if (!empty($commentaires_face_arriere)) {
            $emailText .= $commentaires_face_arriere . "\n";
        }

        if (!empty($face_supp1_rep1)) {
            $emailText .= $face_supp1_rep1 . "\n";
        }
        if (!empty($face_supp1_rep2)) {
            $emailText .= $face_supp1_rep2 . "\n";
        }
        if (!empty($face_supp1_rep3)) {
            $emailText .= $face_supp1_rep3 . "\n";
        }
        if (!empty($face_supp1_rep4)) {
            $emailText .= $face_supp1_rep4 . "\n";
        }
        
        if (!empty($face_supp1_rail_dep)) {
            $emailText .= $face_supp1_rail_dep . "\n";
        }
        if (!empty($face_supp1_couronnement)) {
            $emailText .= $face_supp1_couronnement . "\n";
        }
        if (!empty($face_supp1_descente_ep)) {
            $emailText .= $face_supp1_descente_ep . "\n";
        }
        if (!empty($face_supp1_nbr_gonds)) {
            $emailText .= $face_supp1_nbr_gonds . "\n";
        }
        if (!empty($face_supp1_ml)) {
            $emailText .= $face_supp1_ml . "\n";
        }
        if (!empty($face_supp1_surf_chaud)) {
            $emailText .= $face_supp1_surf_chaud . "\n";
        }
        if (!empty($face_supp1_surf_froide_enduit)) {
            $emailText .= $face_supp1_surf_froide_enduit . "\n";
        }
        if (!empty($face_supp1_surf_froide_enduit_seul)) {
            $emailText .= $face_supp1_surf_froide_enduit_seul . "\n";
        }
        if (!empty($face_supp1_surf_froide_isol_enduit)) {
            $emailText .= $face_supp1_surf_froide_isol_enduit . "\n";
        }
        if (!empty($face_supp1_hauteur_isol)) {
            $emailText .= $face_supp1_hauteur_isol . "\n";
        }
        if (!empty($face_supp1_nbr_gonds_reinst)) {
            $emailText .= $face_supp1_nbr_gonds_reinst . "\n";
        }
        if (!empty($face_supp1_mur_rue)) {
            $emailText .= $face_supp1_mur_rue . "\n";
        }
        if (!empty($face_supp1_orient)) {
            $emailText .= $face_supp1_orient . "\n";
        }
        if (!empty($commentaires_face_supp1)) {
            $emailText .= $commentaires_face_supp1 . "\n";
        }

        if (!empty($face_supp2_rep1)) {
            $emailText .= $face_supp2_rep1 . "\n";
        }
        if (!empty($face_supp2_rep2)) {
            $emailText .= $face_supp2_rep2 . "\n";
        }
        if (!empty($face_supp2_rep3)) {
            $emailText .= $face_supp2_rep3 . "\n";
        }
        if (!empty($face_supp2_rep4)) {
            $emailText .= $face_supp2_rep4 . "\n";
        }
        
        if (!empty($face_supp2_rail_dep)) {
            $emailText .= $face_supp2_rail_dep . "\n";
        }
        if (!empty($face_supp2_couronnement)) {
            $emailText .= $face_supp2_couronnement . "\n";
        }
        if (!empty($face_supp2_descente_ep)) {
            $emailText .= $face_supp2_descente_ep . "\n";
        }
        if (!empty($face_supp2_nbr_gonds)) {
            $emailText .= $face_supp2_nbr_gonds . "\n";
        }
        if (!empty($face_supp2_ml)) {
            $emailText .= $face_supp2_ml . "\n";
        }
        if (!empty($face_supp2_surf_chaud)) {
            $emailText .= $face_supp2_surf_chaud . "\n";
        }
        if (!empty($face_supp2_surf_froide_enduit)) {
            $emailText .= $face_supp2_surf_froide_enduit . "\n";
        }
        if (!empty($face_supp2_surf_froide_enduit_seul)) {
            $emailText .= $face_supp2_surf_froide_enduit_seul . "\n";
        }
        if (!empty($face_supp2_surf_froide_isol_enduit)) {
            $emailText .= $face_supp2_surf_froide_isol_enduit . "\n";
        }
        if (!empty($face_supp2_hauteur_isol)) {
            $emailText .= $face_supp2_hauteur_isol . "\n";
        }
        if (!empty($face_supp2_nbr_gonds_reinst)) {
            $emailText .= $face_supp2_nbr_gonds_reinst . "\n";
        }
        if (!empty($face_supp2_mur_rue)) {
            $emailText .= $face_supp2_mur_rue . "\n";
        }
        if (!empty($face_supp2_orient)) {
            $emailText .= $face_supp2_orient . "\n";
        }
        if (!empty($commentaires_face_supp2)) {
            $emailText .= $commentaires_face_supp2 . "\n";
        }

        if (!empty($face_supp3_rep1)) {
            $emailText .= $face_supp3_rep1 . "\n";
        }
        if (!empty($face_supp3_rep2)) {
            $emailText .= $face_supp3_rep2 . "\n";
        }
        if (!empty($face_supp3_rep3)) {
            $emailText .= $face_supp3_rep3 . "\n";
        }
        if (!empty($face_supp3_rep4)) {
            $emailText .= $face_supp3_rep4 . "\n";
        }
        
        if (!empty($face_supp3_rail_dep)) {
            $emailText .= $face_supp3_rail_dep . "\n";
        }
        if (!empty($face_supp3_couronnement)) {
            $emailText .= $face_supp3_couronnement . "\n";
        }
        if (!empty($face_supp3_descente_ep)) {
            $emailText .= $face_supp3_descente_ep . "\n";
        }
        if (!empty($face_supp3_nbr_gonds)) {
            $emailText .= $face_supp3_nbr_gonds . "\n";
        }
        if (!empty($face_supp3_ml)) {
            $emailText .= $face_supp3_ml . "\n";
        }
        if (!empty($face_supp3_surf_chaud)) {
            $emailText .= $face_supp3_surf_chaud . "\n";
        }
        if (!empty($face_supp3_surf_froide_enduit)) {
            $emailText .= $face_supp3_surf_froide_enduit . "\n";
        }
        if (!empty($face_supp3_surf_froide_enduit_seul)) {
            $emailText .= $face_supp3_surf_froide_enduit_seul . "\n";
        }
        if (!empty($face_supp3_surf_froide_isol_enduit)) {
            $emailText .= $face_supp3_surf_froide_isol_enduit . "\n";
        }
        if (!empty($face_supp3_hauteur_isol)) {
            $emailText .= $face_supp3_hauteur_isol . "\n";
        }
        if (!empty($face_supp3_nbr_gonds_reinst)) {
            $emailText .= $face_supp3_nbr_gonds_reinst . "\n";
        }
        if (!empty($face_supp3_mur_rue)) {
            $emailText .= $face_supp3_mur_rue . "\n";
        }
        if (!empty($face_supp3_orient)) {
            $emailText .= $face_supp3_orient . "\n";
        }
        if (!empty($commentaires_face_supp3)) {
            $emailText .= $commentaires_face_supp3 . "\n";
        }
        if (!empty($commentaires_ite)) {
            $emailText .= $commentaires_ite . "\n";
        } 
        if (!empty($totat_surf_chaud)) {
            $emailText .= $totat_surf_chaud . "\n";
        } 
        if (!empty($totat_surf_froid_enduit)) {
            $emailText .= $totat_surf_froid_enduit . "\n";
        } 
        if (!empty($totat_surf_froid_isol_enduit)) {
            $emailText .= $totat_surf_froid_isol_enduit . "\n";
        } 
        if (!empty($totat_ml_cournement_toit)) {
            $emailText .= $totat_ml_cournement_toit . "\n";
        } 
        if (!empty($totat_nbr_gonds_reinst)) {
            $emailText .= $totat_nbr_gonds_reinst . "\n";
        } 
        if (!empty($totat_ml_convert)) {
            $emailText .= $totat_ml_convert . "\n";
        } 
        if (!empty($choix_coloris)) {
            $emailText .= $choix_coloris . "\n";
        } 
        if (!empty($change_color)) {
            $emailText .= $change_color . "\n";
        } 
        if (!empty($pompe_chaleur)) {
            $emailText .= $pompe_chaleur . "\n";
        } 
        if (!empty($espace_dispo_deriere)) {
            $emailText .= $espace_dispo_deriere . "\n";
        } 
        if (!empty($ventouse_evacuat)) {
            $emailText .= $ventouse_evacuat . "\n";
        } 
        if (!empty($demande_intervent_enedis)) {
            $emailText .= $demande_intervent_enedis . "\n";
        } 
        if (!empty($necessite_prevenir_voisin)) {
            $emailText .= $necessite_prevenir_voisin . "\n";
        } 
        if (!empty($mur_limite_accord_mairie)) {
            $emailText .= $mur_limite_accord_mairie . "\n";
        } 
        if (!empty($acces_chantier)) {
            $emailText .= $acces_chantier . "\n";
        } 
        if (!empty($commentaires_travaux_ite)) {
            $emailText .= $commentaires_travaux_ite . "\n";
        } 


        function insertimages2td($data) {
            $folderPath = "files/".$data; 
            $files = scandir($folderPath);
            $files = array_diff($files, array('.', '..'));
            $numFiles = count($files);
            $b = 0;
            $td1 = $td2 = '<td class="td-image col-4">';
            $text1 = $text2 = "";
            foreach ($files as $file) {
                if($b < 5 ){
                    $text1 .= '<img class="img" src="files/'.$data.'/'.$file.'"><br>';
                    $b++;
                }else{
                    $text2 .= '<img class="img" src="files/'.$data.'/'.$file.'"><br>';
                    $b++;
                }
            }
            $td1 .= $text1 . '</td>';
            $td2 .= $text2 . '</td>';
            $return = $td1 . $td2;
            return $return;
        }
        function insertimages1td($data) {
            $folderPath = "files/".$data; 
            $files = scandir($folderPath);
            $files = array_diff($files, array('.', '..'));
            $numFiles = count($files);
            $b = 0;
            $td1 = '<td class="td-image col-4">';
            $text1 = "";
            foreach ($files as $file) {
                if($b < 5 ){
                    $text1 .= '<img class="img" src="files/'.$data.'/'.$file.'"><br>';
                    $b++;
                }
            }
            $td1 .= $text1 . '</td>';
           
            return $td1;
        }
        function insertimages3td($data) {
            $folderPath = "files/".$data; 
            $files = scandir($folderPath);
            $files = array_diff($files, array('.', '..'));
            $numFiles = count($files);
            $b = 0;
            $td1 = $td2 = $td3 = '<td class="td-image col-3">';
            $text1 = $text2 = $text3 = "";
            foreach ($files as $file) {
                if($b < 5 ){
                    $text1 .= '<img class="img" src="files/'.$data.'/'.$file.'"><br>';
                    $b++;
                }else{
                    if($b < 10){
                        $text2 .= '<img class="img" src="files/'.$data.'/'.$file.'"><br>';
                        $b++;
                    }else{
                        $text3 .= '<img class="img" src="files/'.$data.'/'.$file.'"><br>';
                        $b++;
                    }
                }
            }
            $td1 .= $text1 . '</td>';
            $td2 .= $text2 . '</td>';
            $td3 .= $text3 . '</td>';
            $return = $td1 . $td2 . $td3;
            return $return;
        }
        function insertimage($data) {
            $folderPath = "files/".$data; 
            $files = scandir($folderPath);
            $files = array_diff($files, array('.', '..'));
            $numFiles = count($files);
            $text = "";
            if($numFiles > 0){
                foreach ($files as $file) {      
                    $text .= '<img class="img" src="files/'.$data.'/'.$file.'"><br>';
                }
            }
            

            return $text;
        }
        function insertimageface($data) {
            $folderPath = "files/".$data; 
            $files = scandir($folderPath);
            $files = array_diff($files, array('.', '..'));
            $numFiles = count($files);
            $text = "";
            if($numFiles > 0){
                foreach ($files as $file) {      
                    $text .= '<img class="face-img" src="files/'.$data.'/'.$file.'"><br>';
                }
            }

            return $text;
        }
        
            
            function supprimfile($data){
                $directory = 'files/'. $data .'/';

                if (is_dir($directory)) {
                    $files = scandir($directory);
                    foreach ($files as $file) {
                        if ($file != '.' && $file != '..') {
                            unlink($directory . $file);
                        }
                    }
                    
                }
            }

            supprimfile("photos-maison");
            supprimfile("img-carac-comble");
            supprimfile("img-carac-plafonds");
            supprimfile("photos-acces-camion");
            supprimfile("photos-environnement");
            supprimfile("photos-face-avant");
            supprimfile("photos-face-gauche");
            supprimfile("photos-face-droite");
            supprimfile("photos-face-arriere");
            supprimfile("photos-face-supp1");
            supprimfile("photos-face-supp2");
            supprimfile("photos-face-supp3");
            supprimfile("photos-plan-niveau1");
            supprimfile("photos-plan-niveau2");
            supprimfile("photos-plan-niveau3");
            supprimfile("photos-plancher-bas");
            supprimfile("photos-plancher-haut");
            supprimfile("photos-spots");
            supprimfile("photos-trap");
            
        if($isSuccess) {
            
            $emailText .= $image . "\n";
            $headers = "From: " . $name . " " . $firstname;
            mail($emailTo, "Un message de votre site", $emailText, $headers);

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
                                <center><h1>Fiche Navette – Audit Energétique</h1></center>
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
                                    </div><br>
                                </div>
                                <br><br><br><br><br><br><br>
                                <ul class="ul">
                                    <li><h2>Isolation des murs par l’extérieur :</h2></li>
                                    <ul class="ul">
                                        <li>Commentaires ITE : '.$commentaires_ite.'</li>
                                        <li>Totaux ITE :</li>
                                        <li>Total surfaces surfaces chaudes (iso + enduit) : '.$totat_surf_chaud.'</li>
                                        <li>Total surfaces froides avec enduit seul : '.$totat_surf_froid_enduit.'</li>
                                        <li>Total surfaces froides isolant + enduit (pour éviter décroché) : </li>
                                        <li>Total Ml couronnement de toit : </li>
                                        <li>Total nombre de gonds à réinstaller : </li>
                                        <li>Total Ml convertines : </li>
                                        <li>Descriptif travaux ITE :</li>
                                        <li>Choix du coloris (RAL) :</li>
                                        <li>Changement de la couleur existante : </li>
                                        <li>Pompe A Chaleur (groupe extérieur) : </li>
                                        <ul>
                                            <li>Si oui, nombre :</li>
                                            <li>Espace disponible derrière le groupe extérieur (cm) :</li>
                                            
                                        </ul>
                                        <li>Ventouse évacuation à prolonger : </li>
                                        <li>Demande intervention ENEDIS / France Télécom : </li>
                                        <li>Nécessité de prévenir le voisin : </li>
                                        <li>Mur en limite de voirie nécessitant accord de la mairie : </li>
                                        <li>Accès chantier : </li>
                                        <li>Commentaires :</li>
                                    </ul>
                                </ul>
                            
                        </body>
                    </html>';
            
            $dompdf->loadHtml($html);
            $dompdf->render();
            $dompdf->stream("formulaire.pdf");

            
        }
           
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Formulaire</h2>
            </div>
            
            <form id="contact-form" method="post" action="index.php" role="form" enctype="multipart/form-data">
                <div id="header" class="row"></div>
                <br>
                <div class="page" id="page1">
                    <div class="row">
                        <h3>Informations Client</h3>
                        <div>
                            <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                        </div><br>
                        <div class="col-lg-6">
                            <label for="name" class="form-label">Nom <span class="blue">*</span></label>
                            <input id="name" type="text" name="name" class="form-control" placeholder="Saisir Nom" value = "<?php echo $name;?>">
                            <p class="comments"><?php if($nameError != ""){echo $nameError;} ?></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="firstname" class="form-label">Prénom <span class="blue">*</span></label>
                            <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Saisir prénom" value = "<?php echo $firstname;?>">
                            <p class="comments"><?php if($firstnameError != ""){echo $firstnameError;} ?></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="ville" class="form-label">Ville <span class="blue">*</span></label>
                            <input id="ville" type="text" name="ville" class="form-control" placeholder="Saisir ville " value = "<?php echo $ville;?>">
                            <p class="comments"><?php if($villeError != ""){echo $villeError;} ?></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="code-postal" class="form-label">Code postal</label>
                            <input id="code-postal" type="text" name="code-postal" class="form-control" placeholder="Saisir code postal" value = "<?php echo $code_postal;?>">
                            <p class="comments"><?php if($code_postalError != ""){echo $code_postalError;} ?></p>
                        </div>
                        <div class="col-lg-12">
                            <label for="adresse" class="form-label">Adresse <span class="blue">*</span></label>
                            <input id="adresse" type="text" name="adresse" class="form-control" placeholder="Saisir adresse" value = "<?php echo $adresse;?>">
                            <p class="comments"><?php if($adresseError != ""){echo $adresseError;} ?></p>
                        </div>
                        <h3>Géneral</h3>
                        <div>
                            <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                        </div><br>
                        <div class="col-lg-4">
                            <label for="annee-construc" class="form-label">Année de construction <span class="blue">*</span></label>
                            <input id="annee-construc" type="number" name="annee-construc" class="form-control" placeholder="Saisir l'année" value = "<?php echo $annee_construc;?>">
                            <p class="comments"><?php if($annee_construcError != ""){echo $annee_construcError;} ?></p>
                        </div>
                        <div class="col-lg-4">
                            <label for="altitude" class="form-label">Altitude <span class="blue">*</span></label>
                            <input id="altitude" type="number" name="altitude" class="form-control" placeholder="Saisir altitude" value = "<?php echo $altitude;?>">
                            <p class="comments"><?php if($altitudeError != ""){echo $altitudeError;} ?></p>
                        </div>
                        <div class="col-lg-4">
                            <label for="surface" class="form-label">Surface <span class="blue">*</span></label>
                            <input id="surface" type="number" name="surface" class="form-control" placeholder="Saisir surface" value = "<?php echo $surface;?>">
                            <p class="comments"><?php if($surfaceError != ""){echo $surfaceError;} ?></p>
                        </div>
                        <div class="col-lg-12">
                            <label for="facade-princ" class="form-label">Orientation de la facade principal <span class="blue">*</span></label>
                            <select class="form-select" id="facade-princ" name="facade-princ" aria-label="Default select example">
                                <option value="nord">Nord</option>
                                <option value="sud">Sud</option>
                                <option value="est">Est</option>
                                <option value="ouest">Ouest</option>
                                <option value="nord-est">Nord-Est</option>
                                <option value="nord-ouest">Nord-Ouest</option>
                                <option value="sud-est">Sud-Est</option>
                                <option value="sud-ouest">Sud-Ouest</option>
                            </select>
                            <p class="comments"><?php if($facade_princError != ""){echo $facade_princ;} ?></p>
                        </div><br>
                        <div class="col-lg-4">
                            <label for="nbr-niveau-tot" class="form-label">Nombre de niveaux total <span class="blue">*</span></label>
                            <input id="nbr-niveau-tot" type="number" name="nbr-niveau-tot" class="form-control" placeholder="Saisir nombre de niveaux total" value = "<?php echo $nbr_niveau_tot;?>">
                            <p class="comments"><?php if($nbr_niveau_totError != ""){echo $nbr_niveau_totError;} ?></p>
                        </div>
                        <div class="col-lg-4">
                            <label for="nbr-niveau-chauf" class="form-label">Nombre de niveaux chauffés <span class="blue">*</span></label>
                            <input id="nbr-niveau-chauf" type="number" name="nbr-niveau-chauf" class="form-control" placeholder="Saisir nombre de niveaux chauffés" value = "<?php echo $nbr_niveau_chauf;?>">
                            <p class="comments"><?php if($nbr_niveau_chaufError != ""){echo $nbr_niveau_chaufError;} ?></p>
                        </div>
                        <div class="col-lg-4">
                            <label for="nbr-prsn-foyer" class="form-label">Nombre de personnes dans le foyer <span class="blue">*</span></label>
                            <input id="nbr-prsn-foyer" type="number" name="nbr-prsn-foyer" class="form-control" placeholder="Saisir nombre de personnes dans le foyer" value = "<?php echo $nbr_prsn_foyer;?>">
                            <p class="comments"><?php if($nbr_prsn_foyerError != ""){echo $nbr_prsn_foyerError;} ?></p>
                        </div>
                        <h3>Photos</h3>
                        <div>
                            <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                        </div><br>
                        <div class="mb-3">
                            <label for="photos-maison" class="form-label">Photos de maison <span class="blue">*</span></label>
                            <input class="form-control" type="file" name="photos-maison[]" multiple>
                            <p class="comments"><?php {echo $photos_maisonError;} ?></p>
                          </div>
                          <div class="mb-3">
                            <label for="photos-environnement" class="form-label">Photos d'environnement <span class="blue">*</span></label>
                            <input class="form-control" type="file" id="photos-environnement" name="photos-environnement[]" multiple>
                            <p class="comments"><?php {echo $photos_environnementError;} ?></p>
                          </div>
                        <br>

                        <div>
                            <button type="button" class="button1 next">Suivant <i class="bi bi-arrow-right-circle"></i></button>
                        </div>    
                    </div>
                </div>
                <div class="page" id="page2">
                    <div class="row">
                        <h3>Caractéristiques des combles et plancher</h3>
                        <div>
                            <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                        </div><br>
                        <div class="mb-3">
                            <label for="img-carac-comble" class="form-label">Images caractéristiques des combles et plancher <span class="blue">*</span></label>
                            <input class="form-control" type="file" id="img-carac-comble" name="img-carac-comble">
                            <p class="comments"><?php {echo $img_carac_combleError;} ?></p>
                        </div>
                        <div class="mb-3">
                            <label for="carac-plafonds" class="form-label">Caractéristiques des plafonds <span class="blue">*</span></label>
                            <input id="carac-plafonds" type="text" name="carac-plafonds" class="form-control" placeholder="Saisir Caractéristiques des plafonds" value = "<?php echo $carac_plafonds;?>">
                            <p class="comments"></p>
                            <input class="form-control" type="file" id="img-carac-plafonds" name="img-carac-plafonds">
                            <p class="comments"><?php {echo $img_carac_plafondsError;} ?></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="carac-placher" class="form-label">Caractéristique des planchers <span class="blue">*</span></label>
                            <input id="carac-placher" type="text" name="carac-placher" class="form-control" placeholder="Saisir Caractéristiques des planchers" value = "<?php echo $carac_placher;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="enfouis-sous-sol " class="form-label">Enfouissement du sous-sol  <span class="blue">*</span></label>
                            <input id="enfouis-sous-sol" type="text" name="enfouis-sous-sol" class="form-control" placeholder="Saisir caractéristiques d'enfouissement du sous-sol " value = "<?php echo $enfouis_sous_sol;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="enfouis-batiment " class="form-label">Enfouissement du bâtiment  <span class="blue">*</span></label>
                            <input id="enfouis-batiment" type="text" name="enfouis-batiment" class="form-control" placeholder="Saisir caractéristiques d'enfouissement du batiment " value = "<?php echo $enfouis_batiment;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="form-batiment" class="form-label">Forme du bâtiment <span class="blue">*</span></label>
                            <input id="form-batiment" type="text" name="form-batiment" class="form-control" placeholder="Saisir Forme du bâtiment" value = "<?php echo $form_batiment;?>">
                            <p class="comments"></p>
                        </div>
                        <h3>Déperdition surfacique</h3>
                        <div>
                            <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                        </div><br>
                        <div class="col-lg-6">
                            <label for="compos-murs-exter" class="form-label">Composition des murs extérieurs <span class="blue">*</span></label>
                            <input id="compos-murs-exter" type="text" name="compos-murs-exter" class="form-control" placeholder="Saisir Composition des murs extérieurs" value = "<?php echo $compos_murs_exter;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="epaisseur-mur" class="form-label">Epaisseur des murs (cm) <span class="blue">*</span></label>
                            <input id="epaisseur-mur" type="number" name="epaisseur-mur" class="form-control" placeholder="Saisir l'epaisseur des murs" value = "<?php echo $epaisseur_mur;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <label class="form-label">Présence isolation sur les murs intérieur et extérieur <span class="blue">*</span></label>
                        </div>
                        <div class="row col-lg-4 col-md-12">
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="presence-isol" id="presence-isol1" value="Oui" > Oui
                                
                            </div>
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="presence-isol" id="presence-isol2" value="Non" checked> Non
                                
                            </div>
                        </div>
                        
                        <label class="form-label">Si OUI, préciser <span class="blue">:</span></label>
                        <div class="col-lg-4">
                            <label for="epaisseur-isolant-mur-exter" class="form-label">L'épaisseur de l'isolant (mm) <span class="blue">*</span></label>
                            <input id="epaisseur-isolant-mur-exter" type="number" name="epaisseur-isolant-mur-exter" class="form-control" placeholder="Saisir l'épaisseur de l'isolant" value = "<?php echo $epaisseur_isolant_mur_exter;?>">
                            <p class="comments"><?php echo $epaisseur_isolant_mur_exterError; ?></p>
                        </div>
                        <div class="col-lg-4">
                            <label for="resistance-mur-exter" class="form-label">La résistance  <span class="blue">*</span></label>
                            <input id="resistance-mur-exter" type="text" name="resistance-mur-exter" class="form-control" placeholder="Saisir la résistance" value = "<?php echo $resistance_mur_exter;?>">
                            <p class="comments"><?php echo $resistance_mur_exterError; ?></p>
                        </div>
                        <div class="col-lg-4">
                            <label for="annee-pose-isol-mur-exter" class="form-label">L'année de la pose de l'isolation <span class="blue">*</span></label>
                            <input id="annee-pose-isol-mur-exter" type="number" name="annee-pose-isol-mur-exter" class="form-control" placeholder="Saisir L'année de la pose de l'isolation" value = "<?php echo $annee_pose_isol_mur_exter;?>">
                            <p class="comments"><?php echo $annee_pose_isol_mur_exterError; ?></p>
                        </div>
                        <div>
                            <label for="commentaires-mur-extr" class="form-label">Commentaires <span class="blue">*</span></label>
                            <textarea id="commentaires-mur-extr" name="commentaires-mur-extr" class="form-control" placeholder="Votre commentaires sur les murs extérieurs" rows="2"><?php echo $commentaires_mur_extr;?></textarea>
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-12">
                            <label for="presence-mitoy" class="form-label">Présence de mitoyenneté <span class="blue">*</span></label>
                            <input id="presence-mitoy" type="text" name="presence-mitoy" class="form-control" placeholder="Saisir la direction ou il y'a de mitoyenneté ex(nord, sud..)" value = "<?php echo $presence_mitoy;?>">
                            <p class="comments"></p>
                        </div>
                        
                        <div class="col-6">
                            <button type="button" class="button1 prev"><i class="bi bi-arrow-left-circle"></i> Précedant</button>
                            
                        </div>
                        <div class="col-6">
                            <button type="button" class="button1 next">Suivant <i class="bi bi-arrow-right-circle"></i></button>
                        </div>
                            
                    </div>
                    
                    
                </div>
                <div class="page" id="page3">
                    <div class="row">
                        <h3>Plancher haut des combles</h3>
                        <div>
                            <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                        </div><br>
                        <div class="col-lg-6">
                            <label for="compos-plancher-haut" class="form-label">Composition de Plancher Haut des combles <span class="blue">*</span></label>
                            <input id="compos-plancher-haut" type="text" name="compos-plancher-haut" class="form-control" placeholder="Saisir Composition de Plancher Haut des combles" value = "<?php echo $compos_plancher_haut;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="epaisseur-plancher-haut" class="form-label">Epaisseur du plancher haut des combles (cm) <span class="blue">*</span></label>
                            <input id="epaisseur-plancher-haut" type="number" name="epaisseur-plancher-haut" class="form-control" placeholder="Saisir Epaisseur du plancher haut" value = "<?php echo $epaisseur_plancher_haut;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <label class="form-label">Présence d'isolation sur les Plancher haut des combles <span class="blue">*</span></label>
                        </div>
                        <div class="row col-lg-4 col-md-12">
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="presence-isol-plancher-haut" id="presence-isol-plancher-haut1" value="Oui" > Oui
                            </div>
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="presence-isol-plancher-haut" id="presence-isol-plancher-haut2" value="Non" checked> Non    
                            </div>
                            
                        </div>
                        <label class="form-label">Si OUI, préciser <span class="blue">:</span></label>
                        <div class="col-lg-4">
                            <label for="epaisseur-isolant-plancher-haut" class="form-label">L'épaisseur de l'isolant (mm) <span class="blue">*</span></label>
                            <input id="epaisseur-isolant-plancher-haut" type="number" name="epaisseur-isolant-plancher-haut" class="form-control" placeholder="Saisir l'épaisseur de l'isolant" value = "<?php echo $epaisseur_isolant_plancher_haut;?>">
                            <p class="comments"><?php echo $epaisseur_isolant_plancher_hautError; ?></p>
                        </div>
                        <div class="col-lg-4">
                            <label for="resistance-plancher-haut" class="form-label">La résistance  <span class="blue">*</span></label>
                            <input id="resistance-plancher-haut" type="text" name="resistance-plancher-haut" class="form-control" placeholder="Saisir la résistance" value = "<?php echo $resistance_plancher_haut;?>">
                            <p class="comments"><?php echo $resistance_plancher_hautError; ?></p>
                        </div>
                        <div class="col-lg-4">
                            <label for="annee-pose-isol-plancher-haut" class="form-label">L'année de la pose de l'isolation <span class="blue">*</span></label>
                            <input id="annee-pose-isol-plancher-haut" type="number" name="annee-pose-isol-plancher-haut" class="form-control" placeholder="Saisir L'année de la pose de l'isolation" value = "<?php echo $annee_pose_isol_plancher_haut;?>">
                            <p class="comments"><?php echo $annee_pose_isol_plancher_hautError; ?></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="plancher-haut-surf-isol" class="form-label">Combles perdus - surface à isoler (m2) <span class="blue">*</span></label>
                            <input id="plancher-haut-surf-isol" type="number" name="plancher-haut-surf-isol" class="form-control" placeholder="Saisir Combles perdus - surface à isoler" value = "<?php echo $plancher_haut_surf_isol;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="plancher-haut-type-isol" class="form-label">Type d'isolant <span class="blue">*</span></label>
                            <input id="plancher-haut-type-isol" type="text" name="plancher-haut-type-isol" class="form-control" placeholder="Saisir Type d'isolant" value = "<?php echo $plancher_haut_type_isol;?>">
                            <p class="comments"></p>
                        </div>
                        <div>
                            <label for="commentaires-plancher-pls-type" class="form-label">Si plusieurs types d'isolant, commentaire <span class="blue">*</span></label>
                            <textarea id="commentaires-plancher-pls-type" name="commentaires-plancher-pls-type" class="form-control" placeholder="Votre commentaires sur les types d'isolant" rows="2"><?php echo $commentaires_plancher_pls_type;?></textarea>
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="acces-comble" class="form-label">Accès comble <span class="blue">*</span></label>
                            <input id="acces-comble" type="text" name="acces-comble" class="form-control" placeholder="Saisir Accès comble" value = "<?php echo $acces_comble;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="dimensions-trap" class="form-label">Dimensions de la trappe (cm) <span class="blue">*</span></label>
                            <input id="dimensions-trap" type="text" name="dimensions-trap" class="form-control" placeholder="Saisir les dimensions de la trappe" value = "<?php echo $dimensions_trap;?>">
                            <p class="comments"></p>
                        </div>
                        
                        <div class="col-lg-4">
                            <label for="longueur-tuyau" class="form-label">Longueur tuyau (m) <span class="blue">*</span></label>
                            <input id="longueur-tuyau" type="number" name="longueur-tuyau" class="form-control" placeholder="Saisir la longueur tuyau" value = "<?php echo $longueur_tuyau;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-4">
                            <label for="tour-trap" class="form-label">Tour de trappe à réaliser, nombre <span class="blue">*</span></label>
                            <input id="tour-trap" type="number" name="tour-trap" class="form-control" placeholder="Saisir le nombre de Tour de trappe à réaliser" value = "<?php echo $tour_trap;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-4">
                            <label for="tour-chemine" class="form-label">Tour de cheminée, nombre <span class="blue">*</span></label>
                            <input id="tour-chemine" type="number" name="tour-chemine" class="form-control" placeholder="Saisir le nombre de Tour de cheminée" value = "<?php echo $tour_chemine;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-5">
                            <label for="sport-boitier-etc" class="form-label">Spots, boîtiers de dérivation à proteger, nombre <span class="blue">*</span></label>
                            <input id="sport-boitier-etc" type="number" name="sport-boitier-etc" class="form-control" placeholder="Saisir le nombre Spots, boîtiers de dérivation à proteger" value = "<?php echo $sport_boitier_etc;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-7">
                            <label for="commentaires-plancher-haut-comble" class="form-label">Commentaires plancher haut des combles <span class="blue">*</span></label>
                            <textarea id="commentaires-plancher-haut-comble" name="commentaires-plancher-haut-comble" class="form-control" placeholder="Votre commentaires sur le plancher haut des combles" rows="2"><?php echo $commentaires_plancher_haut_comble;?></textarea>
                            <p class="comments"></p>
                        </div>
                        <div class="mb-3">
                            <label for="photos-plancher-haut" class="form-label">Photo(s) plancher haut des combles <span class="blue">*</span></label>
                            <input class="form-control" type="file" id="photos-plancher-haut" name="photos-plancher-haut[]" multiple>
                            <p class="comments"><?php echo $photos_plancher_hautError; ?></p>
                          </div>
                          <div class="mb-3">
                            <label for="photos-trap" class="form-label">Photo(s) trappe <span class="blue">*</span></label>
                            <input class="form-control" type="file" id="photos-trap" name="photos-trap[]" multiple>
                            <p class="comments"><?php echo $photos_trapError; ?></p>
                          </div>
                          <div class="mb-3">
                            <label for="photos-spots" class="form-label">Photo(s) spots ou boîtiers <span class="blue">*</span></label>
                            <input class="form-control" type="file" id="photos-spots" name="photos-spots[]" multiple>
                            <p class="comments"><?php echo $photos_spotsError; ?></p>
                          </div>
                          <div class="mb-3">
                            <label for="photos-acces-camion" class="form-label">Photo(s) accès camion <span class="blue">*</span></label>
                            <input class="form-control" type="file" id="photos-acces-camion" name="photos-acces-camion[]" multiple>
                            <p class="comments"><?php echo $photos_acces_camionError; ?></p>
                          </div>
                        <div class="col-6">
                            <button type="button" class="button1 prev"><i class="bi bi-arrow-left-circle"></i> Précedant</button>
                            
                        </div>
                        <div class="col-6">
                            <button type="button" class="button1 next">Suivant <i class="bi bi-arrow-right-circle"></i></button>
                        </div>     
                    </div>
                    
                    
                </div>
                <div class="page" id="page4">
                    <div class="row">
                        <h3>Plancher bas partie chauffée</h3>
                        <div class="col-lg-6">
                            <label for="compos-placher-bas-chauf" class="form-label">Composition de Plancher bas partie chauffée <span class="blue">*</span></label>
                            <input id="compos-placher-bas-chauf" type="text" name="compos-placher-bas-chauf" class="form-control" placeholder="Saisir Composition de Plancher bas partie chauffée" value = "<?php echo $compos_placher_bas_chauf;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="epaisseur-plancher-bas" class="form-label">Epaisseur plancher bas partie chauffée (cm) <span class="blue">*</span></label>
                            <input id="epaisseur-plancher-bas" type="number" name="epaisseur-plancher-bas" class="form-control" placeholder="Saisir caractéristiques d'enfouissement du sous-sol " value = "<?php echo $epaisseur_plancher_bas;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <label class="form-label">Présence d'isolation sur les planchers bas partie chauffée <span class="blue">*</span></label>
                        </div>
                        <div class="row col-lg-4 col-md-12">
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="presence-isol-plancher-bas" id="presence-isol-plancher-bas1" value="Oui" > Oui
                            </div>
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="presence-isol-plancher-bas" id="presence-isol-plancher-bas2" value="Non" checked> Non    
                            </div>
                            
                        </div>
                        <label class="form-label">Si OUI, préciser <span class="blue">:</span></label>
                        <div class="col-lg-4">
                            <label for="epaisseur-isolant-plancher-bas" class="form-label">L'épaisseur de l'isolant (mm) <span class="blue">*</span></label>
                            <input id="epaisseur-isolant-plancher-bas" type="number" name="epaisseur-isolant-plancher-bas" class="form-control" placeholder="Saisir l'épaisseur de l'isolant" value = "<?php echo $epaisseur_isolant_plancher_bas;?>">
                            <p class="comments"><?php echo $epaisseur_isolant_plancher_basError; ?></p>
                        </div>
                        <div class="col-lg-4">
                            <label for="resistance-plancher-bas" class="form-label">La résistance  <span class="blue">*</span></label>
                            <input id="resistance-plancher-bas" type="text" name="resistance-plancher-bas" class="form-control" placeholder="Saisir la résistance" value = "<?php echo $resistance_plancher_bas;?>">
                            <p class="comments"><?php echo $resistance_plancher_basError; ?></p>
                        </div>
                        <div class="col-lg-4">
                            <label for="annee-pose-isol-plancher-bas" class="form-label">L'année de la pose de l'isolation <span class="blue">*</span></label>
                            <input id="annee-pose-isol-plancher-bas" type="number" name="annee-pose-isol-plancher-bas" class="form-control" placeholder="Saisir L'année de la pose de l'isolation" value = "<?php echo $annee_pose_isol_plancher_bas;?>">
                            <p class="comments"><?php echo $annee_pose_isol_plancher_basError; ?></p>
                        </div>
                        <div class="col-lg-4">
                            <label for="plancher-bas-surf-isol" class="form-label">Planchers - surface à isoler (m2) <span class="blue">*</span></label>
                            <input id="plancher-bas-surf-isol" type="number" name="plancher-bas-surf-isol" class="form-control" placeholder="Saisir Planchers - surface à isoler" value = "<?php echo $plancher_bas_surf_isol;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-4">
                            <label for="type-surf-isol" class="form-label">Type de surface à isoler <span class="blue">*</span></label>
                            <input id="type-surf-isol" type="text" name="type-surf-isol" class="form-control" placeholder="Saisir Type de surface à isoler" value = "<?php echo $type_surf_isol;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-4">
                            <label for="hauteur-plancher-bas" class="form-label">Hauteur du ou des plancher bas (cm) <span class="blue">*</span></label>
                            <input id="hauteur-plancher-bas" type="number" name="hauteur-plancher-bas" class="form-control" placeholder="Saisir Hauteur du ou des plancher bas" value = "<?php echo $hauteur_plancher_bas;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-7">
                            <label for="commentaires-plancher-bas-chauf" class="form-label">Commentaires plancher bas partie chauffée <span class="blue">*</span></label>
                            <textarea id="commentaires-plancher-bas-chauf" name="commentaires-plancher-bas-chauf" class="form-control" placeholder="Votre commentaires sur le plancher bas partie chauffée" rows="2"><?php echo $commentaires_plancher_bas_chauf;?></textarea>
                            <p class="comments"></p>
                        </div>
                        <div class="mb-3">
                            <label for="photos-plancher-bas" class="form-label">Photo(s) plancher bas partie chauffée <span class="blue">*</span></label>
                            <input class="form-control" type="file" id="photos-plancher-bas" name="photos-plancher-bas[]" multiple>
                            <p class="comments"><?php echo $photos_plancher_basError; ?></p>
                          </div>
                          <h3>Plan de la maison</h3>
                          <div class="mb-3">
                            <label for="photos-plan-niveau1" class="form-label">Niveau 1 chauffé <span class="blue">*</span></label>
                            <input class="form-control" type="file" id="photos-plan-niveau1" name="photos-plan-niveau1[]" multiple>
                            <p class="comments"><?php echo $photos_plan_niveau1Error; ?></p>
                          </div>
                          <div class="mb-3">
                            <label for="photos-plan-niveau2" class="form-label">Niveau 2 chauffé <span class="blue">*</span></label>
                            <input class="form-control" type="file" id="photos-plan-niveau2" name="photos-plan-niveau2[]" multiple>
                            <p class="comments"><?php echo $photos_plan_niveau2Error; ?></p>
                          </div>
                          <div class="mb-3">
                            <label for="photos-plan-niveau3" class="form-label">Niveau 3 chauffé <span class="blue">*</span></label>
                            <input class="form-control" type="file" id="photos-plan-niveau3" name="photos-plan-niveau3[]" multiple>
                            <p class="comments"><?php echo $photos_plan_niveau3Error; ?></p>
                          </div>
                        
                        <div class="col-6">
                            <button type="button" class="button1 prev"><i class="bi bi-arrow-left-circle"></i> Précedant</button>
                            
                        </div>
                        <div class="col-6">
                            <button type="button" class="button1 next">Suivant <i class="bi bi-arrow-right-circle"></i></button>
                        </div>
                            
                    </div>
                    
                    
                </div>
                <div class="page" id="page5">
                    <div class="row">
                        <h3>Isolation des murs par l’extérieur</h3>
                        <div class="row face">
                            <center><h4 class="h4">Face Avant</h4></center>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-avant-rep1" class="form-label">Repère schéma 1 <span class="blue">*</span></label>
                                <input id="face-avant-rep1" type="text" name="face-avant-rep1" class="form-control" placeholder="Saisir Repère schéma 1" value = "<?php echo $face_avant_rep1;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-avant-rep2" class="form-label">Repère schéma 2 <span class="blue">*</span></label>
                                <input id="face-avant-rep2" type="text" name="face-avant-rep2" class="form-control" placeholder="Saisir Repère schéma 2" value = "<?php echo $face_avant_rep2;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-avant-rep3" class="form-label">Repère schéma 3 <span class="blue">*</span></label>
                                <input id="face-avant-rep3" type="text" name="face-avant-rep3" class="form-control" placeholder="Saisir Repère schéma 3" value = "<?php echo $face_avant_rep3;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-avant-rep4" class="form-label">Repère schéma 4 <span class="blue">*</span></label>
                                <input id="face-avant-rep4" type="text" name="face-avant-rep4" class="form-control" placeholder="Saisir Repère schéma 4" value = "<?php echo $face_avant_rep4;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="mb-3">
                                <label for="photos-face-avant" class="form-label">Photo face avant <span class="blue">*</span></label>
                                <input class="form-control" type="file" id="photos-face-avant" name="photos-face-avant">
                                <p class="comments"><?php echo $photos_face_avantError; ?></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-avant-rail-dep" class="form-label">Rail départ (cm)  <span class="blue">*</span></label>
                                <input id="face-avant-rail-dep" type="number" name="face-avant-rail-dep" class="form-control" placeholder="Saisir Rail départ" value = "<?php echo $face_avant_rail_dep;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-avant-couronnement" class="form-label">Couronnement toits (ml) <span class="blue">*</span></label>
                                <input id="face-avant-couronnement" type="number" name="face-avant-couronnement" class="form-control" placeholder="Saisir Couronnement toits" value = "<?php echo $face_avant_couronnement;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-avant-descente-ep" class="form-label">Descente EP  <span class="blue">*</span></label>
                                <input id="face-avant-descente-ep" type="text" name="face-avant-descente-ep" class="form-control" placeholder="Saisir Descente EP" value = "<?php echo $face_avant_descente_ep;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-avant-nbr-gonds" class="form-label">Total nombre de gonds <span class="blue">*</span></label>
                                <input id="face-avant-nbr-gonds" type="number" name="face-avant-nbr-gonds" class="form-control" placeholder="Saisir Total nombre de gonds" value = "<?php echo $face_avant_nbr_gonds;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-avant-ml-couvert" class="form-label">Ml couvertines <span class="blue">*</span></label>
                                <input id="face-avant-ml-couvert" type="number" name="face-avant-ml" class="form-control" placeholder="Saisir Ml couvertines" value = "<?php echo $face_avant_ml;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-avant-surf-chaud" class="form-label">Surface chaude (iso + enduit) <span class="blue">*</span></label>
                                <input id="face-avant-surf-chaud" type="number" name="face-avant-surf-chaud" class="form-control" placeholder="Saisir Surface chaude (iso + enduit)" value = "<?php echo $face_avant_surf_chaud;?>">
                                <p class="comments"></p>
                            </div>
                            
                            
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-avant-surf-froide-enduit" class="form-label">Surface froide Enduit seul ou Isolant + Enduit (pour éviter
                                    décroché)  <span class="blue">*</span></label>
                                <input id="face-avant-surf-froide-enduit" type="text" name="face-avant-surf-froide-enduit" class="form-control" placeholder="Saisir Surface froide Enduit seul ou Isolant + Enduit" value = "<?php echo $face_avant_surf_froide_enduit;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-avant-surf-froide-enduit-seul" class="form-label">Surface froide enduit seul <span class="blue">*</span></label>
                                <input id="face-avant-surf-froide-enduit-seul" type="number" name="face-avant-surf-froide-enduit-seul" class="form-control" placeholder="Saisir Surface froide enduit seul" value = "<?php echo $face_avant_surf_froide_enduit_seul;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-avant-surf-froide-isol-enduit" class="form-label">Surface froide Isolant + enduit <span class="blue">*</span></label>
                                <input id="face-avant-surf-froide-isol-enduit" type="number" name="face-avant-surf-froide-isol-enduit" class="form-control" placeholder="Saisir Surface froide Isolant + enduit" value = "<?php echo $face_avant_surf_froide_isol_enduit;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-avant-hauteur-isol" class="form-label">Hauteur de démarrage de l'isolation à faire (cm) <span class="blue">*</span></label>
                                <input id="face-avant-hauteur-isol" type="number" name="face-avant-hauteur-isol" class="form-control" placeholder="Saisir Hauteur de démarrage de l'isolation à faire" value = "<?php echo $face_avant_hauteur_isol;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-avant-nbr-gonds-reinst class="form-label">Nombre de gonds à réinstaller <span class="blue">*</span></label>
                                <input id="face-avant-nbr-gonds-reinst" type="number" name="face-avant-nbr-gonds-reinst" class="form-control" placeholder="Saisir Nombre de gonds à réinstaller" value = "<?php echo $face_avant_nbr_gonds_reinst;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label class="form-label">Mur sur rue <span class="blue">*</span></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="face-avant-mur-rue" id="face-avant-mur-rue1" value="Oui">
                                <label class="form-check-label" for="face-avant-mur-rue1">
                                  Oui
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="face-avant-mur-rue" id="face-avant-mur-rue2" value="Non" checked>
                                <label class="form-check-label" for="face-avant-mur-rue2">
                                  Non
                                </label>
                            </div>
                            </div>
                            <div class="col-lg-5">
                                <label for="face-avant-orient" class="form-label">Orientation de la face avant <span class="blue">*</span></label>
                                <select class="form-select" id="face-avant-orient" name="face-avant-orient" aria-label="Default select example">
                                    
                                    <option value="nord">Nord</option>
                                    <option value="sud">Sud</option>
                                    <option value="est">Est</option>
                                    <option value="ouest">Ouest</option>
                                    <option value="nord-est">Nord-Est</option>
                                    <option value="nord-ouest">Nord-Ouest</option>
                                    <option value="sud-est">Sud-Est</option>
                                    <option value="sud-ouest">Sud-Ouest</option>
                                </select><br>
                            </div>
                            <div class="col-lg-7">
                                <label for="commentaires-face-avant" class="form-label">Commentaires <span class="blue">*</span></label>
                                <textarea id="commentaires-face-avant" name="commentaires-face-avant" class="form-control" placeholder="Votre commentaires sur la face avant" rows="2"><?php echo $commentaires_face_avant;?></textarea>
                                <p class="comments"></p>
                            </div>
                        </div>

                                            
                        <div class="row face">
                            <center><h4 class="h4">Face Gauche</h4></center>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-gauche-rep1" class="form-label">Repère schéma 1 <span class="blue">*</span></label>
                                <input id="face-gauche-rep1" type="text" name="face-gauche-rep1" class="form-control" placeholder="Saisir Repère schéma 1" value = "<?php echo $face_gauche_rep1;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-gauche-rep2" class="form-label">Repère schéma 2 <span class="blue">*</span></label>
                                <input id="face-gauche-rep2" type="text" name="face-gauche-rep2" class="form-control" placeholder="Saisir Repère schéma 2" value = "<?php echo $face_gauche_rep2;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-gauche-rep3" class="form-label">Repère schéma 3 <span class="blue">*</span></label>
                                <input id="face-gauche-rep3" type="text" name="face-gauche-rep3" class="form-control" placeholder="Saisir Repère schéma 3" value = "<?php echo $face_gauche_rep3;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-gauche-rep4" class="form-label">Repère schéma 4 <span class="blue">*</span></label>
                                <input id="face-gauche-rep4" type="text" name="face-gauche-rep4" class="form-control" placeholder="Saisir Repère schéma 4" value = "<?php echo $face_gauche_rep4;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="mb-3">
                                <label for="photos-face-gauche" class="form-label">Photo face gauche <span class="blue">*</span></label>
                                <input class="form-control" type="file" id="photos-face-gauche" name="photos-face-gauche">
                                <p class="comments"><?php echo $photos_face_gaucheError; ?></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-gauche-rail-dep" class="form-label">Rail départ (cm)  <span class="blue">*</span></label>
                                <input id="face-gauche-rail-dep" type="number" name="face-gauche-rail-dep" class="form-control" placeholder="Saisir Rail départ" value = "<?php echo $face_gauche_rail_dep;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-gauche-couronnement" class="form-label">Couronnement toits (ml) <span class="blue">*</span></label>
                                <input id="face-gauche-couronnement" type="number" name="face-gauche-couronnement" class="form-control" placeholder="Saisir Couronnement toits" value = "<?php echo $face_gauche_couronnement;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-gauche-descente-ep" class="form-label">Descente EP  <span class="blue">*</span></label>
                                <input id="face-gauche-descente-ep" type="text" name="face-gauche-descente-ep" class="form-control" placeholder="Saisir Descente EP" value = "<?php echo $face_gauche_descente_ep;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-gauche-nbr-gonds" class="form-label">Total nombre de gonds <span class="blue">*</span></label>
                                <input id="face-gauche-nbr-gonds" type="number" name="face-gauche-nbr-gonds" class="form-control" placeholder="Saisir Total nombre de gonds" value = "<?php echo $face_gauche_nbr_gonds;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-gauche-ml-couvert" class="form-label">Ml couvertines <span class="blue">*</span></label>
                                <input id="face-gauche-ml-couvert" type="number" name="face-gauche-ml" class="form-control" placeholder="Saisir Ml couvertines" value = "<?php echo $face_gauche_ml;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-gauche-surf-chaud" class="form-label">Surface chaude (iso + enduit) <span class="blue">*</span></label>
                                <input id="face-gauche-surf-chaud" type="number" name="face-gauche-surf-chaud" class="form-control" placeholder="Saisir Surface chaude (iso + enduit)" value = "<?php echo $face_gauche_surf_chaud;?>">
                                <p class="comments"></p>
                            </div>
                            
                            
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-gauche-surf-froide-enduit" class="form-label">Surface froide Enduit seul ou Isolant + Enduit (pour éviter
                                    décroché)  <span class="blue">*</span></label>
                                <input id="face-gauche-surf-froide-enduit" type="text" name="face-gauche-surf-froide-enduit" class="form-control" placeholder="Saisir Surface froide Enduit seul ou Isolant + Enduit" value = "<?php echo $face_gauche_surf_froide_enduit;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-gauche-surf-froide-enduit-seul" class="form-label">Surface froide enduit seul <span class="blue">*</span></label>
                                <input id="face-gauche-surf-froide-enduit-seul" type="number" name="face-gauche-surf-froide-enduit-seul" class="form-control" placeholder="Saisir Surface froide enduit seul" value = "<?php echo $face_gauche_surf_froide_enduit_seul;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-gauche-surf-froide-isol-enduit" class="form-label">Surface froide Isolant + enduit <span class="blue">*</span></label>
                                <input id="face-gauche-surf-froide-isol-enduit" type="number" name="face-gauche-surf-froide-isol-enduit" class="form-control" placeholder="Saisir Surface froide Isolant + enduit" value = "<?php echo $face_gauche_surf_froide_isol_enduit;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-gauche-hauteur-isol" class="form-label">Hauteur de démarrage de l'isolation à faire (cm) <span class="blue">*</span></label>
                                <input id="face-gauche-hauteur-isol" type="number" name="face-gauche-hauteur-isol" class="form-control" placeholder="Saisir Hauteur de démarrage de l'isolation à faire" value = "<?php echo $face_gauche_hauteur_isol;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-gauche-nbr-gonds-reinst class="form-label">Nombre de gonds à réinstaller <span class="blue">*</span></label>
                                <input id="face-gauche-nbr-gonds-reinst" type="number" name="face-gauche-nbr-gonds-reinst" class="form-control" placeholder="Saisir Nombre de gonds à réinstaller" value = "<?php echo $face_gauche_nbr_gonds_reinst;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label class="form-label">Mur sur rue <span class="blue">*</span></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="face-gauche-mur-rue" id="face-gauche-mur-rue1" value="Oui">
                                <label class="form-check-label" for="face-gauche-mur-rue1">
                                  Oui
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="face-gauche-mur-rue" id="face-gauche-mur-rue2" value="Non" checked>
                                <label class="form-check-label" for="face-gauche-mur-rue2">
                                  Non
                                </label>
                            </div>
                            </div>
                            <div class="col-lg-5">
                                <label for="face-gauche-orient" class="form-label">Orientation de la face gauche <span class="blue">*</span></label>
                                <select class="form-select" id="face-gauche-orient" name="face-gauche-orient" aria-label="Default select example">
                                    
                                    <option value="nord">Nord</option>
                                    <option value="sud">Sud</option>
                                    <option value="est">Est</option>
                                    <option value="ouest">Ouest</option>
                                    <option value="nord-est">Nord-Est</option>
                                    <option value="nord-ouest">Nord-Ouest</option>
                                    <option value="sud-est">Sud-Est</option>
                                    <option value="sud-ouest">Sud-Ouest</option>
                                </select><br>
                            </div>
                            <div class="col-lg-7">
                                <label for="commentaires-face-gauche" class="form-label">Commentaires <span class="blue">*</span></label>
                                <textarea id="commentaires-face-gauche" name="commentaires-face-gauche" class="form-control" placeholder="Votre commentaires sur la face gauche" rows="2"><?php echo $commentaires_face_gauche;?></textarea>
                                <p class="comments"></p>
                            </div>
                        </div>
                        
                                             
                        <div class="row face">
                            <center><h4 class="h4">Face Droite</h4></center>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-droite-rep1" class="form-label">Repère schéma 1 <span class="blue">*</span></label>
                                <input id="face-droite-rep1" type="text" name="face-droite-rep1" class="form-control" placeholder="Saisir Repère schéma 1" value = "<?php echo $face_droite_rep1;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-droite-rep2" class="form-label">Repère schéma 2 <span class="blue">*</span></label>
                                <input id="face-droite-rep2" type="text" name="face-droite-rep2" class="form-control" placeholder="Saisir Repère schéma 2" value = "<?php echo $face_droite_rep2;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-droite-rep3" class="form-label">Repère schéma 3 <span class="blue">*</span></label>
                                <input id="face-droite-rep3" type="text" name="face-droite-rep3" class="form-control" placeholder="Saisir Repère schéma 3" value = "<?php echo $face_droite_rep3;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-droite-rep4" class="form-label">Repère schéma 4 <span class="blue">*</span></label>
                                <input id="face-droite-rep4" type="text" name="face-droite-rep4" class="form-control" placeholder="Saisir Repère schéma 4" value = "<?php echo $face_droite_rep4;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="mb-3">
                                <label for="photos-face-droite" class="form-label">Photo face droite <span class="blue">*</span></label>
                                <input class="form-control" type="file" id="photos-face-droite" name="photos-face-droite">
                                <p class="comments"><?php echo $photos_face_droiteError; ?></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-droite-rail-dep" class="form-label">Rail départ (cm)  <span class="blue">*</span></label>
                                <input id="face-droite-rail-dep" type="number" name="face-droite-rail-dep" class="form-control" placeholder="Saisir Rail départ" value = "<?php echo $face_droite_rail_dep;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-droite-couronnement" class="form-label">Couronnement toits (ml) <span class="blue">*</span></label>
                                <input id="face-droite-couronnement" type="number" name="face-droite-couronnement" class="form-control" placeholder="Saisir Couronnement toits" value = "<?php echo $face_droite_couronnement;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-droite-descente-ep" class="form-label">Descente EP  <span class="blue">*</span></label>
                                <input id="face-droite-descente-ep" type="text" name="face-droite-descente-ep" class="form-control" placeholder="Saisir Descente EP" value = "<?php echo $face_droite_descente_ep;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-droite-nbr-gonds" class="form-label">Total nombre de gonds <span class="blue">*</span></label>
                                <input id="face-droite-nbr-gonds" type="number" name="face-droite-nbr-gonds" class="form-control" placeholder="Saisir Total nombre de gonds" value = "<?php echo $face_droite_nbr_gonds;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-droite-ml-couvert" class="form-label">Ml couvertines <span class="blue">*</span></label>
                                <input id="face-droite-ml-couvert" type="number" name="face-droite-ml" class="form-control" placeholder="Saisir Ml couvertines" value = "<?php echo $face_droite_ml;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-droite-surf-chaud" class="form-label">Surface chaude (iso + enduit) <span class="blue">*</span></label>
                                <input id="face-droite-surf-chaud" type="number" name="face-droite-surf-chaud" class="form-control" placeholder="Saisir Surface chaude (iso + enduit)" value = "<?php echo $face_droite_surf_chaud;?>">
                                <p class="comments"></p>
                            </div>
                            
                            
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-droite-surf-froide-enduit" class="form-label">Surface froide Enduit seul ou Isolant + Enduit (pour éviter
                                    décroché)  <span class="blue">*</span></label>
                                <input id="face-droite-surf-froide-enduit" type="text" name="face-droite-surf-froide-enduit" class="form-control" placeholder="Saisir Surface froide Enduit seul ou Isolant + Enduit" value = "<?php echo $face_droite_surf_froide_enduit;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-droite-surf-froide-enduit-seul" class="form-label">Surface froide enduit seul <span class="blue">*</span></label>
                                <input id="face-droite-surf-froide-enduit-seul" type="number" name="face-droite-surf-froide-enduit-seul" class="form-control" placeholder="Saisir Surface froide enduit seul" value = "<?php echo $face_droite_surf_froide_enduit_seul;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-droite-surf-froide-isol-enduit" class="form-label">Surface froide Isolant + enduit <span class="blue">*</span></label>
                                <input id="face-droite-surf-froide-isol-enduit" type="number" name="face-droite-surf-froide-isol-enduit" class="form-control" placeholder="Saisir Surface froide Isolant + enduit" value = "<?php echo $face_droite_surf_froide_isol_enduit;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-droite-hauteur-isol" class="form-label">Hauteur de démarrage de l'isolation à faire (cm) <span class="blue">*</span></label>
                                <input id="face-droite-hauteur-isol" type="number" name="face-droite-hauteur-isol" class="form-control" placeholder="Saisir Hauteur de démarrage de l'isolation à faire" value = "<?php echo $face_droite_hauteur_isol;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-droite-nbr-gonds-reinst class="form-label">Nombre de gonds à réinstaller <span class="blue">*</span></label>
                                <input id="face-droite-nbr-gonds-reinst" type="number" name="face-droite-nbr-gonds-reinst" class="form-control" placeholder="Saisir Nombre de gonds à réinstaller" value = "<?php echo $face_droite_nbr_gonds_reinst;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label class="form-label">Mur sur rue <span class="blue">*</span></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="face-droite-mur-rue" id="face-droite-mur-rue1" value="Oui">
                                <label class="form-check-label" for="face-droite-mur-rue1">
                                  Oui
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="face-droite-mur-rue" id="face-droite-mur-rue2" value="Non" checked>
                                <label class="form-check-label" for="face-droite-mur-rue2">
                                  Non
                                </label>
                            </div>
                            </div>
                            <div class="col-lg-5">
                                <label for="face-droite-orient" class="form-label">Orientation de la face droite <span class="blue">*</span></label>
                                <select class="form-select" id="face-droite-orient" name="face-droite-orient" aria-label="Default select example">
                                    
                                    <option value="nord">Nord</option>
                                    <option value="sud">Sud</option>
                                    <option value="est">Est</option>
                                    <option value="ouest">Ouest</option>
                                    <option value="nord-est">Nord-Est</option>
                                    <option value="nord-ouest">Nord-Ouest</option>
                                    <option value="sud-est">Sud-Est</option>
                                    <option value="sud-ouest">Sud-Ouest</option>
                                </select><br>
                            </div>
                            <div class="col-lg-7">
                                <label for="commentaires-face-droite" class="form-label">Commentaires <span class="blue">*</span></label>
                                <textarea id="commentaires-face-droite" name="commentaires-face-droite" class="form-control" placeholder="Votre commentaires sur la face droite" rows="2"><?php echo $commentaires_face_droite;?></textarea>
                                <p class="comments"></p>
                            </div>
                        </div>
                        
                         
                                            
                        <div class="row face">
                            <center><h4 class="h4">Face Arrière</h4></center>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-arriere-rep1" class="form-label">Repère schéma 1 <span class="blue">*</span></label>
                                <input id="face-arriere-rep1" type="text" name="face-arriere-rep1" class="form-control" placeholder="Saisir Repère schéma 1" value = "<?php echo $face_arriere_rep1;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-arriere-rep2" class="form-label">Repère schéma 2 <span class="blue">*</span></label>
                                <input id="face-arriere-rep2" type="text" name="face-arriere-rep2" class="form-control" placeholder="Saisir Repère schéma 2" value = "<?php echo $face_arriere_rep2;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-arriere-rep3" class="form-label">Repère schéma 3 <span class="blue">*</span></label>
                                <input id="face-arriere-rep3" type="text" name="face-arriere-rep3" class="form-control" placeholder="Saisir Repère schéma 3" value = "<?php echo $face_arriere_rep3;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-arriere-rep4" class="form-label">Repère schéma 4 <span class="blue">*</span></label>
                                <input id="face-arriere-rep4" type="text" name="face-arriere-rep4" class="form-control" placeholder="Saisir Repère schéma 4" value = "<?php echo $face_arriere_rep4;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="mb-3">
                                <label for="photos-face-arriere" class="form-label">Photo face arrière <span class="blue">*</span></label>
                                <input class="form-control" type="file" id="photos-face-arriere" name="photos-face-arriere">
                                <p class="comments"><?php echo $photos_face_arriereError; ?></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-arriere-rail-dep" class="form-label">Rail départ (cm)  <span class="blue">*</span></label>
                                <input id="face-arriere-rail-dep" type="number" name="face-arriere-rail-dep" class="form-control" placeholder="Saisir Rail départ" value = "<?php echo $face_arriere_rail_dep;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-arriere-couronnement" class="form-label">Couronnement toits (ml) <span class="blue">*</span></label>
                                <input id="face-arriere-couronnement" type="number" name="face-arriere-couronnement" class="form-control" placeholder="Saisir Couronnement toits" value = "<?php echo $face_arriere_couronnement;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-arriere-descente-ep" class="form-label">Descente EP  <span class="blue">*</span></label>
                                <input id="face-arriere-descente-ep" type="text" name="face-arriere-descente-ep" class="form-control" placeholder="Saisir Descente EP" value = "<?php echo $face_arriere_descente_ep;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-arriere-nbr-gonds" class="form-label">Total nombre de gonds <span class="blue">*</span></label>
                                <input id="face-arriere-nbr-gonds" type="number" name="face-arriere-nbr-gonds" class="form-control" placeholder="Saisir Total nombre de gonds" value = "<?php echo $face_arriere_nbr_gonds;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-arriere-ml-couvert" class="form-label">Ml couvertines <span class="blue">*</span></label>
                                <input id="face-arriere-ml-couvert" type="number" name="face-arriere-ml" class="form-control" placeholder="Saisir Ml couvertines" value = "<?php echo $face_arriere_ml;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-arriere-surf-chaud" class="form-label">Surface chaude (iso + enduit) <span class="blue">*</span></label>
                                <input id="face-arriere-surf-chaud" type="number" name="face-arriere-surf-chaud" class="form-control" placeholder="Saisir Surface chaude (iso + enduit)" value = "<?php echo $face_arriere_surf_chaud;?>">
                                <p class="comments"></p>
                            </div>
                            
                            
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-arriere-surf-froide-enduit" class="form-label">Surface froide Enduit seul ou Isolant + Enduit (pour éviter
                                    décroché)  <span class="blue">*</span></label>
                                <input id="face-arriere-surf-froide-enduit" type="text" name="face-arriere-surf-froide-enduit" class="form-control" placeholder="Saisir Surface froide Enduit seul ou Isolant + Enduit" value = "<?php echo $face_arriere_surf_froide_enduit;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-arriere-surf-froide-enduit-seul" class="form-label">Surface froide enduit seul <span class="blue">*</span></label>
                                <input id="face-arriere-surf-froide-enduit-seul" type="number" name="face-arriere-surf-froide-enduit-seul" class="form-control" placeholder="Saisir Surface froide enduit seul" value = "<?php echo $face_arriere_surf_froide_enduit_seul;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-arriere-surf-froide-isol-enduit" class="form-label">Surface froide Isolant + enduit <span class="blue">*</span></label>
                                <input id="face-arriere-surf-froide-isol-enduit" type="number" name="face-arriere-surf-froide-isol-enduit" class="form-control" placeholder="Saisir Surface froide Isolant + enduit" value = "<?php echo $face_arriere_surf_froide_isol_enduit;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-arriere-hauteur-isol" class="form-label">Hauteur de démarrage de l'isolation à faire (cm) <span class="blue">*</span></label>
                                <input id="face-arriere-hauteur-isol" type="number" name="face-arriere-hauteur-isol" class="form-control" placeholder="Saisir Hauteur de démarrage de l'isolation à faire" value = "<?php echo $face_arriere_hauteur_isol;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-arriere-nbr-gonds-reinst class="form-label">Nombre de gonds à réinstaller <span class="blue">*</span></label>
                                <input id="face-arriere-nbr-gonds-reinst" type="number" name="face-arriere-nbr-gonds-reinst" class="form-control" placeholder="Saisir Nombre de gonds à réinstaller" value = "<?php echo $face_arriere_nbr_gonds_reinst;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label class="form-label">Mur sur rue <span class="blue">*</span></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="face-arriere-mur-rue" id="face-arriere-mur-rue1" value="Oui">
                                <label class="form-check-label" for="face-arriere-mur-rue1">
                                  Oui
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="face-arriere-mur-rue" id="face-arriere-mur-rue2" value="Non" checked>
                                <label class="form-check-label" for="face-arriere-mur-rue2">
                                  Non
                                </label>
                            </div>
                            </div>
                            <div class="col-lg-5">
                                <label for="face-arriere-orient" class="form-label">Orientation de la face arrière <span class="blue">*</span></label>
                                <select class="form-select" id="face-arriere-orient" name="face-arriere-orient" aria-label="Default select example">
                                    
                                    <option value="nord">Nord</option>
                                    <option value="sud">Sud</option>
                                    <option value="est">Est</option>
                                    <option value="ouest">Ouest</option>
                                    <option value="nord-est">Nord-Est</option>
                                    <option value="nord-ouest">Nord-Ouest</option>
                                    <option value="sud-est">Sud-Est</option>
                                    <option value="sud-ouest">Sud-Ouest</option>
                                </select><br>
                            </div>
                            <div class="col-lg-7">
                                <label for="commentaires-face-arriere" class="form-label">Commentaires <span class="blue">*</span></label>
                                <textarea id="commentaires-face-arriere" name="commentaires-face-arriere" class="form-control" placeholder="Votre commentaires sur la face arrière" rows="2"><?php echo $commentaires_face_arriere;?></textarea>
                                <p class="comments"></p>
                            </div>
                        </div>                        
                                            
                        <div class="col-6">
                            <button type="button" class="button1 prev"><i class="bi bi-arrow-left-circle"></i> Précedant</button>
                            
                        </div>
                        <div class="col-6">
                            <button type="button" class="button1 next">Suivant <i class="bi bi-arrow-right-circle"></i></button>
                        </div> 
                    </div>
                </div>
                <div class="page" id="page6">
                    <div class="row">
                        <h3>Isolation des murs par l’extérieur</h3>
                    
                        <div class="row face">
                            <center><h4 class="h4">Face supplémentaires 1</h4></center>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp1-rep1" class="form-label">Repère schéma 1 <span class="blue">*</span></label>
                                <input id="face-supp1-rep1" type="text" name="face-supp1-rep1" class="form-control" placeholder="Saisir Repère schéma 1" value = "<?php echo $face_supp1_rep1;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp1-rep2" class="form-label">Repère schéma 2 <span class="blue">*</span></label>
                                <input id="face-supp1-rep2" type="text" name="face-supp1-rep2" class="form-control" placeholder="Saisir Repère schéma 2" value = "<?php echo $face_supp1_rep2;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp1-rep3" class="form-label">Repère schéma 3 <span class="blue">*</span></label>
                                <input id="face-supp1-rep3" type="text" name="face-supp1-rep3" class="form-control" placeholder="Saisir Repère schéma 3" value = "<?php echo $face_supp1_rep3;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp1-rep4" class="form-label">Repère schéma 4 <span class="blue">*</span></label>
                                <input id="face-supp1-rep4" type="text" name="face-supp1-rep4" class="form-control" placeholder="Saisir Repère schéma 4" value = "<?php echo $face_supp1_rep4;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="mb-3">
                                <label for="photos-face-supp1" class="form-label">Photo face supplémentaires 1 <span class="blue">*</span></label>
                                <input class="form-control" type="file" id="photos-face-supp1" name="photos-face-supp1">
                                <p class="comments"><?php echo $photos_face_supp1Error; ?></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp1-rail-dep" class="form-label">Rail départ (cm)  <span class="blue">*</span></label>
                                <input id="face-supp1-rail-dep" type="number" name="face-supp1-rail-dep" class="form-control" placeholder="Saisir Rail départ" value = "<?php echo $face_supp1_rail_dep;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp1-couronnement" class="form-label">Couronnement toits (ml) <span class="blue">*</span></label>
                                <input id="face-supp1-couronnement" type="number" name="face-supp1-couronnement" class="form-control" placeholder="Saisir Couronnement toits" value = "<?php echo $face_supp1_couronnement;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp1-descente-ep" class="form-label">Descente EP  <span class="blue">*</span></label>
                                <input id="face-supp1-descente-ep" type="text" name="face-supp1-descente-ep" class="form-control" placeholder="Saisir Descente EP" value = "<?php echo $face_supp1_descente_ep;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp1-nbr-gonds" class="form-label">Total nombre de gonds <span class="blue">*</span></label>
                                <input id="face-supp1-nbr-gonds" type="number" name="face-supp1-nbr-gonds" class="form-control" placeholder="Saisir Total nombre de gonds" value = "<?php echo $face_supp1_nbr_gonds;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp1-ml-couvert" class="form-label">Ml couvertines <span class="blue">*</span></label>
                                <input id="face-supp1-ml-couvert" type="number" name="face-supp1-ml" class="form-control" placeholder="Saisir Ml couvertines" value = "<?php echo $face_supp1_ml;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp1-surf-chaud" class="form-label">Surface chaude (iso + enduit) <span class="blue">*</span></label>
                                <input id="face-supp1-surf-chaud" type="number" name="face-supp1-surf-chaud" class="form-control" placeholder="Saisir Surface chaude (iso + enduit)" value = "<?php echo $face_supp1_surf_chaud;?>">
                                <p class="comments"></p>
                            </div>
                            
                            
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp1-surf-froide-enduit" class="form-label">Surface froide Enduit seul ou Isolant + Enduit (pour éviter
                                    décroché)  <span class="blue">*</span></label>
                                <input id="face-supp1-surf-froide-enduit" type="text" name="face-supp1-surf-froide-enduit" class="form-control" placeholder="Saisir Surface froide Enduit seul ou Isolant + Enduit" value = "<?php echo $face_supp1_surf_froide_enduit;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp1-surf-froide-enduit-seul" class="form-label">Surface froide enduit seul <span class="blue">*</span></label>
                                <input id="face-supp1-surf-froide-enduit-seul" type="number" name="face-supp1-surf-froide-enduit-seul" class="form-control" placeholder="Saisir Surface froide enduit seul" value = "<?php echo $face_supp1_surf_froide_enduit_seul;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp1-surf-froide-isol-enduit" class="form-label">Surface froide Isolant + enduit <span class="blue">*</span></label>
                                <input id="face-supp1-surf-froide-isol-enduit" type="number" name="face-supp1-surf-froide-isol-enduit" class="form-control" placeholder="Saisir Surface froide Isolant + enduit" value = "<?php echo $face_supp1_surf_froide_isol_enduit;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp1-hauteur-isol" class="form-label">Hauteur de démarrage de l'isolation à faire (cm) <span class="blue">*</span></label>
                                <input id="face-supp1-hauteur-isol" type="number" name="face-supp1-hauteur-isol" class="form-control" placeholder="Saisir Hauteur de démarrage de l'isolation à faire" value = "<?php echo $face_supp1_hauteur_isol;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp1-nbr-gonds-reinst class="form-label">Nombre de gonds à réinstaller <span class="blue">*</span></label>
                                <input id="face-supp1-nbr-gonds-reinst" type="number" name="face-supp1-nbr-gonds-reinst" class="form-control" placeholder="Saisir Nombre de gonds à réinstaller" value = "<?php echo $face_supp1_nbr_gonds_reinst;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label class="form-label">Mur sur rue <span class="blue">*</span></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="face-supp1-mur-rue" id="face-supp1-mur-rue1" value="Oui">
                                <label class="form-check-label" for="face-supp1-mur-rue1">
                                  Oui
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="face-supp1-mur-rue" id="face-supp1-mur-rue2" value="Non" checked>
                                <label class="form-check-label" for="face-supp1-mur-rue2">
                                  Non
                                </label>
                            </div>
                            </div>
                            <div class="col-lg-5">
                                <label for="face-supp1-orient" class="form-label">Orientation de la face supplémentaires 1 <span class="blue">*</span></label>
                                <select class="form-select" id="face-supp1-orient" name="face-supp1-orient" aria-label="Default select example">
                                    
                                    <option value="nord">Nord</option>
                                    <option value="sud">Sud</option>
                                    <option value="est">Est</option>
                                    <option value="ouest">Ouest</option>
                                    <option value="nord-est">Nord-Est</option>
                                    <option value="nord-ouest">Nord-Ouest</option>
                                    <option value="sud-est">Sud-Est</option>
                                    <option value="sud-ouest">Sud-Ouest</option>
                                </select><br>
                            </div>
                            <div class="col-lg-7">
                                <label for="commentaires-face-supp1" class="form-label">Commentaires <span class="blue">*</span></label>
                                <textarea id="commentaires-face-supp1" name="commentaires-face-supp1" class="form-control" placeholder="Votre commentaires sur la face supplémentaires 1" rows="2"><?php echo $commentaires_face_supp1;?></textarea>
                                <p class="comments"></p>
                            </div>
                        </div>
                                            
                        <div class="row face">
                            <center><h4 class="h4">Face supplémentaires 2</h4></center>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp2-rep1" class="form-label">Repère schéma 1 <span class="blue">*</span></label>
                                <input id="face-supp2-rep1" type="text" name="face-supp2-rep1" class="form-control" placeholder="Saisir Repère schéma 1" value = "<?php echo $face_supp2_rep1;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp2-rep2" class="form-label">Repère schéma 2 <span class="blue">*</span></label>
                                <input id="face-supp2-rep2" type="text" name="face-supp2-rep2" class="form-control" placeholder="Saisir Repère schéma 2" value = "<?php echo $face_supp2_rep2;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp2-rep3" class="form-label">Repère schéma 3 <span class="blue">*</span></label>
                                <input id="face-supp2-rep3" type="text" name="face-supp2-rep3" class="form-control" placeholder="Saisir Repère schéma 3" value = "<?php echo $face_supp2_rep3;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp2-rep4" class="form-label">Repère schéma 4 <span class="blue">*</span></label>
                                <input id="face-supp2-rep4" type="text" name="face-supp2-rep4" class="form-control" placeholder="Saisir Repère schéma 4" value = "<?php echo $face_supp2_rep4;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="mb-3">
                                <label for="photos-face-supp2" class="form-label">Photo face supplémentaires 2 <span class="blue">*</span></label>
                                <input class="form-control" type="file" id="photos-face-supp2" name="photos-face-supp2">
                                <p class="comments"><?php echo $photos_face_supp2Error; ?></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp2-rail-dep" class="form-label">Rail départ (cm)  <span class="blue">*</span></label>
                                <input id="face-supp2-rail-dep" type="number" name="face-supp2-rail-dep" class="form-control" placeholder="Saisir Rail départ" value = "<?php echo $face_supp2_rail_dep;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp2-couronnement" class="form-label">Couronnement toits (ml) <span class="blue">*</span></label>
                                <input id="face-supp2-couronnement" type="number" name="face-supp2-couronnement" class="form-control" placeholder="Saisir Couronnement toits" value = "<?php echo $face_supp2_couronnement;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp2-descente-ep" class="form-label">Descente EP  <span class="blue">*</span></label>
                                <input id="face-supp2-descente-ep" type="text" name="face-supp2-descente-ep" class="form-control" placeholder="Saisir Descente EP" value = "<?php echo $face_supp2_descente_ep;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp2-nbr-gonds" class="form-label">Total nombre de gonds <span class="blue">*</span></label>
                                <input id="face-supp2-nbr-gonds" type="number" name="face-supp2-nbr-gonds" class="form-control" placeholder="Saisir Total nombre de gonds" value = "<?php echo $face_supp2_nbr_gonds;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp2-ml-couvert" class="form-label">Ml couvertines <span class="blue">*</span></label>
                                <input id="face-supp2-ml-couvert" type="number" name="face-supp2-ml" class="form-control" placeholder="Saisir Ml couvertines" value = "<?php echo $face_supp2_ml;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp2-surf-chaud" class="form-label">Surface chaude (iso + enduit) <span class="blue">*</span></label>
                                <input id="face-supp2-surf-chaud" type="number" name="face-supp2-surf-chaud" class="form-control" placeholder="Saisir Surface chaude (iso + enduit)" value = "<?php echo $face_supp2_surf_chaud;?>">
                                <p class="comments"></p>
                            </div>
                            
                            
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp2-surf-froide-enduit" class="form-label">Surface froide Enduit seul ou Isolant + Enduit (pour éviter
                                    décroché)  <span class="blue">*</span></label>
                                <input id="face-supp2-surf-froide-enduit" type="text" name="face-supp2-surf-froide-enduit" class="form-control" placeholder="Saisir Surface froide Enduit seul ou Isolant + Enduit" value = "<?php echo $face_supp2_surf_froide_enduit;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp2-surf-froide-enduit-seul" class="form-label">Surface froide enduit seul <span class="blue">*</span></label>
                                <input id="face-supp2-surf-froide-enduit-seul" type="number" name="face-supp2-surf-froide-enduit-seul" class="form-control" placeholder="Saisir Surface froide enduit seul" value = "<?php echo $face_supp2_surf_froide_enduit_seul;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp2-surf-froide-isol-enduit" class="form-label">Surface froide Isolant + enduit <span class="blue">*</span></label>
                                <input id="face-supp2-surf-froide-isol-enduit" type="number" name="face-supp2-surf-froide-isol-enduit" class="form-control" placeholder="Saisir Surface froide Isolant + enduit" value = "<?php echo $face_supp2_surf_froide_isol_enduit;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp2-hauteur-isol" class="form-label">Hauteur de démarrage de l'isolation à faire (cm) <span class="blue">*</span></label>
                                <input id="face-supp2-hauteur-isol" type="number" name="face-supp2-hauteur-isol" class="form-control" placeholder="Saisir Hauteur de démarrage de l'isolation à faire" value = "<?php echo $face_supp2_hauteur_isol;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp2-nbr-gonds-reinst class="form-label">Nombre de gonds à réinstaller <span class="blue">*</span></label>
                                <input id="face-supp2-nbr-gonds-reinst" type="number" name="face-supp2-nbr-gonds-reinst" class="form-control" placeholder="Saisir Nombre de gonds à réinstaller" value = "<?php echo $face_supp2_nbr_gonds_reinst;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label class="form-label">Mur sur rue <span class="blue">*</span></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="face-supp2-mur-rue" id="face-supp2-mur-rue1" value="Oui">
                                <label class="form-check-label" for="face-supp2-mur-rue1">
                                  Oui
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="face-supp2-mur-rue" id="face-supp2-mur-rue2" value="Non" checked>
                                <label class="form-check-label" for="face-supp2-mur-rue2">
                                  Non
                                </label>
                            </div>
                            </div>
                            <div class="col-lg-5">
                                <label for="face-supp2-orient" class="form-label">Orientation de la face supplémentaires 2 <span class="blue">*</span></label>
                                <select class="form-select" id="face-supp2-orient" name="face-supp2-orient" aria-label="Default select example">
                                    
                                    <option value="nord">Nord</option>
                                    <option value="sud">Sud</option>
                                    <option value="est">Est</option>
                                    <option value="ouest">Ouest</option>
                                    <option value="nord-est">Nord-Est</option>
                                    <option value="nord-ouest">Nord-Ouest</option>
                                    <option value="sud-est">Sud-Est</option>
                                    <option value="sud-ouest">Sud-Ouest</option>
                                </select><br>
                            </div>
                            <div class="col-lg-7">
                                <label for="commentaires-face-supp2" class="form-label">Commentaires <span class="blue">*</span></label>
                                <textarea id="commentaires-face-supp2" name="commentaires-face-supp2" class="form-control" placeholder="Votre commentaires sur la face supplémentaires 2" rows="2"><?php echo $commentaires_face_supp2;?></textarea>
                                <p class="comments"></p>
                            </div>
                        </div>
                                            
                        <div class="row face">
                            <center><h4 class="h4">Face supplémentaires 3</h4></center>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp3-rep1" class="form-label">Repère schéma 1 <span class="blue">*</span></label>
                                <input id="face-supp3-rep1" type="text" name="face-supp3-rep1" class="form-control" placeholder="Saisir Repère schéma 1" value = "<?php echo $face_supp3_rep1;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp3-rep2" class="form-label">Repère schéma 2 <span class="blue">*</span></label>
                                <input id="face-supp3-rep2" type="text" name="face-supp3-rep2" class="form-control" placeholder="Saisir Repère schéma 2" value = "<?php echo $face_supp3_rep2;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp3-rep3" class="form-label">Repère schéma 3 <span class="blue">*</span></label>
                                <input id="face-supp3-rep3" type="text" name="face-supp3-rep3" class="form-control" placeholder="Saisir Repère schéma 3" value = "<?php echo $face_supp3_rep3;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp3-rep4" class="form-label">Repère schéma 4 <span class="blue">*</span></label>
                                <input id="face-supp3-rep4" type="text" name="face-supp3-rep4" class="form-control" placeholder="Saisir Repère schéma 4" value = "<?php echo $face_supp3_rep4;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="mb-3">
                                <label for="photos-face-supp3" class="form-label">Photo face supplémentaires 3 <span class="blue">*</span></label>
                                <input class="form-control" type="file" id="photos-face-supp3" name="photos-face-supp3">
                                <p class="comments"><?php echo $photos_face_supp3Error; ?></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp3-rail-dep" class="form-label">Rail départ (cm)  <span class="blue">*</span></label>
                                <input id="face-supp3-rail-dep" type="number" name="face-supp3-rail-dep" class="form-control" placeholder="Saisir Rail départ" value = "<?php echo $face_supp3_rail_dep;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp3-couronnement" class="form-label">Couronnement toits (ml) <span class="blue">*</span></label>
                                <input id="face-supp3-couronnement" type="number" name="face-supp3-couronnement" class="form-control" placeholder="Saisir Couronnement toits" value = "<?php echo $face_supp3_couronnement;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp3-descente-ep" class="form-label">Descente EP  <span class="blue">*</span></label>
                                <input id="face-supp3-descente-ep" type="text" name="face-supp3-descente-ep" class="form-control" placeholder="Saisir Descente EP" value = "<?php echo $face_supp3_descente_ep;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp3-nbr-gonds" class="form-label">Total nombre de gonds <span class="blue">*</span></label>
                                <input id="face-supp3-nbr-gonds" type="number" name="face-supp3-nbr-gonds" class="form-control" placeholder="Saisir Total nombre de gonds" value = "<?php echo $face_supp3_nbr_gonds;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp3-ml-couvert" class="form-label">Ml couvertines <span class="blue">*</span></label>
                                <input id="face-supp3-ml-couvert" type="number" name="face-supp3-ml" class="form-control" placeholder="Saisir Ml couvertines" value = "<?php echo $face_supp3_ml;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp3-surf-chaud" class="form-label">Surface chaude (iso + enduit) <span class="blue">*</span></label>
                                <input id="face-supp3-surf-chaud" type="number" name="face-supp3-surf-chaud" class="form-control" placeholder="Saisir Surface chaude (iso + enduit)" value = "<?php echo $face_supp3_surf_chaud;?>">
                                <p class="comments"></p>
                            </div>
                            
                            
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp3-surf-froide-enduit" class="form-label">Surface froide Enduit seul ou Isolant + Enduit (pour éviter
                                    décroché)  <span class="blue">*</span></label>
                                <input id="face-supp3-surf-froide-enduit" type="text" name="face-supp3-surf-froide-enduit" class="form-control" placeholder="Saisir Surface froide Enduit seul ou Isolant + Enduit" value = "<?php echo $face_supp3_surf_froide_enduit;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp3-surf-froide-enduit-seul" class="form-label">Surface froide enduit seul <span class="blue">*</span></label>
                                <input id="face-supp3-surf-froide-enduit-seul" type="number" name="face-supp3-surf-froide-enduit-seul" class="form-control" placeholder="Saisir Surface froide enduit seul" value = "<?php echo $face_supp3_surf_froide_enduit_seul;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp3-surf-froide-isol-enduit" class="form-label">Surface froide Isolant + enduit <span class="blue">*</span></label>
                                <input id="face-supp3-surf-froide-isol-enduit" type="number" name="face-supp3-surf-froide-isol-enduit" class="form-control" placeholder="Saisir Surface froide Isolant + enduit" value = "<?php echo $face_supp3_surf_froide_isol_enduit;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp3-hauteur-isol" class="form-label">Hauteur de démarrage de l'isolation à faire (cm) <span class="blue">*</span></label>
                                <input id="face-supp3-hauteur-isol" type="number" name="face-supp3-hauteur-isol" class="form-control" placeholder="Saisir Hauteur de démarrage de l'isolation à faire" value = "<?php echo $face_supp3_hauteur_isol;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label for="face-supp3-nbr-gonds-reinst class="form-label">Nombre de gonds à réinstaller <span class="blue">*</span></label>
                                <input id="face-supp3-nbr-gonds-reinst" type="number" name="face-supp3-nbr-gonds-reinst" class="form-control" placeholder="Saisir Nombre de gonds à réinstaller" value = "<?php echo $face_supp3_nbr_gonds_reinst;?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <label class="form-label">Mur sur rue <span class="blue">*</span></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="face-supp3-mur-rue" id="face-supp3-mur-rue1" value="Oui">
                                <label class="form-check-label" for="face-supp3-mur-rue1">
                                  Oui
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="face-supp3-mur-rue" id="face-supp3-mur-rue2" value="Non" checked>
                                <label class="form-check-label" for="face-supp3-mur-rue2">
                                  Non
                                </label>
                            </div>
                            </div>
                            <div class="col-lg-5">
                                <label for="face-supp3-orient" class="form-label">Orientation de la face supplémentaires 3 <span class="blue">*</span></label>
                                <select class="form-select" id="face-supp3-orient" name="face-supp3-orient" aria-label="Default select example">
                                    
                                    <option value="nord">Nord</option>
                                    <option value="sud">Sud</option>
                                    <option value="est">Est</option>
                                    <option value="ouest">Ouest</option>
                                    <option value="nord-est">Nord-Est</option>
                                    <option value="nord-ouest">Nord-Ouest</option>
                                    <option value="sud-est">Sud-Est</option>
                                    <option value="sud-ouest">Sud-Ouest</option>
                                </select><br>
                            </div>
                            <div class="col-lg-7">
                                <label for="commentaires-face-supp3" class="form-label">Commentaires <span class="blue">*</span></label>
                                <textarea id="commentaires-face-supp3" name="commentaires-face-supp3" class="form-control" placeholder="Votre commentaires sur la face supplémentaires 3" rows="2"><?php echo $commentaires_face_supp3;?></textarea>
                                <p class="comments"></p>
                            </div>
                        </div>
                        
                         
                    
                         
                    
                        <div class="col-6">
                            <button type="button" class="button1 prev"><i class="bi bi-arrow-left-circle"></i> Précedant</button>
                            
                        </div>
                        <div class="col-6">
                            <button type="button" class="button1 next">Suivant <i class="bi bi-arrow-right-circle"></i></button>
                        </div>

                    </div>

                </div>
                <div class="page" id="page7">
                    <div class="row">
                        <h3>Isolation des murs par l’extérieur</h3>
                        <div class="col-lg-7">
                            <label for="commentaires_ite" class="form-label">Commentaires ITE <span class="blue">*</span></label>
                            <textarea id="commentaires_ite" name="commentaires_ite" class="form-control" placeholder="Votre commentaires sur ITE" rows="2"><?php echo $commentaires_ite;?></textarea>
                            <p class="comments"></p>
                        </div>
                        <h4>Totaux ITE</h4>
                        <div class="col-lg-6">
                            <label for="totat_surf_chaud" class="form-label">Total surfaces chaudes (iso + enduit) <span class="blue">*</span></label>
                            <input id="totat_surf_chaud" type="number" name="totat_surf_chaud" class="form-control" placeholder="Saisir Total surfaces chaudes (iso + enduit)" value = "<?php echo $totat_surf_chaud;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="totat_surf_froid_enduit" class="form-label">Total surfaces froides avec enduit seul <span class="blue">*</span></label>
                            <input id="totat_surf_froid_enduit" type="number" name="totat_surf_froid_enduit" class="form-control" placeholder="Saisir Total surfaces froides avec enduit seul" value = "<?php echo $totat_surf_froid_enduit;?>">
                            <p class="comments"></p>
                        </div>
                    
                        <div class="col-lg-6">
                            <label for="totat_surf_froid_isol_enduit" class="form-label">Total surfaces froides isolant + enduit (pour éviter décroché) <span class="blue">*</span></label>
                            <input id="totat_surf_froid_isol_enduit" type="number" name="totat_surf_froid_isol_enduit" class="form-control" placeholder="Saisir Total surfaces froides isolant + enduit (pour éviter décroché)" value = "<?php echo $totat_surf_froid_isol_enduit;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="totat_ml_cournement_toit" class="form-label">Total Ml couronnement de toit <span class="blue">*</span></label>
                            <input id="totat_ml_cournement_toit" type="number" name="totat_ml_cournement_toit" class="form-control" placeholder="Saisir Total Ml couronnement de toit" value = "<?php echo $totat_ml_cournement_toit;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="totat_nbr_gonds_reinst" class="form-label">Total nombre de gonds à réinstaller <span class="blue">*</span></label>
                            <input id="totat_nbr_gonds_reinst" type="number" name="totat_nbr_gonds_reinst" class="form-control" placeholder="Saisir Total nombre de gonds à réinstaller" value = "<?php echo $totat_nbr_gonds_reinst;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="totat_ml_convert" class="form-label">Total Ml convertines <span class="blue">*</span></label>
                            <input id="totat_ml_convert" type="number" name="totat_ml_convert" class="form-control" placeholder="Saisir Total Ml convertines" value = "<?php echo $totat_ml_convert;?>">
                            <p class="comments"></p>
                        </div>
                        <h4>Descriptif travaux ITE </h4>
                        <div class="col-lg-6">
                            <label for="choix_coloris" class="form-label">Choix du coloris (RAL) <span class="blue">*</span></label>
                            <input id="choix_coloris" type="text" name="choix_coloris" class="form-control" placeholder="Saisir Choix du coloris (RAL)" value = "<?php echo $choix_coloris;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <label class="form-label">Changement de la couleur existante <span class="blue">*</span></label>
                        </div>
                        <div class="row col-lg-4 col-md-12">
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="change_color" id="change_color1" value="Oui" > Oui
                                
                            </div>
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="change_color" id="change_color2" value="Non" checked> Non
                                
                            </div>
                        </div>
                        
                        <div class="col-lg-8 col-md-12">
                            <label class="form-label">Pompe A Chaleur (groupe extérieur) <span class="blue">*</span></label>
                        </div>
                        <div class="row col-lg-4 col-md-12">
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="pompe_chaleur" id="pompe_chaleur1" value="Oui" > Oui
                                
                            </div>
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="pompe_chaleur" id="pompe_chaleur2" value="Non" checked> Non
                                
                            </div>
                        </div>
                        <label class="form-label">Si OUI, préciser <span class="blue">:</span></label>
                        <div class="col-lg-12">
                            <label for="espace_dispo_deriere" class="form-label">Espace disponible derrière le groupe extérieur (cm) <span class="blue">*</span></label>
                            <input id="espace_dispo_deriere" type="number" name="espace_dispo_deriere" class="form-control" placeholder="Saisir l'Espace disponible derrière le groupe extérieur" value = "<?php echo $espace_dispo_deriere;?>">
                            <p class="comments"><?php echo $espace_dispo_deriereError; ?></p>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <label class="form-label">Ventouse évacuation à prolonger <span class="blue">*</span></label>
                        </div>
                        <div class="row col-lg-4 col-md-12">
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="ventouse_evacuat" id="ventouse_evacuat1" value="Oui" > Oui
                                
                            </div>
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="ventouse_evacuat" id="ventouse_evacuat2" value="Non" checked> Non
                                
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <label class="form-label">Demande intervention ENEDIS / France Télécom <span class="blue">*</span></label>
                        </div>
                        <div class="row col-lg-4 col-md-12">
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="demande_intervent_enedis" id="demande_intervent_enedis1" value="Oui" > Oui
                                
                            </div>
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="demande_intervent_enedis" id="demande_intervent_enedis2" value="Non" checked> Non
                                
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <label class="form-label">Nécessité de prévenir le voisin <span class="blue">*</span></label>
                        </div>
                        <div class="row col-lg-4 col-md-12">
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="necessite_prevenir_voisin" id="necessite_prevenir_voisin1" value="Oui" > Oui
                                
                            </div>
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="necessite_prevenir_voisin" id="necessite_prevenir_voisin2" value="Non" checked> Non
                                
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <label class="form-label">Mur en limite de voirie nécessitant accord de la mairie <span class="blue">*</span></label>
                        </div>
                        <div class="row col-lg-4 col-md-12">
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="mur_limite_accord_mairie" id="mur_limite_accord_mairie1" value="Oui" > Oui
                                
                            </div>
                            <div class="form-check col-lg-4">
                                <input class="form-check-input" type="radio" name="mur_limite_accord_mairie" id="mur_limite_accord_mairie2" value="Non" checked> Non
                                
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <label for="acces_chantier" class="form-label">Accès chantier <span class="blue">*</span></label>
                            <input id="acces_chantier" type="number" name="acces_chantier" class="form-control" placeholder="Saisir Accès chantier" value = "<?php echo $acces_chantier;?>">
                            <p class="comments"></p>
                        </div>
                        <div class="col-lg-7">
                            <label for="commentaires_travaux_ite" class="form-label">Commentaires <span class="blue">*</span></label>
                            <textarea id="commentaires_travaux_ite" name="commentaires_travaux_ite" class="form-control" placeholder="Votre commentaires" rows="2"><?php echo $commentaires_travaux_ite;?></textarea>
                            <p class="comments"></p>
                        </div>
                        <div class="col-6">
                            <button type="button" class="button1 prev"><i class="bi bi-arrow-left-circle"></i> Précedant</button>
                            
                        </div>
                        <div class="col-6">
                            <button type="submit" name="contact" class="button1"">Submit <i class="bi bi-arrow-right-circle"></i></button>
                        </div>
                        
                    </div>

                </div>
                
            </form>
        </div>
        <script>
            // On va chercher les différents éléments de notre page
const pages = document.querySelectorAll(".page")
const header = document.getElementById("header")
const nbPages = pages.length // Nombre de pages du formulaire
let pageActive = 1

// On attend le chargement de la page
window.onload = () => {
    // On affiche la 1ère page du formulaire
    document.querySelector(".page").style.display = "initial"

    // On affiche les numéros des pages dans l'entête
    // On parcourt la liste des pages
    pages.forEach((page, index) => {
        // On crée l'élément "numéro de page"
        let element = document.createElement("div")
        element.classList.add("page-num")
        
        element.id = "num" + (index + 1)
        if(pageActive === index + 1){
            element.classList.add("active")
        }
        element.innerHTML = index + 1
        header.appendChild(element)
    })

    // On gère les boutons "suivant"
    let boutons = document.querySelectorAll(".next")

    for(let bouton of boutons){
        bouton.addEventListener("click", pageSuivante)
    }

    // On gère les boutons "suivant"
    boutons = document.querySelectorAll(".prev")

    for(let bouton of boutons){
        bouton.addEventListener("click", pagePrecedente)
    }
}

/**
 * Cette fonction fait avancer le formulaire d'une page
 */
function pageSuivante(){
    // On masque toutes les pages
    for(let page of pages){
        page.style.display = "none"
    }

    // On affiche la page suivante
    this.closest(".page").nextElementSibling.style.display = "initial";

    // On "désactive" la page active
    document.querySelector(".active").classList.add("passé")
    document.querySelector(".active").classList.remove("active")

    // On incrémente pageActive
    pageActive++

    // On "active" le nouveau numéro
    document.querySelector("#num"+pageActive).classList.add("active")
    window.scrollTo({
            top: 0,
            behavior: 'smooth' // Cette option rendra le défilement fluide
        });
}

/**
 * Cette fonction fait reculer le formulaire d'une page
 */
 function updatePageNumber() {
    document.querySelectorAll(".page-num").forEach((element, index) => {
        element.classList.remove("active");
        
        if (index === pageActive - 1) {
            element.classList.remove("passé");
            element.classList.add("active");
        }
    });
}

function pagePrecedente(){
    // On masque toutes les pages
    for(let page of pages){
        page.style.display = "none"
    }

    pages[pageActive - 1].style.display = "none";
    
    // Passer à la page précédente
    pageActive--;
    
    // Afficher la page précédente
    pages[pageActive - 1].style.display = "initial";
    
    // Mettre à jour la numérotation
    updatePageNumber();
    window.scrollTo({
            top: 0,
            behavior: 'smooth' // Cette option rendra le défilement fluide
        });
}
        </script>
    </body>
</html>