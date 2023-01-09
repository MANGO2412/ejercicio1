import java.sql.*;

public class Conexion {
   private static String servidor = "jdbc:mysql://localhost:3306/sakila";
   private static String user = "root";
   private static String pass = "";
   private static String driver = "com.mysql.jdbc.Driver";
   private static Connection conexion;

   public Conexion() {
      try {
         Class.forName(driver);
         conexion = DriverManager.getConnection(servidor, user, pass);
         System.out.println("Conexion Realizada con Exito");
      } catch (Exception e) {
         System.out.println("Ha Fallado la Conexion");
      }
   }

   public Connection getConnection() {
      return conexion;
   }

   public static void mostrar() {
      Conexion conexion = new Conexion();
      Connection con = conexion.getConnection();
      Statement st;
      ResultSet rs;

      String sql = "SELECT * FROM actor";
      try {
         st = con.createStatement();
         rs = st.executeQuery(sql);
         while (rs.next()) {
            System.out.println("ID_Actor: " + rs.getInt(1));
            System.out.println("First_Name: " + rs.getString(2));
            System.out.println("Last_Name: " + rs.getString(3));
            System.out.println("Last_Update: " + rs.getString(4));
            System.out.println("Photo: " + rs.getString(5));
            System.out.println("Age :" + rs.getInt(6));
            System.out.println("Email: " + rs.getString(7));
            System.out.println("*********************************");
         }
         con.close();
         rs.close();
         st.close();

      } catch (Exception e) {
         e.printStackTrace();
      }
   }
}
