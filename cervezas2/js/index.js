function confirmarBorrado(id) {
  if (confirm("¿Estás seguro de que quieres eliminar este producto?")) {
      window.location.href = "../actions/borrar_producto_action.php?id=" + id;
  }
}
