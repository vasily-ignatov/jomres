<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.0
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 *
 * @package Jomres\Core\Classes
 *
 * Creates the Jomres config panel object.
 *
 *
 */
class jomres_content_tabs_bootstrap4
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
		$this->panes = array();
		$this->paneLink = array();
		$this->counter = 1;
		$this->panelNames = array();
		$this->randomString = '';
		$this->useCookies = false;
	}

	/**
	 * Starts the tabs.
	 */
	public function startTabs()
	{
		echo '<div id="tabbable" > <!-- start tabs panel -->';
	}

	/**
	 * Starts the panel.
	 */
	public function startPanel($tabpage)
	{
		$this->content = '';
		$active = '';
		if (!get_showtime('first_tab_active')) {
			$active = 'active';
			set_showtime('first_tab_active', true);
		}

		//$anchor = preg_replace( '/[^A-Za-z0-9_-]+/', "", $tabpage );
		//if ( strlen( $anchor ) == 0 ) // Do not re-enable this line. We need a random string here as phrases like "reservas" can appear in multiple places in the page, making individual tabs unable to show.
			$anchor = generateJomresRandomString(10);
		$tabCookieString = '';
		$this->panelNames[ ] = $anchor;
		$this->paneLink[ ] = '<li class=" nav-item"><a href="#'.$anchor.'" class="'.$active.' nav-link" data-toggle="tab">'.$tabpage.'</a></li>
		';
		$this->panes[ ] = '<div class="tab-pane '.$active.'" id="'.$anchor.'"><!-- start content tab panel -->';
	}

	/**
	 * Inserts content into the panel.
	 */
	public function insertContent()
	{
		$this->panes[ ] = $this->content.'
		';
	}

	/**
	 * Ends the panel.
	 */
	public function endPanel()
	{
		$this->panes[ ] = '</div> <!-- end content tab panel -->';
	}

	/**
	 * Ends the tabs.
	 */
	public function endTabs()
	{
		echo '<ul class="nav nav-tabs">
		';
		foreach ($this->paneLink as $pane) {
			echo $pane;
		}
		echo '</ul>
		';
		echo '<div class="tab-content">
		';
		foreach ($this->panes as $pane) {
			echo $pane;
		}
		echo '</div> <!-- end tabs content -->
		';
		echo '</div> <!-- end tabs panel -->';
	}

	/**
	 * Adds content to the this->content array variable.
	 */
	public function setcontent($val = '&nbsp;')
	{
		$this->content .= $val;
	}
}
