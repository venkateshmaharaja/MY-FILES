/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package db;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

/**
 *
 * @author AV-IT-PC408
 */
public class Database_Connection {

    public Connection getConnection() throws ClassNotFoundException, SQLException {
        Class.forName("com.microsoft.sqlserver.jdbc.SQLServerDriver");
        String url, username, password;
        url = "jdbc:sqlserver://10.44.50.15;databseName=AV_EMAC";
        username = "balaji_sap";
        password = "sap123";
        Connection con = DriverManager.getConnection(url, username, password);
        return con;
    }
}
