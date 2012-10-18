<?php /* Smarty version 2.6.13, created on 2010-10-07 11:55:47
         compiled from smiley.tpl.html */ ?>
<div style="margin-top:10px;">
<?php $_from = $this->_tpl_vars['smiley_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
 echo $this->_tpl_vars['item']; ?>

<?php endforeach; endif; unset($_from); ?>
</div>