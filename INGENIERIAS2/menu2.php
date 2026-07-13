<?php
function isActive($pages) {
    $c = basename($_SERVER['PHP_SELF']);
    return in_array($c, (array)$pages) ? ' active' : '';
}
?>

<style>
/* ════════════════════════════════
   MENU ADMIN — Dark tech
════════════════════════════════ */

.nav-label {
    font-size: .62rem;
    text-transform: uppercase;
    letter-spacing: .14em;
    color: var(--muted);
    padding: 14px 24px 5px;
    font-family: 'DM Sans', sans-serif;
}

/* ítem directo */
.nav-item {
    display: flex;
    align-items: center;
    gap: 11px;
    padding: 9px 24px;
    color: var(--muted);
    text-decoration: none;
    font-size: .86rem;
    font-family: 'DM Sans', sans-serif;
    border-left: 3px solid transparent;
    transition: all .17s ease;
}
.nav-item i { width: 16px; text-align: center; font-size: .8rem; flex-shrink: 0; }
.nav-item:hover {
    color: var(--text);
    background: rgba(34,211,165,.06);
    border-left-color: rgba(34,211,165,.4);
}
.nav-item.active {
    color: var(--text);
    background: rgba(34,211,165,.08);
    border-left-color: var(--accent);
    font-weight: 500;
}
.nav-item.active i { color: var(--accent); }

/* grupos */
.nav-toggle {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 9px 24px;
    background: none;
    border: none;
    border-left: 3px solid transparent;
    color: var(--muted);
    cursor: pointer;
    font-size: .86rem;
    font-family: 'DM Sans', sans-serif;
    transition: all .17s ease;
    text-align: left;
}
.nav-toggle-left { display: flex; align-items: center; gap: 11px; }
.nav-toggle-left i { width: 16px; text-align: center; font-size: .8rem; flex-shrink: 0; }
.nav-caret {
    font-size: .6rem !important;
    width: auto !important;
    transition: transform .22s ease;
    opacity: .45;
}
.nav-toggle:hover {
    color: var(--text);
    background: rgba(34,211,165,.06);
    border-left-color: rgba(34,211,165,.4);
}
.nav-toggle.open .nav-caret { transform: rotate(180deg); }
.nav-toggle.active { color: var(--text); border-left-color: rgba(34,211,165,.5); }

/* panel */
.nav-panel {
    max-height: 0;
    overflow: hidden;
    transition: max-height .28s ease;
    background: rgba(0,0,0,.2);
}
.nav-panel.open { max-height: 700px; }

/* sub-items */
.nav-sub {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 7px 20px 7px 46px;
    color: var(--muted);
    text-decoration: none;
    font-size: .8rem;
    font-family: 'DM Sans', sans-serif;
    transition: all .15s;
    position: relative;
}
.nav-sub::before {
    content: '';
    position: absolute;
    left: 33px; top: 50%;
    transform: translateY(-50%);
    width: 4px; height: 4px;
    border-radius: 50%;
    background: var(--border);
    transition: background .15s;
}
.nav-sub i { font-size: .72rem; width: 13px; text-align: center; flex-shrink: 0; }
.nav-sub:hover, .nav-sub.active {
    color: var(--accent);
    background: rgba(34,211,165,.05);
}
.nav-sub:hover::before, .nav-sub.active::before { background: var(--accent); }
.nav-sub.active { font-weight: 500; }

/* micro divisor */
.nav-micro {
    font-size: .58rem;
    text-transform: uppercase;
    letter-spacing: .12em;
    color: var(--border);
    padding: 8px 20px 3px 46px;
    pointer-events: none;
}

/* separador */
.nav-hr {
    border: none;
    border-top: 1px solid var(--border);
    margin: 8px 20px;
    opacity: .5;
}
</style>

<!-- Dashboard -->
<a href="home.php" class="nav-item<?= isActive('home.php') ?>">
    <i class="fas fa-th-large"></i><span>Dashboard</span>
</a>

<hr class="nav-hr">
<div class="nav-label">Administración</div>

