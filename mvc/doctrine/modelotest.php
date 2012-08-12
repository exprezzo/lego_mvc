<?php
namespace Entities;
/** 
@Entity 
@Table(name="modelo_test")
**/
class ModeloTest
{
	/** @Id @GeneratedValue @Column(type="integer") **/
    protected $id;
	/** @Column(type="string") **/
    protected $nombre;
    protected $fecha_de_creacion;
	protected $fecha_de_modificacion;
}
?>
