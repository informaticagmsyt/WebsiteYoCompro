<?php
class m_listado extends CI_Model
{
  public $desde;
  public $hasta;
    function _construct(){
        parent::__construct();
        $this->desde=false;
        $this->hasta=false;  
    }
    public function setDesdeHasta($desde, $hasta){
      $this->desde=$desde;
      $this->hasta=$hasta;
    }     
public function get_estados(){
    $this->db->query("SELECT '*'");
    $this->db->from('estados');
    $stado = $this->db->get();
      return $stado->result();
 }
public function get_municipio_query($id_estado){
       $this->db->query("SELECT '*'");
        $this->db->from('municipios');
        $this->db->where("id_estado='$id_estado'");
        $stado = $this->db->get();
        return $stado->result();
}
public function listado_estatus(){
    $this->db->query("SELECT COUNT('*')");
    $this->db->from('estatus');
    $contar = $this->db->get();
      return $contar->result();
 }
 public function listado_tipo_usuario(){
  $this->db->query("SELECT ('*') ");
  $this->db->from('tipo_usuario');
  $contar = $this->db->get();
    return $contar->result();
 }  
public function listado_total(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('personas');
  $contar = $this->db->get();
    return $contar->result();
 }
 public function listado_agro(){
  $this->db->query("SELECT  count('planes.planes')");
  $this->db->from('public.personas, public.planes, public.planes_personas, public.estados');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND
  planes.id_planes = planes_personas.key_id_planes AND planes.id_planes = '1' AND estados.id_estado='8'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $agro = $this->db->get();
    return $agro->result();
 }/*
  public function listado_asesorate(){
  $this->db->query("SELECT  count('planes.planes')");
  $this->db->from('public.personas, public.planes, public.planes_personas');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND
  planes.id_planes = planes_personas.key_id_planes AND planes.id_planes = '2'");
  $agro = $this->db->get();
    return $agro->result();
 }
  public function listado_brigadas(){
  $this->db->query("SELECT  count('planes.planes')");
  $this->db->from('public.personas, public.planes, public.planes_personas');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND
  planes.id_planes = planes_personas.key_id_planes AND planes.id_planes = '3'");
  $brigadas = $this->db->get();
    return $brigadas->result();
 }
  public function listado_emprende(){
  $this->db->query("SELECT  count('planes.planes')");
  $this->db->from('public.personas, public.planes, public.planes_personas');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND
  planes.id_planes = planes_personas.key_id_planes AND planes.id_planes = '4'");
  $emprende = $this->db->get();
    return $emprende->result();
 }
  public function listado_ingenio(){
  $this->db->query("SELECT  count('planes.planes')");
  $this->db->from('public.personas, public.planes, public.planes_personas');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND
  planes.id_planes = planes_personas.key_id_planes AND planes.id_planes = '5'");
  $ingenio = $this->db->get();
    return $ingenio->result();
 }
public function listado_amazonas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='1'");
  $amazonas = $this->db->get();
    return $amazonas->result();
 }
public function listado_anzoategui(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='2'");
  $amazonas = $this->db->get();
    return $amazonas->result();
 }
public function listado_apure(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='3'");
  $amazonas = $this->db->get();
    return $amazonas->result();
 }
public function listado_aragua(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='4'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
public function listado_barinas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='5'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
public function listado_bolivar(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='6'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
public function listado_carabobo(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='7'");
  $aragua = $this->db->get();
    return $aragua->result();
 }*/
public function listado_cojedes(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='8'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }/*
    public function listado_delta(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='9'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function listado_distrito(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='10'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function listado_falcon(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='11'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function listado_guarico(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='12'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_lara(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='13'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_merida(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='14'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function listado_miranda(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='15'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_monagas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='16'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function listado_esparta(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='17'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function listado_portuguesa(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='18'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function listado_sucre(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='19'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function listado_tachira(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='20'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_trujillo(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='21'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_vargas(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='22'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_yaracuy(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='23'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_zulia(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND estados.id_estado='24'");
  $aragua = $this->db->get();
    return $aragua->result();
 }*/
/************LISTADOS POR PARROQUIAS DE COJEDES ************/
public function listado_parroquia_cojedes(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados,
  public.municipios,
  public.parroquias');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND direccion.municipio = municipios.id_municipio AND direccion.parroquia = parroquias.id_parroquia AND parroquias.id_parroquia = '80101'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_parroquia_juan(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados,
  public.municipios,
  public.parroquias');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND direccion.municipio = municipios.id_municipio AND direccion.parroquia = parroquias.id_parroquia AND parroquias.id_parroquia = '80102'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_parroquia_tinaquillo(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados,
  public.municipios,
  public.parroquias');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND direccion.municipio = municipios.id_municipio AND direccion.parroquia = parroquias.id_parroquia AND parroquias.id_parroquia = '80201'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_parroquia_baul(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados,
  public.municipios,
  public.parroquias');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND direccion.municipio = municipios.id_municipio AND direccion.parroquia = parroquias.id_parroquia AND parroquias.id_parroquia = '80301'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_parroquia_sucre(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados,
  public.municipios,
  public.parroquias');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND direccion.municipio = municipios.id_municipio AND direccion.parroquia = parroquias.id_parroquia AND parroquias.id_parroquia = '80302'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_parroquia_pao(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados,
  public.municipios,
  public.parroquias');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND direccion.municipio = municipios.id_municipio AND direccion.parroquia = parroquias.id_parroquia AND parroquias.id_parroquia = '80401'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_parroquia_libertad(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados,
  public.municipios,
  public.parroquias');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND direccion.municipio = municipios.id_municipio AND direccion.parroquia = parroquias.id_parroquia AND parroquias.id_parroquia = '80501'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_parroquia_amparo(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados,
  public.municipios,
  public.parroquias');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND direccion.municipio = municipios.id_municipio AND direccion.parroquia = parroquias.id_parroquia AND parroquias.id_parroquia = '80502'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_parroquia_carlos(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados,
  public.municipios,
  public.parroquias');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND direccion.municipio = municipios.id_municipio AND direccion.parroquia = parroquias.id_parroquia AND parroquias.id_parroquia = '80601'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_parroquia_angel(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados,
  public.municipios,
  public.parroquias');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND direccion.municipio = municipios.id_municipio AND direccion.parroquia = parroquias.id_parroquia AND parroquias.id_parroquia = '80602'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_parroquia_manuel(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados,
  public.municipios,
  public.parroquias');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND direccion.municipio = municipios.id_municipio AND direccion.parroquia = parroquias.id_parroquia AND parroquias.id_parroquia = '80603'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_parroquia_general(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados,
  public.municipios,
  public.parroquias');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND direccion.municipio = municipios.id_municipio AND direccion.parroquia = parroquias.id_parroquia AND parroquias.id_parroquia = '80701'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_parroquia_macapo(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados,
  public.municipios,
  public.parroquias');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND direccion.municipio = municipios.id_municipio AND direccion.parroquia = parroquias.id_parroquia AND parroquias.id_parroquia = '80801'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_parroquia_aguadita(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados,
  public.municipios,
  public.parroquias');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND direccion.municipio = municipios.id_municipio AND direccion.parroquia = parroquias.id_parroquia AND parroquias.id_parroquia = '80802'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function listado_parroquia_romulo(){
  $this->db->query("SELECT COUNT(*)");
  $this->db->from('public.personas, 
  public.direccion, 
  public.estados,
  public.municipios,
  public.parroquias');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND
  direccion.estado = estados.id_estado AND direccion.municipio = municipios.id_municipio AND direccion.parroquia = parroquias.id_parroquia AND parroquias.id_parroquia = '80901'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }}
?>
