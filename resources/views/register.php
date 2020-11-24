<h1>Create an account</h1>

<?php

$form = App\Libraries\Form\Form::begin('/register', 'post');

echo $form->field($model, 'name');
echo $form->field($model, 'username');
echo $form->field($model, 'email');
echo $form->field($model, 'password')->passwordField();
echo $form->field($model, 'confirmPassword')->passwordField();

?>

<button type="submit" class="btn btn-primary">Submit</button>

<?php App\Libraries\Form\Form::end(); ?>
