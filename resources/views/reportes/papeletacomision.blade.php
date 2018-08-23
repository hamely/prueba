<div style="font-size:16px;">
    <div style="color:#FF0000;" align="right">
    ORIGINAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    @foreach($papeletacomision as $itemp)
    <center> <strong><u>POLICÍA NACIONAL DEL PERÚ</u></strong></center><br/>
    <center> <strong><u>VII-MACROPOL CUSCO-APURÍMAC/OFAD-UNIPER</u></strong></center><br/>
    <center> <strong><u>ORDEN DE COMISIÓN N° {{$itemp->numerocomision}}-2018-VII-MRP-CUS-APU/SEC-OFAD-AREREHUM-AC.</u></strong></center><br/>
</div>
<div style="text-align:center;">
    <table  WIDTH="90%" style="font-size:14px; margin-left:35px">
     
        <tr>
            <td width="30%">GRADO Y NOMBRES </td>
            <td >: {{$itemp->apellidopaterno}} {{$itemp->apellidomaterno}}, {{$itemp->nombres}}           
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

<p align="right">CUSCO, 24 DE AGOSTO DEL 2018&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <table>
        <tr>
            <td>      
                <div style="font-size:14px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FIRMA&nbsp;&nbsp;&nbsp;: ______________<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CIP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$itemp->cip}}<br/> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FECHA&nbsp;&nbsp;&nbsp;: ______________<br/> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HORA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ______________<br/> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N° CEL&nbsp;&nbsp;&nbsp;: ______________<br/> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CONTROLAR SU RETORNO <br/> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MRIA/JLRG/aeh <br/>    
                </div>
            </td>
            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="..\firma.jpg" alt="..." class="img-circle profile_img"> 
            </td>
        </tr>
    </table>

<br/><br/>
<div style="font-size:16px;">
    <div style="color:#FF0000;" align="right">
    COPIA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <center> <strong><u>POLICÍA NACIONAL DEL PERÚ</u></strong></center><br/>
    <center> <strong><u>VII-MACROPOL CUSCO-APURÍMAC/OFAD-UNIPER</u></strong></center><br/>
    <center> <strong><u>ORDEN DE COMISIÓN N° {{$itemp->numerocomision}}-2018-VII-MRP-CUS-APU/SEC-OFAD-AREREHUM-AC.</u></strong></center><br/>
</div>

<div style="font-size:14px;">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GRADO Y NOMBRES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{$itemp->apellidopaterno}} {{$itemp->apellidomaterno}}, {{$itemp->nombres}}<br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PERTENECIENTE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :<br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; POR DISPOSICIÓN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{$itemp->disposicion }}<br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; A DONDE SE DIRIGE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{$itemp->departamento}} - {{$itemp->provincia}} - {{$itemp->distrito}}, {{$itemp->lugarcomision}} <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MOTIVO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{$itemp->motivo}}<br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DEBIENDO RETORNAR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : AL TERMINO DE SU COMETIDO.<br/>
    <p align="right">CUSCO, 24 DE AGOSTO DEL 2018&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
   
</div>
 <table>
        <tr>
            <td>      
                <div style="font-size:14px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FIRMA&nbsp;&nbsp;&nbsp;: ______________<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CIP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$itemp->cip}}<br/> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FECHA&nbsp;&nbsp;&nbsp;: ______________<br/> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HORA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ______________<br/> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N° CEL&nbsp;&nbsp;&nbsp;: ______________<br/> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CONTROLAR SU RETORNO <br/> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MRIA/JLRG/aeh <br/>    
                </div>
            </td>
            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="..\firma.jpg" alt="..." class="img-circle profile_img"> 
            </td>
        </tr>
    </table>
@endforeach

