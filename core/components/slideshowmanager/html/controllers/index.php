<?php
/**
 * Batcher
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of Batcher, a batch resource editing Extra.
 *
 * Batcher is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Batcher is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Batcher; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package batcher
 */
/**
 * @package batcher
 * @subpackage controllers
 */

 
$modx->regClientCSS(MODX_ASSETS_URL.'components/slideshowmanager/css/layout.css');
$modx->regClientCSS(MODX_ASSETS_URL.'components/slideshowmanager/css/form.css');

define('SLIDE_MODEL_DIR', dirname(dirname(__FILE__)).'/model/' );
define('CMP_MODEL_DIR', dirname(dirname(__FILE__)).'/model/' );
require_once CMP_MODEL_DIR.'slideshowmanager/jgslideshow.class.php';

$jgSlideshow = new jgSlideshow($modx);
return $jgSlideshow->initialize('mgr');