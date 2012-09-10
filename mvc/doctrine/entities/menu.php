<?php
//namespace Entities;
/** 
@Entity 
@Table(name="sistema_menus")
**/
class Menu
{
	/** @Id @GeneratedValue @Column(type="integer") **/
    public $id;
	/** @Column(type="string") **/
    public $nombre;
	/** @Column(type="string") **/
    public $xtype;	
	/** @Column(type="string") **/
    public $icon;	
	/** @Column(type="integer") **/
    public $orden;
	/** @Column(type="integer") **/
    public $padre;
}
?>
