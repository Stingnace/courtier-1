<?php require("../settings/settings.php");


// **********LES INFORMATIONS SUR LES EMPRUNTEUR ********************************

//  ACCEDER A TOUS LES ELEMENT DE TOUS LES EMPRUNTEURS
function GetAllBorrowers($bdd)
{
    $req = "SELECT * FROM borrower";
    $statement = $bdd->query($req);
    $allBorrowers = $statement->fetchAll();
    return $allBorrowers;
}
// AFFICHER LE NOMBRE TOTAL D EMRPUNTEURS INSCRITS
function GetAllBorrowersCount($bdd)
{
    $req = "SELECT COUNT(*) FROM borrowers";
    $statement = $bdd->query($req);
    $allBorrowersCount = $statement->fetchAll();
    return $allBorrowersCount;
}

// ACCEDER AUX 3 DERNIERS EMPRUNTEURS
function GetLastBorrowers($bdd)
{
    $req = "SELECT * FROM borrower ORDER BY id DESC LIMIT 3";
    $statement = $bdd->query($req);
    $allBorrowers = $statement->fetchAll();
    return $allBorrowers;
}


// ACCEDER AUX ELEMENTS D'UN EMPRUNTEUR EN PARTICULIER (profil)
function GetBorrower($bdd, $id)
{
    $req = "SELECT * FROM borrower WHERE id = ?";
    $statement = $bdd->prepare($req);
    $statement->execute([$id]);
    $allBorrower = $statement->fetch();
    return $allBorrower;
}

// ACCEDER A TOUTES LES ADRESSES POSTALES 
function GetAllPostals($bdd)
{
    $req = "SELECT *FROM postal_adress";
    $statement = $bdd->query($req);
    $AllPostals = $statement->fetchAll();
    return $AllPostals;
}

// ACCEDER AUX INFOS POSTALES D'UN EMPRUNTEUR EN PARTICULIER

function GetPostalOfBorrower($bdd, $id)
{
    $req = "SELECT *FROM postal_adress WHERE id_borrower= ?";
    $statement = $bdd->prepare($req);
    $statement->execute([$id]);
    $PostalOfBorrower = $statement->fetch();
    return $PostalOfBorrower;
}


// **********LES INFORMATIONS SUR LES DEMANDES DE PRETS IMMO ********************************


// ACCEDER A TOUS LES ELEMENTS DE LA TABLE home_loan 
function GetAllHomeLoans($bdd)
{
    $req = "SELECT * FROM home_loan";
    $statement = $bdd->query($req);
    $allHomeLoans = $statement->fetchAll();
    return $allHomeLoans;
}

// AFFICHER LE NOMBRE TOTAL DE DEMANDES DE PRET IMMO
function GetAllHomeLoansCount($bdd)
{
    $req = "SELECT Count(*)  FROM home_loan";
    $statement = $bdd->query($req);
    $allHomeLoansCount = $statement->fetchAll();
    return $allHomeLoansCount;
}

// AFFICHER LE NOMBRE TOTAL DE DEMANDES DE PRET IMMO QUI ONT LE STATUT "consulté" 
function GetConsultedHomeLoansCount($bdd)
{
    $req = "SELECT COUNT(*) AS consulted FROM `home_loan` WHERE statut = 'complétée'";
    $statement = $bdd->query($req);
    $allConsultedHomeLoansCount = $statement->fetch();
    return $allConsultedHomeLoansCount;
}

// AFFICHER LES DEMANDES DE PRET IMMO QUI ONT LE STATUT "consulté" 
function GetConsultedHomeLoans($bdd)
{
    $req = "SELECT * FROM `home_loan` WHERE statut = 'complétée'";
    $statement = $bdd->query($req);
    $allConsultedHomeLoansCount = $statement->fetchAll();
    return $allConsultedHomeLoansCount;
}

// AFFICHER LE NOMBRE TOTAL DE DEMANDES DE PRET IMMO QUI ONT LE STATUT "en cours" 
function GetTreatingHomeLoansCount($bdd)
{
    $req = "SELECT COUNT(*) AS treating FROM home_loan WHERE statut = 'en cours' ";
    $statement = $bdd->query($req);
    $allTreatingHomeLoansCount = $statement->fetch();
    return $allTreatingHomeLoansCount;
}

// AFFICHER LES DEMANDES DE PRET IMMO QUI ONT LE STATUT "en cours" 
function GetTreatingHomeLoans($bdd)
{
    $req = "SELECT *  FROM home_loan WHERE statut = 'en cours' ";
    $statement = $bdd->query($req);
    $allTreatedHomeLoansCount = $statement->fetchAll();
    return $allTreatedHomeLoansCount;
}

