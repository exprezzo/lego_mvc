<?php
//namespace Entities;
/** 
@Entity 
@Table(name="scrum_sprint")
**/
class Sprint
{
	/** @Id @GeneratedValue @Column(type="integer") **/
    public $id;
	/** @Column(type="string") **/
    public $nombre;	
    
}
?>
