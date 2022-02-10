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
 * Settings
 *
 * @package     factor_email
 * @author      Mikhail Golenkov <golenkovm@gmail.com>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$settings->add(new admin_setting_configcheckbox('factor_email/enabled',
    new lang_string('settings:enablefactor', 'tool_mfa'),
    new lang_string('settings:enablefactor_help', 'tool_mfa'), 0));

$settings->add(new admin_setting_configtext('factor_email/weight',
    new lang_string('settings:weight', 'tool_mfa'),
    new lang_string('settings:weight_help', 'tool_mfa'), 100, PARAM_INT));

$settings->add(new admin_setting_configduration('factor_email/duration',
    get_string('settings:duration', 'factor_email'),
    get_string('settings:duration_help', 'factor_email'), 30 * MINSECS, MINSECS));

$options = array(
    '0' => get_string('settings:emailonly', 'factor_email'),
    '1' => get_string('settings:smsonly', 'factor_email'),
    '2' => get_string('settings:emailandsmsboth', 'factor_email')
);
$settings->add(new admin_setting_configselect('factor_email/type',
    get_string('settings:type', 'factor_email'),
    get_string('settings:type_help', 'factor_email'), 0, $options));

$settings->add(new admin_setting_configtext('factor_email/twiliosid',
    get_string('settings:twiliosid', 'factor_email'),
    get_string('settings:twiliosid_help', 'factor_email'), '', PARAM_RAW));

$settings->add(new admin_setting_configtext('factor_email/twiliotoken',
    get_string('settings:twiliotoken', 'factor_email'),
    get_string('settings:twiliotoken_help', 'factor_email'), '', PARAM_RAW));

$settings->add(new admin_setting_configtext('factor_email/twiliophone',
    get_string('settings:twiliophone', 'factor_email'),
    get_string('settings:twiliophone_help', 'factor_email'), '', PARAM_RAW));

$settings->add(new admin_setting_configcheckbox('factor_email/suspend',
    get_string('settings:suspend', 'factor_email'),
    get_string('settings:suspend_help', 'factor_email'), 0));
