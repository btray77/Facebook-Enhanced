<?php
include ('libraries/Fb_enhanced.php');
$fb_enhanced = new Fb_enhanced();
$fb_me = $fb_enhanced->fb_get_me();
$fb_app = $fb_enhanced->fb_get_app();
/**
 * TODO: Add more test content.
 */