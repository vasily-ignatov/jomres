<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16010stats_properties_clicks
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$this->retVal = array ( "task" => "stats_properties_clicks", "text" => jr_gettext( '_JRPORTAL_STATS_STATTYPE_PROPERTIES', _JRPORTAL_STATS_STATTYPE_PROPERTIES,false ) );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVal;
		}
	}