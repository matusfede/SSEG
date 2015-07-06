@extends('layouts.sitio')

@section('title', 'PSG')

@section('content')
<div class="section">
    <div>
        <h2>Estudio de Demanda Laboral</h2>
        <div class="col-md-3">
            <label class="lead">Encuesta a Empleadores</label> 
        </div>
        <div class="col-md-9">
            <hr>
        </div>
    </div>
    <div>
        <p class="text-justify">
            <strong>Estimado/a empleador/a:</strong> <br />
            El Programa de  Seguimiento a Graduados (PSG), de la Universidad Nacional de Ingeniería (UNI)  está realizando el <strong>Estudio de
            Demanda Laboral - 2015</strong>, de profesionales de  ingeniería y arquitectura, según requerimientos del mercado laboral, por lo 
            que  le solicitamos parte de su valioso tiempo para que nos dé a conocer su opinión  sobre los profesionales que son contratados por su
            empresa (institución u organismo).  Sus respuestas son confidenciales y serán usadas de forma restringida únicamente  con propósitos de
            este Estudio.
        </p>
        <h5>1. Características de la empresa/institución</h5>
        <div class="row">
            <div class="col-md-6">
                Nombre de la empresa (institución u organismo)
                <input type="text" class="form-control" placeholder="Nombre de la empresa">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                Sector Institucional  de la empresa, organismo o institución para la cual labora: <br>
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Empresa  privada
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Empresa pública (estatal)<br>
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Gobierno Central (y sus instituciones)
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Gobierno Local (Alcaldías)
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Institución sin Fin de Lucro
            </div>
            <div class="col-md-12">
                ¿Cuál es el tamaño de su empresa (organismo o institución)? Esta tiene: <br>
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Menos de 30 empleados
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Entre 31 y 100 empleados
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Más de 100 empleados
            </div>
            <div class="col-md-12">
                Antigüedad de su empresa (organismo o institución): <br>
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Menos de 2 años
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Entre 3 y 5 años
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Entre 6 y 10 años
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Entre 11 y 15 años
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Entre 16 y 20 años
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Más de 20 años
            </div>
            <div class="col-md-12">
                Señale la actividad económica de su empresa (organismo o institución): <br>
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Agricultura, ganadería, silvicultura y pesca
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Explotación de minas y canteras
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Industria Manufacturera
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Electricidad, gas, agua
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Construcción
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Comercio, hoteles y restaurantes
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Transporte y telecomunicaciones
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Servicios de intermediación financiera y conexos
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Servicios personales y empresariales
                <label class="toggle">
                    <input type="checkbox">
                    <span class="handle"></span>
                </label>
                Servicios del Gobierno General
            </div>
        </div>
    </div>
