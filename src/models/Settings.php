<?php
/**
 * Digital Download plugin for Craft CMS
 *
 * Provide secure digital download links to your files.
 *
 * @author    Double Secret Agency
 * @link      https://www.doublesecretagency.com/
 * @copyright Copyright (c) 2016 Double Secret Agency
 */

namespace doublesecretagency\digitaldownload\models;

use craft\base\Model;

/**
 * Class Settings
 * @since 2.0.0
 */
class Settings extends Model
{

    /**
     * @var string A short path for download URLs.
     */
    public string $shortPath = 'download';

    /**
     * @var string Which domains (besides this one) can download linked files.
     */
    public string $allowHotlinks = 'none';

    /**
     * @var array List of domains allowed to hotlink downloadable files.
     */
    public array $hotlinksWhitelist = [];

    /**
     * @var bool Whether to keep a detailed log of all downloads.
     */
    public bool $keepDownloadLog = false;

}
