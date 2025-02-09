<header>
    <a href="../pages/home.php"><img src="../images/logo.png" alt="logo cerveza" draggable="false"></a>
    <span class="user_name">Hola, <?php echo htmlspecialchars($_SESSION['name']); ?>!</span>
    <div class="button-group">
        <?php if (isset($_SESSION['name'])): ?>
            <?php if ($_SESSION['role'] === 'admin'): ?>
                <a href="../pages/add_product.php"><button>Añadir Producto</button></a>
            <?php elseif ($_SESSION['role'] === ''): ?>
                <a href="../pages/carrito.php"><button>Carrito</button></a>
            <?php endif; ?>
            <a href="../pages/buscar.php"><button>Buscar</button></a>
            <a href="../includes/logout.php"><button>Cerrar sesión</button></a>
        <?php else: ?>
            <a href="pages/login.php"><button>Iniciar sesión</button></a>
            <a href="pages/register.php"><button>Registrarse</button></a>
        <?php endif; ?>
    </div>
</header>
