<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * The configuration for theme_moodle_lab is defined here.
 *
 * @package     theme_moodle_lab
 * @copyright   2026 Renzo Medina <medinast30@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

$THEME->name = 'moodle_lab';
$THEME->sheets = [];
$THEME->parents = ['boost'];
$THEME->editor_sheets = ['editor'];
$THEME->enable_dock = false;
$THEME->usefallback = false;
// $THEME->extrascsscallback = 'theme_moodle_lab_get_extra_scss';
// $THEME->prescsscallback = 'theme_moodle_lab_get_pre_scss';
// $THEME->precompiledcsscallback = 'theme_moodle_lab_get_precompiled_css';
$THEME->yuicssmodules = [];
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
$THEME->iconsystem = \core\output\icon_system::FONTAWESOME;
$THEME->haseditswitch = true;
$THEME->usescourseindex = true;
// By default, all Moodle theme do not need their titles displayed.
$THEME->activityheaderconfig = [
    'notitle' => true,
];
