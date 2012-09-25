<?php
//namespace Entities;
/** 
@Entity 
@Table(name="scrum_historias_de_usuario")
**/
class Historia_de_usuario
{
	/** @Id @GeneratedValue @Column(type="integer") **/
    public $id;
	/** @Column(type="string") **/
    public $descripcion;	
    /** @Column(type="integer") **/
    public $fk_proyecto;
	/** @Column(type="integer") **/
    public $fk_sprint;
	/** @Column(type="integer") **/
    public $es_backlog;	
	/** @Column(type="string") **/
    public $detalles;	
}
?>
