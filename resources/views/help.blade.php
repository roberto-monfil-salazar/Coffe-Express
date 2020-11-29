@extends('layouts.admin') @section('contenido')
<link href="style.css" rel="stylesheet" type="text/css">
<style>
    table {
        border-collapse: collapse;
        border: 3px solid purple;
    }
    
    th,
    td {
        padding: 20px;
        width: 25%;
        text-align: left;
        vertical-align: top;
        border: 1px solid #000;
    }
</style>
<!-- Large modal -->
<img src="/img/user.png" alt="" width="100" height="100">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Usuarios</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color: black;"><b>Ayuda Usuario</b></h5>
                </button>
            </div>
            <div class="modal-body">
                <p style="text-align: justify;">
                    Una vez que la tecnología ha sido instalada y los usuarios han sido capacitados, todavía será necesario un soporte continuo para los usuarios. Habrá muchas ocasiones en que los usuarios necesitarán asistencia para resolver un problema del "mundo real".
                    Normalmente, el soporte a los usuarios se ofrece a varios niveles, dependiendo de la complejidad del problema. Se puede ofrecer de manera interna, mediante personal in situ, o externa, por expertos técnicos contratados.
                </p>
                <b style="color: black;">Soporte interno para los usuarios:</b>
                <p style="text-align: justify;">
                    El primer puerto de entrada para brindar soporte interno a los usuarios es normalmente una mesa de ayuda. Las mesas de ayuda cumplen al menos dos propósitos, resolver cualquier problema que tengan los usuarios con el sistema y ayudarlos a utilizarlo de
                    manera más efectiva. Para mayores detalles ver Mesa de Ayuda. El personal de las mesas de ayuda puede ser de la propia institución o contratado de manera externa, pero es mejor concebir la mesa de ayuda como un apoyo interno ya que
                    generalmente se ajusta a las necesidades de la organización y se encuentra más familiarizado con sus operaciones. Muchas solicitudes a la mesa de apoyo pueden ser manejadas por teléfono. Se les puede ir diciendo a los usuarios como
                    solucionar un problema. En situaciones más complejas, dependiendo de la estructura del sistema de cómputo utilizado y cuando las computadoras están en red, el personal de la mesa de ayuda u otro personal técnico puede ser capaz de
                    resolver los problemas "remotamente", desde sus propias computadoras. En este caso, el personal puede manejar los sistemas y programas utilizados por los usuarios locales y generar diagnósticos en sus propios sistemas para identificar
                    las fallas. Esta clase de apoyo es menos costosa que el efectuado en sitio, ya que los problemas pueden ser manejados sin que el personal de las mesas de apoyo tenga que abandonar su propio sitio de trabajo. Sin embargo, algunos problemas
                    no pueden ser solucionados de manera remota, por lo que se requerirá que el personal de apoyo ofrezca asistencia en el sitio mismo del problema. Cuando el personal de apoyo está ubicado cerca de los usuarios, esto no significará más
                    que moverse unos cuantos pasos. Sin embargo, cuando el personal de apoyo se encuentra en un sitio distinto, sobre todo cuando el organismo electoral tiene oficinas dispersas o desconcentradas, el suministro de este tipo de apoyo puede
                    ser costoso tanto en dinero como en tiempo. En este caso, optimizar la capacidad de manejar los problemas de manera remota puede ayudar a resolver los problemas más rápido y de manera más económica. Una forma de optimizar la capacidad
                    de manejar los problemas sin necesidad de asistencia in situ del personal de apoyo es capacitando a los usuarios para manejar problemas comunes o menores por sí mismos.</p>
                <b style="color: black;">Soporte externo a los usuarios</b>
                <p style="text-align: justify;">
                    Dependiendo del nivel de soporte interno disponible, se puede requerir soporte externo para atender problemas más complejos. Normalmente se requiere apoyo externo cuando el equipo o programas requieren servicio o reparación, o cuando los problemas desbordan
                    la capacidad del personal de apoyo interno. El soporte externo tiende a ser más caro que el interno. El tiempo requerido para que el soporte externo atienda las peticiones también es un asunto a considerar. Los proveedores de apoyo
                    externo pueden no encontrarse disponibles cuando el organismo electoral quiera que se atienda un problema, ya que ellos tienen sus propias prioridades. Si el apoyo externo es para atender una urgencia, usualmente implica costos adicionales.
                    Una forma de minimizar los costos del soporte externo y de maximizar la posibilidad de obtener asistencia inmediata cuando se requiera consiste en negociar un Acuerdo de Servicio Sostenido (SLA por sus siglas en inglés). Bajo un acuerdo
                    de este tipo, el proveedor se compromete a suministrar un nivel de servicio garantizado por un precio preestablecido. Por ejemplo, se pueden convenir tarifas diferentes para responder a problemas de acuerdo con su nivel de urgencia.
                    De esta forma, el organismo electoral sabrá el costo por obtener ayuda de emergencia en comparación con una atención ordinaria que implique cierta espera, y podrá decidir si realmente es necesaria una ayuda de urgencia y si justifica
                    el costo adicional. Cuando se compran equipo o programas de cómputo, puede ser posible incluir un nivel de soporte externo garantizado en el contrato de compra. La mayoría de los artículos adquiridos incluirán una garantía de cierto
                    tipo, que al menos cubra la calidad de la fabricación. Es importante conocer los artículos y servicios cubiertos por cualquier garantía antes de firmar un contrato. Además de las garantías normales, puede ser posible negociar garantías
                    de soporte adicional como parte del precio de compra, medida que puede resultar económica en proporción en que se reduzcan los costos de soporte continuo.

                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Large modal -->
