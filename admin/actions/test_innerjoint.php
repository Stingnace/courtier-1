<?php
require("../../componants/function.php");

$userLoans = GetUserAndLoan($bdd);
echo $userLoans;