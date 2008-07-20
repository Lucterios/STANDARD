<?php
// 
//     This file is part of Lucterios.
// 
//     Lucterios is free software; you can redistribute it and/or modify
//     it under the terms of the GNU General Public License as published by
//     the Free Software Foundation; either version 2 of the License, or
//     (at your option) any later version.
// 
//     Lucterios is distributed in the hope that it will be useful,
//     but WITHOUT ANY WARRANTY; without even the implied warranty of
//     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//     GNU General Public License for more details.
// 
//     You should have received a copy of the GNU General Public License
//     along with Lucterios; if not, write to the Free Software
//     Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
// 
// 	Contributeurs: Fanny ALLEAUME, Pierre-Olivier VERSCHOORE, Laurent GAY
//  // library file write by SDK tool
// --- Last modification: Date 07 March 2008 17:59:29 By  ---

//@BEGIN@
/**
* Controle et met a jour des données spécifique relative à l'application
*
* @param array $exensionVersions
 couple pour chaque application mise à jour l'ancienne et la nouvelle version.
* @return string retour console
*/
function postInstallation($exensionVersions=array())
{
	$text='';
	if (count($exensionVersions)==0) $text='Vide';
	foreach($exensionVersions as $exension=>$versions)
		$text.="$exension : ".$versions[0]." => ".$versions[1]."{[newline]}";
	return $text;
}
//@END@
?>
