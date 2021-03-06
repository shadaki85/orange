<?php

/**
 * BaseDataGroupScreenPermission
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $data_group_id
 * @property integer $screen_id
 * @property integer $permission
 * @property DataGroup $DataGroup
 * @property Screen $Screen
 * 
 * @method integer                   getId()            Returns the current record's "id" value
 * @method integer                   getDataGroupId()   Returns the current record's "data_group_id" value
 * @method integer                   getScreenId()      Returns the current record's "screen_id" value
 * @method integer                   getPermission()    Returns the current record's "permission" value
 * @method DataGroup                 getDataGroup()     Returns the current record's "DataGroup" value
 * @method Screen                    getScreen()        Returns the current record's "Screen" value
 * @method DataGroupScreenPermission setId()            Sets the current record's "id" value
 * @method DataGroupScreenPermission setDataGroupId()   Sets the current record's "data_group_id" value
 * @method DataGroupScreenPermission setScreenId()      Sets the current record's "screen_id" value
 * @method DataGroupScreenPermission setPermission()    Sets the current record's "permission" value
 * @method DataGroupScreenPermission setDataGroup()     Sets the current record's "DataGroup" value
 * @method DataGroupScreenPermission setScreen()        Sets the current record's "Screen" value
 * 
 * @package    orangehrm
 * @subpackage model\core\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDataGroupScreenPermission extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_data_group_screen');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             ));
        $this->hasColumn('data_group_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('screen_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('permission', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DataGroup', array(
             'local' => 'data_group_id',
             'foreign' => 'id'));

        $this->hasOne('Screen', array(
             'local' => 'screen_id',
             'foreign' => 'id'));
    }
}