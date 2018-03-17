<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.1
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################


// https://github.com/WoollyinWalesIT/jomres/issues/272
try {
	$query = "DELETE FROM #__jomres_oauth_access_tokens";

	doInsertSql( $query );
	} 
	catch (Exception $e) {
		//do nothing
	}
