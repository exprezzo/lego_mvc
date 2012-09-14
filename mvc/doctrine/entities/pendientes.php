<?php
//namespace Entities;
/** 
@Entity 
@Table(name="colab_historias")
**/
class Pendientes
{
	/** @Id @GeneratedValue @Column(type="integer") **/
    public $id;
	/** @Column(type="string") **/
    public $nombre;
	/** @Column(type="string") **/
    public $descripcion;	
	/** @Column(type="integer") **/
    public $prioridad;
	/** @Column(type="integer") **/
    public $grupo;
	
	//Crear getters y setters 
}
?>