<img src="/img/mante.png" alt="logo" width="120" height="100">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".Mantenimeinto">Mantenimeinto</button>

<div class="modal fade Mantenimeinto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color: black;"><b>Mantenimeinto</b></h5>
                </button>
            </div>
            <div class="modal-body">
                <p style="text-align: justify;">
                    Los sistemas de cómputo no se cuidan por si solos, requieren mantenimiento. Su mantenimiento puede ser dividido en tres grandes categorías:
                    <ul>
                        <li>De equipos.</li>
                        <li>De sistemas.</li>
                        <li>De información.</li>
                    </ul>
                </p>
                <b style="color: black;">Mantenimiento de equipos:</b>
                <p style="text-align: justify;">
                    La estrategia integral de tecnología informativa puede precisar un calendario de mantenimiento de los equipos. Es probable que cada componente requiera un mantenimiento de rutina. Los fabricantes o proveedores de equipos generalmente ofrecen orientación
                    sobre las necesidades de mantenimiento de cada componente de los equipos. Las responsabilidades por el mantenimiento de rutina pueden establecerse en la estructura de administración de la tecnología. Es preferible (y en algunos casos
                    esencial) que el mantenimiento sea efectuado por técnicos calificados. Esto normalmente requiere contratar apoyo externo. En algunos casos, el mantenimiento regular puede ser incluido en los acuerdos de compra o renta relacionados
                    con el suministro de equipos. Esta práctica es recomendable porque asegura que el mantenimiento sea considerado en el presupuesto inicial y evita el riesgo de que no se cuente con fondos disponibles para mantenimiento en una fecha
                    posterior. El mantenimiento también puede ser necesario cuando el equipo se daña o rinde por debajo de los estándares esperados. Los arreglos para responder a mantenimientos no rutinarios pueden ser incluidos en la estrategia integral
                    de la institución. Los arreglos permanentes con técnicos de mantenimiento y reparación permiten que los problemas sen atendidos rápidamente. Darle prioridad a las necesidades con antelación permite que las solicitudes de mantenimiento
                    sean atendidas en el momento que se requiera a un precio preestablecido. Por ejemplo, se puede elaborar un calendario que muestre los componentes clave que deben ser reparados dentro de la hora siguiente a su descompostura, aquellos
                    importantes pero menos cruciales que deben ser reparados en menos de 24 horas y aquellos menos importantes que pueden ser reparados dentro de una semana. El costo de estos distintos niveles de servicio generalmente será mayor cuando
                    se requiera una respuesta rápida.</p>
                <b style="color: black;">Mantenimiento de los sistemas:</b>
                <p style="text-align: justify;">
                    Los sistemas de cómputo requieren mantenimiento constante. Algunas de las tareas en esta materia son:
                    <ul>
                        <li>Establecer estructuras lógicas para los archivos y asegurarse que los usuarios sepan como usarlas.</li>
                        <li>Controlar el acceso de los usuarios a los sistemas.</li>
                        <li>Obtener licencias para el uso de los programas y asegurar que no se violen las condiciones estipuladas.</li>
                        <li>Mantener la consistencia entre los distintos sistemas para asegurar que sean compatibles y no se duplique el trabajo.</li>
                        <li>Dar mantenimiento a los servidores de la red.</li>
                        <li>Dar seguimiento a las capacidades disponibles del sistema, como espacios de almacenamiento y velocidad del sistema, para asegurar que los discos no se saturen o que el desempeño del sistema resulte deficiente.</li>
                        <li>Atender solicitudes de asistencia de los usuarios.</li>
                        <li>Administrar los medios de enlace con otros sistemas, como internet, correo electrónico e Intranet.</li>
                        <li>Identificar y reparar fallas en los programas.</li>
                        <li>Actualizar los programas cuando resulte necesario.</li>
                        <li>Ofrecer, vigilar y mejorar las medidas de seguridad como la protección contra virus, encriptamiento, "fire walls" y prevención de "hackers".</li>
                    </ul>
                </p>
                <b style="color: black;">Mantenimiento de la información:</b>
                <p style="text-align: justify;">A la información automatizada, particularmente los programas de cómputo e información, también se les debe dar mantenimiento para asegurar que no surjan problemas y que la información esté disponible para los usuarios cuando la necesiten.</p>
                <b style="color: black;">Respaldo de la información:</b>
                <p style="text-align: justify;">Generalmente se acepta que la información debe ser respaldada de manera periódica al menos una vez cada jornada laboral, o con mayor frecuencia si se trata de información crítica, como durante el desarrollo de una jornada electoral. La
                    información puede ser respaldada en muy distintos formatos: discos removibles de diverso tipo, discos duros múltiples o cintas magnéticas, por ejemplo. La estrategia integral de tecnología informativa de la organización puede estructurar
                    un régimen formal de respaldo. Lo ideal es que el respaldo funcione de manera automática para asegurar que los errores humanos no causen problemas. Sin embargo, seguirá siendo necesaria una revisión periódica de los respaldos automáticos
                    para asegurar que los errores de la computadora no causen problemas. La información "viva" puede ser respaldada al mismo tiempo que es creada, utilizando un disco duro como espejo, que puede estar localizado en el mismo servidor o
                    en uno distinto. Al utilizar discos espejo, la misma información es almacenada de manera simultánea en dos o más discos. Esto significa que si un disco falla, la información puede ser restaurada de otro. Es preferible utilizar servidores
                    separados para los discos espejo, ya que el segundo se puede utilizar si el primero falla completamente. Los programas, tanto los comerciales como los desarrollados internamente, también pueden ser respaldados para que se puedan recargar
                    si las versiones originales se pierden o dañan. La mayoría de los programas vienen cargados en discos. Sin embargo es cada vez más frecuente que los programas se puedan descargar de internet. En este caso las copias de respaldo deben
                    ser almacenadas localmente, ya que no existe garantía de que estarán disponibles en línea en el futuro. Los discos de programa que son almacenados en una biblioteca administrada por una unidad u oficial responsable pueden ser fácilmente
                    ubicados y utilizados, de ser necesario. Cuando se respalda la información de programas, se debe tener cuidado de no violar los permisos legales. La mayoría de las licencias o permisos legales permiten conservar copias de respaldo.
                </p>
                <b style="color: black;">Medidas de seguridad de la información</b>
                <p style="text-align: justify;">Otro aspecto del mantenimiento de la información es el de conservarla segura, los sistemas de cómputo pueden ser protegidos por sistemas de seguridad para garantizar que sólo puedan acceder a ellos usuarios autorizados.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->
<img src="/img/desa.png" alt="" width="120" height="120">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Desarrolladores
  </button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Desarrolladores</h5>
                </button>
            </div>
            <div class="modal-body">
                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo Electronico</th>
                        <th>Telefono</th>
                    </tr>
                    <tr>
                        <td>Roberto Monfil Salazar</td>
                        <td>L17TE0560@teziutlan.tecnm.mx</td>
                        <td>231-117-45-37</td>
                    </tr>
                    <tr>
                        <td>Jonathan Gregorio Patricio</td>
                        <td>L17TE0470@teziutlan.tecnm.mx</td>
                        <td>231-155-67-73</td>
                    </tr>
                    <tr>
                        <td>Victor Manuel Pablo Perez</td>
                        <td>L17TE0431@teziutlan.tecnm.mx</td>
                        <td>231-104-41-73</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection