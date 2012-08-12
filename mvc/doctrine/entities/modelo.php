<?php
//namespace Entities;
/** 
@Entity 
@Table(name="modelo_test")
**/
class Modelo
{
	/** @Id @GeneratedValue @Column(type="integer") **/
    public $id;
	/** @Column(type="string") **/
    public $nombre;
    protected $fecha_de_creacion;
	protected $fecha_de_modificacion;
}
?>
