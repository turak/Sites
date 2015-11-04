<?

class Validator{

    private $data;
    private $errors;

    public function __construct($data){

        $this->data = $data;

    }

    private function getField($field){

        if(!isset($this->data[$field])){
            return null;
        }
    }

    public function isAlpha($field, $errorMsg){

        if(!preg_match('/^[a-zA-Z0-9_]+$/', $this->getField([$field]))){
           $this->errors[$field] = $errorMsg;
        }
    }

    public function isUniq($field, $table, $errorMsg){

        
    }

}