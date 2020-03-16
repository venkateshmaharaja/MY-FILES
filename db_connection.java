package db;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
import java.sql.*;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;

/**
 *
 * @author AV-IT-PC345
 */
public class db_connection {

    public Connection getConnection() throws ClassNotFoundException, SQLException {
        Class.forName("com.mysql.jdbc.Driver");
        
        Connection con = DriverManager.getConnection("jdbc:mysql://10.44.50.115:3306/rma", "remote", "");
//        Statement st = con.createStatement();
//        Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/ats_tracker", "root", "");
        System.out.print("connection sucessfully");
        return con;
    }

    public Statement createStatement() {
        return null;
//        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public PreparedStatement preparedStatment(String insert_into_rma_serial_nosnounit_serialcu) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
}
