<?php
/**
 * Group file module
 */

$group = elgg_get_page_owner_entity();

//if ($group->file_enable == "no") {
//	return true;
//}

$all_link = elgg_view('output/url', array(
	'href' => "messageboard/group/$group->guid/all",
	'text' => elgg_echo('link:view:all'),
	'is_trusted' => true,
));

elgg_push_context('widgets');
$options = array(
	'annotations_name' => 'messageboard',
	'guid' => $group->getGUID(),
	'limit' => 6,
	'pagination' => false,
	'reverse_order_by' => true,
);

if (elgg_is_logged_in()) {
	$content = elgg_view_form('messageboard/add', array('name' => 'elgg-gmessageboard'));
}

$content.= elgg_list_annotations($options);
elgg_pop_context();


echo elgg_view('groups/profile/module', array(
	'title' => elgg_echo('messageboard:group:board'),
	'content' => $content,
	'all_link' => $all_link,
));
