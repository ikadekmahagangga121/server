<?php
/**
 * @copyright 2017, Roeland Jago Douma <roeland@famdouma.nl>
 *
 * @author Christoph Wurst <christoph@winzerhof-wurst.at>
 * @author Roeland Jago Douma <roeland@famdouma.nl>
 * @author Kate Döen <kate.doeen@nextcloud.com>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */
namespace OC\Core\Controller;

use OCP\AppFramework\Controller;
use OCP\AppFramework\Http;
use OCP\AppFramework\Http\Attribute\OpenAPI;
use OCP\AppFramework\Http\Response;

#[OpenAPI(scope: OpenAPI::SCOPE_IGNORE)]
class WalledGardenController extends Controller {
	/**
	 * @PublicPage
	 * @NoCSRFRequired
	 */
	public function get(): Response {
		$resp = new Response();
		$resp->setStatus(Http::STATUS_NO_CONTENT);
		return $resp;
	}
}
