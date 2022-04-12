<?php

/*
 
Plugin Name: Age Attribute
 
Plugin URI: https://ageattribute.com/
 
Description: Plugin to Add Age Attribute to User Profile.
 
Version: 1.0
 
Author: Mostafa Mahmoud
 
Author URI: https://ageattribute.com/
 
License: GPLv2 or later
  
*/
add_action('show_user_profile', 'extra_user_profile_fields');
add_action('edit_user_profile', 'extra_user_profile_fields');

function extra_user_profile_fields($user)
{
    $year = get_the_author_meta('age', $user->ID);
    // var_dump($year);
?>
<h3><?php _e("Extra profile information", "blank"); ?></h3>

<table class="form-table">
    <tr>
        <th><label for="age"><?php _e("Age"); ?></label></th>
        <td>
            <input type="text" name="age" id="age" value="<?= $year; ?>
            " class="input" /><br />
            <span class="description"><?php _e("Please enter your age."); ?></span>
        </td>

    </tr>


</table>
<?php }
add_action('user_profile_update_errors', 'crf_user_profile_update_errors', 10, 3);
function crf_user_profile_update_errors($errors, $update, $user)
{
    if(! is_numeric(trim($_POST['age'])))
    {
        
        $errors->add('age', __('<strong>ERROR</strong>: your Age Must Be Numeric value.'));
    }

    elseif(empty($_POST['age']) || $_POST['age']==0 || !is_numeric($_POST['age'])){
        $errors->add('age', __('<strong>ERROR</strong>: Please enter your Age it can not be null.'));
    }
  
     elseif(!empty($_POST['age'])  && intval($_POST['age']) < 0) {
        $errors->add('age', __('<strong>ERROR</strong>: Your Age can not be less than Zero.'));
    }
    return $errors;
}



add_action('personal_options_update', 'save_extra_user_profile_fields');
add_action('edit_user_profile_update', 'save_extra_user_profile_fields');


function save_extra_user_profile_fields($user_id)
{

    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }
    if (!empty($_POST['age']) && intval($_POST['age']) > 0) {
        update_user_meta($user_id, 'age', intval($_POST['age']));
    }

    update_user_meta($user_id, 'age', $_POST['age']);
}