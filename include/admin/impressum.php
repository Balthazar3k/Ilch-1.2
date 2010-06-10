<?php
/**
 * @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
 * @copyright (C) 2000-2010 ilch.de
 * @version $Id$
 */
defined('main') or die('no direct access');
defined('admin') or die('only admin access');

$design = new design('Ilch Admin-Control-Panel :: Impressum', '', 2);
$design->header();

if (isset($_POST[ 'sub' ])) {
    $t1 = escape($_POST[ 't1' ], 'textarea');
    $v1 = escape($_POST[ 'v1' ], 'string');
    $v2 = escape($_POST[ 'v2' ], 'string');
    $v3 = escape($_POST[ 'v3' ], 'string');
    $v4 = escape($_POST[ 'v4' ], 'string');
    db_query("UPDATE `prefix_allg` SET `v1` = '" . $v1 . "', `v2` = '" . $v2 . "', `v3` = '" . $v3 . "', `v4` = '" . $v4 . "', `t1` = '" . $t1 . "' WHERE `k` = 'impressum'");
}

$erg = db_query("SELECT * FROM `prefix_allg` WHERE `k` = 'impressum' LIMIT 1");
$row = db_fetch_assoc($erg);
if ($row[ 't1' ] == '') {
    $f = @implode('', @file('http://disclaimer.de/disclaimer.htm'));
    $f = preg_replace("/.*?<a NAME=\"1\">(.*)<p><b><font size=2>5\..*?/Uis", "<h3><a name=\"1\">\\1<\/p>", $f);
    $f = preg_replace("/<\/?font[^>]*>/is", "", $f);
    $t = $f;
} else {
    $t = $row[ 't1' ];
}

?>

	<form action="?impressum" method="POST">
	<input type="text" name="v1" value="<?php
echo $row[ 'v1' ];

?>" size="60">
	<br />
	<input type="text" name="v2" value="<?php
echo $row[ 'v2' ];

?>" size="60">
	<br />
	<input type="text" name="v3" value="<?php
echo $row[ 'v3' ];

?>" size="60">
	<br /><br />
	<input type="text" name="v4" value="<?php
echo $row[ 'v4' ];

?>" size="60">
	<br /><br /><br />
	<textarea cols="60" rows="15" name="t1"><?php
echo unescape($t);

?></textarea>
	<br /><br />
	<input class="sub" type="submit" name="sub" value="Absenden" />
	</form>

<?php
$design->footer();

?>