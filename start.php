<?php
/**
 * Elgg Group Message board
 * This plugin allows groups to attach a message board to their profile for other users
 * to post comments.
 *
 * @package GroupMessageBoard
 */

/**
 * MessageBoard initialisation
 */
function groupmessageboard_init() {

	elgg_extend_view('groups/tool_latest','gmessageboard/group_module',1);
}

elgg_register_event_handler('init', 'system', 'groupmessageboard_init');