// AFFICHER LE NOMBRE TOTAL DE DEMANDES DE PRET IMMO QUI ONT LE STATUT "traitée" 
function GetTreatedHomeLoansCount($bdd)
{
    $req = "SELECT COUNT(*) AS treated  FROM home_loan WHERE statut = 'traitée' ";
    $statement = $bdd->query($req);
    $allTreatedHomeLoansCount = $statement->fetch();
    return $allTreatedHomeLoansCount;
}

// AFFICHER LES DEMANDES DE PRET IMMO QUI ONT LE STATUT "traitée" 
function GetTreatedHomeLoans($bdd)
{
    $req = "SELECT *  FROM home_loan WHERE statut = 'traitée' ";
    $statement = $bdd->query($req);
    $allTreatedHomeLoansCount = $statement->fetchAll();
    return $allTreatedHomeLoansCount;
}


// AFFICHER LES 3 DERNIERES DEMANDES DE PRET IMMO

function GetLastHomeLoans($bdd)
{
    $req = "SELECT * FROM home_loan ORDER BY id DESC LIMIT 3 ";
    $statement = $bdd->query($req);
    $allHomeLoans = $statement->fetchAll();
    return $allHomeLoans;
}

// ACCEDER A Une demande de la table home_loan en particulier
function GetHomeLoan($bdd, $id)
{
    $req = "SELECT * FROM home_loan WHERE id = ?";
    $statement = $bdd->prepare($req);
    $statement->execute([$id]);
    $HomeLoan = $statement->fetch();
    return $HomeLoan;
}

// ACCEDER A TOUTES LES CHARGES TOUTES DEMANDES CONFONDUES 

function GetAllCharges($bdd)
{
    $req = "SELECT * FROM charges";
    $statement =  $bdd->query($req);
    $AllCharges = $statement->fetchAll();
    return $AllCharges;
}

// ACCEDER AUX CHARGES SUR UNE DEMANDE EN PARTICULIER 
function GetChargesOfLoan($bdd, $id)
{
    $req = "SELECT * FROM charges WHERE id_home_loan = ?";
    $statement = $bdd->prepare($req);
    $statement->execute([$id]);
    $ChargesOfLoan = $statement->fetch();
    return $ChargesOfLoan;
}
// ACCEDER A TOUS LES AUTRES CREDITS POUR TOUTES LES DEMANDES

function GetAllCredits($bdd)
{
    $req = "SELECT * FROM other_credits";
    $statement =  $bdd->query($req);
    $AllCredits = $statement->fetchAll();
    return $AllCredits;
}

// ACCEDER AUX CREDITS POUR UNE DEMANDE EN PARTICULIER
function GetCreditsOfLoan($bdd, $id)
{
    $req = "SELECT * FROM other_credits WHERE id_home_loan =?";
    $statement = $bdd->prepare($req,);
    $statement->execute([$id]);
    $AllCredits = $statement->fetch();
    return $AllCredits;
}

// ACCEDER A TOUS LES REVENUS DES DEMANDES
function GetAllRevenues($bdd)
{
    $req = "SELECT * FROM revenue";
    $statement =  $bdd->query($req);
    $AllRevenues = $statement->fetchAll();
    return $AllRevenues;
}

// ACCEDER AUX REVENUES D UNE DEMANDE EN PARTICULIER
function GetRevenuesOfLoan($bdd, $id)
{
    $req = "SELECT * FROM revenue WHERE id_home_loan = ?";
    $statement = $bdd->prepare($req);
    $statement->execute([$id]);
    $RevenuesOfLoan = $statement->fetch();
    return $RevenuesOfLoan;
}
// ACCEDER AUX DEMANDE DE PRET IMMO POUR UN EMPRUNTEUR EN PARTICULIER

function GetHomeLoansOfBorrower($bdd, $id)
{
    $req = "SELECT * FROM home_loan WHERE id_borrower = ?";
    $statement = $bdd->prepare($req);
    $statement->execute([$id]);
    $HomeLoansOfBorrower = $statement->fetch();
    return $HomeLoansOfBorrower;
}

// ACCEDER AUX DEMANDES DE PRET IMMO POUR UNE BANQUE EN PARTICULIER

function GetHomeLoansOfBank($bdd, $id)
{
    $req = "SELECT * FROM home_loan WHERE id_bank = ?";
    $statement = $bdd->prepare($req);
    $statement->execute([$id]);
    $HomeLoansOfBank = $statement->fetch();
    return $HomeLoansOfBank;
}

