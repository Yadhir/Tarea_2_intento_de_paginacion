CREATE INDEX departments_index USING BTREE ON departments(dept_no, dept_name);
CREATE INDEX dept_emp_index USING BTREE ON dept_emp(emp_no, dept_no);
CREATE INDEX dept_manager_index USING BTREE ON dept_manager(dept_no, emp_no);
CREATE INDEX employees_index USING BTREE ON employees(emp_no, first_name, last_name);
CREATE INDEX salaries_index USING BTREE ON salaries(emp_no, salary);
CREATE INDEX titles_index USING BTREE ON titles(emp_no, title);