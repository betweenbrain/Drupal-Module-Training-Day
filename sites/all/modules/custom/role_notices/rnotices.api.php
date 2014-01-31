<?php
/**
 * @file
 * This file contains no working PHP code; it exists to provide additional documentation
 * for doxygen as well as to document hooks in the standard Drupal manner.
 */
/*
 * Alter the notices that will displayed to the user
 *
 * @param array &$notices
 *   The keys of this array are Role Ids(rid). The values are the notice texts.
 */
function hook_rnotices_notices_alter(&$notices)
{
	// Use only the first notice
	foreach ($notices as $rid => $notice_text)
	{
		$notices = array($rid => $notice_text);

		return;
	}
}