<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Bruno Avet <dev@taktile.fr>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\Schedules\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'schedules';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
