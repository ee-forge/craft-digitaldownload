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

namespace doublesecretagency\digitaldownload\migrations;

use craft\db\Migration;
use yii\base\NotSupportedException;

/**
 * Migration: Add allowHotlinks column
 * @since 3.1.0
 */
class m240408_000000_digitalDownload_addAllowHotlinksColumn extends Migration
{

    /**
     * @inheritdoc
     * @throws NotSupportedException
     */
    public function safeUp(): void
    {
        $table = '{{%digitaldownload_tokens}}';
        if (!$this->db->columnExists($table, 'allowHotlinks')) {
            $this->addColumn($table, 'allowHotlinks', $this->string()->after('token'));
        }
        $this->update($table, ['allowHotlinks' => 'all']);
    }

    /**
     * @inheritdoc
     */
    public function safeDown(): bool
    {
        echo "m240408_000000_digitalDownload_addAllowHotlinksColumn cannot be reverted.\n";

        return false;
    }

}