<!-- Config -->
<div class="nav-group">
    <button class="nav-toggle<?= isActive(['adminn.php','Carreras.php','Divisiones.php']) ?>" onclick="toggleNav(this)">
        <span class="nav-toggle-left"><i class="fas fa-cog"></i><span>Configuración</span></span>
        <i class="fas fa-chevron-down nav-caret"></i>
    </button>
    <div class="nav-panel<?= isActive(['adminn.php','Carreras.php','Divisiones.php']) ? ' open' : '' ?>">
        <a href="adminn.php"     class="nav-sub<?= isActive('adminn.php') ?>">     <i class="fas fa-id-badge"></i>      Perfil</a>
        <a href="Carreras.php"   class="nav-sub<?= isActive('Carreras.php') ?>">   <i class="fas fa-graduation-cap"></i> Carreras</a>
        <a href="Divisiones.php" class="nav-sub<?= isActive('Divisiones.php') ?>"> <i class="fas fa-sitemap"></i>        Jefes de División</a>
    </div>
</div>

<hr class="nav-hr">
<div class="nav-label">Escolares</div>

<!-- Alumnos -->
<div class="nav-group">
    <button class="nav-toggle<?= isActive(['subiralumno.php','insertaralumno.php','periodo.php','ingenierias.php','IINFBD.php','IINFBDE.php','IINPB.php','IINPM.php','bajaalumno.php','altaalumno2.php','eliminarpr.php']) ?>" onclick="toggleNav(this)">
        <span class="nav-toggle-left"><i class="fas fa-user-graduate"></i><span>Alumnos</span></span>
        <i class="fas fa-chevron-down nav-caret"></i>
    </button>
    <div class="nav-panel<?= isActive(['subiralumno.php','insertaralumno.php','periodo.php','ingenierias.php','IINFBD.php','IINFBDE.php','IINPB.php','IINPM.php','bajaalumno.php','altaalumno2.php','eliminarpr.php']) ? ' open' : '' ?>">
        <div class="nav-micro">Registro</div>
        <a href="subiralumno.php"    class="nav-sub<?= isActive('subiralumno.php') ?>">    <i class="fas fa-cloud-upload-alt"></i> Subir Base de Datos</a>
        <a href="insertaralumno.php" class="nav-sub<?= isActive('insertaralumno.php') ?>"> <i class="fas fa-user-plus"></i>        Registrar Alumno</a>
        <a href="periodo.php"        class="nav-sub<?= isActive('periodo.php') ?>">        <i class="fas fa-calendar"></i>         Periodo Escolar</a>
        <a href="ingenierias.php"    class="nav-sub<?= isActive('ingenierias.php') ?>">    <i class="fas fa-list"></i>             Alumnos Registrados</a>
        <div class="nav-micro">Consultas</div>
        <a href="IINFBD.php"         class="nav-sub<?= isActive('IINFBD.php') ?>">         <i class="fas fa-user-check"></i>       Alumnos Regulares</a>
        <a href="IINFBDE.php"        class="nav-sub<?= isActive('IINFBDE.php') ?>">        <i class="fas fa-user-tag"></i>         Alumnos Especiales</a>
        <div class="nav-micro">Proyectos</div>
        <a href="IINPB.php"          class="nav-sub<?= isActive('IINPB.php') ?>">          <i class="fas fa-minus-circle"></i>     Dados de Baja</a>
        <a href="IINPM.php"          class="nav-sub<?= isActive('IINPM.php') ?>">          <i class="fas fa-pen"></i>              Modificados</a>
        <a href="eliminarpr.php"     class="nav-sub<?= isActive('eliminarpr.php') ?>">     <i class="fas fa-trash"></i>            Baja Rechazados</a>
        <div class="nav-micro">Gestión</div>
        <a href="bajaalumno.php"     class="nav-sub<?= isActive('bajaalumno.php') ?>">     <i class="fas fa-user-minus"></i>       Dar de Baja</a>
        <a href="altaalumno2.php"    class="nav-sub<?= isActive('altaalumno2.php') ?>">    <i class="fas fa-user-plus"></i>        Dar de Alta</a>
    </div>
