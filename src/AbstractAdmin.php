<?php
/**
 * Created by PhpStorm.
 * User: alpipego
 * Date: 08/10/16
 * Time: 13:59
 */
declare(strict_types = 1);

namespace Alpipego\AWP\Settings;

class AbstractAdmin {
	protected $localized = [];

	public function localizeScript( array $toLocalize ) : array {
		foreach ( $toLocalize as $key => $value ) {
			$this->localized[ $key ] = $value;
		}

		return $this->localized;
	}
}
