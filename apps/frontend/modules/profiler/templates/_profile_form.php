<fieldset>

    <?php echo($form->renderHiddenFields()) ?>
    <?php echo($form->renderGlobalErrors()) ?>

    <dl>
        <?php include_partial('registration/field', array('field' => $form['username'])) ?>
        <?php include_partial('registration/field', array('field' => $form['first_name'])) ?>
        <?php include_partial('registration/field', array('field' => $form['last_name'])) ?>
        <?php include_partial('registration/field', array('field' => $form['email_address'])) ?>
    <dl>

</fieldset>
