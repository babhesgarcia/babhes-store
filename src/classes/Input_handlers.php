<?php

trait Input_handlers
{



    // check uploaded file
    public function check_input_file(string $name, array $file)
    {

        if (isset($file) && !empty($file)) {
            // checkuploaded files
            if (is_uploaded_file($file['tmp_name']) && $file['error'] === 0) {

                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png");

                $file_name = $file['name'];
                $file_type = $file['type'];
                $file_size = $file['size'];



                // check if extension is valid
                $extention = pathinfo($file_name, PATHINFO_EXTENSION);

                if (!array_key_exists($extention, $allowed)) {
                    $this->set_error($name, 'File format is not valid');
                }

                // check image size
                $maxsize = 5 * 1024 * 1024;
                if (
                    $file_size > $maxsize
                ) {
                    $this->set_error($name, 'Image size is maximum of 5MB');
                }


                // Verify MYME type of the file
                if (!in_array($file_type, $allowed)) {
                    $this->set_error($name, 'Something wrong please try again');
                }
            } else {
                $this->set_error($name, 'Please select a photo');
            }
        } else {
            $this->set_error($name, 'This field is required');
        }
    }

    // upload files
    public function upload_file(array $file, $dir)
    {
        $file_name = $file['name'];

        // remove file name 
        // $name = pathinfo($file_name, PATHINFO_FILENAME);

        $extention =
            pathinfo($file_name, PATHINFO_EXTENSION); // get file extension

        // add random string name
        $hash_name = uniqid('GARCIA_FOODSTORE-', true) . ".$extention";

        $tmp_name = $file['tmp_name'];

        if (move_uploaded_file($tmp_name, $dir . "/$hash_name")) {
            return $hash_name;
        }

        return false;
    }


    public function set_error($key, $value)
    {
        $this->errors[$key] = $value;
    }

    public function get_error($key)
    {
        return isset($this->errors[$key]) ? $this->errors[$key] : null;
    }


    public function set_input($key, $value)
    {
        $this->inputs[$key] = $value;
    }

    public function get_input($key)
    {
        return isset($this->inputs[$key]) ? $this->inputs[$key] : null;
    }

    // .. check individual input 
    public function check_input($key)
    {
        (isset($key) && !empty($_POST[$key])) ? $this->set_input($key, $_POST[$key]) : $this->set_error($key, 'This field is required');;
    }


    // checkup all input
    public function check_inputs($inputs)
    {
        foreach ($inputs as $name => $value) {
            if (isset($name) && !empty($value)) {
                $this->set_input($name, $value);
            } else {
                $this->set_error($name, 'This field is required');
            }
        }
    }

    function map_columnvalues($column, $values)
    {
        return  array_combine($column, $values);
    }

    public function is_set($key, $method = 'POST')
    {
        if ($method == 'GET') {
            return (isset($_GET[$key]) && !empty($key)) ? $_GET[$key] : null;
        }

        return (isset($_POST[$key]) && !empty($_POST[$key])) ? $_POST[$key] : null;
    }

    // .. cjeck errors
    public function no_errors()
    {
        return count($this->errors) === 0 ? true : false;
    }
}
