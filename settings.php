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
 * Package settings. This settings will be used among all SIE package plugins
 *
 * @package    SIE
 * @copyright  2015 Planificacion de Entornos Tecnologicos SL
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {
    global $CFG;
    global $DB;
    $settings = new admin_settingpage('local_sieconfig', new lang_string('pluginname', 'local_sieconfig'));
    $ADMIN->add('localplugins', $settings);

    $settings->add(new admin_setting_heading('local_sieconfig_commonsettings',
            get_string('settingsheadercommon', 'local_sieconfig'), ''));

    $settings->add(new admin_setting_configtext('package_sie/baseurl', get_string('baseurl', 'local_sieconfig'), '', ''));

    $settings->add(new admin_setting_heading('local_sieconfig_settings', '', ''));

    $settings->add(new admin_setting_heading('local_sieconfig_exdbheader', get_string('settingsheaderdb', 'local_sieconfig'), ''));

    $settings->add(new admin_setting_configtext('package_sie/dbhost', get_string('dbhost', 'local_sieconfig'),
            get_string('dbhost_desc', 'local_sieconfig'), ''));

    $settings->add(new admin_setting_configtext('package_sie/dbuser',
            get_string('dbuser', 'local_sieconfig'), '', ''));

    $settings->add(new admin_setting_configpasswordunmask('package_sie/dbpass',
            get_string('dbpass', 'local_sieconfig'), '', ''));

    $settings->add(new admin_setting_configtext('package_sie/dbname',
            get_string('dbname', 'local_sieconfig'), get_string('dbname_desc', 'local_sieconfig'), ''));

    $settings->add(new admin_setting_heading('local_sieconfig_newcoursesheader',
            get_string('settingsheadernewcourses', 'local_sieconfig'), ''));

    $settings->add(new admin_setting_configselect('package_sie/professionalcertificatecategory',
            get_string('professionalcertificatecategory', 'local_sieconfig'),
            get_string('professionalcertificatecategory_desc', 'local_sieconfig'), 1, make_categories_options()));
}