</div>
<hr>
<table width="796" border="1">
  <tr>
    <td colspan="3"><p><strong>2. Perspectivas de crecimiento</strong></p></td>
  </tr>
  <tr>
    <td colspan="3"><p><strong>2.1. ¿Posee  su empresa o institución, perspectivas de crecimiento para los próximos dos  años (2016-2017), es decir: nuevas inversiones o contratación de nuevo  personal?             Sí  </strong>£<strong>       No </strong>£ </p>
      <p><br />
        <strong>2.2. De  acuerdo a sus Expectativas de Crecimiento, <u>escriba un número aproximado de  la cantidad</u> de puestos de trabajo actuales, puestos a abrirse y puestos a  cerrarse, en los <u>próximos dos años</u>, según las siguientes profesiones:</strong></p>
      <ul>
        <li>Para responder, tome como referencia las perspectivas  de crecimiento de su empresa (institución u organismo) y su experiencia en el  número de plazas que en promedio anualmente solicitan por carrera. En  Permanentes y Temporales marque con un cheque o equis &quot;X&quot;.</li>
      </ul>
      <table border="1" cellspacing="0" cellpadding="0" width="576">
        <tr>
          <td width="200" valign="top"><p><strong>&nbsp;</strong></p></td>
          <td width="78" rowspan="3" valign="bottom"><p align="center"><strong>Cantidad    de</strong><br />
            <strong>Puestos</strong><br />
            <strong>actuales</strong></p></td>
          <td width="220" colspan="3" valign="top"><p align="center"><strong>Expectativa</strong></p></td>
          <td width="78" rowspan="3" valign="bottom"><p align="center"><strong>Cantidad    de</strong><br />
            <strong>Puestos a</strong><br />
            <strong>cerrarse</strong></p></td>
        </tr>
        <tr>
          <td width="200" rowspan="2"><p align="center"><strong>Profesión    del empleado</strong></p></td>
          <td width="220" colspan="3"><p align="center"><strong>Puestos a    abrirse</strong></p></td>
        </tr>
        <tr>
          <td width="62"><p align="center"><strong>Cantidad</strong></p></td>
          <td width="84"><p align="center"><strong>permanentes</strong></p></td>
          <td width="74"><p align="center"><strong>temporales</strong></p></td>
        </tr>
        <tr>
          <td width="200" valign="top"><ul>
            <li><strong>Ing. Agrícola</strong></li>
          </ul></td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="62" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="84" valign="top">&nbsp;</td>
          <td width="74" valign="top">&nbsp;</td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
        </tr>
        <tr>
          <td width="200" valign="top"><ul>
            <li><strong>Arquitectura</strong></li>
          </ul></td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="62" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="84" valign="top">&nbsp;</td>
          <td width="74" valign="top">&nbsp;</td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
        </tr>
        <tr>
          <td width="200" valign="top"><ul>
            <li><strong>Ing. Civil</strong></li>
          </ul></td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="62" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="84" valign="top">&nbsp;</td>
          <td width="74" valign="top">&nbsp;</td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
        </tr>
        <tr>
          <td width="200" valign="top"><ul>
            <li><strong>Ing. Computación</strong></li>
          </ul></td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="62" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="84" valign="top">&nbsp;</td>
          <td width="74" valign="top">&nbsp;</td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
        </tr>
        <tr>
          <td width="200" valign="top"><ul>
            <li><strong>Ing. Eléctrica</strong></li>
          </ul></td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="62" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="84" valign="top">&nbsp;</td>
          <td width="74" valign="top">&nbsp;</td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
        </tr>
        <tr>
          <td width="200" valign="top"><ul>
            <li><strong>Ing. Electrónica</strong></li>
          </ul></td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="62" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="84" valign="top">&nbsp;</td>
          <td width="74" valign="top">&nbsp;</td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
        </tr>
        <tr>
          <td width="200" valign="top"><ul>
            <li><strong>Ing. Industrial</strong></li>
          </ul></td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="62" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="84" valign="top">&nbsp;</td>
          <td width="74" valign="top">&nbsp;</td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
        </tr>
        <tr>
          <td width="200" valign="top"><ul>
            <li><strong>Ing. Mecánica</strong></li>
          </ul></td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="62" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="84" valign="top">&nbsp;</td>
          <td width="74" valign="top">&nbsp;</td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
        </tr>
        <tr>
          <td width="200" valign="top"><ul>
            <li><strong>Ing. Química</strong></li>
          </ul></td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="62" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="84" valign="top">&nbsp;</td>
          <td width="74" valign="top">&nbsp;</td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
        </tr>
        <tr>
          <td width="200" valign="top"><ul>
            <li><strong>Ing. Sistemas</strong></li>
          </ul></td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="62" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="84" valign="top">&nbsp;</td>
          <td width="74" valign="top">&nbsp;</td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
        </tr>
        <tr>
          <td width="200" valign="top"><ul>
            <li><strong>Ing. Telecomunicaciones</strong></li>
          </ul></td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="62" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="84" valign="top">&nbsp;</td>
          <td width="74" valign="top">&nbsp;</td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
        </tr>
        <tr>
          <td width="200" valign="top"><ul>
            <li><strong>Ing. Agroindustrial</strong></li>
          </ul></td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="62" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          <td width="84" valign="top">&nbsp;</td>
          <td width="74" valign="top">&nbsp;</td>
          <td width="78" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td colspan="3"><p><strong>2.2. ¿Qué áreas  de su empresa (institución, organismo) demanda mayor contratación de  ingenieros/as o arquitectos/as?</strong></p>
      <table border="1" cellspacing="0" cellpadding="0">
        <tr>
          <td width="691" valign="top"><p><strong>&nbsp;</strong></p></td>
        </tr>
      </table>
      <p><strong>2.3. Según  las necesidades su empresa (organización o institución), marque el tipo de profesiones  que solicita:</strong></p>
      <div align="center">
        <table border="1" cellspacing="0" cellpadding="0" width="484">
          <tr>
            <td width="189" valign="top"><p>&nbsp;</p></td>
            <td width="98" valign="top"><p align="center"><strong>Solicita en</strong><br />
              <strong>Mayor cantidad</strong></p></td>
            <td width="98" valign="top"><p align="center"><strong>Solicita en</strong><br />
              <strong>menor cantidad</strong></p></td>
            <td width="98" valign="top"><p align="center"><strong>&nbsp;</strong></p></td>
          </tr>
          <tr>
            <td width="189" valign="top"><ul>
              <li>Ing. Agrícola</li>
            </ul></td>
            <td width="98" valign="top">&nbsp;</td>
            <td width="98" valign="top">&nbsp;</td>
            <td width="98" rowspan="12"><p align="center"><strong>Si hay alguna profesión que no solicita del todo, no marque ninguna    casilla.</strong></p></td>
          </tr>
          <tr>
            <td width="189" valign="top"><ul>
              <li>Arquitectura</li>
            </ul></td>
            <td width="98" valign="top">&nbsp;</td>
            <td width="98" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="189" valign="top"><ul>
              <li>Ing. Civil</li>
            </ul></td>
            <td width="98" valign="top">&nbsp;</td>
            <td width="98" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="189" valign="top"><ul>
              <li>Ing. Computación</li>
            </ul></td>
            <td width="98" valign="top">&nbsp;</td>
            <td width="98" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="189" valign="top"><ul>
              <li>Ing. Eléctrica</li>
            </ul></td>
            <td width="98" valign="top">&nbsp;</td>
            <td width="98" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="189" valign="top"><ul>
              <li>Ing. Electrónica</li>
            </ul></td>
            <td width="98" valign="top">&nbsp;</td>
            <td width="98" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="189" valign="top"><ul>
              <li>Ing. Industrial</li>
            </ul></td>
            <td width="98" valign="top">&nbsp;</td>
            <td width="98" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="189" valign="top"><ul>
              <li>Ing. Mecánica</li>
            </ul></td>
            <td width="98" valign="top">&nbsp;</td>
            <td width="98" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="189" valign="top"><ul>
              <li>Ing. Química</li>
            </ul></td>
            <td width="98" valign="top">&nbsp;</td>
            <td width="98" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="189" valign="top"><ul>
              <li>Ing. Sistemas</li>
            </ul></td>
            <td width="98" valign="top">&nbsp;</td>
            <td width="98" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="189" valign="top"><ul>
              <li>Ing. Telecomunicaciones</li>
            </ul></td>
            <td width="98" valign="top">&nbsp;</td>
            <td width="98" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="189" valign="top"><ul>
              <li>Ing. Agroindustrial</li>
            </ul></td>
            <td width="98" valign="top">&nbsp;</td>
            <td width="98" valign="top">&nbsp;</td>
          </tr>
        </table>
      </div>
      <p><strong>2.4. Qué  tipo de ingenieros/as necesita su empresa (organismo, institución) pero que son  más difíciles de encontrar:</strong></p>
      <div>
        <p><strong>&nbsp;</strong></p>
        <p><strong>&nbsp;</strong></p>
      </div>
      <strong><br clear="all" />
      </strong>
      <div>
        <p><strong>2.5. Cuando busca nuevos/as profesionales, las  razones son</strong>: <em>(Ordene de mayor a menor necesidad, emplee  los valores 1 2 3)</em><strong></strong></p>
        <ul>
          <li>Por nuevos Reclutamientos ____</li>
          <li>Por Rotación de personal                    ____</li>
          <li>Por Sustitución de personal ____</li>
        </ul>
        <p>     <em>(por despido, jubilación, renuncia) </em><br />
          <strong>2.6. ¿Qué  Grado académico es el más buscado para la contratación? </strong><em>(Ordene de  mayor a menor necesidad, emplee los valores 1 2 3)<strong></strong></em></p>
        <ul>
          <li>Graduado/a con posgrado                                                  ____</li>
          <li>Graduado/a (con título)                                                       ____</li>
          <li>Estudiante  universitario o pensum cerrado (egresado)       ____</li>
        </ul>
      </div>
      <br clear="all" />
      <div>
        <p><strong>3. Requerimientos generales para el puesto </strong></p>
        <div><br />
          En este apartado se le pide que escriba sobre <strong><em>requerimientos generales</em></strong> solicitados al candidato. Por <strong>requerimientos  generales </strong>se entiende el conjunto de conocimientos técnicos, metodológicos  o socioemocionales, que son necesarios para el buen desempeño en el puesto  laboral. </div>
      </div>
      <strong><br clear="all" />
      </strong>
      <div>
        <p><strong>3.1.  Escriba los <u>requerimientos generales</u> que su empresa (organismo o  institución) requiere para contratar ingenieros/as o arquitectos/as.</strong><br />
          Escriba las <u>más necesarias</u> y ubíquelas  jerárquicamente.</p>
        <ul>
          <li>________________________________________________</li>
          <li>________________________________________________</li>
          <li>________________________________________________</li>
          <li>________________________________________________</li>
          <li>________________________________________________</li>
          <li>________________________________________________</li>
          <li>________________________________________________</li>
          <li>________________________________________________</li>
        </ul>
        <strong><br clear="all" />
        </strong>
        <p><strong>3.2. Escriba  las principales <u>Dificultades en el desempeño</u>, presentadas por los profesionales  de ingeniería o arquitectura que ingresan a su empresa (organismo o  institución)</strong><br />
          Escriba las que usted <u>ha observado</u> y  ubíquelas jerárquicamente.</p>
        <ul>
          <li>________________________________________________</li>
          <li>________________________________________________</li>
          <li>________________________________________________</li>
          <li>________________________________________________</li>
          <li>________________________________________________</li>
          <li>________________________________________________</li>
          <li>________________________________________________</li>
          <li>________________________________________________</li>
        </ul>
      </div>
      <br clear="all" />
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
@endsection
