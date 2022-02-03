<?php

class ingredients_model extends CI_model {
    // Following the core principles of crud (Create, Read, Update, Delete)
    
    // ------------------------------------------------------------ Getting All Information(Read) --------------------------------------------------------------
    // getting all info
    public function get_all(){
        $query = $this -> db-> query("select * from ingredients");
        
        if($query->num_rows() > 0) return $query->result();
		else return FALSE;
    }
    
    // getting single info using id
	public function get_info($id){
        $query = $this -> db-> query("select * from ingredients where ingredient_id = '$id'");
        
        if($query->num_rows() > 0) return $query->row();
		else return FALSE;
    }
    
    // getting single info using any parameter
	public function get_single_by($column, $value){
        $query = $this -> db-> query("select * from ingredients where $column = '$value'");
        
        if($query->num_rows() > 0) return $query->row();
		else return FALSE;
    }
    
    // getting multiple info using any parameter
	public function get_multiple_by($column, $value){
        $query = $this -> db-> query("select * from ingredients where $column = '$value'");
        
        if($query->num_rows() > 0) return $query->result();
		else return FALSE;
    }

    
    // ------------------------------------------------------------ (Insert) --------------------------------------------------------------
    // creating an insert function
    public function add($data){
        try{
            // if statement to handle insert success
            if($this -> db -> insert("ingredients",$data)){
                // getting the last insert id
                $insert_id = $this->db->insert_id();
                return $insert_id;
            }
            else{
                return false;
            }
            
        }catch(mysqli_sql_exception $e){
            return false;
        }
    }

    // ------------------------------------------------------------ (Delete) --------------------------------------------------------------
    // creating an delete statement
    public function delete($id){
        // if statement to handle delete success
        if($this -> db -> delete("ingredients","ingredient_id =".$id)){
            return true;
        }
    }

    // creating an delete statement using any parameter
    public function delete_by($column, $value){
        // if statement to handle delete success
        if($this -> db -> delete("ingredients","" . $column . "=" . $value)){
            return true;
        }
    }

    // ------------------------------------------------------------ (Update) --------------------------------------------------------------
    // creating an update statement
    public function update($id, $data){
        
        $this -> db -> set($data);

        // specifying the column/ condidtion where the update would be made
        $this -> db -> where("ingredient_id",$id);

        // actual update
        if($this -> db -> update("ingredients",$data)){
            return true;
        }
    }

    // creating an update statement using any parameter
    public function update_by($column, $value, $data){
        
        $this -> db -> set($data);

        // specifying the column/ condidtion where the update would be made
        $this -> db -> where($column, $value);

        // actual update
        if($this -> db -> update("ingredients",$data)){
            return true;
        }
    }
}

?>