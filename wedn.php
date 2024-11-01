<?php
/**
 * Plugin Name: wedn
 * Plugin URI: http://wordpress.org/plugins/wedn/
 * Description: 修改Google字体服务为360提供，修改Gravatar为多说服务提供
 * Author: iceStone <ice@wedn.net>
 * Version: 1.0
 * Author URI: http://wedn.net/
 */

/**
 * 载入过滤器
 */
require_once dirname( __FILE__ ) . '/includes/filters.php';

/**
 * 载入所有行为
 */
require_once dirname( __FILE__ ) . '/includes/actions.php';