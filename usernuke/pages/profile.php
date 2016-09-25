<?php
if(HasPermission('usernukepermission') and $loguser['root']) 
	$links[] = actionLinkTag(__("Nuke User"), "nuke", "".$id);
?>
