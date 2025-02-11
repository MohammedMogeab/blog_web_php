<?php
namespace cors;
use PDO;
class Database{
       public $connection;
        public $statement;
     
       
         
 
    public function __construct($config,$username="root",$password=''){
 
    $dns="mysql:".http_build_query($config,"",";");
    //  $dns="mysql:host=localhost;user=root;password=mohammedmogeab;port=3306;dbname=test;charset=utf8";
    $this->connection=new PDO($dns,$username,$password, [
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
    ]);
    
    }
    
    /**
     * Runs a query and returns all results as an associative array.
     *
     * @param string $query SQL query to run.
     *
     * @return array
     */
     public function query($query,$param=[]){
    
    $this->statement=$this->connection->prepare($query);
    $this->statement->execute($param);
     return $this;
     }
    
    public function find(){
        return $this->statement->fetch();
    }
    public function findOrFail(){
        $result=$this->find();  
        if(!$result){ 
            abort(Response::NOT_FOUND);  
        }
        return $result;
    
    }

    public  function authorize($condition){
        if(!$condition){
            abort(Response::FORBIDDEN);
        }
    }
    public function get()  {
        return $this->statement->fetchAll();
    }
}   
?>    