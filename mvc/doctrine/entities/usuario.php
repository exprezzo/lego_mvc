<?php
//namespace Entities;
/** 
@Entity 
@Table(name="sistema_usuarios")
**/
class Usuario
{
	/** @Id @GeneratedValue @Column(type="integer") **/
    public $id;
	/** @Column(type="string") **/
    public $nombre;
	/** @Column(type="string") **/
    public $email;	
	/** @Column(type="string") **/
    public $pass;		   
}
?>
