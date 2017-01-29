<?php

/**
 * VisualEditorLinkTyping extension
 *
 * @file
 * @ingroup Extensions
 * @author Diffeo, 2016
 * @license MIT
 */
$wgExtensionCredits['other'][] = array(
  'path' => __FILE__,
  'name' => 'VisualEditorLinkTyping',
  'author' => array('Diffeo'),
  'version' => '0.3.0',
  'url' => 'http://diffeo.com/',
  'descriptionmsg' => 'semanticlinks-desc',
);

$wgMessagesDirs['SemanticLinks'] = __DIR__ . '/i18n';

$wgResourceModules['ext.VELinkTyping'] = array(
  'scripts' => 'modules/VELinkTyping.js',
  'styles' => 'modules/VELinkTyping.css',
  'localBasePath' => __DIR__,
  'remoteExtPath' => 'VisualEditorLinkTyping',
  'dependencies' => array(
    'ext.VELinkTyping.shortcut',
    // Yes, all are required... My goodness, WHY? ---AG
    'ext.visualEditor.viewPageTarget',
    'ext.visualEditor.mwreference',
    'ext.visualEditor.mwlink',
  ),
);

$wgResourceModules['ext.VELinkTyping.shortcut'] = array(
  'scripts' => 'modules/shortcut.js',
  'localBasePath' => __DIR__,
  'remoteExtPath' => 'VisualEditorLinkTyping',
);

$wgHooks['BeforePageDisplay'][] = function(OutputPage &$out, Skin &$skin) {
  $out->addModules('ext.VELinkTyping');
  return true;
};

?>
