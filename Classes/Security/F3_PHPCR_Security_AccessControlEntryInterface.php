<?php
declare(ENCODING = 'utf-8');
namespace F3\PHPCR\Security;

/*                                                                        *
 * This script belongs to the FLOW3 package "PHPCR".                      *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * @package PHPCR
 * @subpackage Security
 * @version $Id$
 */

/**
 * An AccessControlEntry represents the association of one or more Privilege
 * objects with a specific Principal
 *
 * @package PHPCR
 * @subpackage Security
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
interface AccessControlEntryInterface {

	/**
	 * Returns the principal associated with this access control entry.
	 *
	 * @return java.security.Principal a Principal.
	 * @todo find replacement for java.security.Principal
	 */
	public function getPrincipal();

	/**
	 * Returns the privileges associated with this access control entry.
	 *
	 * @return array an array of Privileges.
	 */
	public function getPrivileges();

}

?>