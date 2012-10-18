<?php /* Smarty version 2.6.13, created on 2010-10-06 19:16:38
         compiled from admin/admin_comment.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'call_module', 'admin/admin_comment.tpl.html', 66, false),)), $this); ?>
  <h3 title="<?php echo $this->_tpl_vars['comment_data']['identifier_value']; ?>
"><a href="./commentlist.php?i=<?php echo $this->_tpl_vars['comment_data']['identifier_id']; ?>
"><?php echo $this->_tpl_vars['comment_data']['identifier_output']; ?>
</a></h3>
    
  
    <div class="c5t_link_button">
      <a href="./commentlistall.php"><?php echo $this->_tpl_vars['txt_latest_comments']; ?>
</a>        
    </div>
   
   
    <div class="n2s_comment_item_admin_details">
        <?php echo $this->_tpl_vars['comment_data']['comment_date']; ?>
 - <?php echo $this->_tpl_vars['comment_data']['comment_time']; ?>

        - <?php echo $this->_tpl_vars['txt_author_ip_address']; ?>
: <?php echo $this->_tpl_vars['comment_data']['comment_author_ip']; ?>

        - <span title="<?php echo $this->_tpl_vars['comment_data']['comment_author_host']; ?>
"><?php echo $this->_tpl_vars['txt_author_hostname']; ?>
: <?php echo $this->_tpl_vars['comment_data']['hostname_output']; ?>
</title>
        - <span title="<?php echo $this->_tpl_vars['comment_data']['comment_author_user_agent']; ?>
"><?php echo $this->_tpl_vars['txt_author_user_agent']; ?>
: <?php echo $this->_tpl_vars['comment_data']['user_agent_output']; ?>
</title>
    </div>   
   
    
    
    <?php if ($this->_tpl_vars['show_form'] == 'yes'): ?>

        <form <?php echo $this->_tpl_vars['form']['attributes']; ?>
>
          <table class="c5t_comment_form_table">

            <tr>
              <td colspan="2" class="c5t_error_message">
                <?php $_from = $this->_tpl_vars['message']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                  <div class="c5t_error_message_item"><?php echo $this->_tpl_vars['item']; ?>
</div>
                <?php endforeach; endif; unset($_from); ?>              
              </td>
            </tr>
            
            <tr>
              <td class="c5t_comment_form_label"><?php echo $this->_tpl_vars['form']['name']['label']; ?>
</td>
              <td class="c5t_comment_form_field">
                <?php if ($this->_tpl_vars['form']['name']['error']): ?> <span class="c5t_error_message"><?php echo $this->_tpl_vars['form']['name']['error']; ?>
</span> <br /><?php endif; ?>
                <?php echo $this->_tpl_vars['form']['name']['html']; ?>

              </td>
            </tr>

            <tr>
              <td class="c5t_comment_form_label">
                <?php echo $this->_tpl_vars['form']['email']['label']; ?>

              </td>
              <td class="c5t_comment_form_field">
                <?php if ($this->_tpl_vars['form']['email']['error']): ?> <span class="c5t_error_message"><?php echo $this->_tpl_vars['form']['email']['error']; ?>
</span> <br /><?php endif; ?>
                <?php echo $this->_tpl_vars['form']['email']['html']; ?>

              </td>
            </tr>

            <tr>
              <td class="c5t_comment_form_label"><?php echo $this->_tpl_vars['form']['homepage']['label']; ?>
</td>
              <td class="c5t_comment_form_field">
                <?php echo $this->_tpl_vars['form']['homepage']['html']; ?>

              </td>
            </tr>

            <tr>
              <td class="c5t_comment_form_label"><?php echo $this->_tpl_vars['form']['title']['label']; ?>
</td>
              <td class="c5t_comment_form_field">
                <?php echo $this->_tpl_vars['form']['title']['html']; ?>

              </td>
            </tr>

            <tr>
              <td></td>
              <td class="c5t_comment_form_field">
                <?php echo c5t_module::call_module_output(array('trigger' => 'backend_textarea','form' => 'form','field' => $this->_tpl_vars['comment_field_name']), $this);?>
             
              </td>
            </tr>

            <tr>
              <td class="c5t_comment_form_label">
                <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['comment_field_name']]['label']; ?>

              </td>
              <td class="c5t_comment_form_field">
                <?php if ($this->_tpl_vars['form'][$this->_tpl_vars['comment_field_name']]['error']): ?> <span class="c5t_error_message"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['comment_field_name']]['error']; ?>
</span> <br /><?php endif; ?>
                <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['comment_field_name']]['html']; ?>
                
              </td>
            </tr>

            <tr>
              <td class="c5t_comment_form_label"></td>
              <td class="c5t_comment_form_submit"><?php echo $this->_tpl_vars['form']['save']['html']; ?>
</td>
            </tr>

          </table>

        </form>

    <?php endif; ?>