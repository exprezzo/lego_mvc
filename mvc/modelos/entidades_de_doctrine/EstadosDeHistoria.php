<?php
//namespace Entities;
/** 
@Entity 
@Table(name="scrum_estados_de_historia")
**/
class EstadosDeHistoria
{
	/** @Id @GeneratedValue @Column(type="integer") **/
    public $id;
	
	/** @Column(type="string") **/
    public $nombre;	
	
    /** @Column(type="boolean") **/
    public $default;
	
	/** @Column(type="string") **/
    public $descripcion;
	
	/** @Column(type="string") **/
    public $icon;
	
	
		
}
?>