</div>

<!-- Solicitudes -->
<div class="nav-group">
    <button class="nav-toggle<?= isActive('solicitudes.php') ?>" onclick="toggleNav(this)">
        <span class="nav-toggle-left"><i class="fas fa-inbox"></i><span>Solicitudes</span></span>
        <i class="fas fa-chevron-down nav-caret"></i>
    </button>
    <div class="nav-panel<?= isActive('solicitudes.php') ? ' open' : '' ?>">
        <a href="solicitudes.php" class="nav-sub<?= isActive('solicitudes.php') ?>"><i class="fas fa-file-alt"></i> Ver Solicitudes</a>
    </div>
</div>

<!-- Residentes -->
<div class="nav-group">
    <button class="nav-toggle<?= isActive(['proceso.php','procesor1.php','procesor2.php','procesorfinal.php','basesorias.php']) ?>" onclick="toggleNav(this)">
        <span class="nav-toggle-left"><i class="fas fa-user-tie"></i><span>Residentes</span></span>
        <i class="fas fa-chevron-down nav-caret"></i>
    </button>
    <div class="nav-panel<?= isActive(['proceso.php','procesor1.php','procesor2.php','procesorfinal.php','basesorias.php']) ? ' open' : '' ?>">
        <a href="proceso.php"       class="nav-sub<?= isActive('proceso.php') ?>">       <i class="fas fa-file-signature"></i>    Solicitud de Residencia</a>
        <a href="procesor1.php"     class="nav-sub<?= isActive('procesor1.php') ?>">     <i class="fas fa-clipboard-check"></i>   Evaluación 1</a>
        <a href="procesor2.php"     class="nav-sub<?= isActive('procesor2.php') ?>">     <i class="fas fa-clipboard-check"></i>   Evaluación 2</a>
        <a href="procesorfinal.php" class="nav-sub<?= isActive('procesorfinal.php') ?>"> <i class="fas fa-award"></i>             Evaluación Final</a>
        <a href="basesorias.php"    class="nav-sub<?= isActive('basesorias.php') ?>">    <i class="fas fa-chalkboard-teacher"></i> Asesorías</a>
    </div>
</div>

<hr class="nav-hr">
<div class="nav-label">Sistema</div>

<a href="tablas.php"    class="nav-item<?= isActive('tablas.php') ?>">    <i class="fas fa-database"></i>  <span>Base de Datos</span></a>
<a href="proyectos.php" class="nav-item<?= isActive('proyectos.php') ?>"> <i class="fas fa-users"></i>     <span>Info. Alumnos</span></a>
<a href="BD.php"        class="nav-item<?= isActive('BD.php') ?>">        <i class="fas fa-server"></i>    <span>Respaldo BD</span></a>

<!-- Programador -->
<div class="nav-group">
    <button class="nav-toggle<?= isActive(['Asinacionalumnos.php','Alumnosadmin.php']) ?>" onclick="toggleNav(this)">
        <span class="nav-toggle-left"><i class="fas fa-code"></i><span>Programador</span></span>
        <i class="fas fa-chevron-down nav-caret"></i>
    </button>
    <div class="nav-panel<?= isActive(['Asinacionalumnos.php','Alumnosadmin.php']) ? ' open' : '' ?>">
        <a href="Asinacionalumnos.php" class="nav-sub<?= isActive('Asinacionalumnos.php') ?>"> <i class="fas fa-link"></i>         Asignación Alumnos</a>
        <a href="Alumnosadmin.php"     class="nav-sub<?= isActive('Alumnosadmin.php') ?>">     <i class="fas fa-user-shield"></i>  Administradores</a>
    </div>
</div>

<script>
function toggleNav(btn) {
    btn.classList.toggle('open');
    btn.nextElementSibling.classList.toggle('open');
}
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.nav-panel').forEach(function(panel) {
        if (panel.querySelector('.active')) {
            panel.classList.add('open');
            panel.previousElementSibling.classList.add('open');
        }
    });
});
</script>
