<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This is a one-line short description of the file.
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package    lytix_activity
 * @author     Günther Moser <moser@tugraz.at>
 * @author     Viktoria Wieser <viktoria.wieser@tugraz.at>
 * @copyright  2020 Educational Technologies, Graz, University of Technology
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// We defined the web service functions to install.
$functions = array(
    'local_lytix_lytix_activity_logs_get' => array(
        'classname'   => 'lytix_activity\\activity_graph_lib',
        'methodname'  => 'activity_logs_get',
        'description' => 'Get the activity logs for activity graph',
        'type'        => 'read',
        'ajax'        => 'true'
    ),
    'local_lytix_lytix_activity_toggle_others' => array(
        'classname'   => 'lytix_activity\\activity_graph_lib',
        'methodname'  => 'activity_toggle_others',
        'description' => 'Toggles the ShowOthers flag',
        'type'        => 'write',
        'ajax'        => 'true'
    ),
);



