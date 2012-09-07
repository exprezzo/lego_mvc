<?php
//namespace Entities;
/** 
@Entity 
@Table(name="pendientes")
**/
class Pendientes
{
	/** @Id @GeneratedValue @Column(type="integer") **/
    public $id;
	/** @Column(type="string") **/
    public $nombre;
	/** @Column(type="string") **/
    public $descripcion;
}
?>
