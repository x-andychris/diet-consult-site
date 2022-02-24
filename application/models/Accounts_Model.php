<?php

class accounts_model extends CI_model {
    // Following the core principles of crud (Create, Read, Update, Delete)
    
    // ------------------------------------------------------------ Getting All Information(Read) --------------------------------------------------------------
    // getting all info
    public function get_all(){
        $query = $this -> db-> query("select * from accounts");
        
        if($query->num_rows() > 0) return $query->result();
		else return FALSE;
    }
    
    // getting single info using id
	public function get_info($id){
        $query = $this -> db-> query("select * from accounts where account_id = '$id'");
        
        if($query->num_rows() > 0) return $query->row();
		else return FALSE;
    }
    
    // getting single info using any parameter
	public function get_single_by($column, $value){
        $query = $this -> db-> query("select * from accounts where $column = '$value'");
        
        if($query->num_rows() > 0) return $query->row();
		else return FALSE;
    }
    
    // getting multiple info using any parameter
	public function get_multiple_by($column, $value){
        $query = $this -> db-> query("select * from accounts where $column = '$value'");
        
        if($query->num_rows() > 0) return $query->result();
		else return FALSE;
    }

    
    // ------------------------------------------------------------ Validating Account information (Read) --------------------------------------------------------------
    
    // checking if an email and a password exists in the table
    public function auth_user($email, $password){
        $query = $this -> db-> query("select * from accounts where email = '$email'");
        
        if($query->num_rows() > 0){
            // checking if the password matches
            $rowitem = $query -> row();
            // verifying the encrypted password
            if(password_verify($password, $rowitem -> password)){
                return $rowitem;
            }
            else {return FALSE;}
        } 
		else {return FALSE;}
    }
    
    // ------------------------------------------------------------ (Insert) --------------------------------------------------------------
    // creating an insert function
    public function add($data){
        try{
            // if statement to handle insert success
            if($this -> db -> insert("accounts",$data)){
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
        if($this -> db -> delete("accounts","account_id =".$id)){
            return true;
        }
    }

    // creating an delete statement using any parameter
    public function delete_by($column, $value){
        // if statement to handle delete success
        if($this -> db -> delete("accounts","" . $column . "=" . $value)){
            return true;
        }
    }

    // ------------------------------------------------------------ (Update) --------------------------------------------------------------
    // creating an update statement
    public function update($id, $data){
        
        $this -> db -> set($data);

        // specifying the column/ condidtion where the update would be made
        $this -> db -> where("account_id",$id);

        // actual update
        if($this -> db -> update("accounts",$data)){
            return true;
        }
    }

    // creating an update statement using any parameter
    public function update_by($column, $value, $data){
        
        $this -> db -> set($data);

        // specifying the column/ condidtion where the update would be made
        $this -> db -> where($column, $value);

        // actual update
        if($this -> db -> update("accounts",$data)){
            return true;
        }
    }
}

?>