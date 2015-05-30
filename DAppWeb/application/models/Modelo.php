<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Modelo extends CI_Model{
    	public function construct(){
        	parent::__construct();
    	}

    	public function c_simple($por_pagina,$segmento){
    		//$sql = $this->db->query('SELECT first_name, last_name FROM employees WHERE emp_no<"10020"');
            $numero = 10020;
            $this->db->select('first_name, last_name');
            $this->db->from('employees');
            $this->db->where('emp_no <',$numero);
            $this->db->limit($por_pagina,$segmento);
            $consulta = $this->db->get();
            if($consulta->num_rows()>0){
                foreach($consulta->result() as $fila){
                    $data[] = $fila;
                }
                return $data;
            }

   			//return $sql->result();
    	}

        public function filas_simple(){
            $numero = 10020;
            $this->db->select('first_name, last_name');
            $this->db->from('employees');
            $this->db->where('emp_no <',$numero);
            $consulta = $this->db->get();
            return  $consulta->num_rows();
        }







    	public function c_mediana($por_pagina,$segmento){
    		//$sql = $this->db->query('SELECT emp_no, salary FROM salaries WHERE salary>70000 AND salary<70010');
   			//return $sql->result();
            $sueldo = 70000;
            $this->db->select('emp_no, salary');
            $this->db->from('salaries');
            $this->db->where('salary <',$sueldo);
            $this->db->limit($por_pagina,$segmento);
            $consulta = $this->db->get();
            if($consulta->num_rows()>0){
                foreach($consulta->result() as $fila){
                    $data[] = $fila;
                }
                return $data;
            }

    	}

        public function filas_mediana(){
            $sueldo = 70000;
            $this->db->select('emp_no, salary');
            $this->db->from('salaries');
            $this->db->where('salary <',$sueldo);
            $consulta = $this->db->get();
            return  $consulta->num_rows();
        }






    	public function c_grande($por_pagina,$segmento){
    		/*$sql = $this->db->query('SELECT first_name, last_name, dept_name, title FROM
             departments as d JOIN dept_emp as de  JOIN employees as e JOIN titles as t
             WHERE  d.dept_name = "Development" AND
                    d.dept_no = de.dept_no AND
                    e.emp_no = de.emp_no AND
                    e.emp_no > 10121 AND                    
                    e.emp_no < 10150 AND
                    t.emp_no = e.emp_no AND
                    t.title = "Engineer"
                    ');
            return $sql->result();*/
            $this->db->select('first_name, last_name, dept_name, title');
            $this->db->from('departments');
            $this->db->join('dept_emp','departments.dept_no = dept_emp.dept_no');
            $this->db->join('employees', 'employees.emp_no = dept_emp.emp_no');
            $this->db->join('titles','titles.emp_no = employees.emp_no');
            //$this->db->join('departments', 'dept_emp.dept_no = departments.dept_no');
            $this->db->where('departments.dept_name', 'Development');
            $this->db->where('titles.title', 'Engineer');
            $consulta = $this->db->get();
            $this->db->limit($por_pagina,$segmento);
            $consulta = $this->db->get();
            if($consulta->num_rows()>0){
                foreach($consulta->result() as $fila){
                    $data[] = $fila;
                }
                return $data;
            }

        }



        public function filas_grande(){
            $this->db->select('first_name, last_name, dept_name, title');
            $this->db->from('departments');
            $this->db->join('dept_emp','departments.dept_no = dept_emp.dept_no');
            $this->db->join('employees', 'employees.emp_no = dept_emp.emp_no');
            $this->db->join('titles','titles.emp_no = employees.emp_no');
            //$this->db->join('departments', 'dept_emp.dept_no = departments.dept_no');
            $this->db->where('departments.dept_name', 'Development');
            $this->db->where('titles.title', 'Engineer');
            $consulta = $this->db->get();
            return  $consulta->num_rows() ;
        }
}



        





/*public function c_grande(){
            $sql = $this->db->query('SELECT first_name, last_name, dept_name FROM
             departments as d JOIN dept_emp as de  JOIN employees as e
             WHERE  d.dept_name = "Development" AND
                    d.dept_no = de.dept_no AND
                    e.emp_no = de.emp_no');
         return $sql->result();
    }
*/

// public function consulta_compleja(){
//         $sql = $this->db->query('SELECT first_name, last_name, salary, title, de.from_date , de.to_date, dept_name FROM
//             titles as t JOIN employees as e  JOIN salaries as s JOIN dept_emp as de JOIN departments as d
//             WHERE t.emp_no = e.emp_no AND
//                 s.emp_no = e.emp_no AND
//                 e.emp_no = de.emp_no AND
//                 de.dept_no = d.dept_no AND 
//                 e.emp_no < 90500 AND
//                 e.emp_no > 90000');
//         return $sql->result();
//     }