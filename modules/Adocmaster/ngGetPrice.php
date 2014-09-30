<?php
 /*************************************************************************************************
 * Copyright 2014 Opencubed -- This file is a part of TSOLUCIO coreBOS customizations.
 * You can copy, adapt and distribute the work under the "Attribution-NonCommercial-ShareAlike"
 * Vizsage Public License (the "License"). You may not use this file except in compliance with the
 * License. Roughly speaking, non-commercial users may share and modify this code, but must give credit
 * and share improvements. However, for proper details please read the full License, available at
 * http://vizsage.com/license/Vizsage-License-BY-NC-SA.html and the handy reference for understanding
 * the full license at http://vizsage.com/license/Vizsage-Deed-BY-NC-SA.html. Unless required by
 * applicable law or agreed to in writing, any software distributed under the License is distributed
 * on an  "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and limitations under the
 * License terms of Creative Commons Attribution-NonCommercial-ShareAlike 3.0 (the License).
 *************************************************************************************************
 *  Module       : Adocmaster
 *  Version      : 5.4.0
 *  Author       : Opencubed
 *************************************************************************************************/
global $adb,$log,$current_user;

 require_once('modules/Adocmaster/Adocmaster.php');
 require_once('modules/Adocdetail/Adocdetail.php');


 $laprueva=$_REQUEST['record'];
$sot=$_REQUEST['sot'];

$sot2=$_REQUEST['sot2'];
$kaction=$_REQUEST['kaction'];


if($kaction==doc1){
   
    require_once("modules/Adocmaster/calculateTariffPrice.php");
$foundRes2=calculatePrice('Adocdetail', $sot2, $laprueva, $sot);
$foundRes3=explode("::",$foundRes2);

   echo $foundRes3[7];


 
}

?>

