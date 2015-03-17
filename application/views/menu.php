<div class="Contenedor-Editable" id="Menu">
    <p style="margin: 0.05em; font-size: 8;margin-left: 1em; font-family: Arial; font-weight: bold; color: #A19B9E ">MENÚ</p>
    <span class="PuntoHo_Cortico"></span>

               <a href="#" class="Contenedor-Texto-Menu"><span class="Text-menu" > Administración </span></a>
                <span class="PuntoHo_Cortico"></span>
                        <a href="<?php echo site_url('maestros/ubicacion')?>" class="Contenedor-Texto-sub-Menu" ><span class="Text-menu">Regi&oacute;n/Negocio/Filial</span></a>
                        
                        <a href="<?php echo site_url('maestros/objetivospp')?>" class="Contenedor-Texto-sub-Menu" ><span class="Text-menu"> Objetivos PP </span></a>
                        <a href="<?php echo site_url('maestros/lineas_accion')?>" class="Contenedor-Texto-sub-Menu" ><span class="Text-menu"> Lineas de Acci&oacute;n </span></a>
                        <a href="<?php echo site_url('maestros/actividades')?>" class="Contenedor-Texto-sub-Menu" ><span class="Text-menu"> Actividades </span></a>
                        <a href="<?php echo site_url('maestros/tareas')?>" class="Contenedor-Texto-sub-Menu" ><span class="Text-menu"> Tareas </span></a>
                        <a href="<?php echo site_url('maestros/unidad_medida')?>" class="Contenedor-Texto-sub-Menu" ><span class="Text-menu"> Unidad de Medida </span></a>
                        <a href="<?php echo site_url('maestros/dominio')?>" class="Contenedor-Texto-sub-Menu" ><span class="Text-menu"> Dominio </span></a>
                        <a href="<?php echo site_url('maestros/objetivoscc')?>" class="Contenedor-Texto-sub-Menu" ><span class="Text-menu"> Objetivo de Control </span></a>
                        <a href="<?php echo site_url('maestros/control')?>" class="Contenedor-Texto-sub-Menu" ><span class="Text-menu"> Control ISO 27002 </span></a>
                        <a href="<?php echo site_url('maestros/usuarios')?>" class="Contenedor-Texto-sub-Menu" ><span class="Text-menu"> Usuarios </span></a>
                <span class="PuntoHo_Cortico"></span>

                        <a href="#" class="Contenedor-Texto-Menu"><span class="Text-menu" > Plan Operativo </span></a>
                <span class="PuntoHo_Cortico"></span>
                        <a href="<?php echo site_url('plan')?>" class="Contenedor-Texto-sub-Menu" ><span class="Text-menu">Plan</span></a>
                <span class="PuntoHo_Cortico"></span>        
                <a href="<?php echo site_url('sesion/logout')?>" class="Contenedor-Texto-Menu"><span class="Text-menu" > Salir(<?php echo strtoupper($this->session->userdata('indicador'));?>) </span></a>
               
             

</div>