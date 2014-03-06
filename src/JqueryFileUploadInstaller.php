<?php
/*
 * Copyright (c) 2013 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */

namespace Mouf\Utils\Log\Psr;

use Mouf\Installer\PackageInstallerInterface;
use Mouf\MoufManager;
use Mouf\Html\Utils\WebLibraryManager\WebLibraryInstaller;

/**
 * Installer class for the package
 */
class JqueryFileUploadInstaller implements PackageInstallerInterface {

	/**
	 * (non-PHPdoc)
	 * @see \Mouf\Installer\PackageInstallerInterface::install()
	 */
	public static function install(MoufManager $moufManager) {
		WebLibraryInstaller::installLibrary("jQueryFileUploadLibrary",
			array(
			'vendor/blueimp/jquery-file-upload/js/jquery.iframe-transport.js',
			'vendor/blueimp/jquery-file-upload/js/jquery.fileupload.js'
			),
			array(),
			array(),
			true
		);

		
		// Let's rewrite the MoufComponents.php file to save the component
		$moufManager->rewriteMouf();
	}
}
