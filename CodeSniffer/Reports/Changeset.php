<?php
/**
 * Changeset report for PHP_CodeSniffer.
 * Reports violations in changed lines only, in a VCS-managed folder
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Shady Sharaf <shady@xwp.co>
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2009-2014 SQLI <www.sqli.com>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * Changeset report for PHP_CodeSniffer.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Gabriele Santini <gsantini@sqli.com>
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2009-2014 SQLI <www.sqli.com>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class PHP_CodeSniffer_Reports_Changeset extends PHP_CodeSniffer_Reports_Full
{

	/**
	 * Line numbers of changed lines in all checked files
	 * @var array
	 */
	public $changed_lines = array();

	/**
	 * Generate a partial report for a single processed file.
	 *
	 * Function should return TRUE if it printed or stored data about the file
	 * and FALSE if it ignored the file. Returning TRUE indicates that the file and
	 * its data should be counted in the grand totals.
	 *
	 * @param array                $report      Prepared report data.
	 * @param PHP_CodeSniffer_File $phpcsFile   The file being reported on.
	 * @param boolean              $showSources Show sources?
	 * @param int                  $width       Maximum allowed line width.
	 *
	 * @return boolean
	 */
	public function generateFileReport(
		$report,
		PHP_CodeSniffer_File $phpcsFile,
		$showSources=false,
		$width=80
	) {
		$report = $phpcsFile->phpcs->cli->adjustReport( $report );
		parent::generateFileReport( $report, $phpcsFile, $showSources, $width );
	}//end generateFileReport()

}//end class
