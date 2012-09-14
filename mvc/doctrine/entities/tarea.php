<?php
//namespace Entities;
/** 
@Entity 
@Table(name="colab_tareas_de_historia")
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
	/** @Column(type="integer") **/
	public $dificultad;	
	
	/** @Column(type="integer") **/
	public $estado;
	/** @Column(type="string") **/
	public $usuario_asignado;
	/** @Column(type="integer") **/
	public $fk_usuario;
	/** @Column(type="integer") **/
	public $tiempo_estimado;	
}
?>