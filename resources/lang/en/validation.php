<?php

return [

  'accepted'             => ':attribute qəbul edilməlidir',
  'active_url'           => ':attribute doğru URL deyil',
  'after'                => ':attribute :date tarixindən sonra olmalıdır',
  'after_or_equal'       => ':attribute :date tarixi ilə eyni və ya sonra olmalıdır',
  'alpha'                => ':attribute yalnız hərflərdən ibarət ola bilər',
  'alpha_dash'           => ':attribute yalnız hərf, rəqəm və tire simvolundan ibarət ola bilər',
  'alpha_num'            => ':attribute yalnız hərf və rəqəmlərdən ibarət ola bilər',
  'array'                => ':attribute massiv formatında olmalıdır',
  'before'               => ':attribute :date tarixindən əvvəl olmalıdır',
  'before_or_equal'      => ':attribute :date tarixindən əvvəl və ya bərabər olmalıdır',
  'between'              => [
    'numeric' => ':attribute :min ilə :max arasında olmalıdır',
    'file'    => ':attribute :min ilə :max KB ölçüsü intervalında olmalıdır',
    'string'  => ':attribute :min ilə :max simvolu intervalında olmalıdır',
    'array'   => ':attribute :min ilə :max intervalında hissədən ibarət olmalıdır',
  ],
  'boolean'              => ' :attribute doğru və ya yanlış ola bilər',
  'confirmed'            => ' :attribute doğrulanması yanlışdır',
  'date'                 => ' :attribute tarix formatında olmalıdır',
  'date_format'          => ' :attribute :format formatında olmalıdır',
  'different'            => ' :attribute və :other fərqli olmalıdır',
  'digits'               => ' :attribute :digits rəqəmli olmalıdır',
  'digits_between'       => ' :attribute :min ilə :max rəqəmləri intervalında olmalıdır',
  'dimensions'           => ' :attribute doğru şəkil ölçülərində deyil',
  'distinct'             => ' :attribute dublikat qiymətlidir',
  'email'                => ' :attribute is not in the correct email format',
  'exists'               => ' seçilmiş :attribute yanlışdır',
  'file'                 => ' :attribute fayl formatında olmalıdır',
  'filled'               => ' :attribute qiyməti olmalıdır',
  'image'                => ' :attribute must be in image format',
  'in'                   => ' seçilmiş :attribute yanlışdır',
  'in_array'             => ' :attribute :other qiymətləri arasında olmalıdır',
  'integer'              => ' :attribute tam ədəd olmalıdır',
  'ip'                   => ' :attribute İP adres formatında olmalıdır',
  'ipv4'                 => ' :attribute İPv4 adres formatında olmalıdır',
  'ipv6'                 => ' :attribute İPv6 adres formatında olmalıdır',
  'json'                 => ' :attribute JSON formatında olmalıdır',
  'max'                  => [
    'numeric' => ' :attribute maksiumum :max rəqəmdən ibarət ola bilər',
    'file'    => ' :attribute maksimum :max KB ölçüsündə ola bilər',
    'string'  => ' :attribute max can contain :max characters',
    'array'   => ' :attribute maksimum :max hədd\'dən ibarət ola bilər',
  ],
  'mimes'                => ' Must be a file of type :attribute :values',
  'mimetypes'            => ' Must be a file of type :attribute :values',
  'min'                  => [
    'numeric' => ' :attribute minimum :min rəqəmdən ibarət ola bilər',
    'file'    => ' :attribute minimum :min KB ölçüsündə ola bilər',
    'string'  => ' :attribute minimum :min simvoldan ibarət ola bilər',
    'array'   => ' :attribute minimum :min hədd\'dən ibarət ola bilər',
  ],
  'not_in'               => ' seçilmiş :attribute yanlışdır',
  'numeric'              => ' :attribute rəqəmlərdən ibarət olmalıdır',
  'present'              => ' :attribute iştirak etməlidir',
  'regex'                => ' :attribute formatı yanlışdır',
  'required'             => ' :attribute required',
  'required_if'          => ' :attribute (:other :value ikən) required',
  'required_unless'      => ' :attribute (:other :values \'ə daxil ikən) required',
  'required_with'        => ' :attribute (:values var ikən) required',
  'required_with_all'    => ' :attribute (:values var ikən) required',
  'required_without'     => ' :attribute (:values yox ikən) required',
  'required_without_all' => ' :attribute (:values yox ikən) required',
  'same'                 => ' :attribute və :other eyni olmalıdır',
  'size'                 => [
    'numeric' => ' :attribute :size ölçüsündə olmalıdır',
    'file'    => ' :attribute :size KB ölçüsündə olmalıdır',
    'string'  => ' :attribute :size simvoldan ibarət olmalıdır',
    'array'   => ' :attribute :size hədd\'dən ibarət olmalıdır',
  ],
  'string'               => ' :attribute must be in string format',
  'timezone'             => ' :attribute ərazi formatında olmalıdır',
  'unique'               => ' :attribute artıq iştirak edib',
  'uploaded'             => ' :attribute could not be loaded',
  'url'                  => ' :attribute formatı yanlışdır',

  /*
  |--------------------------------------------------------------------------
  | Custom Validation Language Lines
  |--------------------------------------------------------------------------
  |
  | Here you may specify custom validation messages for attributes using the
  | convention "attribute.rule" to name the lines. This makes it quick to
  | specify a specific custom language line for a given attribute rule.
  |
  */

  'custom' => [
    'attribute-name' => [
      'rule-name' => 'custom-message',
    ],
  ],

  /*
  |--------------------------------------------------------------------------
  | Custom Validation Attributes
  |--------------------------------------------------------------------------
  |
  |  following language lines are used to swap attribute place-holders
  | with something more reader friendly such as E-Mail Address instead
  | of "email". This simply helps us make messages a little cleaner.
  |
  */

  'attributes' => [
    'name' => "Name",
    'surname' => "Surname",
    'email' => "Email",
    'password' => "Password",
    'description' => "Description",
    'title' => "Title",
    'subtitle' => "Subtitle",
    'image' => "Image",
    'image1' => "First Image",
    'image2' => "Second Image",
    'question_text' => "Question Text",
    'answer_text' => "Answer Text"
  ],

];
