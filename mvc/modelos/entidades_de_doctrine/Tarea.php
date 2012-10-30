<?php
//namespace Entities;
/** 
@Entity 
@Table(name="scrum_tareas")
**/
class Tarea
{
	/** @Id @GeneratedValue @Column(type="integer") **/
    public $id;
	
	/** @Column(type="string") **/
    public $descripcion;	
    
	/** @Column(type="integer") **/
    public $prioridad;
	
	/** @Column(type="integer") **/
    public $fk_historia;
	
	/** @Column(type="string") **/
    public $detalles;	
	
	/** @Column(type="integer") **/
    public $fk_estado;
	
	/** @Column(type="integer") **/
    public $estimado;
	
	
	/** @Column(type="integer") **/	
    public $duracion;	
	
	
}
?>



