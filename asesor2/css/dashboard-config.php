<?php
/**
 * Archivo de configuración para el dashboard
 * Incluye todos los estilos y scripts necesarios
 */

// ============================================
// 1. HOJA DE ESTILOS PRINCIPAL
// ============================================
echo '<link rel="stylesheet" href="css/dashboard.css?v=' . filemtime('css/dashboard.css') . '">';

// ============================================
// 2. FUENTES ADICIONALES
// ============================================
echo '
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
';

// ============================================
// 3. ESTILOS ADICIONALES INLINE PARA CADA PÁGINA
// ============================================
// Estos se pueden personalizar por página si es necesario
function getPageStyles($page = '') {
    $styles = '';
    
    switch($page) {
        case 'home':
            $styles = '
                /* Estilos específicos para homeasesores.php */
                .welcome-banner {
                    background: linear-gradient(135deg, rgba(233,69,96,0.1), transparent);
                    border-radius: 16px;
                    padding: 30px;
                    margin-bottom: 30px;
                    border: 1px solid rgba(233,69,96,0.1);
                }
            ';
            break;
        case 'profile':
            $styles = '
                /* Estilos específicos para perfil */
                .profile-card {
                    background: var(--bg-card);
                    border-radius: var(--radius);
                    padding: 30px;
                    border: 1px solid var(--border-light);
                }
            ';
            break;
        default:
            $styles = '';
    }
    
    if(!empty($styles)) {
        echo '<style>' . $styles . '</style>';
    }
}

// ============================================
// 4. SCRIPTS
// ============================================
function loadDashboardScripts() {
    echo '
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // ============================================
        // SIDEBAR TOGGLE (móvil)
        // ============================================
        document.addEventListener("DOMContentLoaded", function() {
            const menuBtn = document.querySelector(".btn-menu-dashboard");
            const sidebar = document.getElementById("sidebar");
            
            if(menuBtn && sidebar) {
                menuBtn.addEventListener("click", function(e) {
                    e.stopPropagation();
                    sidebar.classList.toggle("mobile-open");
                });
                
                // Cerrar al hacer clic fuera (móvil)
                document.addEventListener("click", function(e) {
                    if(window.innerWidth <= 768) {
                        if(!sidebar.contains(e.target) && !menuBtn.contains(e.target)) {
                            sidebar.classList.remove("mobile-open");
                        }
                    }
                });
            }
            
            // ============================================
            // SUBMENU TOGGLE
            // ============================================
            document.querySelectorAll(".btn-sideBar-SubMenu").forEach(function(btn) {
                btn.addEventListener("click", function(e) {
                    e.preventDefault();
                    const parent = this.closest(".menu-item-has-children");
                    const subMenu = parent?.querySelector(".sub-menu");
                    
                    if(subMenu) {
                        subMenu.classList.toggle("open");
                        this.classList.toggle("active");
                        
                        const chevron = this.querySelector(".pull-right, .zmdi-caret-down");
                        if(chevron) {
                            chevron.style.transform = subMenu.classList.contains("open") 
                                ? "rotate(180deg)" 
                                : "rotate(0)";
                        }
                    }
                });
            });
            
            // ============================================
            // USER DROPDOWN
            // ============================================
            const dropdownBtn = document.getElementById("userDropdownBtn");
            const dropdownMenu = document.getElementById("userDropdownMenu");
            
            if(dropdownBtn && dropdownMenu) {
                dropdownBtn.addEventListener("click", function(e) {
                    e.stopPropagation();
                    dropdownMenu.classList.toggle("active");
                });
                
                document.addEventListener("click", function() {
                    dropdownMenu.classList.remove("active");
                });
                
                dropdownMenu.addEventListener("click", function(e) {
                    e.stopPropagation();
                });
            }
            
            // ============================================
            // SMOOTH SCROLL PARA ENLACES INTERNOS
            // ============================================
            document.querySelectorAll("a[href^=\\"#\\"]").forEach(function(anchor) {
                anchor.addEventListener("click", function(e) {
                    const target = document.querySelector(this.getAttribute("href"));
                    if(target) {
                        e.preventDefault();
                        target.scrollIntoView({
                            behavior: "smooth",
                            block: "start"
                        });
                    }
                });
            });
        });
    </script>
    ';
}
?>