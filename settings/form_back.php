<?php
session_start();
if (isset($_POST["project"])) {

    $_SESSION["project"]["buy"] = $_POST["project"];

    header('location: ../nature_property.php?next=choice2');
    /************************************************* */
} else if (isset($_POST["nature_property"])) {
    $_SESSION["project"]["nature"] = $_POST["nature_property"];
    header('location: ../conditions.php?next=choice3');
    /************************************************* */
} else if (isset($_POST["conditions"])) {
    $_SESSION["project"]["our_conditions"] = $_POST["conditions"];
    header('location: ../usages.php?next=choice4');
    /************************************************* */
} else if (isset($_POST["usages"])) {
    $_SESSION["project"]["our_usages"] = $_POST["usages"];
    header('location: ../search_situation.php?next=choice5');
    /************************************************* */
} else if (isset($_POST["search_situation"])) {
    $_SESSION["project"]["our_search_situation"] = $_POST["search_situation"];
    header('location: ../situation_current_home.php?next=choice6');
    /************************************************* */
} else if (isset($_POST["situation_current_home"])) {
    $_SESSION["project"]["our_situation_current_home"] = $_POST["situation_current_home"];
    header('location: ../location_future_property.php?next=choice7');
    /************************************************* */
} else if (isset($_POST["location_future_property"])) {
    $_SESSION["project"]["our_location_future_property"] = $_POST["location_future_property"];
    $_SESSION["project"]["our_location_future_property2"] = $_POST["location_future_property2"];
    header('location: ../value.php?next=choice8');
    /************************************************* */
} else if (isset($_POST["value_property"]) && isset($_POST["value_works"]) && isset($_POST["personal_contribution"])) {
    $_SESSION["project"]["our_value"] = $_POST["value_property"];
    $_SESSION["project"]["our_value1"] = $_POST["value_works"];
    $_SESSION["project"]["our_value2"] = $_POST["personal_contribution"];
    header('location: ../loan_mode.php?next=choice9');

    /************************************************* */
} else if (isset($_POST["loan_mode"])) {
    if ($_POST['loan_mode'] == "Seul(e)") {
        $_SESSION["project"]["our_loan_mode"] = $_POST["loan_mode"];
        header('location: ../borrower.php?next=choice10');
    } else {
        $_SESSION["project"]["our_loan_mode"] = $_POST["loan_mode"];
        header('location: ../co_borrower.php?next=choice11');
    }
    /************************************************* */
} else if (isset($_POST["situation_professional"])) {
    $_SESSION["project"]["our_situation_professional"] = $_POST["situation_professional"];
    $_SESSION["project"]["our_situation_contract"] = $_POST["situation_contract"];
    $_SESSION["project"]["our_duration_contract"] = $_POST["duration_contract"];
    //refaire la redirection du location 
    header('location: ../coordinate_borrower.php?next=choice12');
    /************************************************* */
} else if (isset($_POST["double"])) {
    $_SESSION["project"]["borrower_situation_professional"] = $_POST["situation_professional1"];
    $_SESSION["project"]["borrower_situation_contract"] = $_POST["situation_contract1"];
    $_SESSION["project"]["borrower_duration_contract"] = $_POST["duration_contract1"];
    $_SESSION["project"]["co_borrower_situation_professional"] = $_POST["situation_professional2"];
    $_SESSION["project"]["co_borrower_situation_contract"] = $_POST["situation_contract2"];
    $_SESSION["project"]["co_borrower_duration_contract"] = $_POST["duration_contract2"];
    //refaire la redirection du location 
    header('location: ../coordinate_co_borrower.php?next=choice13');
    /************************************************* */
} else if (isset($_POST["coordinate_borrower"])) {
    $_SESSION["project"]["our_Civility"] = $_POST["Civility"];
    $_SESSION["project"]["our_first_name"] = $_POST["first_name"];
    $_SESSION["project"]["our_Family_situation"] = $_POST["Family_situation"];
    $_SESSION["project"]["our_Nationality"] = $_POST["Nationality"];
    $_SESSION["project"]["our_birth_date"] = $_POST["birth_date"];
    $_SESSION["project"]["our_street"] = $_POST["street"];
    $_SESSION["project"]["our_code_zippe"] = $_POST["code_zippe"];
    $_SESSION["project"]["our_town"] = $_POST["town"];
    $_SESSION["project"]["our_phone_number"] = $_POST["phone_number"];
    $_SESSION["project"]["our_mail"] = $_POST["mail"];
    $_SESSION["project"]["our_salary1"] = $_POST["salary1"];

    //refaire la redirection du location 
    header('location: ../sucess.php?next=choice14');
    /************************************************* */
} else if (isset($_POST["co_coordinate_borrower"])) {
    $_SESSION["project"]["our_Civility"] = $_POST["Civility"];
    $_SESSION["project"]["our_first_name"] = $_POST["first_name"];
    $_SESSION["project"]["our_Family_situation"] = $_POST["Family_situation"];
    $_SESSION["project"]["our_Nationality"] = $_POST["Nationality"];
    $_SESSION["project"]["our_birth_date"] = $_POST["birth_date"];
    $_SESSION["project"]["our_street"] = $_POST["street"];
    $_SESSION["project"]["our_code_zippe"] = $_POST["code_zippe"];
    $_SESSION["project"]["our_town"] = $_POST["town"];
    $_SESSION["project"]["our_phone_number"] = $_POST["phone_number"];
    $_SESSION["project"]["our_mail"] = $_POST["mail"];
    $_SESSION["project"]["our_salary1"] = $_POST["salary1"];

    $_SESSION["project"]["our_co_Civility"] = $_POST["Civility"];
    $_SESSION["project"]["our_co_first_name"] = $_POST["first_name"];
    $_SESSION["project"]["our_co_Family_situation"] = $_POST["Family_situation"];
    $_SESSION["project"]["our_co_Nationality"] = $_POST["Nationality"];
    $_SESSION["project"]["our_co_birth_date"] = $_POST["birth_date"];
    $_SESSION["project"]["our_co_street"] = $_POST["street"];
    $_SESSION["project"]["our_co_code_zippe"] = $_POST["code_zippe"];
    $_SESSION["project"]["our_co_town"] = $_POST["town"];
    $_SESSION["project"]["our_co_phone_number"] = $_POST["phone_number"];
    $_SESSION["project"]["our_co_mail"] = $_POST["mail"];
    $_SESSION["project"]["our_co_salary1"] = $_POST["salary1"];
    header('location: ../sucess.php?next=choice15');
}
