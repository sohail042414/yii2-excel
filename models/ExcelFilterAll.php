<?php

namespace app\models;

/**
 * Filter to read everything from excelsheet.
 */

class ExcelFilterAll implements \PhpOffice\PhpSpreadsheet\Reader\IReadFilter {

    public function readCell($column, $row, $worksheetName = '') {
        return true;
    }
}