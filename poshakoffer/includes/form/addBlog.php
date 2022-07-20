<?php
if (!class_exists('AddBlog')) {
    class AddBlog extends Form
    {
        public function __construct($parameters = array())
        {
            $allowedInputs = ['onvan1', 'onvan12', 'title', 'blogPicture', 'onvan13', 'textPreview', 'text'];
            foreach ($allowedInputs as $function) {
                if (isset($parameters[$function])) {
                    $value = $parameters[$function];
                    $this->$function($value);
                } else
                    $this->$function();

            }
        }

        public function onvan1($value = 'افزودن مقاله')
        {
            $this->titr(1, $value);
        }

        public function onvan12($value = 'مشخصات مقاله')
        {
            $this->titr(3, $value);
        }

        public function title($value = '')
        {
            $this->textbox("عنوان مقاله", "title", $value, null, null, "required");
        }

        public function blogPicture()
        {
            $this->image("تصویر مقاله", "blogPicture");
        }

        public function onvan13($value = 'متن مقاله')
        {
            $this->titr(3, $value);
        }

        public function textPreview($value = '')
        {
            $this->textbox(" متن پیش نمایش", "textPreview", $value, null, null, "required");
        }

        public function text($value = '')
        {
            $this->bigText("توضیحات", "text", $value);
        }
    }
}