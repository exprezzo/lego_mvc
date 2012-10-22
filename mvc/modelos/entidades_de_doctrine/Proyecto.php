<?php
//namespace Entities;
/** 
@Entity 
@Table(name="scrum_proyectos")
**/
class Proyecto
{
	/** @Id @GeneratedValue @Column(type="integer") **/
    public $id;
	
	/** @Column(type="string") **/
    public $nombre;	
	
    /** @Column(type="string") **/
    public $descripcion;
	
	/** @Column(type="integer") **/
    public $predeterminado;
}
?>
