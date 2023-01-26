<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Bruno Avet <dev@taktile.fr>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\Schedules\Tests\Unit\Controller;

use OCA\Schedules\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
