<?php
class M_gf_agro extends CI_Model
{
    function _construct(){
        parent::__construct(); 
    }   
 /*********************************************************Grafica Genero******************************************************************/    
      public function genero_f(){
  $this->db->query("SELECT count ('*')");
  $this->db->from('public.personas, public.estados, public.direccion, public.planes_personas, public.planes');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND planes_personas.key_id_planes='1' AND 
  personas.id_persona = direccion.id_persona_direccion AND direccion.estado = estados.id_estado AND estados.id_estado='8' AND 
  planes_personas.key_id_personas = personas.id_persona AND planes.id_planes = planes_personas.key_id_planes AND 
  planes.id_planes='1' AND sexo='F'");
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function genero_m(){
  $this->db->query("SELECT count ('*')");
  $this->db->from('public.personas, public.estados, public.direccion, public.planes_personas, public.planes');
  $this->db->where("personas.id_persona = planes_personas.key_id_personas AND planes_personas.key_id_planes='1' AND 
  personas.id_persona = direccion.id_persona_direccion AND direccion.estado = estados.id_estado AND estados.id_estado='8' AND 
  planes_personas.key_id_personas = personas.id_persona AND planes.id_planes = planes_personas.key_id_planes AND 
  planes.id_planes='1' AND sexo='M'");
  $aragua = $this->db->get();
    return $aragua->result();
 }   
/************************************************************Graficas tipos de Aseramiento *************************************************/
public function p_industrial(){
          $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.personas,
      public.direccion,
      public.planes,
      public.estados,
      public.planes_personas, 
      public.solicitud');
      $this->db->where("personas.id_persona = planes_personas.key_id_personas AND planes_personas.key_id_planes='1' AND 
      personas.id_persona = direccion.id_persona_direccion AND direccion.estado = estados.id_estado AND estados.id_estado='8' AND 
      planes_personas.key_id_personas = personas.id_persona AND planes.id_planes = planes_personas.key_id_planes AND solicitud.id_persona_solicitud = planes_personas.key_id_personas AND planes_personas.key_id_planes='1' AND solicitud.t_asesoramiento='LEGAL' ");
        $aragua = $this->db->get();
        return $aragua->result();//" EN LA GRAFICA 3 CORRESPONDE A LEGAL
}
  public function p_tecnologico(){
     $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.personas,
      public.direccion,
      public.planes,
      public.estados,
      public.planes_personas, 
      public.solicitud');
      $this->db->where(" personas.id_persona = planes_personas.key_id_personas AND planes_personas.key_id_planes='1' AND 
      personas.id_persona = direccion.id_persona_direccion AND direccion.estado = estados.id_estado AND estados.id_estado='8' AND 
      planes_personas.key_id_personas = personas.id_persona AND planes.id_planes = planes_personas.key_id_planes AND solicitud.id_persona_solicitud = planes_personas.key_id_personas AND planes_personas.key_id_planes='2' AND solicitud.t_asesoramiento='FORMACION' ");
        $aragua = $this->db->get();
        return $aragua->result();//" EN LA GRAFICA 3 CORRESPONDE A FORMACION
 }
 public function p_alimenticio(){
     $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.personas,
      public.direccion,
      public.planes,
      public.estados,
      public.planes_personas, 
      public.solicitud');
      $this->db->where("personas.id_persona = planes_personas.key_id_personas AND planes_personas.key_id_planes='1' AND 
      personas.id_persona = direccion.id_persona_direccion AND direccion.estado = estados.id_estado AND estados.id_estado='8' AND 
      planes_personas.key_id_personas = personas.id_persona AND planes.id_planes = planes_personas.key_id_planes AND solicitud.id_persona_solicitud = planes_personas.key_id_personas AND planes_personas.key_id_planes='1' AND solicitud.t_asesoramiento='TECNICA' ");
        $aragua = $this->db->get();
        return $aragua->result();//" EN LA GRAFICA 3 CORRESPONDE A TECNICA ADMISNISTRATIVA
 }

  public function p_administrativo(){
        $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.personas,
      public.direccion,
      public.planes,
      public.estados,
      public.planes_personas, 
      public.solicitud');
      $this->db->where("personas.id_persona = planes_personas.key_id_personas AND planes_personas.key_id_planes='1' AND 
      personas.id_persona = direccion.id_persona_direccion AND direccion.estado = estados.id_estado AND estados.id_estado='8' AND 
      planes_personas.key_id_personas = personas.id_persona AND planes.id_planes = planes_personas.key_id_planes AND solicitud.id_persona_solicitud = planes_personas.key_id_personas AND planes_personas.key_id_planes='1' AND solicitud.t_asesoramiento='ADMISNISTRATIVA' ");
        $aragua = $this->db->get();
        return $aragua->result();
 }
 public function p_atomotriz(){
         $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.personas,
      public.direccion,
      public.planes,
      public.estados,
      public.planes_personas, 
      public.solicitud');
      $this->db->where("personas.id_persona = planes_personas.key_id_personas AND planes_personas.key_id_planes='1' AND 
      personas.id_persona = direccion.id_persona_direccion AND direccion.estado = estados.id_estado AND estados.id_estado='8' AND 
      planes_personas.key_id_personas = personas.id_persona AND planes.id_planes = planes_personas.key_id_planes AND solicitud.id_persona_solicitud = planes_personas.key_id_personas AND planes_personas.key_id_planes='1' AND solicitud.t_asesoramiento='OTROS' ");
        $aragua = $this->db->get();
        return $aragua->result();
 }
  /*****************************************************************************************************************************/
 public function p_electrico(){
       $this->db->query("SELECT COUNT ('*')");
    $this->db->from('public.planes_personas,public.brigadas_persona');
    $this->db->where(" brigadas_persona.id_persona_brigada = planes_personas.key_id_personas AND planes_personas.key_id_planes='3' AND brigadas_persona.brigadas='HIDRAULICO'");
    $aragua = $this->db->get();
    return $aragua->result();//" EN LA VISTA CORRESPONDE A AMECANICA
 }
 public function p_refrigeracion(){
      $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.planes_personas,public.brigadas_persona');
      $this->db->where(" brigadas_persona.id_persona_brigada = planes_personas.key_id_personas AND planes_personas.key_id_planes='3' AND brigadas_persona.brigadas='PETROQUIMICA'");
        $aragua = $this->db->get();
        return $aragua->result();//" EN LA VISTA CORRESPONDE A PETROQUIMICA
 }
 public function p_petroquimico(){
      $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.planes_personas,public.brigadas_persona');
      $this->db->where(" brigadas_persona.id_persona_brigada = planes_personas.key_id_personas AND planes_personas.key_id_planes='3' AND brigadas_persona.brigadas='PETROLERA'");
        $aragua = $this->db->get();
        return $aragua->result();//" EN LA VISTA CORRESPONDE A PETROLERA
 }
 public function p_hidraulica(){
      $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.proyecto, public.planes_personas');
      $this->db->where("planes_personas.key_id_personas = proyecto.id_proyecto_personas AND planes_personas.key_id_planes='5' AND proyecto.t_proyecto='HIDRAULICO'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
  public function p_infraestructura(){
       $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.planes_personas,public.brigadas_persona');
      $this->db->where(" brigadas_persona.id_persona_brigada = planes_personas.key_id_personas AND planes_personas.key_id_planes='3' AND brigadas_persona.brigadas='INFRAESTRUCTURA'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
/*******************************************************************************************************************************************/
public function lista_personal(){
      $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.personas, public.direccion, public.estados, public.planes, public.planes_personas, public.figura_juridica');
      $this->db->where("personas.id_persona = planes_personas.key_id_personas AND planes_personas.key_id_planes='1' AND 
      personas.id_persona = direccion.id_persona_direccion AND direccion.estado = estados.id_estado AND estados.id_estado='8' AND 
      planes_personas.key_id_personas = personas.id_persona AND planes.id_planes = planes_personas.key_id_planes AND planes_personas.key_id_personas = figura_juridica.id_persona_figura AND figura_juridica.r_social = 'PERSONAL' AND planes_personas.key_id_planes='1'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
 public function lista_upf(){
  $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.personas, public.direccion, public.estados, public.planes, public.planes_personas, public.figura_juridica');
      $this->db->where("personas.id_persona = planes_personas.key_id_personas AND planes_personas.key_id_planes='1' AND 
      personas.id_persona = direccion.id_persona_direccion AND direccion.estado = estados.id_estado AND estados.id_estado='8' AND 
      planes_personas.key_id_personas = personas.id_persona AND planes.id_planes = planes_personas.key_id_planes AND planes_personas.key_id_personas = figura_juridica.id_persona_figura AND figura_juridica.r_social = 'UPF' AND planes_personas.key_id_planes='1'");
        $aragua = $this->db->get();
        return $aragua->result();
  $aragua = $this->db->get();
    return $aragua->result();
 }
public function lista_eps(){
  $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.personas, public.direccion, public.estados, public.planes, public.planes_personas, public.figura_juridica');
      $this->db->where("personas.id_persona = planes_personas.key_id_personas AND planes_personas.key_id_planes='1' AND 
      personas.id_persona = direccion.id_persona_direccion AND direccion.estado = estados.id_estado AND estados.id_estado='8' AND 
      planes_personas.key_id_personas = personas.id_persona AND planes.id_planes = planes_personas.key_id_planes AND planes_personas.key_id_personas = figura_juridica.id_persona_figura AND figura_juridica.r_social = 'EPS' AND planes_personas.key_id_planes='1'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
 public function lista_coop(){
  $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.personas, public.direccion, public.estados, public.planes, public.planes_personas, public.figura_juridica');
      $this->db->where("personas.id_persona = planes_personas.key_id_personas AND planes_personas.key_id_planes='1' AND 
      personas.id_persona = direccion.id_persona_direccion AND direccion.estado = estados.id_estado AND estados.id_estado='8' AND 
      planes_personas.key_id_personas = personas.id_persona AND planes.id_planes = planes_personas.key_id_planes AND planes_personas.key_id_personas = figura_juridica.id_persona_figura AND figura_juridica.r_social = 'COOPERATIVA' AND planes_personas.key_id_planes='1'");
        $aragua = $this->db->get();
        return $aragua->result();
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function lista_ca(){
  $this->db->query("SELECT COUNT ('*')");
      $this->db->from('public.personas, public.direccion, public.estados, public.planes, public.planes_personas, public.figura_juridica');
      $this->db->where("personas.id_persona = planes_personas.key_id_personas AND planes_personas.key_id_planes='1' AND 
      personas.id_persona = direccion.id_persona_direccion AND direccion.estado = estados.id_estado AND estados.id_estado='8' AND 
      planes_personas.key_id_personas = personas.id_persona AND planes.id_planes = planes_personas.key_id_planes AND planes_personas.key_id_personas = figura_juridica.id_persona_figura AND figura_juridica.r_social = 'COMPAÑIA ANONIMA' AND planes_personas.key_id_planes='1'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
  public function lista_tecnologico(){
  $this->db->query("SELECT COUNT ('*')");
      $this->db->from(' public.planes_personas, public.figura_juridica');
      $this->db->where("planes_personas.key_id_personas = figura_juridica.id_persona_figura AND figura_juridica.r_social = 'COMPAÑIA ANONIMA' AND planes_personas.key_id_planes='1'");
        $aragua = $this->db->get();
        return $aragua->result();
 }
}
?>