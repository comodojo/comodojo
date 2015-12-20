<?php

/**
 * This is the main comodojo configuration.
 *
 * Any constant defined here will override dynamic settings.
 *
 * @package     Comodojo dispatcher
 * @author      Marco Giovinazzi <marco.giovinazzi@comodojo.org>
 * @license     GPL-3.0+
 *
 * LICENSE:
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

######## BEGIN GENERAL PROPERTIES ########

/**
 * Dispatcher real path
 *
 * @static	string
 */
define("DISPATCHER_REAL_PATH", realpath(dirname(__FILE__)."/../")."/");

/**
 * Local timezone, to not rely on the system's timezone settings
 * (optional if correctly configured in php.ini)
 *
 * It is STRONGLY reccomended to set this parameter properly
 *
 * @static  string
 */
define("EXTENDER_TIMEZONE", "Europe/Rome");

/**
 * Extender real path
 *
 * @static  string
 */
define("EXTENDER_REAL_PATH", realpath(dirname(__FILE__)."/../")."/");

######### END GENERAL PROPERTIES #########

######## BEGIN DATABASE PROPERTIES ########

/**
 * Database model
 *
 * Currently, extender is tested on MySQL and SQLite3 databases, but may work also
 * with models supported by comodojo/database lib.
 *
 * Safe choices: MYSQLI, MYSQL_PDO or SQLITE_PDO (default)
 *
 * @static  string
 */
define("EXTENDER_DATABASE_MODEL", "SQLITE_PDO");

/**
 * Database host
 *
 * @static  string
 */
define("EXTENDER_DATABASE_HOST", "localhost");

/**
 * Database port
 *
 * @static  integer
 */
define("EXTENDER_DATABASE_PORT",1);

/**
 * Database name
 *
 * In case of SQLITE_PDO database model, name SHOULD contain full path to db file
 *
 * @static  string
 */
define("EXTENDER_DATABASE_NAME", EXTENDER_DATABASE_FOLDER."extender.sqlite");

/**
 * Database user
 *
 * @static  string
 */
define("EXTENDER_DATABASE_USER", "comodojo");

/**
 * Database password
 *
 * @static  string
 */
define("EXTENDER_DATABASE_PASS", "");

/**
 * Database tables' prefix
 *
 * @static  string
 */
define("EXTENDER_DATABASE_PREFIX", "extender_");

/**
 * Jobs table name
 *
 * @static  string
 */
define("EXTENDER_DATABASE_TABLE_JOBS", "jobs");

/**
 * Worklogs table name
 *
 * @static  string
 */
define("EXTENDER_DATABASE_TABLE_WORKLOGS", "worklogs");

######## END DATABASE PROPERTIES ########
