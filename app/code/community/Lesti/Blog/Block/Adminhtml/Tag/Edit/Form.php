<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gordon
 * Date: 24.04.13
 * Time: 09:54
 * To change this template use File | Settings | File Templates.
 */
class Lesti_Blog_Block_Adminhtml_Tag_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form(array('id' => 'edit_form', 'action' => $this->getData('action'), 'method' => 'post'));
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}