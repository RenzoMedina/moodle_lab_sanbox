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
 * Library of interface functions and constants for theme_moodle_lab
 *
 * @package     theme_moodle_lab
 * @copyright   2026 Renzo Medina <medinast30@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

function theme_moodle_lab_get_main_scss_content($theme) {
    $scss = '';
    $theme = theme_config::load('moodle_lab');
        // Hereda primero el SCSS de boost.
        $scss = theme_boost_get_main_scss_content($theme);
        // Luego agrega el SCSS propio del tema.
        $scss .= "\n" . file_get_contents(__DIR__ . '/scss/main.scss');
    return $scss;
}

function theme_moodle_lab_get_pre_scss($theme) {
    $scss = '';
    $scss .= file_get_contents(__DIR__ . '/scss/variables.scss');
    return $scss;
}