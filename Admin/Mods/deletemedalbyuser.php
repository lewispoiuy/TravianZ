<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       medals.php                                                  ##
##  Developed by:  aggenkeech                                                  ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
#################################################################################

include_once("../../Account.php");
mysqli_connect(SQL_SERVER, SQL_USER, SQL_PASS);
mysqli_select_db(SQL_DB);
if (!isset($_SESSION)) session_start();
if($_SESSION['access'] < ADMIN) die("Access Denied: You are not Admin!");  



$userid = $_POST['userid'];
mysqli_query($GLOBALS["link"], "DELETE FROM ".TB_PREFIX."medal WHERE userid = ".$userid."");

header("Location: ../../../Admin/admin.php?p=player&uid=".$userid."");
?>