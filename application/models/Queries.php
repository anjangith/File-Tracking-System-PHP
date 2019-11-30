<?php
  class Queries extends CI_Model {

    public function getRoles(){
      $roles = $this->db->get('roles');
      if($roles->num_rows()>0){
        return $roles->result();
      }
    }

    public function getCategories(){
      $roles = $this->db->get('category');
      if($roles->num_rows()>0){
        return $roles->result();
      }
    }

    public function getSanctioned(){
      $files = $this->db->where(['filestatus'=>'SANCTIONED'])->get('filetracker');
      if($files->num_rows()>0){
        return $files->result();
      }
    }

    public function getRejected(){
      $files = $this->db->where(['filestatus'=>'REJECTED'])->get('filetracker');
      if($files->num_rows()>0){
        return $files->result();
      }
    }

    public function getProcessed(){
      $files = $this->db->where(['filestatus'=>'PROCESSING'])->get('filetracker');
      if($files->num_rows()>0){
        return $files->result();
      }
    }

    public function getAllFiles(){
        $roles = $this->db->get('files');
        if($roles->num_rows()>0){
          return $roles->result();
        }
      }

      public function getEveryFile(){
          $roles = $this->db->get('filetracker');
          if($roles->num_rows()>0){
            return $roles->result();
          }
        }





      public function postNewDispatchFile($data){
        return $this->db->insert('filetracker',$data);

      }




    public function postNewUser($data){
      return $this->db->insert('user',$data);
    }

    public function postNewDept($data){
      return $this->db->insert('department',$data);
    }


    public function postNewFile($data){
      return $this->db->insert('files',$data);
    }

    public function getDepartments(){
      $dept = $this->db->get('department');
      if($dept->num_rows()>0){
        return $dept->result();
      }
    }

    public function updateReceiveStatus($fid){
      $data = array(
    'receivestatus'=>'TRUE');
      $this->db->where('f_id', $fid);
      $this->db->update('filetracker', $data);
    }

    public function getAllUsers(){
      $users = $this->db->get('user');
      if($users->num_rows()>0){
        return $users->result();
      }
    }

    public function rejectFile($fid){
      $data = array(
    'filestatus'=>'REJECTED'
   );
      $this->db->where('f_id', $fid);
      $this->db->update('filetracker', $data);
    }

    public function sanctionFile($fid){
      $data = array(
    'filestatus'=>'SANCTIONED'
   );
      $this->db->where('f_id', $fid);
      $this->db->update('filetracker', $data);
    }





    public function registerAdmin($data){
      return $this->db->insert('users',$data);
    }

    public function checkAdminExist(){
      $chkAdmin=$this->db->where(['role_id'=>'1'])->get('user');
      if($chkAdmin->num_rows()>0){
        return $chkAdmin->num_rows();
      }
    }



    public function adminExist($email, $password){
      $chkAdmin = $this->db->where(['email'=>$email,'password'=>$password])->get('user');
      if($chkAdmin->num_rows()>0){
        return $chkAdmin->row();
      }
    }

    public function makeCollege($data){
      return $this->db->insert('tbl_college',$data);
    }

    public function postWork($data){
      return $this->db->insert('posts',$data);
    }

    public function getColleges(){
      $colleges = $this->db->get('tbl_college');
      if($colleges->num_rows()>0){
        return $colleges->result();
      }
  }

  public function getTrackFiles($id){


    $files =  $this->db->where(['u_id'=>$id])->get('filetracker');
    if($files->num_rows()>0){
      return $files->result();
    }
  }


  public function registerCoAdmin($data){
    return $this->db->insert('tbl_users',$data);
  }

  public function insertStudent($data){
    return $this->db->insert('tbl_student',$data);
  }

  public function getStudents($college_id){
    $this->db->select(['tbl_college.collegename','tbl_student.id','tbl_student.studentname','tbl_student.email','tbl_student.gender','tbl_student.course']);
    $this->db->from('tbl_student');
    $this->db->join('tbl_college','tbl_college.college_id=tbl_student.college_id');
    $this->db->where(['tbl_student.college_id'=> $college_id]);
    $student = $this->db->get();
    return $student->result();
  }

  public function getStudentRecord($id){
    $this->db->select(['tbl_college.college_id','tbl_college.collegename','tbl_student.id','tbl_student.email','tbl_student.gender','tbl_student.studentname',
    'tbl_student.course']);
    $this->db->from('tbl_student');
    $this->db->join('tbl_college','tbl_college.college_id=tbl_student.college_id');
    $student= $this->db->get();
    return $student->row();
  }

  public function updateStudent($data, $id){
    return $this->db->where('id',$id)->update('tbl_student',$data);
  }

  public function removeStudent($id){
    return $this->db->delete('tbl_student',['id'=>$id]);
  }

  public function getDeptName($id){
    $dept = $this->db->where(['d_id'=>$id])->get('department');
    if($dept->num_rows()>0){
      return $dept->row();
    }
  }

  public function getCName($id){
    $category = $this->db->where(['c_id'=>$id])->get('category');
    if($category->num_rows()>0){
      return $category->row();
    }
  }

  public function getFileName($id){
    $category = $this->db->where(['f_id'=>$id])->get('files');
    if($category->num_rows()>0){
      return $category->row();
    }
  }

  public function getUserName($id){
    $category = $this->db->where(['u_id'=>$id])->get('user');
    if($category->num_rows()>0){
      return $category->row();
    }
  }
}
 ?>
