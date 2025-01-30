<header>
    <img src="../images/logo.png" alt="logo cerveza" draggable="false">
    <span class="user_name">Hola, <?php echo htmlspecialchars($_SESSION['name']); ?>!</span>
    <div class="button-group">
        <?php if (isset($_SESSION['name'])): ?>
            <?php if ($_SESSION['role'] === 'admin'): ?>
                <a href="../pages/add_product.php"><button>Añadir Producto</button></a>
            <?php elseif ($_SESSION['role'] === ''): ?>

            <?php endif; ?>
            <a href="../includes/logout.php"><button>Cerrar sesión</button></a>
        <?php else: ?>
            <a href="pages/login.php"><button>Iniciar sesión</button></a>
            <a href="pages/register.php"><button>Registrarse</button></a>
        <?php endif; ?>
    </div>
</header>
