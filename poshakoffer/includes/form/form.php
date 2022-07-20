<?php
if (!class_exists('Form')) {
    class Form
    {
        public $valid = true;

        var $inputArray = [];

        private function template($input, $helper = null, $error = null)
        {
            $output = <<< EOT
                <section class="mb-3">
                    {$input}
EOT;
            if (isset($helper))
                $output .= <<<EOT
                    <section class = "text-muted">{$helper}</section>
EOT;
            $output .= <<<EOT
					<section class = "text-danger">{$error}</section>
                </section>
EOT;
            $this->inputArray[] = $output;
        }

        public function titr($type, $value, $helper = null)
        {
            $error = null;
            if (!Validation::number($type))
                $error = 'نوع تیتر باید یک عدد صحیح باشد!';
            if (!isset($value))
                $value = 'تیتر ' . $type;
            $output = <<< EOT
                    <h{$type}>{$value}</h{$type}>
EOT;
            $this->template($output, $helper, $error);
        }

        public function paragraph($value, $helper = null)
        {
            $error = null;
            if (!isset($value))
                $value = 'پاراگراف';
            $output = <<< EOT
                    <p>{$value}</p>
EOT;
            $this->template($output, $helper, $error);
        }

        private function text($type = 'text', $label, $name, $value, $error = null, $helper, $options)
        {
            if (!isset($name))
                $name = $type;
            if (!isset($label))
                $label = $name;
            $optionsArray = explode('|', $options);
            $options = implode(' ', $optionsArray);
            $output = <<< EOT
                    <label for = "{$name}"  class = "form-label">{$label}</label><br>
                    <input type = "{$type}" name = "{$name}" id = "{$name}" value = "{$value}" class = "form-control" {$options}>
EOT;
            $this->template($output, $helper, $error);
        }

        private function checkbox($type = 'checkbox', $label, $name, $value, $error = null, $helper, $options)
        {
            if (!isset($name))
                $name = $type;
            if (!isset($label))
                $label = $name;
            $output = <<< EOT
                    <input type = "{$type}" name = "{$name}" id = "{$name}" value = "{$value}" class = "form-check-input" {$options}>
                    <label for = "{$name}"  class = "form-check-label">{$label}</label>
EOT;
            $this->template($output, $helper);
        }

        public function bigText($label = null, $name, $value = '', $error = null, $helper = null, $options = '')
        {
            if (!isset($label))
                $label = $name;
            $output = <<< EOT
					<label for = "{$name}" class = "form-label">{$label}</label><br>
					<textarea name = "{$name}" id = "{$name}" class = "form-control" {$options}>{$value}</textarea>
EOT;
            $this->template($output, $helper);
        }

        public function select($label = null, $name, $value = '', $error = null, $helper = null, $options = '', $values = array())
        {
            $error = null;
            if (!isset($label))
                $label = $name;

            $output = <<< EOT
					<label for = "{$name}" class = "form-label">{$label}</label><br>
					<select name = "{$name}" id = "{$name}" class = "form-control">
					{$value}
EOT;
            foreach ($values as $valuesKey => $valuesValue) {
                $selected = '';
                if ($value === $valuesKey)
                    $selected = 'selected';
                $output .= <<< EOT
						<option value = {$valuesKey} {$selected} id="{$valuesKey}">{$valuesValue}</option>
EOT;
            }
            $output .= '
					</select>
			';
            $this->template($output, $helper, $error);
        }

        public function password($label = null, $name = null, $value = '', $error = null, $helper = null, $options = '')
        {
            $error = null;
            $type = 'password';
            if (!isset($name))
                $name = $type;
            if (!isset($label))
                $label = $name;
            $optionsArray = explode('|', $options);
            $options = implode(' ', $optionsArray);
            $result = <<< EOT
					<label for = "{$name}" class = "form-label">{$label}</label><br>
					<section class = "input-group">
                        <input type = "{$type}" name = "{$name}" id = "{$name}" value = "{$value}" class = "form-control" {$options}>
                        <button type="button" class="input-group-text far fa-eye" id="toggleButton{$name}"></button>
                    </section>
EOT;
            $this->template($result, $helper, $error);
        }

        public function textbox($label = null, $name = null, $value = '', $error = null, $helper = null, $options = '')
        {
            $error = null;
            $this->text('text', $label, $name, $value, $error, $helper, $options);
        }

        public function number($label = null, $name = null, $value = 0, $error = null, $helper = null, $options = '')
        {
            if (!Validation::number($value))
                $error = 'مقدار باید یک عدد صحیح باشد!';
            $this->text('number', $label, $name, $value, $error, $helper, $options);
        }

        public function email($label = null, $name = null, $value = '', $error = null, $helper = null, $options = '')
        {
            $error = null;
            $options = 'required | pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" | title = "الگوی مناسب وارد کنید"';
            $this->text('email', $label, $name, $value, $error, $helper, $options);
        }

        public function date($label = null, $name = null, $value = '', $error = null, $helper = null, $options = '')
        {
            $error = null;
            $this->text('date', $label, $name, $value, $error, $helper, $options);
        }

        public function time($label = null, $name = null, $value = '00:00', $error = null, $helper = null, $options = '')
        {
            $error = null;
            $this->text('time', $label, $name, $value, $error, $helper, $options);
        }

        public function switche($label = null, $name = null, $value = 'true', $error = null, $helper = null, $options = '')
        {
            $error = null;
            $this->checkbox('checkbox', $label, $name, $value, $error, $helper, $options);
        }

        public function image($label = null, $name = null, $value = '', $error = null, $helper = null, $options = 'accept = "image/*"')
        {
            //if( ! isset($options) )
            //$options = 'image/*';
            $error = null;
            $this->text('file', $label, $name, $value, $error, $helper, $options);
        } // accept = 'image/jpeg, image/gif, ...' | 'image/*'

        private static function csrf()
        {
            $token = Validation:: tokenGenerator();
            $_SESSION['csrf_token'] = $token;
            $output = <<< EOT
				<input type = 'hidden' name = 'csrf_token' value = '{$token}'><br>
EOT;
            return $output;
        }

        public function __toString()
        {
            $output = <<< EOT
                <form action = "" method = "post" enctype = "multipart/form-data" class="mx-auto position-relative bg-white p-3">
EOT;
            $output .= self::csrf();
            foreach ($this->inputArray as $inputString)
                $output .= $inputString;
            $output .= <<< EOT
                    <input type = "submit" name = "submit" value = "ثبت" class="btn btn-primary">
                </form>
EOT;
            return $output;
        }
    }
}

include 'register.php';
include 'addProduct.php';
include 'editProduct.php';
include 'addBlog.php';
include 'Login.php';