// **********LES INFORMATIONS SUR LES DEMANDES D'ASSURANCE ********************************

// ACCEDER A TOUTES LES DEMANDES D ASSURANCE 
function GetAllInsurances($bdd)
{
    $req = "SELECT * FROM insurance";
    $statement = $bdd->query($req);
    $allInsurances = $statement->fetchAll();
    return $allInsurances;
}

// AFFICHER LE NOMBRE TOTAL DE DEMANDES DE PRET IMMO
function GetAllInsurancesCount($bdd)
{
    $req = "SELECT COUNT (*) FROM insurance";
    $statement = $bdd->query($req);
    $allInsurancesCount = $statement->fetchAll();
    return $allInsurancesCount;
}

// AFFICHER LE NOMBRE TOTAL DE DEMANDES DE PRET IMMO ayant le statut "consultée"
function GetAllConsultedInsurancesCount($bdd)
{
    $req = "SELECT COUNT(*) AS consulted FROM insurance WHERE statut = 'consultée'";
    $statement = $bdd->query($req);
    $allConsultedInsurancesCount = $statement->fetch();
    return $allConsultedInsurancesCount;
}
// AFFICHER LES DEMANDES DE PRET IMMO ayant le statut "consultée"
function GetConsultedInsurances($bdd)
{
    $req = "SELECT *  FROM insurance WHERE statut = 'consultée'";
    $statement = $bdd->query($req);
    $allTreatedInsurancesCount = $statement->fetchAll();
    return $allTreatedInsurancesCount;
}

// AFFICHER LE NOMBRE TOTAL DE DEMANDES DE PRET IMMO ayant le statut "en cours"
function GetTreatingInsurancesCount($bdd)
{
    $req = "SELECT COUNT(*) AS treating FROM insurance WHERE statut = 'en cours'";
    $statement = $bdd->query($req);
    $allTreatingInsurancesCount = $statement->fetch();
    return $allTreatingInsurancesCount;
}

// AFFICHER LES DEMANDES DE PRET IMMO ayant le statut "en cours"
function GetTreatingInsurances($bdd)
{
    $req = "SELECT * FROM insurance WHERE statut = 'en cours'";
    $statement = $bdd->query($req);
    $allTreatedInsurancesCount = $statement->fetchAll();
    return $allTreatedInsurancesCount;
}

// AFFICHER LE NOMBRE TOTAL DE DEMANDES DE PRET IMMO ayant le statut "traitée"
function GetTreatedInsurancesCount($bdd)
{
    $req = "SELECT COUNT(*) AS treated FROM insurance WHERE statut = 'traitée'";
    $statement = $bdd->query($req);
    $allTreatedInsurancesCount = $statement->fetch();
    return $allTreatedInsurancesCount;
}
// AFFICHER LES DEMANDES DE PRET IMMO ayant le statut "traitée"
function GetTreatedInsurances($bdd)
{
    $req = "SELECT *  FROM insurance WHERE statut = 'traitée'";
    $statement = $bdd->query($req);
    $allTreatedInsurancesCount = $statement->fetchAll();
    return $allTreatedInsurancesCount;
}

// ACCEDER AUX 3 DERNIERS DEMANDES D ASSURANCE 
function GetLastInsurances($bdd)
{
    $req = "SELECT * FROM insurance ORDER BY id DESC LIMIT 3";
    $statement = $bdd->query($req);
    $allInsurances = $statement->fetchAll();
    return $allInsurances;
}
// ACCEDER AUX DEMANDES D ASSURANCE D'UN EMPRUNTEUR EN PARTICULIER
function GetInsurancesOfBorrower($bdd, $id)
{
    $req = "SELECT * FROM insurance WHERE id_borrower = ?";
    $statement = $bdd->prepare($req);
    $statement->execute([$id]);
    $InsurancesOfBorrower = $statement->fetch();
    return $InsurancesOfBorrower;
}

// ACCEDER AUX DEMANDES D ASSURANCE POUR UNE BANQUE EN PARTICULIER

function GetInsuranceOfBank($bdd, $id)
{
    $req = "SELECT * FROM insurance WHERE id_bank = ?";
    $statement = $bdd->prepare($req);
    $statement->execute([$id]);
    $InsuranceOfBank = $statement->fetch();
    return $InsuranceOfBank;
}

// **********LES INFORMATIONS SUR LES DEMANDES DE RACHAT DE CREDIT ********************************


// ACCEDER A TOUTE LES DEMANDES DE RACHATS DE CREDIT 

function GetAllRepurchases($bdd)
{
    $req = "SELECT * FROM repurchase";
    $statement = $bdd->query($req);
    $allRepurchases = $statement->fetchAll();
    return $allRepurchases;
}

