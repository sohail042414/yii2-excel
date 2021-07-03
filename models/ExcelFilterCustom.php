<?php
namespace app\models;

/**
 * These are very basic filter classes
 * On is to read limited records from excel sheet
 * Other is to read all records.
 */

class ExcelFilterCustom implements \PhpOffice\PhpSpreadsheet\Reader\IReadFilter {

    public $start = 1;
    public $limit = 100;

    public function readCell($column, $row, $worksheetName = '') {
        // Read rows
        $end = $this->start+ $this->limit;

        if ( $row >= $this->start && $row < $end) {
            return true;
        }
        return false;
    }
}
