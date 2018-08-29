<div style="font-size:16px;">
    <div style="color:#FF0000;" align="right">

    ORIGINAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    @foreach($papeletacomision as $itemp)
    <center> <strong><u>POLICÍA NACIONAL DEL PERÚ</u></strong></center>
    <center> <strong><u>VII-MACROPOL CUSCO-APURÍMAC/OFAD-UNIPER</u></strong></center>
    <center> <strong><u>ORDEN DE COMISIÓN N° {{$itemp->numerocomision}} - <?php    $fecha= date ("Y"); echo $fecha;  ?>  
    -VII-MRP-CUS-APU/SEC-OFAD-AREREHUM-AC.</u></strong></center><br/>
</div>
<div style="text-align:center;">
    <table  WIDTH="90%" style="font-size:14px; margin-left:35px">
     
        <tr>
            <td width="30%">GRADO Y NOMBRES </td>
            <td >: {{$itemp->nombrecorto}} {{$itemp->apellidopaterno}} {{$itemp->apellidomaterno}}, {{$itemp->nombres}}           
            </td>          
        </tr>       
        <tr>
            <td width="30%">PERTENECIENTE</td>
            <td >           
            </td>          
        </tr>
        <tr>
            <td width="30%">POR DISPOSICIÓN</td>
            <td >: {{$itemp->disposicion }}            
            </td>          
        </tr>
        <tr>
            <td width="30%">A DONDE SE DIRIGE</td>
            <td >: {{$itemp->departamento}} - {{$itemp->provincia}} - {{$itemp->distrito}}, {{$itemp->lugarcomision}}             
            </td>          
        </tr>
        <tr>
            <td width="30%">MOTIVO </td>
            <td >: {{$itemp->motivo}}           
            </td>          
        </tr>
        <tr>
            <td width="30%">DEBIENDO RETORNAR  </td>
            <td > : AL TERMINO DE SU COMETIDO            
            </td>          
        </tr>
        
    </table>
</div> 

<p align="right">
    Cusco,
    <?php 
        /*$fecha= date ("d/m/Y");
        echo $fecha;*/
        
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
        echo date('d')." de ".$meses[date('n')-1]. " del ".date('Y');
        //Salida: Viernes 24 de Febrero del 2012
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 </p>
    <table WIDTH="90%" style="font-size:14px; margin-left:35px"  >
      
      <tr>
        <td width="15%">FIRMA</td>
        <td>: _____________</td>
        <td rowspan="7"><img src="..\firma.jpg" alt="..." class="img-circle profile_img"> </td>
      </tr>
      <tr>
        <td>CIP</td>
        <td>: {{$itemp->cip}}</td>
   
      </tr>
      <tr>
        <td>FECHA</td>
        <td>: _____________ </td>
      </tr>
       <tr>
        <td>HORA</td>
        <td>: _____________ </td>
      </tr>
       <tr>
        <td>N° CEL </td>
        <td>: _____________ </td>
      </tr>
      <tr>
        <td>CONTROLAR RETORNO</td>
        <td></td>
      </tr>
      <tr>
        <td>MRIA/JLRG/aeh</td>
        <td></td>
      </tr>
    </table>

<br/>
<div style="font-size:16px;">
    <div style="color:#FF0000;" align="right">
    COPIA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <center> <strong><u>POLICÍA NACIONAL DEL PERÚ</u></strong></center>
    <center> <strong><u>VII-MACROPOL CUSCO-APURÍMAC/OFAD-UNIPER</u></strong></center>
    <center> <strong><u>ORDEN DE COMISIÓN N° {{$itemp->numerocomision}}- <?php    $fecha= date ("Y"); echo $fecha;  ?>  
    -VII-MRP-CUS-APU/SEC-OFAD-AREREHUM-AC.</u></strong></center><br/>
</div>
<div style="text-align:center;">
    <table  WIDTH="90%" style="font-size:14px; margin-left:35px">
     
        <tr>
            <td width="30%">GRADO Y NOMBRES </td>
            <td >: {{$itemp->nombrecorto}} {{$itemp->apellidopaterno}} {{$itemp->apellidomaterno}}, {{$itemp->nombres}}           
            </td>          
        </tr>       
        <tr>
            <td width="30%">PERTENECIENTE</td>
            <td >           
            </td>          
        </tr>
        <tr>
            <td width="30%">POR DISPOSICIÓN</td>
            <td >: {{$itemp->disposicion }}            
            </td>          
        </tr>
        <tr>
            <td width="30%">A DONDE SE DIRIGE</td>
            <td >: {{$itemp->departamento}} - {{$itemp->provincia}} - {{$itemp->distrito}}, {{$itemp->lugarcomision}}             
            </td>          
        </tr>
        <tr>
            <td width="30%">MOTIVO </td>
            <td >: {{$itemp->motivo}}           
            </td>          
        </tr>
        <tr>
            <td width="30%">DEBIENDO RETORNAR  </td>
            <td > : AL TERMINO DE SU COMETIDO            
            </td>          
        </tr>
        
    </table>
</div> 
<p align="right">
    Cusco,
    <?php 
        /*$fecha= date ("d/m/Y");
        echo $fecha;*/
        
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
        echo date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
        //Salida: Viernes 24 de Febrero del 2012
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 </p>
  <table WIDTH="90%" style="font-size:14px; margin-left:35px"  >
      
      <tr>
        <td width="15%">FIRMA</td>
        <td>: _____________</td>
        <td rowspan="7"><img src="..\firma.jpg" alt="..." class="img-circle profile_img"> </td>
      </tr>
      <tr>
        <td>CIP</td>
        <td>: {{$itemp->cip}}</td>
   
      </tr>
      <tr>
        <td>FECHA</td>
        <td>: _____________ </td>
      </tr>
       <tr>
        <td>HORA</td>
        <td>: _____________ </td>
      </tr>
       <tr>
        <td>N° CEL </td>
        <td>: _____________ </td>
      </tr>
      <tr>
        <td>CONTROLAR RETORNO</td>
        <td></td>
      </tr>
      <tr>
        <td>MRIA/JLRG/aeh</td>
        <td></td>
      </tr>
    </table>
@endforeach