// AFFICHER LE NOMBRE TOTAL DE DEMANDES DE RACHAT DE CREDIT
function GetAllRepurchasesCount($bdd)
{
    $req = "SELECT COUNT (*) FROM repurchase";
    $statement = $bdd->query($req);
    $allRepurchasesCount = $statement->fetchAll();
    return $allRepurchasesCount;
}

// AFFICHER LE NOMBRE TOTAL DE DEMANDES DE RACHAT DE CREDIT ayant le statut "consultée" 
function GetAllConsultedRepurchasesCount($bdd)
{
    $req = "SELECT COUNT(*) AS consulted FROM repurchase WHERE statut = 'consultée'";
    $statement = $bdd->query($req);
    $allConsultedRepurchasesCount = $statement->fetch();
    return $allConsultedRepurchasesCount;
}

// AFFICHER LES DEMANDES DE RACHAT DE CREDIT ayant le statut "consultée" 
function GetConsultedRepurchases($bdd)
{
    $req = "SELECT  * FROM repurchase WHERE statut = 'consultée'";
    $statement = $bdd->query($req);
    $allConsultedRepurchasesCount = $statement->fetchAll();
    return $allConsultedRepurchasesCount;
}


// AFFICHER LE NOMBRE TOTAL DE DEMANDES DE RACHAT DE CREDIT ayant le statut "en cours" 
function GetTreatingRepurchasesCount($bdd)
{
    $req = "SELECT COUNT(*) AS treating FROM repurchase WHERE statut = 'en cours'";
    $statement = $bdd->query($req);
    $allTreatingRepurchasesCount = $statement->fetch();
    return $allTreatingRepurchasesCount;
}

// AFFICHER LES DEMANDES DE RACHAT DE CREDIT ayant le statut "en cours" 
function GetTreatingRepurchases($bdd)
{
    $req = "SELECT  * FROM repurchase WHERE statut = 'en cours'";
    $statement = $bdd->query($req);
    $allConsultedRepurchasesCount = $statement->fetchAll();
    return $allConsultedRepurchasesCount;
}


// AFFICHER LE NOMBRE TOTAL DE DEMANDES DE RACHAT DE CREDIT ayant le statut "traitée" 
function GetTreatedRepurchasesCount($bdd)
{
    $req = "SELECT COUNT(*) AS treated FROM repurchase WHERE statut = 'traitée'";
    $statement = $bdd->query($req);
    $allTreatedRepurchasesCount = $statement->fetch();
    return $allTreatedRepurchasesCount;
}

// AFFICHER LES DEMANDES DE RACHAT DE CREDIT ayant le statut "traitée" 
function GetTreatedRepurchases($bdd)
{
    $req = "SELECT * FROM repurchase WHERE statut = 'traitée'";
    $statement = $bdd->query($req);
    $allTreatedRepurchasesCount = $statement->fetchAll();
    return $allTreatedRepurchasesCount;
}


// AFFICHER LES 3 DERNIERES DEMANDE DE RACHATS DE CREDITS 

function GetLastRepurchases($bdd)
{
    $req = "SELECT * FROM repurchase ORDER BY id DESC LIMIT 3";
    $statement = $bdd->query($req);
    $allRepurchases = $statement->fetchAll();
    return $allRepurchases;
}

// ACCEDER A TOUTES LES DEMANDES DE RACHATS DE CREDIT POUR UN UTILISATEUR EN PARTICULIER
function GetRepurchasesOfBorrower($bdd, $id)
{
    $req = "SELECT * FROM repurchase where id_borrower = ?";
    $statement = $bdd->prepare($req);
    $statement->execute([$id]);
    $allRepurchases = $statement->fetch();
    return $allRepurchases;
}


// **********************************CRUD************************************************



// ***********************************BARRE DE RECHERCHE ************************************

function GetSearch($bdd, $q)
{
    $getSearch = $bdd->query('SELECT * FROM home_loan WHERE usages LIKE "%' . $q . '%" ORDER BY id DESC');
    $results = $getSearch->fetchAll();
    return $results;
}

// ***************************************CONNEXION/INSCRIPTION ADMIN************************************

// function InsertUser($bdd){
//     $req = $bdd->prepare("INSERT INTO admin (first_name, last_name, email, password) VALUES (?,?,?,?)"); 
//     $req->execute([
//         $_POST['first_name']; 
//         $_POST['last_name']; 
//         $_POST['email']; 
//         password_hash($_POST['password'], PASSWORD_DEFAULT); 
//     ])
// }