<?php
/**
 * language.php
 *
 * ProcessMaker Open Source Edition
 * Copyright (C) 2004 - 2008 Colosa Inc.23
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 * For more information, contact Colosa Inc, 2566 Le Jeune Rd.,
 * Coral Gables, FL, 33134, USA, or email info@colosa.com.
 */
if (($RBAC_Response = $RBAC->userCanAccess( "PM_SETUP" )) != 1)
    return $RBAC_Response;
$G_ENABLE_BLANK_SKIN = true;

$dbc = new DBConnection();
$G_PUBLISH = new Publisher();
$G_PUBLISH->AddContent( "xmlform", "xmlform", "setup/language", "", "", "language_save" );
$G_PUBLISH->AddContent( "xmlform", "pagedTable", "setup/language_table", "", "", "../setup/languageAjax.php" );
G::RenderPage( 'publish' );
?>

<script language="JavaScript">

  function btnClick(myForm) {

    DESCRIPTION = myForm.elements ["form[LEX_VALUE]"];

    if((DESCRIPTION.value == ""))
    {
        alert ("<?php echo G::LoadTranslation("ID_MSG_ERROR_LANGUAGE_DESCRIPTION")?>");
    	DESCRIPTION.focus();
    	return;
    }
    else
    {
    	myForm.elements.BSUBMIT.disabled = true;
    	myForm.submit();
    }
  };
  function afterDeleteField()
  {
			window.location.href=window.location.href;
    	return false;
  }
</script>

