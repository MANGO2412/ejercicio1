public class sakila {
    public static void main(String[] args) {
        Conexion conexion = new Conexion();
        conexion.getConnection();
        conexion.mostrar();
    }
}
