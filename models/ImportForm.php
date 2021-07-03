<?php

namespace app\models;

use Exception;
use Yii;
use yii\base\Model;
use app\models\FirstTable;
use app\models\SecondTable;
use app\models\ExcelFilterCustom;
use app\models\ExcelFilterAll;


/**
 * LoginForm is the model behind the login form.
 */
class ImportForm extends Model
{

    public $rowsFrist; 
    public $rowsSecond; 

    public $firstFile;
    public $secondFile;

    public $firstFilePath = '';
    public $secondFilePath = '';


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // both files are required.
            [['firstFile','secondFile'], 'file','skipOnEmpty' => false, 'extensions' => 'xlsx','checkExtensionByMimeType'=>false],
        ];
    }


    /**
     * Process first imported file. 
     */
    public function processFirst()
    { 

        $nameFirst = 'first_file.xlsx';
        $this->firstFilePath = Yii::$app->basePath.'/web/uploads/'.$nameFirst;

        //$filter = new ExcelFilterAll();

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

        $filter = new ExcelFilterCustom();
        $filter->start = 1;
        $filter->limit = 10;
    
        $reader->setReadFilter($filter);
    
        $spreadsheet = $reader->load($this->firstFilePath);
        $spreadsheet->setActiveSheetIndex(0);
        $worksheet = $spreadsheet->getActiveSheet();    
    
        $sheet_array = $worksheet->toArray(null,true,true,true);
        
        $headers_row = array_filter($sheet_array[1]);
        
        $filp_headers = array_flip($headers_row);


        for($i = 2; $i <=10; $i++){

            $data_row = $sheet_array[$i];

            $model = new FirstTable();

            foreach($filp_headers as $key => $letter){
                $model->{$key} = (string) $data_row[$letter];
            }

            $model->created_at = time();
            $model->updated_at = time();

            if(!$model->save()){
                echo '<pre>Error in importing first file';
                print_r($model->errors);
                exit; 
            }

        }

       return true;

    }


        /**
     * Process first imported file. 
     */
    public function processSecond()
    { 
        $nameSecond = 'second_file.xlsx';
        $this->secondFilePath = Yii::$app->basePath.'/web/uploads/'.$nameSecond;

        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

        $filter = new ExcelFilterCustom();
        $filter->start = 1;
        $filter->limit = 10;
    
        $reader->setReadFilter($filter);
    
        $spreadsheet = $reader->load($this->firstFilePath);
        $spreadsheet->setActiveSheetIndex(0);
        $worksheet = $spreadsheet->getActiveSheet();    
    
        $sheet_array = $worksheet->toArray(null,true,true,true);
        
        $headers_row = array_filter($sheet_array[1]);
        
        $filp_headers = array_flip($headers_row);


        for($i = 2; $i <=10; $i++){

            $data_row = $sheet_array[$i];

            $model = new SecondTable();

            foreach($filp_headers as $key => $letter){
                $model->{$key} = (string) $data_row[$letter];
            }

            $model->created_at = time();
            $model->updated_at = time();

            if(!$model->save()){
                echo '<pre>Error in Second Model';
                print_r($model->errors);
                exit; 
            }

        }

       return true;


    }

    public function upload() {

        if ($this->validate()) {
            
            if (!is_object($this->firstFile)) {
                $this->addError('firstFile', 'Please select  file');
                return FALSE;
            }

            if (!is_object($this->secondFile)) {
                $this->addError('secondFile', 'Please select file');
                return FALSE;
            }

            $nameFirst = 'first_file.xlsx';
            $this->firstFilePath = Yii::$app->basePath.'/web/uploads/'.$nameFirst;

            unlink($this->firstFilePath);

            if (!$this->firstFile->saveAs($this->firstFilePath)) {
                echo "Cannot upload first file"; exit;
            }

            $nameSecond = 'second_file.xlsx';
            $this->secondFilePath = Yii::$app->basePath.'/web/uploads/'.$nameSecond;

            unlink($this->secondFilePath);

            if (!$this->secondFile->saveAs($this->secondFilePath)) {
                echo "Cannot upload second file"; exit;
            }

            return TRUE;
        }

        return FALSE;
    }

}
