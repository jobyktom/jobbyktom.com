<?php /* Smarty version 2.6.13, created on 2010-10-07 11:55:27
         compiled from smileydemo.tpl.html */ ?>

<div style="margin:30px 0 0 80px;">
<?php $_from = $this->_tpl_vars['smiley_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
 echo $this->_tpl_vars['item']; ?>

<?php endforeach; endif; unset($_from); ?>
</div>

<div style="margin:20px 0 0 80px;">
Smiley icons powered by <a href="http://www.iconkits.com/" target="_blank">ICONKITS.com</a>
</div>